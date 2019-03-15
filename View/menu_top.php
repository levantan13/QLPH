<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   Menu</button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav text-center">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-1x fa-home"></i><span class="sr-only">(current)</span><br>Home</a>
      </li>
      <!-- Menu 1 cấp-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-1x fa-desktop"></i><br>Loại phòng
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
                    <li><a class="dropdown-item" href="#"><?=$ten_phonghoc_khongdau;?></a></li>
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

		<!--En Menu 1 cấp-->
					
      <!--Menu 2 cấp-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-1x fa-desktop"></i><br>P.Máy tính
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Submenu</a></li>
              <li><a class="dropdown-item" href="#">Submenu0</a></li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
       <!--End Menu 2 cấp-->
    </ul>
  </div>
</nav>