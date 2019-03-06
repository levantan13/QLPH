<?php
//Kết nối dữ liệu
require ("../model/database.php");
//Get tham số key
$IDphong=$_GET["key"];
//Đọc phòng học theo key
$sql="select * from phong_hoc where id_phonghoc=?";
$sta=$pdo->prepare($sql);
$param=array($IDphong);
$sta->execute($param);
$phong=$sta->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Thông tin phòng học</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/popper.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
	<?php require("../blocks/header.php"); ?>
	<div class="container-fluid">
		<div></div>
		<div><h1>Thông tin phòng <?php echo $phong->ten_phonghoc;?></h1></div>
	</div>
	<div class="container border border-dark">
				<div class="row">
			<div class="col-xl-8 col-md-8 col-sm-6 mb-4">
				<div class="table table-responsive text-justify">
					<table>
						<tr>
							<td class="font-weight-bold glyphicon-font">Vị trí</td>
							<td><?php echo $phong->vi_tri;?></td>
						</tr>
						<tr>
							<td class="font-weight-bold glyphicon-font">Chức năng</td>
							<td><?php echo $phong->chuc_nang;?></td>
						</tr>
					</table>
				</div>
				<div>
					<?php require("form_phanhoi.php");?>
				</div>

			</div>
			<div class="col-xl-4 col-md-4 border border-warning">
				
			</div>
		</div>
	</div>

	<div class="container-fluid bg-primary">
		<a class="text-white font-weight-bold" href="../index.php">Quay lại trang chủ</a>
	</div>
</body>
</html>