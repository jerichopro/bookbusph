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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookBusPH</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link type="text/css" rel="stylesheet" href="assets/materialize.min.css"  media="screen,projection"/>   

  </head>
  <body>


<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}
 ?>





<!-- redirect to admin -->
          <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
            
  <nav class="grey">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="/project/layouts/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li class="nav-item">
                  <a  href="admin/index.php"><i class="fas fa-users mr-2"></i> Dashboard </span></a>
              </li>
              
            <?php  } ?>

<!-- redirect to BusCompany -->
            <?php if (Session::get('roleid') == '2') { ?>
            
  <nav class="grey">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="/project/layouts/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li class="nav-item">

                  <a  href="buscompany/index.php"><i class="fas fa-users mr-2"></i>Home </span></a>
              </li>
              <li class="nav-item">
  
              </li>
            <?php  } ?>

<!-- redirect to employee -->
            <?php if (Session::get('roleid') == '3') { ?>
            
  <nav  class="grey">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="/project/layouts/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li class="nav-item">

                  <a href="employee/index.php"><i class="fas fa-users mr-2"></i>Home </span></a>
              </li>
            <?php  } ?>

<!-- redirect to Passenger -->
<?php if (Session::get('roleid') == '4') { ?>

  <nav  class="grey">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="/project/layouts/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li class="nav-item">

                  <a  href="passenger/index.php"><i class="fas fa-users mr-2"></i>Home </span></a>
              </li>

            <?php  } ?>

            <li class="nav-item">
              <a  href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </li>

          <?php } else{ ?>

  <nav  class="grey">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="/project/layouts/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li class="nav-item
              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'register') {
                            echo " active ";
                          }

                         ?>">
        <li> <a  href="registerPassenger.php">Register as a Passenger</a>
        <li><a  href="registerBusCom.php">Register as a Bus Company</a>
        <li class="nav-item
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
        <li><a  href="login.php">Login</a>
      </ul>
    </div>

          <?php } ?>

          </nav>
</ul>



