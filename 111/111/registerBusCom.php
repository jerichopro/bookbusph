<?php
include 'inc/header.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->BusCompRegistration($_POST);
}

if (isset($register)) {
  echo $register;
}


 ?>
<div class="container">
 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Bus Company Registration</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="BusCompanyName">Company Name</label>
                  <input type="text" name="BusCompanyName"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="mobile"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
                  <input type="hidden" name="roleid" value="2" class="form-control">
                </div>
                <div class="form-group">
                <label for="password">Upload Business Permit</label><br>
                  <input type="file" id="inputImage" Name="photo">
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-success">Register</button>
                </div>


            </form>
          </div>


        </div>
      </div>
    </div>


  <?php
  include 'inc/footer.php';

  ?>
