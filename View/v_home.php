<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Phòng Máy Tính TDC</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/w3.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/font/css/all.min.css">
  <link rel="icon" href="../images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/script.js"></script>
  
</head>
<body>
  <!-- Header 
  <div class="container-fluid header">
  
  </div>
  <!-- End Header -->

  <!--Baner top-->
  <div class="container-fluid>
    <?php require("blocks/banertop.php")?>
  </div>
  <!--End Baner top-->
  <!-- Menu -->
  <div class="container-fluid">
     <?php
    require("blocks/menu_top.php");
  ?>
  </div>
  <!-- End Menu -->

<div class="container-fluid content">
<div class="row">
  <!--Left-->
  <div class="col-lg-3 border border-primary">
    <div class="card">

      
    </div> 
    <a href="#">Thông tin phản hồi phòng học ?</a>

  </div>
  <!--End Left-->

  <!-- Slide-->
  <div class="col-lg-9 border border-primary">
    <?php
    require("blocks/main_slide.php");
    ?>
  </div>
  <!-- End Slide -->
    <!--Right
      <div class="col-lg-3 border border-dark">
    Right
  </div>
  <!--End right-->
</div>
</div>

  <!-- Page Content -->
  <div class="container-fluid header">
 <?php require("blocks/menu_center.php");?>
  </div>
 <!-- End Page Content -->
  <div class="container-fluid header">
 <?php require("v_ph_content.php");?>
  </div>
  <!-- Footer -->
  <div class="container-fluid">
    <?php
    require("blocks/Footer.php");
    ?>
  </div>
  <!-- End Footer -->
<a href="#" class="go-top animated bounce" style="display: block;"><span class="genericon genericon-collapse">top</span></a>
<script>
    document.getElementById("foo").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };
</script>
</body>
</html>
