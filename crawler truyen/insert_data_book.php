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
$filename = 'books_data.json'; // File JSON chứa dữ liệu cần chèn
$books_data = json_decode(file_get_contents($filename), true);
// var_dump($books_data);

// Kiểm tra nếu có dữ liệu
if ($books_data) {
    // Duyệt qua từng sách trong dữ liệu và chèn vào cơ sở dữ liệu
    foreach ($books_data as $book) {
        // Thoát các ký tự đặc biệt trong chuỗi
        $id = $conn->real_escape_string($book['id']);
        $slug = $conn->real_escape_string($book['slug']);
        $title = $conn->real_escape_string($book['title']);
        $author = $conn->real_escape_string($book['author']);
        $painter = $conn->real_escape_string($book['painter']);
        $book_path = $conn->real_escape_string($book['image_url']); // Sửa lại biến này để lấy đúng dữ liệu
        $description = $conn->real_escape_string($book['description']); // Fix description for proper insertion
        $word_count = (int)$book['word_count']; // Kiểu dữ liệu int cho word_count
        $view = is_numeric($book['view']) ? (float)$book['view'] : 0; // Kiểm tra và chuyển view thành float nếu có
        $like = is_numeric($book['like']) ? (float)$book['like'] : 0; // Kiểm tra và chuyển like thành float nếu có
        $note = $conn->real_escape_string($book['note']);
        $status = (int)$book['status']; // Kiểu dữ liệu int cho status
        $adult = (int)$book['adult']; // Kiểu dữ liệu int cho adult
        $type = (int)$book['type']; // Kiểu dữ liệu int cho type
        $group_id = (int)$book['group_id']; // Kiểu dữ liệu int cho group_id
        $created_at = $book['created_at'];
        $Is_Inspect = (int)$book['Is_Inspect']; // Kiểu dữ liệu int cho Is_Inspect
        $user_id = (int)$book['user_id']; // Kiểu dữ liệu int cho user_id

        // Thực thi câu lệnh INSERT
        $sql = "INSERT INTO books (id, slug, title, author, painter, book_path, description, word_count, view, `like`, note, status, adult, type, group_id, created_at, Is_Inspect, user_id)
                VALUES ($id, '$slug', '$title', '$author', '$painter', '$book_path', '$description', $word_count, $view, $like, '$note', $status, $adult, $type, $group_id, '$created_at', $Is_Inspect, $user_id)";

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
