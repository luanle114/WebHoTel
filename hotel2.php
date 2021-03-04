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
	<link rel="stylesheet"style="text/css" href="hotel.css">
</head>

<header>
	<nav id="thanhnav" class="navbar navbar-expand" >
	<a id="NameHotel" class="navbar-brand" href="hotel2.php"><img id="logo" src="../New folder/images/logo.jpg">Apex Resort - Bring you to heaven</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
			
			<li class="nav-item">
				<a class="nav-link" href="gallery2.php">Gallery</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="contact2.php">Contact</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>
		</ul>
	</div>
</nav>
</header>

<body>
	<div class="container">
	<div id="myCarousel" class="carousel slide border" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active" role="listbox">
				<img class="d-block w-100" src="../New folder/images/firstslide.jpg" alt="firstslide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../New folder/images/secondslide.jpg" alt="secondslide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../New folder/images/thirdslide.jpg" alt="thirdslide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../New folder/images/forthslide.jpg" alt="forthslide">
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
	
	<div id="introduce" class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
				<h3 id="loimodau">Apex Resort - Bring you to heaven</h3>
				<p 	style="text-align: justify"><img id="introducepic" src="../New folder/images/gioithieu.jpg"> Nằm nép mình trên đảo Hòn Tre đẹp như tranh vẽ, Apex Resort cung cấp chỗ nghỉ sang trọng theo phong cách thời Victoria và có khu vực bãi biển riêng với các tiện nghi thể thao dưới nước. Resort có tầm nhìn tuyệt đẹp ra Vịnh Nha Trang và cách thành phố Nha Trang chỉ 10 phút đi thuyền. Trong toàn bộ khuôn viên rộng lớn của chỗ nghỉ có vô số các hoạt động cho du khách tham gia cả ngày. Du khách có thể vui đùa dưới ánh nắng mặt trời tại các hồ bơi ngoài trời hoặc thậm chí đi đến khu vực bãi biển riêng, nơi có các tiện nghi thể thao dưới nước (thu phí). Ngoài ra, du khách có thể lui tới trung tâm thể dục hoặc tận hưởng liệu pháp mát-xa trị liệu tại trung tâm spa.</p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12"><img id="hinhGT" src="../New folder/images/pool.jpg"></div>
		</div>	
	</div>
	
<div id="accomodation">
	<div class="container">
		<div class="row"> 		
			<div class="col-6">
				<div class="card">
					<img id="hinhaccom" src="../New folder/images/1bed.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title" style="font-family">Phòng Deluxe giường đôi</h5>
							<ul>
								<li><b>Kích thước</b>: 42m<sup>2</sup></li>
								<li><b>Giường</b>: Một giường cỡ siêu lớn</li>
								<li><b>Phù hợp</b>: Phòng phù hợp cho cặp đôi</li>
								<li><b>Giá</b>:	3.000.000-3.500.000<sup>đ</sup></li>
							</ul>
						<a href="../New folder/phong1bed2.php" id="chitietphong" class="btn btn-success">Xem chi tiết</a>
					</div>
				</div>
			</div>
			
			<div class="col-6">
				<div class="card">
					<img id="hinhaccom" src="../New folder/images/2bed.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title" style="font-family">Phòng Deluxe 2 giường đơn</h5>
							<ul>
								<li><b>Kích thước</b>: 42m<sup>2</sup></li>
								<li><b>Giường</b>: 2 giường lớn</li>
								<li><b>Phù hợp</b>: Phòng phù hợp cho cặp đôi, nhóm bạn</li>
								<li><b>Giá</b>:	3.000.000-3.500.000<sup>đ</sup></li>
							</ul>
						<a href="../New folder/phong2bed2.php" id="chitietphong" class="btn btn-success">Xem chi tiết</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<div id="accomodation2">
	<div class="container">
		<div class="row"> 	
			<div class="col-6">
				<div class="card">
					<img id="hinhaccom" src="../New folder/images/2room.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title" style="font-family">Biệt thự 2 phòng ngủ với hồ bơi riêng</h5>
							<ul style="margin-left: 5px">
								<li><b>Kích thước</b>: 190m<sup>2</sup></li>
								<li><b>Giường</b>: Một phòng 1 giường siêu lớn, một phòng 2 giường đơn lớn</li>
								<li><b>Phù hợp</b>: dành cho gia đình, nhóm bạn</li>
								<li><b>Giá</b>:	5.500.000-6.000.000<sup>đ</sup></li>
							</ul>
						<a href="2room2.php" id="chitietphong" class="btn btn-success">Xem chi tiết</a>
					</div>
				</div>
			</div>
			
			<div class="col-6">
				<div class="card">
					<img id="hinhaccom" src="../New folder/images/3room.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title" style="font-family">Biệt thự 3 phòng ngủ với hồ bơi riêng</h5>
							<ul style="margin-left: 5px">
								<li><b>Kích thước</b>: 220m<sup>2</sup></li>
								<li><b>Giường</b>: Hai phòng 1 giường siêu lớn, một phòng 2 giường đơn lớn</li>
								<li><b>Phù hợp</b>: Dành cho gia đình, nhóm bạn đông</li>
								<li><b>Giá</b>:	8.000.000<sup>đ</sup></li>
							</ul>
						<a href="3room2.php" id="chitietphong" class="btn btn-success">Xem chi tiết</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<div id="vitri" class="container">
	<div class="row">
		<div class="col-8">
			<img id="vitripic" src="../New folder/images/map.png">
		</div>
		
		<div class="col-4">
			<h3 style="font-family">Vị trí</h3>
			<hr  width="30%" size="100px" align="center" /> 
			<p text-align="justify"><i class="fas fa-hotel"></i>Khu đô thị biển An Viên, TP.Nha Trang, tỉnh Khánh Hòa</p>
		</div>
	</div>
</div>

<div id="dichvu" class="container">
	<h2 style="font-family">Dịch vụ</h2>
	<div class="row">
		<div class="col-md-6 mg-top-15">
			<div id="nhahang" class="carousel slide border" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
				<div class="carousel-item active" role="listbox">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/nhahang.jpg" alt="firstslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/nhahang1.jpg" alt="secondslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/nhahang2.jpg" alt="thirdslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/nhahang3.jpg" alt="forthslide">
				</div>
				</div>
				<a class="carousel-control-prev" href="#nhahang" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#nhahang" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div id="nhahanglink">
				<a title="NhaHang" href="#" style="text-decoration: none">	
					<h3 style="color:white">Nhà hàng</h3>
				</a>
			</div>
		</div>
		<div class="col-md-6 mg-top-15">
			<div id="gym" class="carousel slide border" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
				<div class="carousel-item active" role="listbox">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/gym.jpg" alt="firstslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/gym1.jpg" alt="secondslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/gym2.jpg" alt="thirdslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/gym3.jpg" alt="forthslide">
				</div>
				</div>
				<a class="carousel-control-prev" href="#gym" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#gym" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div id="nhahanglink">
				<a title="Gym" href="#" style="text-decoration: none">	
					<h3 style="color:white">Gym</h3>
				</a>
			</div>
		</div>
		<div class="col-md-6 mg-top-15">
			<div id="pool" class="carousel slide border" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
				<div class="carousel-item active" role="listbox">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/pool.jpg" alt="firstslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/pool2.jpg" alt="secondslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/pool1.jpg" alt="thirdslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/pool3.jpg" alt="forthslide">
				</div>
				</div>
				<a class="carousel-control-prev" href="#pool" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#pool" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div id="nhahanglink">
				<a title="nhahang" href="#" style="text-decoration: none">	
					<h3 style="color:white">Hồ bơi</h3>
				</a>
			</div>
		</div>
		<div class="col-md-6 mg-top-15">
			<div id="spa" class="carousel slide border" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
				<div class="carousel-item active" role="listbox">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/spa.jpg" alt="firstslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/spa1.jpg" alt="secondslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/spa2.jpg" alt="thirdslide">
				</div>
				<div class="carousel-item">
					<img id="nhahangpic" class="d-block w-100" src="../New folder/images/spa3.jpg" alt="forthslide">
				</div>
				</div>
				<a class="carousel-control-prev" href="#spa" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#spa" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div id="nhahanglink">
				<a title="nhahang" href="#" style="text-decoration: none">	
					<h3 style="color:white">Spa</h3>
				</a>
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