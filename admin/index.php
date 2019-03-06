<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Trang quản lý</title>
	<link rel="stylesheet" type="text/css" href="../css/w3.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/popper.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 border border-left">
        <?php require("menu_left.php");?>
      </div>
      <div class="col-lg-8">
        <div><h1 class="text-primary">Trang quản lý</h1></div>
        <div id="phong_hoc" class="phonghoc" style="display:none">
          <?php require("ql_phong.php"); ?>
        </div>
        <div id="loai_phong" class="container phonghoc" style="display:none">
          <h2>Paris</h2>
        </div>
        <div id="phanhoi_phonghoc" class="container phonghoc" style="display:none">
          <h2>Tokyo</h2>
          <p>Tokyo is the capital of Japan.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Content -->
  <script src="../js/script.js"></script>
</body>
</html>