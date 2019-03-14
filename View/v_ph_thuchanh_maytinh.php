<!-- Nav tabs -->
<div class="container-fluid">
  <ul class="nav nav-tabs ">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Phòng thực hành máy tính</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container-fluid tab-pane active"><br>
        <div class="row">
      <!--vòng lặp foreach-->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card border border-primary">
          <!--  <a href="page/chitietPM.php"><img class="card-img-top" src="http://placehold.it/700x400" alt="Phòng B002A"></a>-->
          <div class="card-header bg-primary">
            <h4 class="text-white">Phòng B002A</h4>
            </div>
            <div class="card-body">
              <p class="text-justify">phòng học đồ hoạ</p>
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
    

    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    </div>
</div>


