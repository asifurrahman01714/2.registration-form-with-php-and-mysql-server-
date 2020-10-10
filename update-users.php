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

    <title>Update Users Information</title>
  </head>
  <body>

  <?php
    if (isset($_GET['update'])) {
      $user_ID = $_GET['update'];

      $query ="SELECT * FROM users WHERE user_ID = $user_ID";
      $select_user_ID = mysqli_query($connect, $query);
      while($row = mysqli_fetch_assoc( $select_user_ID)){

        $user_ID      = $row['user_ID'];
        $username     = $row['username'];
        $user_password= $row['user_password'];       
        $email        = $row['email'];
        $phone        = $row['phone'];
        $user_address = $row['user_address'];   

      ?>

                  <section class="container">
                          <div class="row">
                              <div class="col-md-6 offset-md-3">
                                  <form action="" method="POST" class="main-form" style="margin-bottom: 500px;">
                                    <div class="form-group">
                                      <h1>Update Users Information</h1>
                                    </div>

                                    <div class="form-group">
                                          <label for="">Username</label>
                                          <input type="text" class="form-control" name="username" id="" value="<?php echo  $username ?>">
                                    </div>

                                    <div class="form-group">
                                          <label for="">Password</label>
                                          <input type="password" class="form-control" name="password" id="" value="<?php echo  $user_password ?>">
                                   </div>

                                    <div class="form-group">
                                          <label for="">Email Adress</label>
                                          <input type="email" class="form-control" name="email" id="" value="<?php echo  $email ?>">
                                    </div>

                                    <div class="form-group">
                                          <label for="">Phone Number</label>
                                          <input type="phone" class="form-control" name="phone" id="" value="<?php echo  $phone ?>">
                                    </div>

                                    <div class="form-group">
                                          <label for="">Adress</label>
                                          <input type="address" class="form-control" name="address" id="" value="<?php echo  $user_address ?>">
                                    </div>        
                                      <button  type="submit" class="btn btn-primary" name="update" >Update Users Information</button>  

                                                                  
                                  </form>
                              </div>
                          </div>

                    
                      </section>
    <?php


      }
    }

  ?>

  <?php
    if (isset($_POST['update'])){

        $username= $_POST['username'];
        $password= $_POST['password'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];


        $query = "UPDATE users SET username = '$username', user_password ='$password', email = '$email', phone='$phone', user_address = '$address'WHERE user_ID = '$user_ID' ";
        $update_query =  mysqli_query($connect, $query);
        if (!$update_query) {
          die("Query Failed" . mysqli_error($connect));
        }
        else{
          header( "Location: all-users.php");
        }
 
      }

  ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
  </body>
</html>