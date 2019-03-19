<?php
      include("Controller/C_phonghoc.php");
      $c_phong_hoc=new C_phonghoc();
      $noi_dung=$c_phong_hoc->chitietphonghoc();
      $chitietph=$noi_dung['chitietph'];
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
	
	<div class="container-fluid">
		<?php require("view/banertop.php"); ?>
	</div>
	<div class="container-fluid content border border-dark">
				<div class="row">
			<div class="col-xl-8 col-md-8 col-sm-6 mb-4">
				<div>
					<h1 class="text-left">Thông Tin <?=$chitietph->ten_phonghoc?></h1>
					<h4 class="text-left"><?=$chitietph->mo_ta_ngan_ph?></h4>
					<p class="text-justify"><?=$chitietph->mo_ta_chi_tiet_ph?></p>
				</div>
				<div>
					<?php require("view/form_phanhoi.php");?>
				</div>

			</div>
			<div class="col-xl-4 col-md-4 border border-warning">
				
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div><?php require("view/footer.php");?></div>
		<div><a class="text-white font-weight-bold" href="index.php">Quay lại trang chủ</a></div>
	</div>
</body>
</html>