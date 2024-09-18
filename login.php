<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card login-card shadow-lg p-4">
            <div class="card-body text-center">
                <!-- Logo -->
                <img src="assets/image/logo-img.png" alt="Logo" class="img-fluid mb-3" style="width: 200px;">
                <!-- Title -->
                <h3 class="mb-4">USER LOGIN</h3>
                <!-- Username Input -->
                <div class="mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Username">
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <input type="password" class="form-control form-control-lg" placeholder="Password">
                </div>
                <!-- Login Button -->
                <button class="btn btn-primary btn-lg w-100 login-btn">LOGIN</button>
                <!-- Signup Link -->
                <p class="mt-3">Don't have an account? <a href="register.php" class="text-decoration-none create-account-link">Create Account</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
