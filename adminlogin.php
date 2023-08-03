<?php
session_start();

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (you can add additional validation as needed)
    if ($username === '123' && $password === '123') {
        // Redirect to the main page on successful login
        $_SESSION['username'] = $username;
        header('Location: main.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (isset($error)) { ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php } ?>
        <form action="adminlogin.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Log In</button>
        </form>
    </div>
</body>
</html>
