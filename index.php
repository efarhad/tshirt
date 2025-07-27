<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt eCommerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Sales or promotional tagline</p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#">Login / My Account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">T-Shirt Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Navigation Menu (Category) -->
    <div class="category-menu">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Unisex</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">All Products</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Body Content -->
    <div class="content">
        <div class="container">
            <!-- Hero Section -->
            <div class="hero-section">
                <!-- Marketing banner -->
            </div>

            <!-- Image Slideshow -->
            <div class="slideshow">
                <!-- Slideshow of bestsellers or new arrivals -->
            </div>

            <!-- Product Grid -->
            <div class="product-grid">
                <div class="row">
                    <?php
                    include 'database.php';
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $sql = "SELECT * FROM Products";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-4">';
                            echo '<div class="card">';
                            echo '<img src="' . $row["image_url"] . '" class="card-img-top" alt="...">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                            echo '<p class="card-text">' . $row["description"] . '</p>';
                            echo '<p class="card-text">$' . $row["base_price"] . '</p>';
                            echo '<a href="product.php?id=' . $row["id"] . '" class="btn btn-primary">View Details</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>

            <!-- Customer Feedback/Testimonials -->
            <div class="testimonials">
                <!-- Testimonials will be displayed here -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About Us</h5>
                    <p>Your T-Shirt store description.</p>
                </div>
                <div class="col-md-3">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled">
                        <li>Email: info@tshirtshop.com</li>
                        <li>Phone: 123-456-7890</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">Shop</a></li>
                        <li><a href="#" class="text-white">About</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Social Media</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Facebook</a></li>
                        <li><a href="#" class="text-white">Twitter</a></li>
                        <li><a href="#" class="text-white">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2025 T-Shirt eCommerce. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
