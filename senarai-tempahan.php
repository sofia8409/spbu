<?php
session_start();
error_reporting(0);
include('include/config.php');
$query=mysqli_query($con,"select * from application a, user u, state s
									where u.user_id=a.user_id
									and s.state_id=a.state_id ORDER BY application_id DESC");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Senarai Permohonan</title>
		
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
									<h1 class="mainTitle">Admin | Senarai Permohonan</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Senarai Permohonan</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						
						
						
						
						<div class="container-fluid container-fullw bg-white">
						

								<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15"><span class="text-bold">Senarai Permohonan</span></h5>
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												  <td width="219" bgcolor="#3EEB26"><strong>ID</strong></td>
												  <td width="219" bgcolor="#3EEB26"><strong>Nama</strong></td>
												  <td width="219" bgcolor="#3EEB26"><strong>Jawatan</strong></td>
												  <td width="219" bgcolor="#3EEB26"><strong>Jabatan</strong></td>
												  <td width="217" bgcolor="#3EEB26"><strong>Negeri Dituju</strong></td>
												  <td width="219" bgcolor="#3EEB26"><strong>Lokasi</strong></td>
												  <td width="219" bgcolor="#3EEB26"><strong>Bilangan Peserta</strong></td>
												  <td width="500" bgcolor="#3EEB26"><strong>Pergi</strong></td>
												  <td width="500" bgcolor="#3EEB26"><strong>Balik</strong></td>
												  <td width="217" bgcolor="#3EEB26"><strong>Tujuan</strong></td>
												  <td width="217" bgcolor="#3EEB26"><strong>Pemandu</strong></td>
												  <td width="217" bgcolor="#3EEB26"><strong>No. Plat Bas</strong></td>
												  <td width="217" bgcolor="#3EEB26"><strong>Status Permohonan</strong></td>
												  <td width="217" bgcolor="#3EEB26"><strong>Status Pembayaran</strong></td>
												  <td width="700" bgcolor="#3EEB26"><strong>Remark</strong></td>
												 <td width="700" bgcolor="#3EEB26" class="center"><strong>Pilih</strong></td>

											</tr>
	   
										</thead>

 <?php
			while ($row=mysqli_fetch_array($query))
			{
		?>

											<tr>
          <td><?php echo $row['application_id']; ?></td>
          <td><?php echo $row['user_name']; ?></td>
		  <td><?php echo $row['jawatan']; ?></td>
		  <td><?php echo $row['jabatan']; ?></td>
          <td><?php echo $row['state_name']; ?></td>
		  <td><?php echo $row['location']; ?></td>
		  <td><?php echo $row['total_participan']; ?></td>
          <td><?php echo $row['start_date']; ?> <?php echo $row['start_time']; ?></td>
          <td><?php echo $row['end_date']; ?> <?php echo $row['end_time']; ?></td>
		  <td><?php echo $row['purpose']; ?></td>
          <td><?php echo $row['Nama']; ?></td>
          <td><?php echo $row['bus_flat']; ?></td>
          <td><?php if ($row['status']=='MENUNGGU PENGESAHAN')
		  														{ 
														?><font color="#FFFF00">
														<?php echo $row['status'];?>
														</font>
                                                        <?php }else if ($row['status']=='DITOLAK')
		  														{ 
														?><font color="#FF0000">
                                                        <?php echo $row['status'];?>
														</font>
														
														<?php }else if ($row['status']=='DITERIMA')
		  														{ 
														?><font color="#0000FF">
                                                        <?php echo $row['status'];?>
														</font>
                                                        <?php }else
		  														{ 
														?><font color="#00FF00">
														<?php echo $row['status'];}?>
								
		<td><?php if ($row['payment_status']=='BELUM DIBAYAR')
		  														{ 
														?><font color="#FF0000">
														<?php echo $row['payment_status'];?>
														</font>
                                                        
                                                        <?php }else
		  														{ 
														?><font color="#00FF00">
														<?php echo $row['payment_status'];}?>
														
		 <td><?php echo $row['remark']; ?></td>											
          <td bgcolor="#FFFFFF"><center><a href="borang-pengesahan.php?id=<?php echo $row['application_id']; ?>"><input type="button" name="diterima" id="apply" value="Diterima" class="btn btn-o btn-primary" /></a> 
		  <a href="batal.php?id=<?php echo $row['application_id']; ?>"><input type="button" name="batal" id="apply" value="ditolak" class="btn btn-o btn-primary"/></a> <a href="printbooking.php?id=<?php echo $row['application_id']; ?>"><input type="button" name="resit" id="apply" value="diluluskan" class="btn btn-o btn-primary" /></a></td>
   	        </tr>
        </tr>
											 
   
   
   	       
										
											
											<?php 
											 }?>
											
											
										</tbody>
									</table>
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
	</body>
</html>
