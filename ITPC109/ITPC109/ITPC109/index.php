<?php
// ITPC109 Waste Management System
echo '<!DOCTYPE html>
<html>
<head>
    <title>ITPC109 - Waste Management System</title>
    <style>
        body { font-family: Arial; margin: 50px; text-align: center; }
        .container { background: #f0f0f0; padding: 30px; border-radius: 10px; }
        .btn { display: inline-block; padding: 10px 20px; margin: 10px; background: #4CAF50; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>♻️ ITPC109 Waste Management System</h1>
        <p>Deployed via Jenkins CI/CD Pipeline</p>
        <p>Current time: ' . date('Y-m-d H:i:s') . '</p>
        <hr>
        <a href="login.php" class="btn">Login</a>
        <a href="register.php" class="btn">Register</a>
    </div>
</body>
</html>';
?>
