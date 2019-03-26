<!-- Nav tabs -->
    <?php
                  foreach ($menu as $mn) {
    ?>
  <div>
    <ul class="nav nav-pills nav-tabs text-white">
    <li class="nav-item border border-bottom-0">
      <h4 class="nav-link active font-weight-bold">Phòng học <?=$mn->ten_loaiphong;?></h4>
    </li>
  </ul>
  </div>
      <!-- Tab panes -->
  <div class="tab-content border border-dark paddingcontent">
    <div class="container-fluid tab-pane active"><br>
        <div class="row">
      <!--vòng lặp foreach-->
      <?php
                  $phong_hoc=explode(',',$mn->phong_hoc);
                  //print_r($phong_hoc);
                  foreach ($phong_hoc as $ph) {
                    list($id_phonghoc, $ten_ph_khongdau)=explode(':',$ph);
                  ?>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card border ">
            <div class="card-body">
              <!-- xuất hình bằng font-->
          <?php 
          $i_d=$mn->id_loaiphong;
          $str = htmlentities('<a href="./chitiet.php?id=');
          $str1=htmlentities('"><span><i class="fas fa-7x fa-school"></i></span></a>');
          $str2 = htmlentities('"><span><i class="fas fa-7x fa-desktop"></i></span></a>');
          switch ($i_d) {
            case 1:
                 echo html_entity_decode($str.$id_phonghoc.$str1); 
              break;
              default:
                echo html_entity_decode($str.$id_phonghoc.$str2);
              break;           
           }
          ?>
              <!--end xuất hình bằng font-->
              <br>
              <br>
              <h5 class="text-primary">Phòng <?=$ten_ph_khongdau;?></h5>
              <hr>
                <!-- xuất thông tin phòng-->
                  <?php
                  foreach ($phonghoc as $p_h) {
                    if($id_phonghoc==$p_h->id_phonghoc)
                    {
                  ?>
              <p class="text-justify"><?=$p_h->mo_ta_ngan_ph;?></p>
                <?php
                  }
                }
              ?>
               <!-- end xuất thông tin phòng-->
            </div>
            <div class="card-footer">
              <p class="card-title text-primary font-weight-bold text-justify"><a href="./chitiet.php?id=<?=$id_phonghoc?>">Xem chi tiết</a> | <a href="./chitiet.php?id=<?=$id_phonghoc?>"><i class="fas fa-comment-alt"></i></a><label> 123</label> | <a href="#"><i class="fas fa-phone-square"></i></a></p>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
        <!--kết thúc vòng lặp -->
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
    </div>
    <!--End vòng lặp lớn-->
    <?php
        }
    ?>



