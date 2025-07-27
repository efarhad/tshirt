# T-Shirt eCommerce Website

This is a simple eCommerce website for selling T-shirts, built with PHP, MySQL, and Bootstrap.

## Features

*   **Frontend:**
    *   Responsive design with Bootstrap
    *   Product grid with filters (not yet implemented)
    *   Product detail page
    *   Shopping cart
    *   PayPal checkout
*   **Backend:**
    *   Admin panel for managing products, orders, and users

## Setup

1.  **Clone the repository:**
    ```
    git clone https://github.com/your-username/your-repo-name.git
    ```
2.  **Create a MySQL database:**
    *   Create a new database called `ecommerce`.
3.  **Update database credentials:**
    *   Open `database.php` and update the `$username` and `$password` variables with your MySQL credentials.
4.  **Run the setup script:**
    *   Open your browser and navigate to `http://localhost/path-to-your-project/database.php`. This will create the necessary tables.
5.  **Run the sample data script:**
    *   Open your browser and navigate to `http://localhost/path-to-your-project/insert_sample_data.php`. This will insert some sample products.
6.  **Update PayPal client ID:**
    *   Open `checkout.php` and replace `"sb"` with your PayPal sandbox client ID.
7.  **Run the application:**
    *   Open your browser and navigate to `http://localhost/path-to-your-project/`.

## Admin Panel

*   **URL:** `http://localhost/path-to-your-project/admin/`
*   **Username:** `admin`
*   **Password:** `password`
