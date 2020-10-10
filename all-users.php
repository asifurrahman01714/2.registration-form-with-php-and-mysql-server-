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

    <title>Users Registration Table</title>
  </head>
  <body>

  <?php
  
  $query = "SELECT * FROM users";
  $select_all_users = mysqli_query($connect, $query);

  ?>


    <section class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>All Registered Users</h1>
                <table class="table table-striped table-dark table-hover">
                      <thead>
                        <tr>
                          <th scope="col">User ID</th>
                          <th scope="col">Username</th>
                          <th scope="col">User Email</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Adress</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php

                      while ($row = mysqli_fetch_assoc($select_all_users)){
                        $user_ID = $row['user_ID'];
                        $username = $row['username'];                       
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $user_address = $row['user_address'];   
                    

                      ?>

                        <tr>
                            <th scope="row"><?php echo $user_ID; ?></th>
                            <td><?php echo $username; ?></td>
                           
                            <td><?php echo $email; ?></td>
                            <td><?php echo $phone; ?></td>
                            <td><?php echo $user_address; ?></td>
                            <td>
                              <div class="btn-group">
                                <a href="update-users.php?update=<?php echo $user_ID; ?>" class="btn btn-success">Update</a>
                                <a href="" class="btn btn-danger">Delete</a>
                              </div>
                            </td>
                        </tr>
                      <?php
                  
                      } 

                      ?>


                       
                       
                       
                      </tbody>
                  </table>
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