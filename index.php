    <?php
      include("Controller/C_phonghoc.php");
      $c_phong_hoc=new C_phonghoc();
      $noi_dung=$c_phong_hoc->index();
      $slide=$noi_dung['slide'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Phòng Học TDC</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="view/bootstrap/css/w3.css">
  <link rel="stylesheet" type="text/css" href="view/bootstrap/css/style.css">
  <link rel="stylesheet" type="text/css" href="view/bootstrap/font/css/all.min.css">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
  <script src="view/bootstrap/js/jquery.min.js"></script>
  <script src="view/bootstrap/js/bootstrap.min.js"></script>
  <script src="view/bootstrap/js/script.js"></script>
  
</head>
<body>
  <!--Baner top-->
<div class="container-fluid header">
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
 
</div>
<!-- End Menu center-->

  <!-- Page Content -->
   <div class="container-fluid header">
 <?php 
       require("view/v_ph_thuchanh_maytinh.php");?>
  </div>
  <!-- End Page Content -->
  <!-- Footer -->
  <div class="container-fluid">
    <?php
      require("view/Footer.php");
    ?>
  </div>
  <!-- End Footer -->
  <script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});

  </script>
</body>
</html>
