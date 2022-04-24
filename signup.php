<? php
if($_SERVER == ["REQUEST_METHOD"] == "POST"){
    include'private/_dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="codex.css" />
    <title>Signup - CodeX Forum</title>
    <style>
        .login {
            margin-top: 8em;
        }
    </style>
</head>

<body>
    <?php include'private/_navbar.php'?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Your account has been created.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <div class="container login col-md-4">
        <h3>Signup to CodeX Forum</h3>

        <form action="signup.php" method ="post">
            <div class="mt-3 mb-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email address" />
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="*******" id="password" />
            </div>
            <div class="mb-1">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="*******" id="cpassword" />
            </div>

            <button type="submit" class="btn btn-primary mt-3">Signup</button>
            <p>Already have an account? <a href="login.php">Login here</p></a>
        </form>
    </div>

    <?php include'private/_footer.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>