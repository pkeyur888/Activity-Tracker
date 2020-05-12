<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script>

   function  goToSignUp(){
    window.location.pathname="/register.php";
   }
  </script>
</head>
<body>
	
<div class="container">

    <div class="row center-div mt-5">
        <div class="">
            <h1 class="border border-primary rounded text-center">Activity tracker</h1>
            <form class=" p-5 border border-primary rounded">
                <h4 class="border border-primary text-center"> Sign in</h4>
                
                <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="john@doe.com">
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
                <div class="form-group text-center">
                    Not registered yet? <a href="register.php">Sign up from here</a> 
                </div>
            </form>
        </div>
    </div>
    <!--/row-->
</div>
<!--/container-->
	
</body>
</html>