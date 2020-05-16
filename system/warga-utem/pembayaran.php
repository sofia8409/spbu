<?php
session_start();
error_reporting(0);
include('include/config.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Warga UTeM | Pembayaran</title>
	
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
									<h1 class="mainTitle">Warga UTeM | Pembayaran</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Warga UTeM</span>
									</li>
									<li class="active">
										<span>Pembayaran</span>
									</li>
								</ol>
							</div>
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
													<h3 class="panel-title">Maklumat Pembayaran</h3>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	
													<form name="permohonan" method="post" action="">
			
																
        <form name="add" method="post" action="">
        

         <div class="form-group">
                <th width="267" bgcolor="#CCCCCC" scope="col"><div align="left">
                 <h5> Nama Akaun : Bendahari Universiti Teknikal Malaysia Melaka</h5>
				 <h5> No. Akaun     : 04042010000833</h5>
				 <h5> Bank       : Bank Islam Malaysia Berhad</h5>
				  <h5>Swift Code : BIMBMYKL</h5>
				  
                </div></th></br></br></br>
				
				<div class="form-group">
                <th width="267" bgcolor="#CCCCCC" scope="col"><div align="left">
                 <h5> **Sila muat naik resit pembayaran yang telah dibuat merujuk maklumat diatas.</h5></br>
				
				  
                </div></th>
			
			<div class="form-group">
			
					<div class="form-group">
					<label for="app_id">
					ID Permohonan
					</label>
					<input name="application_id" class="form-control" id="id-pengguna" value="104" readonly/>
					</div>
					<label for="namapemohon">
					Nama Pemohon
					</label>
					<input name="nama" class="form-control" id="nama" value="Siti Sofia Binti Shukor"  readonly/>
					</div>
					<div class="form-group">
					<label for="alamat">
					No.Kad Pengenalan
					</label>
					<input type="text" name="ic" class="form-control" id="ic" value="960915145442" readonly/>
					</div>
					
					<div class="form-group">
					<label for="no.hp">
					Negeri
					</label>
					<input name="negeri" class="form-control" id="negeri" value="K.LUMPUR" readonly/>
					</div>
					
					<div class="form-group">
					<label for="email">
					Jumlah Bayaran
					</label>
					<input name="email" class="form-control" id="no.hp" value="RM 2508.35"  readonly/>
					</div>
					
					<div class="form-group">
					<label for="email">
					Resit Pembayaran
					</label>
					<input type="file" name="fileupload"  id="fileupload" required="required">
					</div>
					
					<div class="form-group">
					<label for="jawatan">
				    Status
					</label>
					<input name="jawatan" class="form-control" id="jawatan"  value="BELUM DIBAYAR" readonly/>
					</div>
					
					<button type="submit" name="apply" class="btn btn-o btn-primary">
															Hantar
														</button>
		
              </tr></form></br></br>
			  
			  
			  <div class="form-group">
                <th width="267" bgcolor="#CCCCCC" scope="col"><div align="left">
                 <h5> <strong>**Sebarang pertanyaan dan urusan sila hubungi Encik Azrai Bin Abdul Aziz di talian (06-3316217/012-9732124)</strong></h5></br>
				
				  
                </div></th>
			
              
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
	</body>
</html>
