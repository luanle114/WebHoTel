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
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
	Kết Quả Đặt Phòng | APEX RESORT 
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
				<a class="nav-link" href="gallery2.php">Gallery</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="contact2.php">Contact</a>
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
		<div ><h1 style="text-align: center">Kết Quả Đặt Phòng</h1></div>
			<table align ="center">
					<tr style="text-align: center;">
							<th>Họ và tên người dặt</th>
							<th>Email</th>
							<th>Số điện thoại</th>
							<th>Tên phòng</th>
							<th>Số người ở</th>
							<th>Đặt cọc</th>
							<th>Ngày đặt phòng</th>
							<th>Ngày trả phòng</th>
					</tr>
					<?php					
						$sql = "SELECT tenuser, email, phone, tenphong, songuoi, gia,ngaydatphong, ngaytraphong FROM room";
						$result = $connect->query($sql);
						
						if ($result->num_rows >0)
						{
							while ($row = $result -> fetch_assoc())
							{
								echo"
									<tr style='text-align:center'>
										<td style='height:50px'>{$row['tenuser']}</td>
										<td style='height:50px'>{$row['email']}</td>
										<td style='height:50px'>{$row['phone']}</td>
										<td style='height:50px'>{$row['tenphong']}</td>
										<td style='height:50px'>{$row['songuoi']}</td>
										<td style='height:50px'>{$row['gia']}</td>
										<td style='height:50px'>{$row['ngaydatphong']}</td>
										<td style='height:50px'>{$row['ngaytraphong']}</td>
									</tr>
								";
							}
						}
						else
						{
							echo "";
						}
						$connect->close();
			?>
			</table>
		</div>
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