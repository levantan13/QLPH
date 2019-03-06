<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Phòng Máy Tính TDC</title>
  <link rel="stylesheet" type="text/css" href="/css/twocol-blog.css">
  <link rel="icon" href="http://tdc.edu.vn/wp-content/themes/i-excel/images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
</head>

<body>
  <!-- Header -->
  <div>
    <?php
    require("blocks/Header.php"); 
    ?>
  </div>
  <!-- End Header -->
  <!-- Menu -->
  <div class="container-fluid">
    <?php
    require("blocks/menu.php");
    ?>
  </div>
  <!-- End Menu -->

  <!-- Slide-->
  <div class="container">
    <?php
    require("blocks/main_slide.php");
    ?>
  </div>
  <!-- End Slide -->

  <!-- Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="my-4">Phòng Học TDC</h1>
    <div class="row">
      <!--vòng lặp foreach-->
      <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
        <div class="card border border-primary">
          <!--  <a href="page/chitietPM.php"><img class="card-img-top" src="http://placehold.it/700x400" alt="Phòng B002A"></a>-->
          <div class="card-header bg-primary">
            <h4 class="text-white">Phòng B002A</h3>
            </div>
            <div class="card-body">
              <p class="text-justify">phòng học đồ hoạ></p>
              <hr>
              <?php require("form_phanhoi.php");?>
            </div>
            <div class="card-footer">
              <h6 class="card-title text-primary font-weight-bold"><a href="#">Xem chi tiết</a></h6>
            </div>
          </div>
        </div>
        <!--kết thúc vòng lặp-->
      </div>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->
  </div>
  <!-- End page Content -->
  <!-- Footer -->
  <div class="container-fluid">
    <?php
    require("blocks/Footer.php");
    ?>
  </div>

  <!-- End Footer -->

</body>
</html>
