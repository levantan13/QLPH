<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top menutop">
		<div class="collapse navbar-collapse text-left" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Phòng máy
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
					<a class="nav-link" href="#">Liên hệ</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
