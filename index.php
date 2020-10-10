<?php include "db.php";?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">

    <title>User Login</title>
  </head>
  <body>

  <?php
    if (isset($_POST['login'])) {
       $username= $_POST['username'];
       $password= $_POST['password'];
       echo $username . "<br/>".$password; 
    }



  ?>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST" class="main-form">
                   <div class="form-group">
                    <h1>User Login</h1>
                   </div>

                   <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="">
                   </div>

                   <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="">
                   </div>
                    <button  type="submit" class="btn btn-primary" name="login">Log In</button>
                  
                
                </form>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
  </body>
</html>