<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		<br>Menu
	</button>
			
		<div class="collapse navbar-collapse text-left"  id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto text-center">
			<li class="nav-item active">
				<a class="nav-link" href="index.php"><i class="fas fa-1x fa-home"></i> 
					<span class="sr-only">(current)</span><br>Home</a>
			</li>
			<li class="nav-item dropdown text-center">
				<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-1x fa-desktop"></i><br>P.Máy tính
					
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php
					foreach($phonghoc as $phong)
					{
						?>
						<a class="dropdown-item" href="page/chitietPM.php?key=<?php echo $phong->id_phonghoc;?>">
							<?php echo $phong->ten_phonghoc;?> </a>

							<?php
						}
						?>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-1x fa-phone"></i><br>Liên hệ</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
