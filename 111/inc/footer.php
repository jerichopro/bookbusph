




  </body>




  <!-- Jquery script -->
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <script src="assets/jquery.dataTables.min.js"></script>
  <script src="assets/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript" src="assets/materialize.min.js"></script>
<script type="text/javascript" src="assets/materialize.js"></script>


  <script>
      $(document).ready(function () {
          $("#flash-msg").delay(7000).fadeOut("slow");
      });
      $(document).ready(function() {
          $('#example').DataTable();
      } );
  </script>
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

</html>
