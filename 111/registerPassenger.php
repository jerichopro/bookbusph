<?php
include 'inc/header.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->PassengerRegistration($_POST);
}

if (isset($register)) {
  echo $register;
}


 ?>

<div class="container">
 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Passenger Registration</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="fname">First Name</label>
                  <input type="text" name="fname"  class="form-control">
                  <label for="lname">Last Name </label>
                  <input type="text" name="lname"  class="form-control">
                  <label for="mi">Middle Initial </label>
                  <input type="text" name="mi"  class="form-control">
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
                  <input type="hidden" name="roleid" value="4" class="form-control">
                </div>
                <input type="hidden" name="isActive" value="1" >
                <div class="form-group">
                <label for="password">Upload Valid ID</label><br>
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
