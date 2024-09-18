<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/toko-alat-kesehatan/style.css">
</head>

<body>

<header >
    <div class="header-container">
        <!-- Logo -->
        <div class="logo">
            <a href="/toko-alat-kesehatan/index.php">
                <img src="/toko-alat-kesehatan/assets/image/logo-img.png" alt="Logo Toko">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="nav-links">
            <a href="/toko-alat-kesehatan/index.php">Home</a>
            <a href="/toko-alat-kesehatan/pages/user/product.php">Product</a>
            <a href="/toko-alat-kesehatan/pages/user/order.php">Order</a>
            <a href="/toko-alat-kesehatan/pages/user/cart.php"><i class="bi bi-cart" style="font-size: 18px;"></i></a>
        </nav>

        <!-- User Dropdown -->
        <div class="user-account">
            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown()">Guest <span>&#9662;</span></button>
                <div class="dropdown-content" id="dropdownMenu">
                    <a href="profile.php">Profil</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>

        <!-- Hamburger Menu for small screen -->
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776;
        </div>
    </div>
</header>

<!-- Sidebar for small screen -->
<div id="sidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
    <a href="/toko-alat-kesehatan/index.php">Home</a>
    <a href="/toko-alat-kesehatan/pages/user/product.php">Product</a>
    <a href="/toko-alat-kesehatan/pages/user/order.php">Order</a>
    <a href="/toko-alat-kesehatan/pages/user/cart.php">Cart</a>
</div>

<script src="/toko-alat-kesehatan/assets/js/header.js"></script>
</body>
</html>
