<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Activity Tracker</title>
</head>
<body>
<form action="action_page.php" method="post">
  <div class="imgcontainer">
  <h2>Login</h2>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button name="login" type="submit">Login</button>
    <a href="register.php">Register Now!</a>
 
</form>


</body>
</html>