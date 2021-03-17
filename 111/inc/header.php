<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();



spl_autoload_register(function($classes){

  include 'classes/'.$classes.".php";

});


$users = new Users();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP CRUD User Management</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link type="text/css" rel="stylesheet" href="assets/materialize.min.css"  media="screen,projection"/>   

  </head>
  <body>


<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  // Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  // <strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}



 ?>




      <nav class="navbar navbar-expand-md navbar-light bg-light card-header">
        <a class="navbar-brand" href="index.php"><i class="fas fa-home mr-2"></i>BookBusPH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">


<!-- redirect to admin -->
          <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
              <li class="nav-item">

                  <a class="btn" href="admin/index.php"><i class="fas fa-users mr-2"></i> Dashboard </span></a>
              </li>
              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">

                <a class="btn" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a>
              </li>
            <?php  } ?>


<!-- redirect to BusCompany -->
            <?php if (Session::get('roleid') == '2') { ?>
              <li class="nav-item">

                  <a class="btn" href="admin.php"><i class="fas fa-users mr-2"></i>User lists </span></a>
              </li>
              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">

                <a class="btn" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a>
              </li>
            <?php  } ?>


<!-- redirect to Passenger -->
            <?php if (Session::get('roleid') == '3') { ?>
              <li class="nav-item">

                  <a class="btn" href="passenger/index.php"><i class="fas fa-users mr-2"></i>Home </span></a>
              </li>
              

              
            <?php  } ?>

<!-- redirect to Passenger -->
<?php if (Session::get('roleid') == '4') { ?>
              <li class="nav-item">

                  <a class="btn" href="passenger/index.php"><i class="fas fa-users mr-2"></i>Home </span></a>
              </li>
              

              
            <?php  } ?>

















            <li class="nav-item
            <?php

      				$path = $_SERVER['SCRIPT_FILENAME'];
      				$current = basename($path, '.php');
      				if ($current == 'profile') {
      					echo "active ";
      				}

      			 ?>

            ">

              <a class="btn" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="btn" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </li>
          <?php }else{ ?>

              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'register') {
                            echo " active ";
                          }

                         ?>">
                <a class="btn" href="registerPassenger.php"><i class="fas fa-user-plus mr-2"></i>Register as a Passenger</a>
                <a class="btn" href="registerBusCom.php"><i class="fas fa-user-plus mr-2"></i>Register as a Bus Company</a>
              </li>
              <li class="nav-item
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
                <a class="btn" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
              </li>

          <?php } ?>


          </ul>


      </nav>
