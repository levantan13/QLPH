<?php
      include("Controller/C_phonghoc.php");
      $c_phong_hoc=new C_phonghoc();
      $noi_dung=$c_phong_hoc->index();
      $slide=$noi_dung['slide'];
      $menu=$noi_dung['menu'];
      $menukhuvuc=$noi_dung['menukhuvuc'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Phòng Học - Trường Cao Đẳng Công Nghệ Thủ Đức</title>
  
  <link rel="stylesheet" type="text/css" href="view/bootstrap/css/w3.css">
  <link rel="stylesheet" type="text/css" href="view/bootstrap/css/style.css">
  <link rel="stylesheet" type="text/css" href="view/bootstrap/font/css/all.min.css">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
  
</head>
<body>
  <!--Baner top-->
<div class="container-fluid paddingall">
      <?php
        require("view/banertop.php");
      ?>
</div>

  <!--End Baner top -->

  <!-- Menu -->
<div class="container-fluid sticky-top">
      <?php
        require("view/menu_top.php");
      ?>
  </div>
  <!-- End Menu -->

<div class="container-fluid content">
<div class="row">
  <!--Left-->
  <div class="col-lg-3 border border-primary">
    <div class="card">
      <div class="card-head border border-primary">
        <h5>Thông báo 1</h5>
      </div>
      <div class="card-body">
        <a href="#">Thông tin phản hồi phòng học ?</a>
      </div>
      
    </div> 
    

  </div>
  <!--End Left-->

  <!-- Slide-->
  <div class="col-lg-9 border border-primary">
    <?php
      require("view/main_slide.php");
    ?>
  </div>
  <!-- End Slide -->

</div>
</div>
<!-- Menu center-->
<div class="container-fluid">
     <?php
      require("view/menutest.php");
    ?>
</div>
<!-- End Menu center-->

  <!-- Page Content -->
   <div class="container-fluid paddingall">
 <?php 
       require("view/v_phonghoc.php");?>
  </div>
  <!-- End Page Content -->
  <!-- Footer -->
  <div class="container-fluid">
    <?php
      require("view/Footer.php");
    ?>
  </div>
  <!-- End Footer -->

  <script src="view/bootstrap/js/jquery.min.js"></script>
   <script src="view/bootstrap/js/bootstrap.bundle.min"></script>
  <script src="view/bootstrap/js/bootstrap.min.js"></script>
  <script src="view/bootstrap/js/script.js"></script>
 </body>
</html>
