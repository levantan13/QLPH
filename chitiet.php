<?php
      include("Controller/C_phonghoc.php");
      $c_phong_hoc=new C_phonghoc();
      $noi_dung=$c_phong_hoc->chitietphonghoc();
      $chitietph=$noi_dung['chitietph'];

      $noidung=$c_phong_hoc->index();
      $slide=$noidung['slide'];
      $menu=$noidung['menu'];
      $menukhuvuc=$noidung['menukhuvuc'];
      //print_r($menu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Phòng Học TDC</title>
  <link rel="stylesheet" type="text/css" href="view/bootstrap/css/w3.css">
  <link rel="stylesheet" type="text/css" href="view/bootstrap/css/style.css">
  <link rel="stylesheet" type="text/css" href="view/bootstrap/font/css/all.min.css">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<!-- Baner top -->
	<div class="container-fluid paddingall">
		<?php require("view/banertop.php"); ?>
	</div>
	<!-- Menu top -->
		<div class="container-fluid sticky-top">
		<?php require("view/menu_top.php"); ?>
	</div>
	<!-- content -->
	<div class="container-fluid paddingall">
			<div class="row">
				<!-- Content left -->
			<div class="col-xl-8 col-md-8 col-sm-6 mb-4">
				<div>
					<!-- Preview Image -->
               	    <img class="d-block w-100 h-25" src="images/lasan1.jpg" alt="">
       				<h1 class="text-left">Thông Tin <?=$chitietph->ten_phonghoc?></h1>
					<h4 class="text-left"><?=$chitietph->mo_ta_ngan_ph?></h4>
					<p class="text-justify"><?=$chitietph->mo_ta_chi_tiet_ph?></p>
				</div>
				<div>
					<?php require("view/form_phanhoi.php");?>
				</div>
			</div>
			<!-- content right -->
			<div class="col-xl-4 col-md-4">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div><?php require("view/footer.php");?></div>
		<div><a class="text-white font-weight-bold" href="index.php">Quay lại trang chủ</a></div>
	</div>
<script src="view/bootstrap/js/jquery.min.js"></script>
<script src="view/bootstrap/js/bootstrap.bundle.min"></script>
<script src="view/bootstrap/js/bootstrap.min.js"></script>
<script src="view/bootstrap/js/script.js"></script>
<script src="view/bootstrap/js/popper.min.js"></script>
</body>
</html>