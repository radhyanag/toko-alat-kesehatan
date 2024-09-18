<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card register-card shadow-lg p-4">
            <div class="card-body text-center">
                <!-- Logo -->
                <img src="assets/image/logo-img.png" alt="Logo" class="img-fluid mb-3" style="width: 200px;">
                <!-- Title -->
                <h3 class="mb-4">CREATE ACCOUNT</h3>
                <!-- Username Input -->
                <div class="mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Username">
                </div>
                <!-- Password Input -->
                <div class="mb-3">
                    <input type="password" class="form-control form-control-lg" placeholder="Password">
                </div>
                <!-- Retype Password Input -->
                <div class="mb-3">
                    <input type="password" class="form-control form-control-lg" placeholder="Retype Password">
                </div>
                <!-- Email Input -->
                <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" placeholder="Email">
                </div>
                <!-- Date of Birth Input -->
                <div class="mb-3">
                    <input type="date" class="form-control form-control-lg" placeholder="Date of Birth">
                </div>
                <!-- Gender Radio Buttons -->
                <div class="row mb-3">
                <div class="mb-3 text-start">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
                <!-- Address Input -->
                <div class="mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Address">
                </div>
                <!-- City Input -->
                <div class="mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="City">
                </div>
                <!-- Contact Input -->
                <div class="mb-3">
                    <input type="tel" class="form-control form-control-lg" placeholder="Contact">
                </div>
                <!-- PayPal ID Input -->
                <div class="mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="PayPal ID">
                </div>
                <!-- Register and Reset Buttons -->
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-lg w-45 register-btn">REGISTER</button>
                    <button class="btn btn-secondary btn-lg w-45 reset-btn">RESET</button>
                </div>
                <!-- Login Link -->
                <p class="mt-3">Already have an account? <a href="login.php" class="text-decoration-none login-link">Login</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
