<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/logo/logo1.png">
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<p>
<section class="py-5 text-center container">
  <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
            <main class="form-signin">
            <form action="checklogin.php" name="login" id="form-login" method="POST" class="form-horizontal">
                <img class="mb-4" src="img/logo/logo1.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">Login</h1>

                <div class="form-floating" >
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                <label for="floatingInput">Username</label>
                </div><p></p>
                <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="floatingPassword" >Password</label>
                </div>

                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <p class="mt-5 mb-3 text-muted">&copy; OwO </p>
            </form>
            </main>
        </div>
    </div>
</section>
    </p>
    
  </body>
</html>
