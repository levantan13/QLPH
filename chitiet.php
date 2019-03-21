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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Phòng Học <?=$chitietph->ten_phonghoc?> TDC</title>
  
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="view/bootstrap/font/css/all.min.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="view/bootstrap/css/shop-homepage.css" rel="stylesheet">
    <link href="view/bootstrap/css/my.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/style.css">

</head>
<body>
<!--Baner top-->
<div class="container-fluid paddingall">
      <?php
        require("view/banertop.php");
      ?>
</div>
<!--End Baner top -->

  <!-- Menu top-->
<div class="container-fluid sticky-top">
      <?php
        require("view/menu_top.php");
      ?>
  </div>
  <!-- End Menu top-->

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-9">
                <!-- Blog Post -->
                <!-- Title -->
                <br>
                <h1 class="text-left">Thông Tin <?=$chitietph->ten_phonghoc?></h1>
                <!-- description -->
                <p class="lead text-left"><strong><?=$chitietph->mo_ta_ngan_ph?></strong> 
                   
                </p>

                <!-- Preview Image -->
                <img class="d-block w-100 h-25" src="http://placehold.it/900x300" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>

                <!-- Post Content -->
                <div class="text-justify">
                     <p class="lead"><?=$chitietph->mo_ta_chi_tiet_ph?></p>
                </div>
                <hr>
                <!-- Blog Comments -->
                <!-- Comments Form -->
                <div class="well">
                    <h4 class="text-left">Viết phản hồi <?=$chitietph->ten_phonghoc?><span class="fa fa-glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>
                <hr>
                <!-- Posted Comments -->
                <!-- Comment -->
                <div class="media text-left">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3 text-left">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body text-left">

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="d-block w-100 h-10" src="images/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="d-block w-100 h-25" src="images/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="d-block w-100 h-25" src="images/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="d-block w-100 h-25" src="images/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="d-block w-100 h-25" src="images/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="d-block w-100 h-25" src="images/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>Project Five</b></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->


                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <div class="container-fluid paddingall">
      <?php
        require("view/footer.php");
      ?>
    </div>
    <!-- end Footer -->

    <!-- jQuery -->
    <script src="view/bootstrap/js/jquery.min.js"></script>
    <script src="view/bootstrap/js/popper.min.js"></script>
    <script src="view/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/bootstrap/js/my.js"></script>
    <script src="view/bootstrap/js/script.js"></script>
</body>

</html>
