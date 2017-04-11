<?php
    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
    } else {
        echo "Please log in first to see this page.";
    }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
</head>
<body>
<img src='jot_background1.png' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post" action="Login.php">
        <p><input type="text" name="student_id" value="" placeholder="Username"></p>
        <p><input type="password" name="PasswordHash" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </p>
      </form>
    </div>
    <section class="container">
      <div class="logout">
        <form method="post" action="Logout.php">
        <p>
          <p class="logout"><input type="submit" name="commit" value="Logout"></p>
        </p>
        </form>
        </div>

    <section class="container">
      <div class="create_user">
        <form method="post" action="create_user.php">
        <p>
          <p class="create_user"><input type="submit" name="commit" value="Sign Up"></p>
        </p> 
        </form>
        </div>   
</body>
</html>
