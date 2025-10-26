<!DOCTYPE html>
<html lang="en">

<?php
include "layout/head.php"
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
        width="60">
    </div>

    <!-- Navbar -->
    <?php
    include "layout/navbar.php"
      ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include "layout/sidebar.php"
      ?>

    <!-- Content Wrapper. Contains page content -->
    <?php
    include "layout/moviesMain.php"
      ?>
    <!-- /.content-wrapper -->
    <?php
    include "layout/footer.php"
      ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?php
  include "layout/script.php"
  ?>
</body>

</html>