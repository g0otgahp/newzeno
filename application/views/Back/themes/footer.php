<footer class="footer">
  <div class="container-fluid">
    <!-- <nav class="pull-left">
    <ul>
    <li>
    <a href="#">
    Home
  </a>
</li>

</ul>
</nav> -->
<p class="copyright pull-right">
  &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
</p>
</div>
</footer>

</div>
</div>

</body>

<!--   Core JS Files   -->
<script src="<?php echo BASE_URL()?>/assets/Back/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL()?>/assets/Back/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Animete -->
<script src="<?php echo BASE_URL()?>/assets/Back/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo BASE_URL()?>/assets/Back/js/jquery.waypoints.min.js"></script>
<script src="<?php echo BASE_URL()?>/assets/Back/js/main.js"></script>

<!-- Bootstrap DataTable -->
<script src="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/dataTables.bootstrap.min.js" type="text/javascript"></script>


<!-- Select2 -->
<script src="<?php echo BASE_URL()?>assets/Back/select2-4.0.6-rc.1/dist/js/select2.min.js" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<!-- <script src="assets/js/bootstrap-notify.js"></script> -->

<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo BASE_URL()?>/assets/Back/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo BASE_URL()?>/assets/Back/js/demo.js"></script>

<script src="<?php echo BASE_URL()?>/assets/Back/summernote/summernote.js"></script>


<script>

$(document).ready(function() {

  //Textarea Editor
  $('.summernote').summernote({
    height: 300,                 // set editor height
    width: "100%",                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    dialogsInBody: true
  });

});

//Select
$(document).ready(function() {
  $('.select2-single').select2();
});

//dataTable
$(document).ready(function() {
  $('.dataTable').DataTable();
} );

function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
    key = event.clipboardData.getData('text/plain');
  } else {
    // Handle key press
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

<script>
  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
  })
</script>
<!-- <script type="text/javascript">
$(document).ready(function(){
$.notify({
icon: 'pe-7s-paper-plane',
message: "คุณได้เข้าสู่ระบบด้วยรหัส <b>BB-8</b>"

},{
type: 'danger',
timer: 3000
});
});
</script> -->

</html>
