<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   Menu</button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav text-center">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-2x fa-home"></i><span class="sr-only">(current)</span><br>Home</a>
      </li>
      <!-- Menu theo loại phòng-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-2x fa-list-ul"></i><br>Loại phòng
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php
                  foreach ($menu as $mn) {
              ?>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"><?php echo $mn->ten_loaiphong;?></a>
                <ul class="dropdown-menu">
                  <?php
                  $phong_hoc=explode(',',$mn->phong_hoc);
                  //print_r($phong_hoc);
                  foreach ($phong_hoc as $ph) {
                    list($id_phonghoc, $ten_phonghoc_khongdau)=explode(':',$ph);
                  
                  ?>
                    <li><a class="dropdown-item" href="./chitiet.php?id=<?=$id_phonghoc?>"><?=$ten_phonghoc_khongdau;?></a></li>
                  <?php
                    }
                  ?>
                  
                </ul>
            </li>
              <?php
                    }
              ?>
            
        </ul>
      </li>

		<!-- Menu theo loại phòng-->
					
    
<!-- Menu phòng theo loại khu vực-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-2x fa-map-marked"></i><br>Phòng học theo khu</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php
                  foreach ($menukhuvuc as $mnkv) {
              ?>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"><?php echo $mnkv->dia_diem;?></a>
                <ul class="dropdown-menu">
                  <?php
                  $kv_phong=explode(',',$mnkv->kv_phong);
                  //print_r($phong_hoc);
                  foreach ($kv_phong as $kvph) {
                    list($id_phonghoc, $ten_phonghoc_khongdau)=explode(':',$kvph);
                  
                  ?>
                    <li><a class="dropdown-item" href="./chitiet.php?id=<?=$id_phonghoc?>"><?=$ten_phonghoc_khongdau;?></a></li>
                  <?php
                    }
                  ?>
                  
                </ul>
            </li>
              <?php
                    }
              ?>
            
        </ul>
      </li>
<!-- End Menu phòng theo loại khu vực-->    
</ul>
</div>
</nav>