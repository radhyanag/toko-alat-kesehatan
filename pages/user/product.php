<?php
// include 'config/db.php';
include('../../includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <title>Product - MyMedical</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Product Grid Section -->
            <div class="col-lg-9 col-md-12">
                <div class="row g-4">
                    <!-- Product Card 1 -->
                    <div class="col-md-4">
                        <div class="card product-card shadow-sm">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <h5 class="card-title text-start">Product 1</h5>
                                <p class="card-text text-start">Price: $100</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn product-detail-btn">Detail</button>
                                    <button class="btn product-buy-btn">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="col-md-4">
                        <div class="card product-card shadow-sm">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                            <div class="card-body">
                                <h5 class="card-title text-start">Product 2</h5>
                                <p class="card-text text-start">Price: $150</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn product-detail-btn">Detail</button>
                                    <button class="btn product-buy-btn">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="col-md-4">
                        <div class="card product-card shadow-sm">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                            <div class="card-body">
                                <h5 class="card-title text-start">Product 3</h5>
                                <p class="card-text text-start">Price: $200</p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn product-detail-btn">Detail</button>
                                    <button class="btn product-buy-btn">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar for Product Categories -->
            <div class="col-lg-3 col-md-12">
                <div class="card category-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center category-title">Product Categories</h5>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Category 1</a></li>
                            <li class="list-group-item"><a href="#">Category 2</a></li>
                            <li class="list-group-item"><a href="#">Category 3</a></li>
                            <li class="list-group-item"><a href="#">Category 4</a></li>
                            <li class="list-group-item"><a href="#">Category 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>