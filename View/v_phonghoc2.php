  <!-- Nav pills -->
  <ul class="nav nav-pills nav-tabs-justified" role="tablist">
    <?php
                  for($i=0;$i<count($loaiph);$i++) {
                    if($i==0) {
    ?>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home<?=$loaiph[$i]->id_loaiphong?>"><?=$loaiph[$i]->ten_loaiphong;?></a>
    </li>
      <?php
        } 
        else {
    ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu<?=$loaiph[$i]->id_loaiphong?>"><?=$loaiph[$i]->ten_loaiphong;?></a>
    </li>
    <?php
    }
  }
    ?>
  </ul>

<!-- Tab panes -->
  <div class="tab-content">

    <div id="home1" class="container tab-pane active"><br>
            <div class="row">
      <!--vòng lặp foreach-->
                    <?php
                  foreach ($menu as $mn) {
              ?>
      <?php 
                  print_r($mn);
                  $phong_hoc=explode(',',$mn->phong_hoc);
                  print_r($phong_hoc);
                  foreach ($phong_hoc as $ph) {
                    list($id_phonghoc, $ten_ph_khongdau)=explode(':',$ph);
                  ?>
      <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
        <div class="card border ">
          <!--  <a href="page/chitietPM.php"><img class="card-img-top" src="http://placehold.it/700x400" alt="Phòng B002A"></a>-->
          <div class="card-header">
            <h5 class="text-primary">Phòng <?=$ten_ph_khongdau;?></h5>
            </div>
            <div class="card-body">
              <a href="./chitiet.php?key=<?=$id_phonghoc?>"><span><i class="fas fa-7x fa-door-open"></i></span></a>
              <p class="text-justify"></p>
      
            </div>
            <div class="card-footer">
              <h6 class="card-title text-primary font-weight-bold"><a href="#">Xem chi tiết</a></h6>
            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>
        <!--kết thúc vòng lặp-->
      </div>
    </div>

    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

  </div>



<!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"></a>
  </li>


  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"></a>
  </li>


</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">phòng lý thuyết  
     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Phòng thực hành</div>
 </div> -->