<?php
session_start();
//error_reporting(0);
include('include/config.php');


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Borang Permohonan Warga UTeM</title>
	
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
			
						<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Borang Permohonan Warga UTeM</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Borang Permohonan Warga UTeM</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Borang Permohonan Warga UTeM</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	
								
								
								
													<form name="permohonan" method="post" action="">
  <p>
													 <?php
session_start();
	include 'config.php';
	$id=$_SESSION['user_id'];
		$query=mysqli_query($con,"select * from user where user_id='".$id."'");
	$row=mysqli_fetch_array($query);
	
	if(isset($_POST['mohon']))
	{
		$state= $_POST['negeriID'];
		$mohon = mysqli_query ($con,"select * from bus_rate natural join state where state_id='$state';");
		$row2=mysqli_fetch_array($mohon);
		if ($mohon==TRUE)
		{
			$state_id=$row2['state_id'];
	//echo $row['user_id'];
	
?></p>
														

					<div class="form-group">
					<label for="namapemohon">
					Nama Pemohon
					</label>
					<input name="nama" class="form-control" id="nama" value="<?php echo $row['user_name']; ?>"  readonly>
					</div>
					
					
					<div class="form-group">
					<label for="id-pengguna">
					ID Pengguna
					</label>
					<input name="user_id" class="form-control" id="id-pengguna" value="<?php echo $_SESSION['user_id']; ?>" readonly/>
					</div>
					
					
					<div class="form-group">
					<label for="alamat">
					Alamat
					</label>
					<input type="textarea" name="alamat" class="form-control" id="alamat" value="<?php echo $row['address']; ?>" readonly/>
					</div>
					
					
					<div class="form-group">
					<label for="no.hp">
					No. Telefon
					</label>
					<input name="no.hp" class="form-control" id="no.hp" value="<?php echo $row['tel_no']; ?>" readonly/>
					</div>
					
					<div class="form-group">
					<label for="email">
					E-mel
					</label>
					<input name="email" class="form-control" id="no.hp" value="<?php echo $row['email']; ?>"  readonly/>
					</div>
					
					<div class="form-group">
					<label for="jawatan">
				     Jawatan
					</label>
					<input name="jawatan" class="form-control" id="jawatan"  required="required">
					</div>
					
					<div class="form-group">
					<label for="jabatan">
					Jabatan
					</label>
					<input name="jabatan" class="form-control" id="jabatan" required="required" >
					</div>
					
					<div class="form-group">
					<label for="negeri">
					Negeri
					</label>
					<input type="text" name="negeri" id="negeri" value="<?php echo $row2['state_name']; ?>" readonly/>
					<input type="text" name="negeriID" id="negeriID" value="<?php echo $state_id; ?>" hidden/>
					</div>
					
					
					<div class="form-group">
					<label for="fileupload"> Sila Muat Naik Lokasi Destinasi(Alamat Destinasi)</label>
					<input type="file" name="fileupload" value="fileupload" id="fileupload" required="required">
					</div>
					
					
					
					<div class="form-group">
					<label for="bil.penumpang">
					Bil. Penumpang
					</label>
					<input type="number" name="bilanganpeserta" id="BIL.PESERTA"  min="20" max="44" required="required"> *min=20 orang, *max=44 orang
					</div>
					
					<div class="form-group">
					<label for="tarikh-pergi">
					Tarikh Pergi
					</label>
					<input class="form-control datepicker" name="tarikhpergi"  required="required" data-date-format="yyyy-mm-dd">
					</div>
					
					<div class="form-group">
					<label for="masa-pergi">Masa Pergi </label>
					<input class="form-control" name="masa-pergi" id="timepicker1" required="required">eg : 10:00 AM
					</div>
					
					<div class="form-group">
					<label for="tarikh-balik">
					Tarikh Balik
					</label>
					<input class="form-control datepicker1" name="tarikhbalik"  required="required" data-date-format="yyyy-mm-dd">
					</div>
					
					<div class="form-group">
					<label for="masa-balik">Masa Balik </label>
					<input class="form-control" name="masa-balik" id="timepicker2" required="required">eg : 10:00 PM
					</div>
					
					<div class="form-group">
					<label for="tujuan">
					Tujuan
					</label></br>
					<textarea name="tujuan" id="textarea" cols="45" rows="3"></textarea>
					</div>
					
														<button type="submit" name="apply" class="btn btn-o btn-primary">
															Mohon
														</button>
													</form>
													
													

												<?php
		}
	}
	if(isset ($_POST['apply']))
		{
			$id=$_POST['user_id'];
			$jawatan=$_POST['jawatan'];
			$jabatan=$_POST['jabatan'];
			$state=$_POST['negeri'];
			$state_id=$_POST['negeriID'];
			$location=$_FILES['fileupload']['location'];
			$bil_peserta=$_POST['bilanganpeserta'];
			$tarikhpergi=$_POST['tarikhpergi'];
			$masapergi=$_POST['masa-pergi'];
			$tarikhbalik=$_POST['tarikhbalik'];
			$masabalik=$_POST['masa-balik'];	
			$tujuan=$_POST['tujuan'];
		   
		    move_uploaded_file($temp,"uploads/".$location);
			
			
			$booking = mysqli_query ($con, "insert into application (user_id, state_id, start_date, start_time, end_date, end_time, total_participan, purpose, status,location, jawatan, jabatan) values 
																	('".$id."', '".$state_id."','".$tarikhpergi."','".$masapergi."','".$tarikhbalik."', '".$masabalik."' ,'".$bil_peserta."', '".$tujuan."', 'MENUNGGU PENGESAHAN', '".$location."' ,'".$jawatan."' ,'".$jabatan."')");
			if ($booking==TRUE)
			{
				echo "<script type='text/javascript'>alert('Berjaya untuk Menempah')</script>";
				echo "<meta http-equiv='refresh' content='0;URL=senarai-tempahanWU.php'";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Gagal untuk Menempah. ')</script>";
				//echo "<meta http-equiv='refresh' content='0;URL=Pendaftaran.php'";
			}
		}
    ?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									
									</div>
								</div>
							
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
$('.datepicker1').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
			 $('#timepicker2').timepicker();
        </script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
