<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datn"; // Update this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read data from JSON file
$filename = 'episode_data.json'; // JSON file with episode data
$episodes_data = json_decode(file_get_contents($filename), true);

// Check if data exists in the JSON file
if ($episodes_data) {
    // Loop through each episode and insert it into the database
    foreach ($episodes_data as $episode) {
        // Escape special characters
        $id = (int)$conn->real_escape_string($episode['id']);
        $slug = $conn->real_escape_string($episode['slug']);
        $title = $conn->real_escape_string($episode['title']);
        $description = isset($episode['description']) ? $conn->real_escape_string($episode['description']) : null;
        $episode_path = $conn->real_escape_string($episode['episode_path']);
        $book_id = (int)$episode['book_id'];
        $user_id = (int)$episode['user_id'];
        $order = isset($episode['order']) ? (int)$episode['order'] : 0; // Default order to 0 if not provided
        $created_at = isset($episode['created_at']) ? $conn->real_escape_string($episode['created_at']) : null;
        $updated_at = isset($episode['updated_at']) ? $conn->real_escape_string($episode['updated_at']) : null;
        $deleted_at = "NULL";

        // Insert query
        $sql = "INSERT INTO episodes (id, slug, title, description, episode_path, book_id, created_at, updated_at, deleted_at, user_id, `order`)
                VALUES ($id, '$slug', '$title', '$description', '$episode_path', $book_id, '$created_at', '$updated_at', '$deleted_at', $user_id, $order)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully for episode: $title\n";
        } else {
            echo "Error: " . $sql . "\n" . $conn->error;
        }
    }
} else {
    echo "No data found in JSON file.";
}

// Close the connection
$conn->close();
