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

  <ul class="sidenav " id="mobile-demo">
    <li><div class="user-view">
      <div class="background">
        <img src="/project/layouts/images/sidenavbg2.jpg" height="100%" width="100%">
      </div>
      <a href="#user"><img class="circle" src="/project/layouts/images/1.jpg"></a>
      <a href="#name"><span class="white-text name">
      <a href="#email"><span class="white-text email"></span></a>
    </div></li>

    <ul class="collapsible">
      <li>
        <div class="collapsible-header"><i class="material-icons">group</i>Reservation</div>
        
        
      </li>

      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Payments</div>
        
        </div>
      </li>

      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i>Others</div>
        <li><div class="divider" class="black-text"></div></li>
        <li><a href="../index.php" class="waves-effect waves-light black-text" id="logoutBtn"><i class="material-icons black-text">exit_to_app</i>back</a></li>

        </div>
      </li>
    </ul>
  </ul>






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