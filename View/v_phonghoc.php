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
          <!--  <a href="page/chitietPM.php"><img class="card-img-top" src="http://placehold.it/700x400" alt="Phòng B002A"></a>-->

            <div class="card-body">
              <?php
              $lp=$mn->id_loaiphong;
              print_r($lp);
              switch ($lp)
              
  {
    case 1 :
         <a href="./chitiet.php?key=<?=$id_phonghoc?>"><span><i class="fas fa-7x fa-school"></i></span></a>
              <br>
        break;
    case 1:
        echo 'Số một';
        break;
    case 2:
        echo 'Số hai';
        break;
    case 3:
        echo 'Số ba';
        break;
    default:
        echo 'Không tìm thấy';
        break;
}
?>
              <h5 class="text-primary">Phòng <?=$ten_ph_khongdau;?></h5>
              <hr>
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
            </div>
            <div class="card-footer">
              <h6 class="card-title text-primary font-weight-bold"><a href="./chitiet.php?key=<?=$id_phonghoc?>">Xem chi tiết</a></h6>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
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
    </div>
        <?php
        }
    ?>



