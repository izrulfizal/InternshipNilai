<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOC Nilai Internship System - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="glassmorphism-card animated-card">
        <div class="logo-container text-center">
            <img src="Assets/Images/Logo SCIS.png" alt="SCIS Logo" class="logo">
            <img src="Assets/Images/NU-logo.png" alt="NU Logo" class="logo">
        </div>
        <h2>SoC Internship System</h2>
        <p class="description">Please enter your ID and password to access the SOC Nilai Internship System. Stay connected and keep track of students' internship progress.</p>

        <form method="post" action="process/login.php">
            <div class="mb-3">
                <label for="staffId" class="form-label">Staff ID</label>
                <input type="text" class="form-control" id="staffId" name="staffId" placeholder="Enter your ID">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <!-- <button type="submit" class="btn btn-custom">Login</button> -->
            <input type="submit" class="btn btn-custom" value="Login">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
