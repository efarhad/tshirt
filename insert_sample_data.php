<?php
include 'database.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert sample products
$sql = "INSERT INTO Products (name, description, base_price, image_url, category_id) VALUES
('T-Shirt 1', 'A great t-shirt', 19.99, 'https://via.placeholder.com/300', 1),
('T-Shirt 2', 'Another great t-shirt', 24.99, 'https://via.placeholder.com/300', 2)";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
