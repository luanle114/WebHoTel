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
	<a id="NameHotel" class="navbar-brand" href="hotel2.php"><img id="logo" src="../New folder/images/logo.jpg">Apex Resort - Bring you to heaven</a>
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

	<div id="contact" class="container">
	<div class="row">
		<div class="col-md-6 col-lg-5" style="margin-left:20px">
			<div class="text">
			<h2 style="color: blue">Liên hệ</h2>
			<h5>Nếu bạn có bất cứ thắc mắc hay câu hỏi gì, xin hãy liên hệ với chúng tôi.</h5>
				<p>&#9963 Apex Resort, Lô C, Khu đô thị biển An Viên, TP. Nha Trang, tỉnh Khánh Hòa</p>
				<p>&#9743 (+84)3 997 998</p>
				<p>&#9993 cskhapexheaven@gmail.com</p>
			</div>
		</div>
		<div class="col-md-6 col-lg-6" style="margin-left:60px">
			<div class="contact-form">
				<div class="row">
					<div class="col-md-6">
					<select class="form-control frm-contact" name="Gender">
						<option>Lựa chọn</option>
						<option value="Mr">Ông</option>
						<option value="Mrs">Bà</option>
					</select>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control frm-contact" name="name" placeholder="Họ tên">
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control frm-contact" name="email" placeholder="Email">
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control frm-contact" name="sdt" placeholder="Số điện thoại">
					</div>
					<div class="col-md-12">
						<textarea cols="30" rows="10" name="content" class="form-control frm-contact" placeholder="Yêu cầu"></textarea>
					</div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-success">Gửi</button>
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