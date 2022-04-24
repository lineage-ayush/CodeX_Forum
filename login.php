<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include'partials/_dbconnect.php';

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['email'] = $email;
      header("location:index.php");            
    }else{
        $showError = "Invalid Credentials";
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="codex.css">
    <title>Login - CodeX Forum </title>
    <style>
      .login{
        margin-top: 6em;
      }
      </style>
  </head>
  <body>
    
  <?php include'partials/_navbar.php'?>
  <?php
    if($showError){
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showError .'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
  <div class="container login col-md-4">
    <h3>Login to CodeX Forum</h3>
    <form action="login.php" method="post">
      <div class="mt-3 mb-2">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name = "email" id="email" placeholder="Enter your Email address">
      
      </div>
      <div class="mb-1">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name ="password" placeholder="*******" id="password">
      </div>
    
      <button type="submit" class="btn btn-primary mt-3">Login</button>
      <a href="signup.php" button type="submit" class="btn btn-primary mt-3">SignUp</button></a>
      
    </form>
  </div>


  <?php include'partials/_footer.php'?>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 </body>
</html>