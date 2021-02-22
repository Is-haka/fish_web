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
            <h2>Sign In</h2>
        </div>
        <form class="form" id = "form">
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
            <button>Sign In</button>
            <p>Don't have an account? <a href="sign.php">Sign up</a> here</p>
        </form>
    </div>
</body>
</html>