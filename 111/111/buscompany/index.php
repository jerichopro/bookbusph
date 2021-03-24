<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../assets/materialize.min.css"  media="screen,projection"/>   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

<title>BookBusPH-Passenger</title>
</head>
<body>
    
<nav>
    <div class="nav-wrapper sidenav-fixed grey">
      <a href="index.html" class="brand-logo"></a><img src="/project/layouts/images/newlogo2.png" height="130" width="200" style="margin-left: 10px; margin-top: -30px;">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger  show-on-large"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <ul class="sidenav" id="mobile-demo">
    <li><div class="user-view">
      <div class="background">
        <img src="/project/layouts/images/sidenavbg2.jpg" height="200%" width="200%">
      </div>
      <a href="#user"><img class="circle" src="/project/layouts/images/1.jpg"></a>
      <a href="#name"><span class="white-text name">
     
      <a href="#email"><span class="white-text email"></span></a>
    </div></li>

    <ul class="collapsible">
      <li>
        <div class="collapsible-header"><i class="material-icons">group</i>Employees</div>
        <div class="collapsible-body">
          <ul>
            <li><div class="divider white-text"></div></li>
            <li><a href="#addUser" class="black-text sidenav-close" id="adduserbtn">Add Employees<i class="material-icons right black-text">group_add</i></a></li>
            <li><div class="divider white-text"></div></li>
            <li><a href="#manageuser" class="black-text sidenav-close" id="managebtn">Manage Employees<i class="material-icons right black-text">group</i></a></li>
        </ul>
        </div>
        
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Bus</div>
        <div class="collapsible-body">
          <ul>
              <li><div class="divider black-text"></div></li>
              <li><a href="#addbus" class="black-text modal-trigger" id="addbusbtn">Add Bus<i class="material-icons right black-text">add_box</i></a></li>
              <li><div class="divider white-text"></div></li>
              <li><a href="#editbus" class="black-text modal-trigger" id="editbusbtn">All Buses<i class="material-icons right black-text">list</i></a></li>
              <li><div class="divider black-text"></div></li>
          </ul>
      </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
        <div class="collapsible-body">
          <ul>
            <li><div class="divider white-text"></div></li>
            <li><a href="#addUser" class="black-text sidenav-close" id="adduserbtn">Add Employees<i class="material-icons right black-text">group_add</i></a></li>
            <li><div class="divider white-text"></div></li>
            <li><a href="#manageuser" class="black-text sidenav-close" id="managebtn">Manage Employees<i class="material-icons right black-text">group</i></a></li>
        </ul>
        <li><div class="divider" class="black-text"></div></li>
        <li><a href="index.php?logout='1'" class="waves-effect waves-light black-text" id="logoutBtn"><i class="material-icons black-text">exit_to_app</i>Logout</a></li>

        </div>
      </li>
    </ul>
  </ul>



<!-- Addbus -->
  <div class="col s12 m12 l12  modal modal-fixed-footer" id="addbus">
    <div class="card">
        <div class="card-content">
            <h5 class="center-align"><b>Add Bus</b></h5>
            <hr />
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 left-align">
                        <h6><b>Route</b></h6>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <select name="from" id="from">
                            <option value="" disabled selected>Select</option>
                            <option value="Banaybanay">Banaybanay</option>
                            <option value="Baganga">Baganga</option>
                            <option value="Boston">Boston</option>
                            <option value="Cateel">Cateel</option>
                            <option value="Caraga">Caraga</option>
                            <option value="Carmen">Carmen</option>
                            <option value="Compostela Valley">Compostela Valley</option>
                            <option value="Davao City">Davao City</option>
                            <option value="Digos City">Digos City</option>
                            <option value="Gov. Generoso">Gov. Generoso</option>
                            <option value="Kamanlangan">Kamanlangan</option>
                            <option value="Kapalong">Kapalong</option>
                            <option value="Laak">Laak</option>
                            <option value="Lupon">Lupon</option>
                            <option value="Mabini">Mabini</option>
                            <option value="Maco">Maco</option>
                            <option value="Manay">Manay</option>
                            <option value="Maragusan">Maragusan</option>
                            <option value="Mati">Mati</option>
                            <option value="Mawab">Mawab</option>
                            <option value="Monkayo">Monkayo</option>
                            <option value="Montevista">Montevista</option>
                            <option value="Nabunturan">Nabunturan</option>
                            <option value="New Bataan">New Bataan</option>
                            <option value="Panabo City">Panabo City</option>
                            <option value="Pantukan">Pantukan</option>
                            <option value="San Isidro">San Isidro</option>
                            <option value="Tagum City">Tagum City</option>
                            <option value="Tarragona">Tarragona</option>
                        </select>
                        <label for="from" class="black-text">Depart from</label>
                        <h6 class="red-text center-align hide" style="font-size: small;" id="errorfrm"><b>Field must not be empty!</b></h6>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <select name="to" id="to">
                            <option value="" disabled selected>Select</option>
                            <option value="Banaybanay">Banaybanay</option>
                            <option value="Baganga">Baganga</option>
                            <option value="Boston">Boston</option>
                            <option value="Cateel">Cateel</option>
                            <option value="Caraga">Caraga</option>
                            <option value="Carmen">Carmen</option>
                            <option value="Compostela Valley">Compostela Valley</option>
                            <option value="Davao City">Davao City</option>
                            <option value="Digos City">Digos City</option>
                            <option value="Gov. Generoso">Gov. Generoso</option>
                            <option value="Kamanlangan">Kamanlangan</option>
                            <option value="Kapalong">Kapalong</option>
                            <option value="Laak">Laak</option>
                            <option value="Lupon">Lupon</option>
                            <option value="Mabini">Mabini</option>
                            <option value="Maco">Maco</option>
                            <option value="Manay">Manay</option>
                            <option value="Maragusan">Maragusan</option>
                            <option value="Mati">Mati</option>
                            <option value="Mawab">Mawab</option>
                            <option value="Monkayo">Monkayo</option>
                            <option value="Montevista">Montevista</option>
                            <option value="Nabunturan">Nabunturan</option>
                            <option value="New Bataan">New Bataan</option>
                            <option value="Panabo City">Panabo City</option>
                            <option value="Pantukan">Pantukan</option>
                            <option value="San Isidro">San Isidro</option>
                            <option value="Tagum City">Tagum City</option>
                            <option value="Tarragona">Tarragona</option>
                        </select>
                        <label for="to" class="black-text">Arrive to</label>
                        <h6 class="red-text center-align hide" style="font-size: small;" id="errorto"><b>Field must not be empty!</b></h6>
                    </div>
                    <div class="col s12 m12 l12 left-align">
                        <h6><b>Bus Details</b></h6>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input type="text" name="busnumber" id="busnumber" class="validate">
                        <label for="busnumber">Bus number</label>
                        <h6 class="red-text center-align hide" style="font-size: small;" id="errorbusnum"><b>Field must not be empty!</b></h6>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input type="text" name="busplate" id="busplate" class="validate">
                        <label for="busplate">Bus plate number</label>
                        <h6 class="red-text center-align hide" style="font-size: small;" id="errorbusplate"><b>Field must not be empty!</b></h6>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input type="text" name="busdeparture" id="busdeparture" class="timepicker">
                        <label for="busdeparture">Departure time</label>
                        <h6 class="red-text center-align hide" style="font-size: small;" id="errordeparture"><b>Field must not be empty!</b></h6>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input type="number" name="seatcap" id="seatcap" class="validate">
                        <label for="seatcap">Seat capacity</label>
                        <h6 class="red-text center-align hide" style="font-size: small;" id="errorseat"><b>Field must not be empty!</b></h6>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input type="number" name="fare" id="fare" class="validate">
                        <label for="fare">Travel Fare Amount</label>
                        <h6 class="red-text center-align hide" style="font-size: small;" id="errorfare"><b>Field must not be empty!</b></h6>
                    </div>
                    <div class="input-field col s12 m12 l12 center-align">
                        <button class="btn waves-effect waves-light white-text black" id="regbus">Submit<i class="material-icons right white-text">send</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col s12 m12 l12 modal modal-fixed-foote" id="editbus">
  <div class="card">
      <div class="card-content">
          <div class="row">
              <div class="col s12 m12 l12">
                  <ul class="tabs tabs-fixed-width tab-demo z-depth-1 black">
                      <li class="col s6 m6 l6 tab"><a href="#activeBuses" class="white-text">Active Bus</a></li>
                      <li class="col s6 m6 l6 tab"><a href="#inactiveBuses" class="white-text">Inactive Bus</a></li>
                  </ul>
              </div>
              <div class="col s12 m12 l12" id="activeBuses">
                  <table class="striped highlight">
                      <thead>
                          <tr>
                              <th>Bus plate number</th>
                              <th>Route</th>
                          </tr>
                      </thead>
                      <tbody id="activeBus">

                      </tbody>
                  </table>
              </div>
              <div class="col s12 m12 l12" id="inactiveBuses">
                  <table class="striped highlight">
                      <thead>
                          <tr>
                              <th>Bus plate number</th>
                              <th>Route</th>
                          </tr>
                      </thead>
                      <tbody id="inactiveBus">

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var sidenav = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(sidenav);
    var collapsible = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(collapsible);
    var modal = document.querySelectorAll('.modal');
    var instances = M.Modal.init(modal);
    var FormSelect = document.querySelectorAll('select');
    var instances = M.FormSelect.init(FormSelect);
    var Materialbox = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(Materialbox);
  });

 


</script>

<script type="text/javascript" src="../assets/materialize.min.js"></script>
<script type="text/javascript" src="../assets/materialize.js"></script>
<script type="text/javascript" src="../assets/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

</body>
</html>