<?php
// Khai báo username
$username = "root";
$password = "";
$server   = "localhost";   // Khai báo server
$dbname   = "hotel";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username,$password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$tenuser = "";
$email = "";
$phone = "";
$tenphong = "";
$songuoi = "";
$gia = "";
$ngaydatphong = "";
$ngaytraphong = "";


//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["tenuser"])) { $tenuser = $_POST['tenuser']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["phone"])) { $phone = $_POST['phone']; }
    if(isset($_POST["tenphong"])) { $tenphong = $_POST['tenphong']; }
	if(isset($_POST["songuoi"])) { $songuoi = $_POST['songuoi']; }
	if(isset($_POST["gia"])) { $gia = $_POST['gia']; }
	if(isset($_POST["ngaydatphong"])) { $ngaydatphong = $_POST['ngaydatphong']; }
	if(isset($_POST["ngaytraphong"])) { $ngaytraphong = $_POST['ngaytraphong']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO room(tenuser, email, phone, tenphong, songuoi, gia, ngaydatphong, ngaytraphong)
    VALUES ('$tenuser', '$email', '$phone', '$tenphong', '$gia', '$songuoi', '$ngaydatphong', '$ngaytraphong')";

    if ($connect->query($sql) === TRUE) {
        echo "Đăng kí phòng thành công";
        header("Location: result.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database
$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
	Đặt Phòng | APEX RESORT 
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet"style="text/css" href="hotel.css">
	<style>
		table,th{
			border: 3px solid black;
			background: #ffcc66
			
		}
		table{
			border-collapse: collapse;
			width: 50%
		}
		th{
			text-align: left;
		}
		button { display: block; margin: 0 auto; }

	</style>
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
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
		</ul>
	</div>
</nav>
</header>

<body>
<div id="hinhnen">
	<section class="register">
		<div class="tieuderegister"><h1 style="text-align: center">Đặt Phòng</h1></div>
			<table align ="center">
				<form action="" method="post" >
					<th>
							<h4>Họ và tên:</h4><input type="text" name="tenuser" value="" required title="Username required" placeholder="Ho va ten" data-icon="U" style="margin: 20px">
							<div class="dangkivaquenpass">
								<div class="col"><a style="color:red"></a></div>
							</div>
						
							<h4>Email:</h4><input type="email" name="email" value="" required title="Email required" placeholder="Email" data-icon="x" style="margin: 20px">
							<div class="dangkivaquenpass">
								<div class="col"><a style="color:red"></a></div>
							</div>
						
							<h4>Số điện thoại:</h4><input type="tel" name="phone" value=""  required title="Phone number required" placeholder="Phone Number" data-icon="x" style="margin: 20px">
							<div class="dangkivaquenpass">
								<div class="col"><a style="color:red"></a></div>
							</div>
						
							<h4>Phòng:</h4>
							<div>
								<select name="tenphong" required title="none" placeholder="none">
									<option value="0">None</option>
									<option value="Phong Deluxe giuong don">Phong Deluxe giuong don</option>
									<option value="Phong Deluxe 2 giuong don">Phong Deluxe 2 giuong don</option>
									<option value="BBiet thu 2 phong ngu voi ho boi rieng">BBiet thu 2 phong ngu voi ho boi rieng</option>
									<option value="BBiet thu 2 phong ngu voi ho boi rieng">BBiet thu 3 phong ngu voi ho boi rieng</option>
								</select>
							</div>
						
					</th>

					<th>
							<h4 style="margin-top: 40px ">Ngày đặt:</h4>
							<input type="date" name="ngaydatphong" value ="" required title="dd/mm/yy" placeholder="date" style="margin: 20px">
							<div>
								<div class="col"><a style="color:red"></a></div>
							</div>
						
						
							<h4>Ngày trả:</h4>
							<input type="date" name="ngaytraphong" value ="" required title="dd/mm/yy" placeholder="date" style="margin: 20px">
							<div>
								<div class="col"><a style="color:red"></a></div>
							</div>
						
						
							<h4>Đặt cọc:</h4>
							<input type="text" name="gia" value="" required title="Price required" placeholder="Đặt cọc" data-icon="U" style="margin: 20px">
							<div class="dangkivaquenpass">
								<div class="col"><a style="color:red"></a></div>
							</div> 
						

							<h4>Số người:</h4>
							<input type="number" name="songuoi" value="" required title="No.people required" placeholder="No.people" data-icon="U" style="margin: 20px" min="1" max="100">
							<div class="dangkivaquenpass">
								<div class="col"><a style="color:red"></a></div>
							</div>
							
					</th>	
			</table>
			<button type="submit" class="enviar" ><a href="result.php">Đăng kí</a></button>
		</form>
	</section>
</div>
</body>

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
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>