<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="codex.css" />
    <title>CodeX Forum</title>
    <style>
        .login {
            margin-top: 9em;
        }
    </style>
</head>

<body>
    <?php include'private/_navbar.php'?>
    <div class="container login col-md-4">
        <form action="signup.php" method ="post">
            <div class="mt-3 mb-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your Email address" />
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="*******" id="password" />
            </div>
            <div class="mb-1">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="*******" id="cpassword" />
            </div>

            <a href="index.php" button type="submit" class="btn btn-primary mt-3">Signup</buuton> </a>
        </form>
    </div>

    <?php include'private/_footer.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>