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

    <title>Register New Users</title>
  </head>
  <body>

  <?php


      $message = "";
      if (isset($_POST['register'])) {
        $username= $_POST['username'];
        $password= $_POST['password'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];

        //Encrypted password
        $hassedPassord = sha1($password);

        $query = "INSERT INTO users(	username, user_password, email, phone, user_address) VALUES (	'$username', '$hassedPassord', '$email', '$phone',' $address')";
        $creat_new_user = mysqli_query($connect, $query);

        if (!$creat_new_user) {
         die("Query Failed" . mysqli_query($connect));
        }
        else{
          $message = ' <div class="alert alert-success">Congratulations! You are Successfully Registered.</div> ';
        }
        
     }

  ?>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST" class="main-form">
                   <div class="form-group">
                    <h1>Register New Users</h1>
                   </div>

                   <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="">
                   </div>

                   <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="">
                   </div>

                   <div class="form-group">
                        <label for="">Email Adress</label>
                        <input type="email" class="form-control" name="email" id="">
                   </div>

                   <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="phone" class="form-control" name="phone" id="">
                   </div>

                   <div class="form-group">
                        <label for="">Adress</label>
                        <input type="address" class="form-control" name="address" id="">
                   </div>        
                    <button  type="submit" class="btn btn-primary" name="register">Register User</button>  

                    <div class="form-group" style="margin-top: 20px;">
                      <?php echo $message; ?>
                        
                      
                   </div>                              
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