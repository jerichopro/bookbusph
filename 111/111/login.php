<?php
include 'inc/header.php';
Session::CheckLogin();
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
   $userLog = $users->userLoginAuthotication($_POST);
}
if (isset($userLog)) {
  echo $userLog;
}

$logout = Session::get('logout');
if (isset($logout)) {
  echo $logout;
}

 ?>
<div class="container" style="padding-right: auto; padding-left: auto;">
  <div class="card ">
    <div class="card-header">
            <h3 class='text-center'><i class=""></i>Login</h3>
          </div>
          <div class="card-body">


              <div class="container" style="width:450px; margin:0px auto">

              <form class="" action="" method="post">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"  class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-success">Login</button>
                  </div>


              </form>
            </div>


          </div>
        </div>
      </div>


  <?php
  include 'inc/footer.php';

  ?>
