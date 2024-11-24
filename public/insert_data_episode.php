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
// Check if data exists in the JSON file
if ($episodes_data) {
    // Loop through each episode and insert it into the database
    foreach ($episodes_data as $episode) {
        $randomDate = randomDate($startDate, $endDate);
        // Escape special characters
        $id = (int)$conn->real_escape_string($episode['id']);
        $slug = $conn->real_escape_string($episode['slug']);
        $title = $conn->real_escape_string($episode['title']);
        $description = isset($episode['description']) ? $conn->real_escape_string($episode['description']) : null;
        $episode_path = $conn->real_escape_string($episode['episode_path']);
        $book_id = (int)$episode['book_id'];
        $user_id = (int)$episode['user_id'];
        $order = isset($episode['order']) ? (int)$episode['order'] : 0; // Default order to 0 if not provided
        $created_at = $randomDate; // Set created_at to current time
        $updated_at = $randomDate;

        // Insert query
        $sql = "INSERT INTO episodes (id, slug, title, description, episode_path, book_id, created_at, updated_at, user_id, `order`)
                VALUES ($id, '$slug', '$title', '$description', '$episode_path', $book_id, '$created_at', '$updated_at', $user_id, $order)";

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
?>
