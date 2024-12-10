<style>
    #chapterRevenueTable {
        width: fit-content;
        /* Đảm bảo bảng chiếm toàn bộ chiều rộng của vùng chứa */
        max-height: 400px;
        /* Giới hạn chiều cao tối đa của bảng */
        overflow-y: auto;
        /* Thêm thanh cuộn dọc khi nội dung vượt quá chiều cao */
        display: block;
        /* Bảng cần được hiển thị dưới dạng block để thanh cuộn hoạt động */
    }

    /* Nếu muốn tùy chỉnh kiểu dáng của thanh cuộn, có thể thêm CSS sau */
    #chapterRevenueTable::-webkit-scrollbar {
        width: 8px;
        /* Chiều rộng thanh cuộn */
    }

    #chapterRevenueTable::-webkit-scrollbar-thumb {
        background-color: #888;
        /* Màu của phần thanh cuộn */
        border-radius: 4px;
        /* Bo góc cho thanh cuộn */
    }

    #chapterRevenueTable::-webkit-scrollbar-thumb:hover {
        background-color: #555;
        /* Màu khi di chuột qua thanh cuộn */
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

<script>
    document.getElementById('exportButton').addEventListener('click', function() {
        var wb = XLSX.utils.table_to_book(document.getElementById('chapterRevenueTable'), {
            sheet: 'Chapter Revenue'
        });
        XLSX.writeFile(wb, 'chapter_revenue.xlsx');
    });

    const book_id = {{ $book->id }};

    // Xử lý khi người dùng bấm vào các bộ lọc
    // Xử lý khi người dùng bấm vào các bộ lọc
    document.getElementById('filterWeek').addEventListener('click', () => {
        const now = new Date();
        const startOfWeek = new Date(now.setDate(now.getDate() - now.getDay() + 1)).toISOString().split('T')[0];
        const endOfWeek = new Date(now.setDate(now.getDate() + 6 - now.getDay())).toISOString().split('T')[0];
        fetchRevenueData({{ Auth::id() }},'coin', startOfWeek, endOfWeek, book_id, 'line');
        fetchChapterRevenueData({{ Auth::id() }},'coin', startOfWeek, endOfWeek, book_id);
    });

    document.getElementById('filterMonth').addEventListener('click', () => {
        const now = new Date();
        const startOfMonth = new Date(now.getFullYear(), now.getMonth(), 1).toISOString().split('T')[0];
        const endOfMonth = new Date(now.getFullYear(), now.getMonth() + 1, 0).toISOString().split('T')[0];
        fetchRevenueData({{ Auth::id() }},'coin', startOfMonth, endOfMonth, book_id, 'line');
        fetchChapterRevenueData({{ Auth::id() }},'coin', startOfMonth, endOfMonth, book_id);
    });

    document.getElementById('filterYear').addEventListener('click', () => {
        const now = new Date();
        const startOfYear = new Date(now.getFullYear(), 0, 1).toISOString().split('T')[0];
        const endOfYear = new Date(now.getFullYear(), 11, 31).toISOString().split('T')[0];
        fetchRevenueData({{ Auth::id() }},'coin', startOfYear, endOfYear, book_id, 'bar');
        fetchChapterRevenueData({{ Auth::id() }},'coin', startOfYear, endOfYear, book_id);
    });

    document.getElementById('fetchData').addEventListener('click', () => {
        const startDate = document.getElementById('startDate').value;
        const endDate = document.getElementById('endDate').value;
        fetchRevenueData({{ Auth::id() }},'coin', startDate, endDate, book_id, 'line');
        fetchChapterRevenueData({{ Auth::id() }},'coin', startDate, endDate, book_id);
    });

    const fetchRevenueData = async (user_id,type, startDate, endDate, book_id, chartType) => {
        try {
            const response = await fetch(
                `/action/api/revenue-by-story?user_id=${user_id}&type=${type}&start_date=${startDate}&end_date=${endDate}&story_id=${book_id}`
            );

            if (!response.ok) throw new Error('Failed to fetch data');
            const data = await response.json();
            let labels, datasets;
            if (chartType === 'bar') {
                // Lấy các tháng duy nhất từ dữ liệu
                labels = [...new Set(data.map(item => item.date.slice(0, 7)))]; // Format YYYY-MM

                // Lấy danh sách các truyện (title)
                const books = [...new Set(data.map(item => item.book_title))];

                // Xây dựng datasets
                datasets = books.map(book => {
                    // Lọc dữ liệu của từng truyện
                    const bookData = data.filter(item => item.book_title === book);

                    return {
                        label: book,
                        data: labels.map(label => {
                            // Nhóm dữ liệu theo tháng
                            const monthData = bookData.filter(d => d.date.startsWith(label));

                            // Tính tổng doanh thu trong tháng
                            const monthTotal = monthData.reduce((sum, d) => {
                                return sum + parseFloat(d.total_revenue ||
                                    0); // Chuyển sang số
                            }, 0);
                            console.log(`Tháng ${label} - ${book}:`, monthTotal);

                            return monthTotal;
                        }),
                        backgroundColor: `#${Math.floor(Math.random() * 16777215).toString(16)}`, // Màu ngẫu nhiên
                    };
                });
            } else {
                labels = [...new Set(data.map(item => item.date))];
                const books = [...new Set(data.map(item => item.book_title))];

                datasets = books.map(book => {
                    const bookData = data.filter(item => item.book_title === book);
                    return {
                        label: book,
                        data: labels.map(label => {
                            const item = bookData.find(d => d.date === label);
                            return item ? item.total_revenue : 0;
                        }),
                        borderColor: `#${Math.floor(Math.random() * 16777215).toString(16)}`,
                        fill: false,
                    };
                });
            }

            renderChart(labels, datasets, chartType);
        } catch (error) {
            console.error('Error fetching revenue data:', error);
        }
    };

    let chartInstance = null;

    const renderChart = (labels, datasets, chartType) => {
        const ctx = document.getElementById('revenueChart').getContext('2d');

        if (chartInstance) {
            chartInstance.destroy();
        }

        chartInstance = new Chart(ctx, {
            type: chartType,
            data: {
                labels: labels,
                datasets: datasets,
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: chartType === 'bar' ? 'Months' : 'Dates',
                        },
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Total Revenue',
                        },
                    },
                },
            },
        });
    };
    const fetchChapterRevenueData = async (user_id,type, startDate, endDate, book_id) => {
    try {
        const response = await fetch(
            `/action/api/revenue-by-chapter?user_id=${user_id}&type=${type}&start_date=${startDate}&end_date=${endDate}&story_id=${book_id}`
        );
        if (!response.ok) throw new Error('Failed to fetch chapter revenue data');
        const data = await response.json();

        // Lấy các tiêu đề chương và chapter_id từ dữ liệu
        let labels = [...new Set(data.map(item => item.chapter_title))];
        let chapterIds = [...new Set(data.map(item => item.chapter_id))];

        // Tính tổng doanh thu cho mỗi chương
        let datasets = [{
            label: 'Doanh thu theo Chapter',
            data: labels.map(label => {
                const chapterData = data.filter(item => item.chapter_title === label);
                const totalRevenue = chapterData.reduce((sum, item) => sum + parseFloat(item.total_revenue || 0), 0);
                return totalRevenue;
            }),
        }];

        // Tính tổng số người mua cho mỗi chương
        let totalBuyers = labels.map(label => {
            const chapterData = data.filter(item => item.chapter_title === label);
            return chapterData.reduce((sum, item) => sum + parseInt(item.total_buyers || 0), 0);
        });

        // Gọi hàm render bảng
        renderChapterRevenueChart(labels, datasets, totalBuyers, chapterIds,startDate,endDate);
    } catch (error) {
        console.error('Error fetching chapter revenue data:', error);
    }
};


    const renderChapterRevenueChart = (labels, datasets, totalBuyers, chapterIds,startDate,endDate) => {
    const tableBody = document.getElementById('chapterRevenueTable').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = ''; // Xóa bảng cũ

    labels.forEach((label, index) => {
        const row = tableBody.insertRow();

        const chapterCell = row.insertCell(0);
        chapterCell.textContent = label;

        const totalRevenue = datasets[0].data[index];
        const revenueCell = row.insertCell(1);
        revenueCell.textContent = totalRevenue.toFixed(2);

        const buyersCell = row.insertCell(2);
        buyersCell.textContent = totalBuyers[index];

        // Thêm nút "Xem chi tiết"
        const actionCell = row.insertCell(3);
        const detailsButton = document.createElement('button');
        detailsButton.textContent = 'Xem chi tiết';
        detailsButton.className = 'btn btn-primary btn-sm';

        // Truyền `chapter_id` thay vì `chapter_title`
        const chapterId = chapterIds[index];
        detailsButton.onclick = () => {
            // Lấy giá trị của startDate và endDate hoặc gán null nếu không có

            // Gọi hàm fetch dữ liệu với chapterId
            fetchUserDetailsByChapter(chapterId, startDate, endDate);
        };
        actionCell.appendChild(detailsButton);
    });
};


    const fetchUserDetailsByChapter = async (chapterId, startDate, endDate) => {
        try {
            const response = await fetch(
                `/action/api/get-user-buy-chapter?chapter_id=${chapterId}&start_date=${startDate}&end_date=${endDate}`
            );
            if (!response.ok) throw new Error('Failed to fetch user details');
            const users = await response.json();

            // Hiển thị modal với thông tin người dùng
            renderUserDetailsModal(users);
        } catch (error) {
            console.error('Error fetching user details:', error);
        }
    };

    const renderUserDetailsModal = (users) => {
        const modalBody = document.getElementById('userDetailsModalBody');
        modalBody.innerHTML = ''; // Xóa nội dung cũ
        console.log(users)
        if (users.length === 0) {
            modalBody.innerHTML = '<p>Không có người dùng nào đã mua chương này.</p>';
        } else {
            const table = document.createElement('table');
            table.className = 'table table-bordered';
            table.innerHTML = `
            <thead>
                <tr>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Ngày mua</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                ${users.map(user => `
                    <tr>
                        <td>${user.user}</td>
                        <td>${user.email}</td>
                        <td>${user.purchase_date}</td>
                        <td>${user.price}</td>
                    </tr>
                `).join('')}
            </tbody>
        `;
            modalBody.appendChild(table);
        }

        // Hiển thị modal
        const userDetailsModal = new bootstrap.Modal(document.getElementById('userDetailsModal'));
        userDetailsModal.show();
    };



    // Mặc định hiển thị dữ liệu tuần này khi tải trang
    document.getElementById('filterWeek').click();
</script>
