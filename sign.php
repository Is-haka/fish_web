<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="sign.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script type="text/javascript" src="sign.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Create Account</h2>
        </div>
        <form class="form" id = "form">
            <div class="form-control">
                <label>Username</label>
                <input type="text" placeholder="eg. john17" id="username">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label>Email</label>
                <input type="email" placeholder="eg. john@gmail.com" id="email">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" placeholder="enter password" id="password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="form-control">
                <label>Repeat Password</label>
                <input type="password" placeholder="repeat your password" id="rpassword">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <button>Submit</button>
            <p>Do you have an account? <a href="signin.php">Sign in</a> here</p>
        </form>
    </div>
</body>
</html>