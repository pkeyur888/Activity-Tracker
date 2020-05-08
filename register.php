<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
<form action="action_page.php" method="post">
  <div class="imgcontainer">
      <h2>Register !</h2>
  </div>

  <div class="container">

    <label for="name"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="fname" required>

    <label for="name"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lname" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Re-Enter Password</b></label>
    <input type="password" placeholder="Enter Password" name="repsw" required>

    <div class="bb"><button name="register" type="submit">Register</button></div>

    <a href="login.php">Login</a>
 
</form>


</body>
</html>