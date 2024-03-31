<?php
// PHP code for any server-side logic specific to the Keygen page can go here
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>S&box Key Generator</title>
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
  .top-bar {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .login-button, .logo {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    text-decoration: none; /* Remove underline from links */
  }
  .login-button:hover, .logo:hover {
    background-color: #0056b3;
  }
  .logo img {
    height: 50px; /* Adjust based on your preference */
  }
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
  }
  header {
    text-align: center;
    margin-bottom: 30px;
  }
  header h1 {
    margin: 0;
    color: #333;
    font-size: 24px;
  }
  #codeContainer {
    padding: 20px 40px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 10px;
    text-align: center;
  }
  button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #007bff;
    color: white;
  }
  button:hover {
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

<div class="top-bar">
  <a href="login.php" class="login-button">Login</a>
  <div class="logo">
    <img src="https://cdn2.steamgriddb.com/grid/9322539775192c9da01e293b650ba797.png" alt="S&box Logo">
  </div>
</div>

<div class="container">
  <header>
    <h1>S&box Key Generator</h1>
  </header>
  <div id="codeContainer">Your code will appear here</div>
  <button onclick="generateRandomCode()">Generate Code</button>
</div>

<footer>
  by the Keygen Group
</footer>

<script>
  function generateRandomCode() {
    function s4() {
      return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1)
        .toUpperCase();
    }
    const code = `${s4()}${s4()}-${s4()}-${s4()}-${s4()}-${s4()}${s4()}${s4()}`;
    document.getElementById('codeContainer').textContent = code;
  }

  window.onload = generateRandomCode;
</script>

</body>
</html>