<?php
session_start();
//error_reporting(0);
include('include/config.php');
$id=$_GET['id'];
		$query=mysqli_query($con,"select * 
								from user u, application a, state s
								where u.user_id=a.user_id
								and a.state_id=s.state_id
								and application_id='".$id."'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Borang Pengesahan Permohonan</title>
	
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
									<h1 class="mainTitle">Admin | Borang  Pengesahan Permohonan</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Borang Pengesahan Permohonan</span>
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
													<h5 class="panel-title">Borang Pengesahan Permohonan</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	
													<form name="permohonan" method="post" action="">


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
					<input name="no.hp" class="form-control" id="no.hp" value="0<?php echo $row['tel_no']; ?>" readonly/>
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
					<input name="jawatan" class="form-control" id="jawatan"  value="<?php echo $row['jawatan']; ?>"  readonly/>
					</div>
					
					<div class="form-group">
					<label for="jabatan">
					Jabatan
					</label>
					<input name="jabatan" class="form-control" id="jabatan" value="<?php echo $row['jabatan']; ?>"  readonly/>
					</div>
					
					<div class="form-group">
					<label for="negeri">
					Negeri
					</label>
					<input type="text" class="form-control" name="negeri" id="negeri" value="<?php echo $row['state_name']; ?>" readonly/>
					</div>
					
					
					<div class="form-group">
					<label for="bil.penumpang">
					Bil. Penumpang
					</label>
					 <input type="text" name="bilanganpeserta" class="form-control" id="BIL.PESERTA" placeholder="bilangan peserta"  value="<?php echo $row['total_participan']; ?> " readonly/>
					
					</div>
					
					
					<div class="form-group">
					<label for="tarikh-pergi">
					Waktu Pergi
					</label>
					<input name="tarikh-pergi" class="form-control" type="text" value="<?php echo $row['start_date']; ?>, <?php echo $row['start_time']; ?>" readonly/>
					 <label for="select2"></label>
					</div>
					
					<div class="form-group">
					<label for="tarikh-balik">
					Waktu Balik
					</label>
					
					<input name="tarikh-balik" class="form-control" id="tarikh-balik" value="<?php echo $row['end_date']; ?>, <?php echo $row['end_time']; ?>" readonly/>
					<label for="textfield2"></label>
					</div>
					
					
					<div class="form-group">
					<label for="tujuan">
					Tujuan
					</label></br>
				     <input name="tujuan" class="form-control" id="tujuan" value="<?php echo $row['purpose']; ?>"  readonly/>
					</div>
					
					
					<div class="form-group">
					<label for="bil.pemandu">
					Bil.Pemandu
					</label></br>
					<input name="bil.pemandu" id="bil.pemandu" class="form-control"
				 <?php
				$state = $row['state_name'];
				if ($state=='K.LUMPUR'||$state=='JOHOR'||$state=='N.SEMBILAN'||$state=='MELAKA'||$state=='SELANGOR')
				{
			?>
             value="1" readonly="readonly"/>
            <?php
			}
			else
			{
			?>
			value="2" readonly="readonly"/>
            <?php
			}
			?> 
					</div>
					
					<div class="form-group">
					<label for="nama pemandu">
					Nama Pemandu
					</label>
					 <?php
		  	$state = $row['state_name'];
			$driver = mysqli_query($con,"select * 
											from driver 
											where id=(select(min(id)) 
															from driver 
															where status='MASIH KOSONG')");
			$row=mysqli_fetch_array($driver);
			
			$driver2 = mysqli_query($con,"select * 
											from driver 
											where id=(select(max(id)) 
															from driver 
															where status='MASIH KOSONG')");
			$row2=mysqli_fetch_array($driver2);
			
			if ($state=='K.LUMPUR'||$state=='JOHOR'||$state=='N.SEMBILAN'||$state=='MELAKA'||$state=='SELANGOR')
			{
		  ?>
           		<input type="text" name="pn1" id="pn1" class="form-control" value="<?php echo $row['Nama']; ?>" readonly="readonly"/>
                <input type="text" name="pid1"  value="<?php echo $row['id']; ?>" hidden=""/>
           <?php
			}
			else 
			{
			?>
             <input type="text" name="pn2" class="form-control"  value="<?php echo $row['Nama']; ?>" readonly="readonly"/>
             <input type="text" name="pn3" class="form-control" value="<?php echo $row2['Nama']; ?>" readonly="readonly"/>
             <input type="text" name="pid2" value="<?php echo $row['id']; ?>" hidden=""/>
             <input type="text" name="pid3"  value="<?php echo $row2['id']; ?>" hidden=""/>
            </td>
            <?php
			}
			?>
			</div>
			
			<div class="form-group">
					<label for="platbas">
					No.Plat Bas
					</label>
					<input name="platbas" class="form-control" id="platbas" <?php
				$bus=mysqli_query ($con, "select * 
											from bus 
											where bus_flat=(select(max(bus_flat)) 
															from bus 
															where status='MASIH KOSONG')");
				$row3=mysqli_fetch_array($bus);
				
			?>
          value="<?php echo $row3['bus_flat']; ?>" readonly="readonly"/>
					</div>
					
					
					
														<button type="submit" name="apply" class="btn btn-o btn-primary">
															Terima
														</button>
													</form>
												<?php
		if(isset ($_POST['apply']))
		{
			$state=$_POST['negeri'];
			$jpemandu=$_POST['bil.pemandu'];
			$app_id=$_POST['app_id'];
			$bplat=$_POST['platbas'];		
			
			
			if ($jpemandu==1)
			{
				$pid1=$_POST['pid1'];
				$insert1 = mysqli_query ($con, "insert into driver_app(driver_id, bus_flat, application_id) VALUES ('$pid1','$bplat','$app_id')");
				if ($insert1==TRUE )
				{
					$sah2 = mysqli_query ($con, "update driver set status='TIDAK KOSONG' where driver_id='$pid1'");
					$sah3 = mysqli_query ($con, "update bus set status='TIDAK KOSONG' where bus_flat='$bplat'");
					$sah = mysqli_query ($con, "update application set status='DITERIMA' where application_id='$app_id'");
					$update1 = mysqli_query ($con, "update application set total_driver='$jpemandu', bus_flat='$bplat' where application_id='$app_id'");
					if($insert1==TRUE && $sah==TRUE && $update1 && $sah2==TRUE && $sah3==TRUE)
					{
						echo "<script type='text/javascript'>alert('Permohonan Diterima')</script>";
						echo "<meta http-equiv='refresh' content='0;URL=senarai-tempahan.php'";
					}
					else
					{
						echo "<script type='text/javascript'>alert('Permohonan Gagal')</script>";
						echo "<meta http-equiv='refresh' content='0;URL=senarai-tempahan.php'";
					}
				}
				else
				{
					echo "<script type='text/javascript'>alert('Permohonan Gagal')</script>";
					echo "<meta http-equiv='refresh' content='0;URL=senarai-tempahan.php'";
				}
			}
			else if ($jpemandu==2)
			{
				$pid2=$_POST['pid2'];
				$pid3=$_POST['pid3'];
				$insert2 = mysqli_query ($con, "insert into driver_app (driver_id, bus_flat, application_id) VALUES ('$pid2','$bplat','$app_id')");
				$insert3 = mysqli_query ($con, "insert into driver_app (driver_id, bus_flat, application_id) VALUES ('$pid3','$bplat','$app_id')");
				
				if ($insert2==TRUE && $insert3==TRUE)
				{	
					$sah2 = mysqli_query ($con, "update driver set status='TIDAK KOSONG' where driver_id='$pid2'");
					$sah3 = mysqli_query ($con, "update driver set status='TIDAK KOSONG' where driver_id='$pid3'");
					$sah4 = mysqli_query ($con, "update bus set status='TIDAK KOSONG' where bus_flat='$bplat'");
					$sah = mysqli_query ($con, "update application set status='DITERIMA' where application_id='$app_id'");
					$update1 = mysqli_query ($con, "update application set total_driver='$jpemandu', bus_flat='$bplat' where application_id='$app_id'");
					if($sah==TRUE && $update1==TRUE  && $sah2==TRUE && $sah3==TRUE && $sah4==TRUE)
					{
						echo "<script type='text/javascript'>alert('Permohonan Diterima')</script>";
						echo "<meta http-equiv='refresh' content='0;URL=senarai-tempahan.php'";
					}
					else
					{
						echo "<script type='text/javascript'>alert('Permohonan Gagal')</script>";
						echo "<meta http-equiv='refresh' content='0;URL=senarai-tempahan.php'";
					}
				}
				else
				{
					echo "<script type='text/javascript'>alert('Pengesahan Gagal. ')</script>";
					echo "<meta http-equiv='refresh' content='0;URL=senarai-tempahan.php'";
				}
			}
		}
    ?>						</div>
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


		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
