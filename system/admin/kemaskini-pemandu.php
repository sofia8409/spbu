<?php
session_start();
error_reporting(0);
include('include/config.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Senarai Pemandu Bas UTeM</title>
	
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
									<h1 class="mainTitle">Admin | Kemaskini Senarai Pemandu Bas UTeM</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Kemaskini Senarai Pemandu Bas UTeM</span>
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
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Senarai Pemandu Bas UTeM</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
													<form role="form" name="dcotorspcl" method="post" >
														<div class="form-group">
															<label for="exampleInputEmail1">
																Tambah Pemandu Bas Baru
															</label>
							<input type="text" name="id" class="form-control"  placeholder="Masukkan ID Pemandu" required/></br>								
							<input type="text" name="nama" class="form-control"  placeholder="Masukkan Nama Pemandu" required/></br>
							<input type="text" name="hp" class="form-control"  placeholder="Masukkan No.Telefon" required/></br>
							<button type="submit" name="simpan" class="btn btn-o btn-primary">
															Tambah
														</button>
														</div>
												</div>
												</div>
												
														
														
														
													
													</form>
    <?php
		include 'config.php';
		if(isset ($_POST['simpan']))
		{
			$id=$_POST['id'];
			$nama=$_POST['nama'];
			$hp=$_POST['hp'];
			
			
			$add = mysqli_query ($con, "insert into driver values ('".$id."','".$nama."','".$hp."', 'MASIH KOSONG')");
			if ($add==TRUE)
			{
				echo "<script type='text/javascript'>alert('Pemandu Baru direkodkan.')</script>";
				 $_SESSION['msg']="Data Berjaya Direkodkan!!";
				echo "<meta http-equiv='refresh' content='0;URL=kemaskini-pemandu.php'";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Pemandu Gagal direkodkan. ')</script>";
				 $_SESSION['msg']="Data Gagal Direkodkan!!";
				echo "<meta http-equiv='refresh' content='0;URL=kemaskini-pemandu.php'";
			}
		}
		if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from driver where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data Berjaya Dibuang!!";
		  }
    ?>
											
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>

									<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Kemaskini <span class="text-bold">Senarai Pemandu Bas UteM</span></h5>
									
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<td bgcolor="#3EEB26" class="center">#</td>
												<td bgcolor="#3EEB26">ID</td>
												<td bgcolor="#3EEB26">Nama Pemandu</td>
												<td bgcolor="#3EEB26">No.Telefon</td>
												<td bgcolor="#3EEB26">Status</td>
												<td bgcolor="#3EEB26">Tindakan</td>
												
											</tr>
										</thead>
										<tbody>
<?php
$query=mysqli_query($con,"select * from driver ORDER BY Nama ;");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>

											<tr>
												<td class="center">
												<?php echo $cnt;?>.</td>
												<td><?php echo $row['id'];?></td>
												<td><?php echo $row['Nama'];?></td>
												<td><?php echo $row['Hp'];?></td>
												<td bgcolor="#FFFFFF"><?php if ($row['Status']=='MASIH KOSONG')

		  														{ 
														?><font color="#00FF66">
														<?php echo $row['Status'];?>
														</font>
                                                        <?php }else
		  														{ 
														?><font color="#FF0000">
														<?php echo $row['Status'];}?>
														</font></td>
											
												
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
							<a href="edit-pemandu.php?id=<?php echo $row['id']; ?>"><class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
													
							<a href="kemaskini-pemandu.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Anda Pasti Ingin Memadam Data?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											
											<?php 
$cnt=$cnt+1;
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
