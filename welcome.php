<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="./bootstrap.min.css">
  <style>
    body {
      font: 14px sans-serif;
      background-image: url('./background.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    .wrapper {
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
      <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
      <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
  </div>
</body>

</html>