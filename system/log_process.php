<?php
session_start();
error_reporting(0);
include('include/config.php');



		
		session_start();
		$id=$_POST['penggunaid'];
		$pass=$_POST['katalaluan'];
		$query=mysqli_query($con, "select * from user 
									where user_id='".$id."' and password='".$pass."'");
		$row=mysqli_fetch_array($query);									
		if ($query==true)
		{
			$_SESSION['user_id']=$_POST['penggunaid'];
			if($row['role_id']=='ad')
			{
				echo "<script type='text/javascript'>alert('selamat datang  ".$row['user_name']."')</script>";
				echo "<meta http-equiv='refresh' content='0;URL=admin/dashboard-admin.php'>";
				
			}
			else if($row['role_id']=='wu')
			{
				echo "<script type='text/javascript'>alert('selamat datang  ".$row['user_name']."')</script>";
				echo "<meta http-equiv='refresh' content='0;URL=warga_utem/dashboard-WU.php'>";
			}
			else if ($row['role_id']=='pl')
			{
				echo "<script type='text/javascript'>alert('selamat datang  ".$row['user_name']."')</script>";
				echo "<meta http-equiv='refresh' content='0;URL=dashboard-PL.php'>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Fail!')</script>";
				echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			}

		}
		?>