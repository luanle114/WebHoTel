<!DOCTYPE html>
<html lang="en">
<head>
	<title>
	APEX RESORT !
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet"style="text/css" href="room.css">
</head>

<header>
	<nav id="thanhnav" class="navbar navbar-expand" >
	<a id="NameHotel" class="navbar-brand" href="hotel.php"><img id="logo" src="../New folder/images/logo.jpg">Apex Resort - Bring you to heaven</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
			
			<li class="nav-item">
				<a class="nav-link" href="gallery.php">Gallery</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>


			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>
			
			
		</ul>
	</div>
</nav>
</header>

<body>
<div class="container room-title">
	<div class="row">
	<div class="col-md-7 col-sm-7">
		<div id="myCarousel" class="carousel slide border" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" role="listbox">
					<img class="d-block w-100" src="../New folder/images/2room.jpg" alt="firstslide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../New folder/images/2room1.jpg" alt="secondslide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../New folder/images/2room2.jpg" alt="thirdslide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../New folder/images/2room3.jpg" alt="forthslide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="col-md-5 col-sm-5">
		<div class="room-details-text">
			<h3 class="room-details-title" style="font-family: Bodoni MT"> Biệt thự 3 phòng ngủ </h3>
			<p><b>Kích thước :</b> 220m<sup>2</sup></p>
			<p>Biệt thự có hồ bơi riêng, điều hòa toàn biệt thự, 3 phòng ngủ, phòng khách, phòng bếp, 3 phòng tắm và 4 WC.</p>
			<p>Giá được áp dụng cho 6 người lớn. Biệt thự có thể chứa được tối đa 6 người lớn và 6 trẻ em và không thể chứa giường phụ.</p>
			<a href="booking.php" class="btn btn-success">Đặt phòng</a>
			<br>
			<b id="tiennghi">Tiện nghi:</b>
			<ul>
				<li>Minibar.</li>
				<li>Sân vườn</li>
				<li>Hồ bơi riêng.</li>
				<li>TV & điện thoại từng phòng.</li>
				<li>Truyền hình cáp.</li>
				<li>Mạng Internet.</li>
				<li>Máy điều hòa.</li>
				<li>Bồn tắm & vòi sen.</li>
				<li>Bàn làm việc.</li>
				<li>Két an toàn.</li>
				<li>Bàn ủi, máy sấy.</li>
				<li>Bãi đậu xe</li>
				<li>Nhiều tiện nghi khác.</li>
			</ul>
		</div>	
	</div>
	</div>
</div>
<div id="accomodation">
	<div class="container">
		<div class="row"> 	
			<div class="col-4">
				<div class="card">
					<img id="hinhaccom" src="../New folder/images/1bed.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title" style="font-family">Phòng Deluxe giường đôi</h5>
							
						<a href="phong1bed.php" id="chitietphong" class="btn btn-success" style="margin-top: 70px">Xem chi tiết phòng</a>
					</div>
				</div>
			</div>
		
			<div class="col-4">
				<div class="card">
					<img id="hinhaccom" src="../New folder/images/2bed.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title" style="font-family">Phòng Deluxe 2 giường đơn</h5>
							
						<a href="phong2bed.php" id="chitietphong" class="btn btn-success" style="margin-top: 70px">Xem chi tiết phòng</a>
					</div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card">
					<img id="hinhaccom" src="../New folder/images/2room.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title" style="font-family">Biệt thự 2 phòng ngủ với hồ bơi riêng</h5>
							
						<a href="2room.php" id="chitietphong" class="btn btn-success">Xem chi tiết phòng</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-3">
					<img style="height: 250px" src="../New folder/images/logo.jpg">
				</div>
				
				<div class="col-3">

				</div>
				
				<div class="col-3">
				</div>
				
				<div id="LH" class="col-3">
					<h4>APEX RESORT</h4>
							<br> Khu đô thị biển An Viên, TP.Nha Trang, tỉnh Khánh Hòa
							<br> MST: 123456789 <br>SĐT: (028)3997998
							<br> Website: <a href="#">apexheaven.vn</a>
							<br>Email: apexheaven@gmail.com</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>