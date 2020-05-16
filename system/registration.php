<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['user_name'];
$ic=$_POST['ic_no'];
$email=$_POST['email'];
$hp=$_POST['no_tel'];
$address=$_POST['address'];
$password=($_POST['password']);

$query=mysqli_query($con,"insert into user(user_name, ic_no, email, no_tel, address, password, role_id) values('".$name."','".$ic."','".$email."','".$hp."','".$address."','".$password."', 'pl')");
if($query)
{
	echo "<script>alert('Berjaya Mendaftar. Anda boleh Log Masuk sekarang');</script>";
	//header('location:user-login.php');
}
else
{
	echo "<script type='text/javascript'>alert('Gagal Mendaftar!!');</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Pendaftaran</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Kata Laluan dan Pengesahan Kata Laluan tidak sama  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2>SPBU | Pendaftaran</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>
								Daftar
							</legend>
							<p>
								Masukkan butiran peribadi anda di bawah:
							</p>
							<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="user_name" placeholder="Nama Penuh" required>
								<i class="fa fa-user"></i> </span>
							</div>
							
							<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="ic_no" placeholder="No.Kad Pengenalan" required>
								<i class="fa fa-id-card-o"></i> </span>
							</div>
							
							
							
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control"  id="email" onBlur="userAvailability()" name="email" placeholder="E-mel" required>
									<i class="fa fa-envelope"></i> </span>
									<span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
				<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control"  id="no_tel" name="no_tel" placeholder="No.Telefon" required>
									<i class="fa fa-mobile"></i> </span>
									
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control"  id="address" name="address" placeholder="Alamat" required>
									<i class="fa fa-map-marker"></i> </span>
							</div>
							
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" name="password" id="password" placeholder="Kata Laluan" required>
									<i class="fa fa-lock"></i> </span>
									
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password_again" name="password_again" placeholder="Pengesahan Kata Laluan" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										saya setuju
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									Sudah mempunyai akaun?
									<a href="index.php">Log Masuk</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Hantar <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> SPBU</span>. <span>Hak cipta terpelihara</span>
					</div>

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>