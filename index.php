<?php
// PHP session start
session_start();

// Check if user is already logged in
$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome - S&box Key Generator</title>
<style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .main-container {
    text-align: center;
  }
  a {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    cursor: pointer;
  }
  a:hover {
    background-color: #0056b3;
  }
  footer {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
    color: #666;
  }
</style>
</head>
<body>

<div class="main-container">
  <h1>Welcome to the S&box Key Generator</h1>
  <?php if ($loggedIn): ?>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['username']); ?>. Enjoy generating keys!</p>
    <a href="Keygen.php">Generate Keys</a>
    <a href="logout.php">Logout</a>
  <?php else: ?>
    <p>Generate unique keys for S&box. Please login to continue.</p>
    <a href="login.php">Login</a>
  <?php endif; ?>
</div>

<footer>
  by the Keygen Group
</footer>

</body>
</html>