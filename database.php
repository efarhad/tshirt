<?php
$servername = "localhost";
$username = "ecommerce";
$password = "password";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql);

$conn->select_db($dbname);

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Products (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT,
base_price DECIMAL(10, 2) NOT NULL,
image_url VARCHAR(255),
category_id INT(6) UNSIGNED
)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Inventory (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
product_id INT(6) UNSIGNED,
size VARCHAR(10),
color VARCHAR(20),
sku VARCHAR(30),
stock INT(11),
FOREIGN KEY (product_id) REFERENCES Products(id)
)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_id INT(6) UNSIGNED,
total_price DECIMAL(10, 2) NOT NULL,
status VARCHAR(20),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Order_Items (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
order_id INT(6) UNSIGNED,
product_id INT(6) UNSIGNED,
size VARCHAR(10),
color VARCHAR(20),
quantity INT(11),
price DECIMAL(10, 2),
FOREIGN KEY (order_id) REFERENCES Orders(id),
FOREIGN KEY (product_id) REFERENCES Products(id)
)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password_hash VARCHAR(255) NOT NULL
)";
$conn->query($sql);

?>
