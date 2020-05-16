<?php
session_start();
error_reporting(0);
include('include/config.php');
	$id=$_GET['id'];
		$select = mysqli_query($con,"select * from bus_rate natural join state where state_id='$id';");
		$row=mysqli_fetch_array ($select);
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>	Admin | Kadar Sewaan Pihak Luar</title>
		
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
									<h1 class="mainTitle">Admin | Kadar Sewaan Pihak Luar </h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span> Kadar Sewaan  Pihak Luar</span>
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
													<h5 class="panel-title"> Kadar Sewaan</h5></br>
												</div>
	<form method="post" action="" >
	<div class="form-group">
    <div align="left">
    <div align="left">  
    <tr>
        <td><strong>NEGERI ID</strong></div>
		<div class="form-group">
        <div align="left">
		<div align="left">
          <label for="negeri"></label>
          <input type="text" name="negeriID" id="negeri ID" value="<?php echo $id;?> " readonly/>
        </div>
		</td>
   </tr></br>
      
		
		<div class="form-group">
        <div align="left">
		<div align="left">
        <tr>
		<td><strong>NEGERI</strong></div>
        <div align="left">
          <label for="negeri"></label>
          <input type="text" name="negeri" id="negeri" value="<?php echo $row['state_name'];?> " readonly/>
        </div>
        </td></tr></br>
      </tr>
      <tr>
        <td><strong>CAJ TETAP</strong></div>
		<div align="left">
        <label for="C.T2"></label>
            <input type="text" name="toi" id="toi" value="<?php echo $row['total_amount_PL'];?> " readonly/>
          </div></td>
      </tr></br>
        <div class="form-group">
    <div align="left">
    <div align="left">
       <tr>
<tr>
         <td><strong>BIL.PEMANDU</strong></div>
        <div align="left">
        <label for="C.T2"></label>
            <input type="text" name="ct" id="ct" <?php 
														if ($id=='N1' || $id=='N2' || $id=='N3' || $id=='N11' || $id=='N12')
														{
													?> 
                                                         value="1"
            										<?php
														}
														else
														{
													?>
                                                       	value="2"/>
                                                    <?php
														}
													?>
          </div></br>
        </td>
   </tr></br>
   <div class="form-group">
    <div align="left">
    <div align="left">
      <tr>
        <td><div align="left"><strong>JUMLAH MALAM</strong></div></td>
        <td><label for="C.PR"></label>
          <div align="left">
            <input type="number" name="jumlahmalam" id="C.PR2" min="1" max="7" value=""/>
			
            <input type="submit" name="jumlah" id="jumlah" value="jumlah"  class="btn btn-o btn-primary"/>
          </div>
          <label for="C.PR"></label>
          <div align="left"></div></td>
      </tr>
	  
       <td colspan="2" bgcolor="#CCCCCC"><?php
      if (isset ($_POST['jumlah']))
	{
		//$ct= $_POST['ct'];
		$malam= $_POST['jumlahmalam'];
		$jumlahpemandu= $_POST['ct'];
		$oil=$_POST['toi'];
		$query= mysqli_query($con,"select total_per_day, tax_rate, total_oil, total_amount_WU1D, total_amount_WU2D 
									from bus_rate natural join tax 
									where state_id='$id'");
		$row = mysqli_fetch_array($query);
		
		if ($query==TRUE)
		{
			$totalperday=$row['total_per_day'];
			$elaun1D=$row['total_amount_WU1D'];
			$elaun2D=$row['total_amount_WU2D'];
			
			if($jumlahpemandu==1)
			{
				if ($malam==1)
				{
					$cukai = (($oil +$elaun1D)*$malam)*($row['tax_rate']/100);
					$jumlah = (($oil +$elaun1D)*$malam)+($cukai);
				?>
                    <strong>Jumlah Malam  : </strong><?php echo $malam; ?><br />
					<strong>SST :RM</strong> <?php echo $cukai; ?> <br />
					<strong>Jumlah : RM </strong><?php echo $jumlah; ?>
                    <br />
                    </form>
                    <form method="post" action="BorangPermohonanWU.php">
                        <input type="submit" name="mohon" id="jumlah" value="mohon"  align="right" class="btn btn-o btn-primary"/>
                        <input type="text" name="negeriID" id="negeri ID" value="<?php echo $id;?> " hidden/>
                    </form>
                    </td>
                    </table>
				<?php
				}
				else
				{
					$cukai = ($oil +($totalperday*$malam))*($row['tax_rate']/100);
					$jumlah = ($oil +($totalperday*$malam))+($cukai);
				?>
                   	<strong>Jumlah Malam  : </strong><?php echo $malam; ?><br />
					<strong>SST :RM</strong> <?php echo $cukai; ?> <br />
					<strong>Jumlah : RM </strong><?php echo $jumlah; ?>
                    <br />
                    </form>
                    <form method="post" action="BorangPermohonanWU.php">
                        <input type="submit" name="mohon" id="jumlah" value="mohon"  align="right" class="btn btn-o btn-primary"/>
                        <input type="text" name="negeriID" id="negeri ID" value="<?php echo $id;?> " hidden/>
                    </form>
                    </td>
                    </table>
                <?php
				}
			}
			else
			{
				if ($malam==1)
				{
					$cukai = (($oil +$elaun2D)*$malam)*($row['tax_rate']/100);
					$jumlah = (($oil +$elaun2D)*$malam)+($cukai);
				?>
                    <strong>Jumlah Malam  : </strong><?php echo $malam; ?><br />
					<strong>SST :RM</strong> <?php echo $cukai; ?> <br />
					<strong>Jumlah : RM </strong><?php echo $jumlah; ?>
                    <br />
                    </form>
                    <form method="post" action="BorangPermohonanWU.php">
                        <input type="submit" name="mohon" id="jumlah" value="mohon"  align="right" class="btn btn-o btn-primary"/>
                        <input type="text" name="negeriID" id="negeri ID" value="<?php echo $id;?> " hidden/>
                    </form>
                    </td>
                    </table>
				<?php
				}
				else
				{
					$cukai = ($oil +($totalperday*$malam))*($row['tax_rate']/100);
					$jumlah = ($oil +($totalperday*$malam))+($cukai);
				?>
                   	<strong>Jumlah Malam : </strong><?php echo $malam; ?><br />
					<strong>SST :RM</strong> <?php echo $cukai; ?> <br />
					<strong>Jumlah : RM </strong><?php echo $jumlah; ?>
                    <br />
                    </form>
                    <form method="post" action="BorangPermohonanWU.php">
                        <input type="submit" name="mohon" id="jumlah" value="mohon"  align="right" class="btn btn-o btn-primary"/>
                        <input type="text" name="negeriID" id="negeri ID" value="<?php echo $id;?> " hidden/>
                    </form>
                    </td>
                    </table>
                <?php
				}
			
?>

<?php
			}
		}
	}
?>
   </div>
</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
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
