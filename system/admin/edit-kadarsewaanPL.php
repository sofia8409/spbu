<?php
session_start();
error_reporting(0);
include('include/config.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Kemaskini Senarai Kadar Sewaan Pihak Luar</title>
	
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
									<h1 class="mainTitle">Admin | Kemaskini Senarai Kadar Sewaan Pihak Luar</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Kemaskini Senarai Kadar Sewaan Pihak Luar</span>
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
													<h5 class="panel-title">Kemaskini Senarai Kadar Sewaan Pihak Luar</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	

        <?php
session_start();
error_reporting(0);
include('include/config.php');

			$select = mysqli_query($con, "select * from state s, bus_rate b
		where s.state_id=b.state_id AND b.state_id='".$_GET['id']."'");
			$row=mysqli_fetch_array($select);
		?>
        <form name="add" method="post" action="">
             <div class="form-group">
		
                  
					  <label> 
                    <td bgcolor="#CCCCCC"><div align="left">Negeri ID:
                      <input type="text" name="id" class="form-control" value="<?php echo $_GET['id'];?>" readonly/>
                          </div></td>
            
                    </label>
</br></br>
					  
					  <label> 
                    <td bgcolor="#CCCCCC"><div align="left">Nama Negeri:
                      <input type="text" name="name" class="form-control" value="<?php echo $row['state_name'];?>" readonly/>
                          </div></td>
            
                    </label>
</br></br>
                    <label> 
                    <td bgcolor="#CCCCCC"><div align="left">Caj Tetap:
                      <input type="text" name="tpl" class="form-control" value="<?php echo $row['total_amount_PL'];?>"/>
                          </div></td>
            
                    </label>
</br></br>

 <label> 
                    <td bgcolor="#CCCCCC"><div align="left">Caj Per-Malam:
                      <input type="text" name="td" class="form-control" value="<?php echo $row['total_per_day'];?>"/>
                          </div></td>
              
                    </label>


</br></br>
                    <div align="left">
                      <input name="edit" type="submit" value="kemaskini" class="btn btn-o btn-primary" >
                      </div>
                    </p>
                    </th>
                  </tr>
</br></br>
          
            </div>
          <p>&nbsp;</p>
    </form>
 <?php
session_start();
error_reporting(0);
include('include/config.php');

		if(isset ($_POST['edit']))
		{
			$id=$_POST['id'];
			$name=$_POST['name'];
			$tpl=$_POST['tpl'];
			$td=$_POST['td'];
			
			
			
			$add = mysqli_query ($con, "update bus_rate set  total_amount_PL='$tpl', total_per_day='$td' where state_id='$id'");
			if ($add==TRUE)
			{
				echo "<script type='text/javascript'>alert('Kadar Sewaan Berjaya Dikemaskini.')</script>";
				 $_SESSION['msg']="Data Berjaya Dikemaskini !!";
				echo "<meta http-equiv='refresh' content='0;URL=kemaskini-kadarsewaanPL.php'";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Kadar Sewaan Gagal Dikemaskini ')</script>";
				 $_SESSION['msg']="Data Gagal Dikemaskini !!";
				echo "<meta http-equiv='refresh' content='0;URL=edit-kadarsewaanPL.php'";
			}
		}
    ?>


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
