<?php
// Kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost"; // Địa chỉ máy chủ
$username = "root"; // Tên đăng nhập MySQL
$password = ""; // Mật khẩu (nếu có)
$dbname = "datn"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Đọc dữ liệu từ file JSON
$filename = 'book_data2.json'; // File JSON chứa dữ liệu cần chèn
$books_data = json_decode(file_get_contents($filename), true);


function randomDate($startDate, $endDate) {
    $startTimestamp = strtotime($startDate);
    $endTimestamp = strtotime($endDate);

    // Generate a random timestamp between start and end
    $randomTimestamp = mt_rand($startTimestamp, $endTimestamp);

    // Return formatted date
    return date("Y-m-d H:i:s", $randomTimestamp);
}
$startDate = "2020-01-01 00:00:00"; // Start date (2020)
$endDate = date("Y-m-d H:i:s"); // Current date

// Kiểm tra nếu có dữ liệu
if ($books_data) {
    // Duyệt qua từng sách trong dữ liệu và chèn vào cơ sở dữ liệu
    foreach ($books_data as $book) {
        $randomDate = randomDate($startDate, $endDate);
        // Thoát các ký tự đặc biệt trong chuỗi
        $id = $conn->real_escape_string($book['id']);
        $slug = $conn->real_escape_string($book['slug']);
        $title = $conn->real_escape_string($book['title']);
        $author = $conn->real_escape_string($book['author']);
        $book_path = $conn->real_escape_string($book['image_url']); // Sửa lại biến này để lấy đúng dữ liệu
        $description = $conn->real_escape_string($book['description']); // Fix description for proper insertion
        $word_count = 0; // Kiểu dữ liệu int cho word_count
        $view = is_numeric($book['view']) ? (float)$book['view'] : 0; // Kiểm tra và chuyển view thành float nếu có
        $like = is_numeric($book['like']) ? (float)$book['like'] : 0; // Kiểm tra và chuyển like thành float nếu có
        $note = $conn->real_escape_string($book['note']);
        $status = (int)$book['status']; // Kiểu dữ liệu int cho status
        $adult = 0; // Kiểu dữ liệu int cho adult
        $type = 1; // Kiểu dữ liệu int cho type
        $group_id = 1; // Kiểu dữ liệu int cho group_id
        $created_at = $randomDate; // Đặt giá trị created_at là thời gian hiện tại
        $updated_at = $randomDate;
        $Is_Inspect = 1; // Kiểu dữ liệu int cho Is_Inspect
        $user_id =1; // Kiểu dữ liệu int cho user_id

        // Thực thi câu lệnh INSERT
        $sql = "INSERT INTO books (id, slug, title, author, book_path, description, word_count, view, `like`, note, status, adult, type, group_id, created_at, updated_at, Is_Inspect, user_id)
                VALUES ($id, '$slug', '$title', '$author', '$book_path', '$description', $word_count, $view, $like, '$note', $status, $adult, $type, $group_id, '$created_at', '$updated_at', $Is_Inspect, $user_id)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully for book: $title\n";
        } else {
            echo "Error: " . $sql . "\n" . $conn->error;
        }
    }
} else {
    echo "No data found in JSON file.";
}

// Đóng kết nối
$conn->close();
?>
