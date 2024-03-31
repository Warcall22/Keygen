<?php
// Start session to manage login state
session_start();

// Initialize variables to store login form data
$username = $password = "";
$loginError = "";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    // Dummy validation logic (replace with your own database check)
    // For example purposes, the username is 'admin' and password is 'password'
    if ($username === "admin" && $password === "password") {
        // Login successful - Set session variable
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        // Redirect to a new page or display a success message
        header("Location: welcome.php"); // Redirect to a welcome page
        exit;
    } else {
        $loginError = "Invalid username or password.";
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - S&box Key Generator</title>
<style>
  /* Previous CSS styles remain the same */
</style>
</head>
<body>

<div class="login-form">
  <h2>Login</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="loginButton">Login</button>
    <?php
    if (!empty($loginError)) {
        echo '<div class="error">' . $loginError . '</div>';
    }
    ?>
  </form>
</div>

<footer>
  by the Keygen Group
</footer>

</body>
</html>