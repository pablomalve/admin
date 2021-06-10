<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-cobros | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="views/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="views/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="views/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="views/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Datatables -->
  <link rel="stylesheet" href="views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="views/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="views/plugins/toastr/toastr.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="views/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  
  <!-- jQuery -->
  <script src="views/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="views/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="views/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="views/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="views/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="views/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="views/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="views/plugins/moment/moment.min.js"></script>
  <script src="views/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="views/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="views/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="views/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="views/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="views/dist/js/demo.js"></script>
  <!-- Toastr -->
  <script src="views/plugins/toastr/toastr.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="views/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Datatables -->
  <script src="views/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="views/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="views/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="views/plugins/jszip/jszip.min.js"></script>
  <script src="views/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="views/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="views/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="views/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="views/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


</head>

<?php
  if(isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion']=="ok"){
    echo '<body class="hold-transition sidebar-mini layout-fixed">';
    echo '<div class="wrapper">';
    include "views/modules/header.php";
    include "views/modules/menu.php";
    if(isset($_GET['ruta'])){
      if($_GET['ruta']=="content"||
        $_GET['ruta']=="clientes"||
        $_GET['ruta']=="salir"||
        $_GET['ruta']=="usuarios"){
        include "views/modules/".$_GET['ruta'].".php";    
      }else{
        include "views/modules/404.php";    
      }
    }
    include "views/modules/footer.php";
    echo '</div>';
  }else{
    echo '<body class="hold-transition sidebar-mini layout-fixed login-page">';
    include "views/modules/login.php";
  }
?>
<script src="views/js/plantilla.js"></script>
</body>
</html>