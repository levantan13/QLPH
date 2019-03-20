  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <?php
                  foreach ($menu as $mn) {
    ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#home"><?=$mn->ten_loaiphong;?></a>
    </li>
          <?php
    
          }
        ?>
  </ul>

<!-- Tab panes -->
  <div class="tab-content">
     <?php
                  $phong_hoc=explode(',',$mn->phong_hoc);
                  //print_r($phong_hoc);
                  foreach ($phong_hoc as $ph) {
                    list($id_phonghoc, $ten_ph_khongdau)=explode(':',$ph);
                  ?>
    
    <div id="home" class="container tab-pane"><br>
     <h3>Phòng <?=$ten_ph_khongdau;?></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <?php
    
          }
        ?>
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