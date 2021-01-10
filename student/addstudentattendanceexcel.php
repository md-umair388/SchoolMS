<?php
error_reporting(E_ALL);
include("header.php");
 if(isset($_POST['submit'])){
		if(isset($_FILES['file-upload'])){
			if(is_uploaded_file($_FILES['file-upload']['tmp_name']))
				{
					
		require 'Classes/PHPExcel/IOFactory.php';

	// Mysql database
	include('connect.php');


			$filename=$_FILES['file-upload']['name'];
			$inputfilename = $filename;
		
	$exceldata = array();

	// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}

	//  Read your Excel workbook
	try
	{
		$inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
		$objReader = PHPExcel_IOFactory::createReader($inputfiletype);
		$objPHPExcel = $objReader->load($inputfilename);
	}
	catch(Exception $e)
	{
		die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
	}

	//  Get worksheet dimensions
	$sheet = $objPHPExcel->getSheet(0); 
	$highestRow = $sheet->getHighestRow(); 
	$highestColumn = $sheet->getHighestColumn();
	echo $highestRow."<br>";
	//echo $highestColumn;
	//  Loop through each row of the worksheet in turn
	for ($row = 2; $row <= $highestRow; $row++)
	{ 
		//  Read a row of data into an array
		$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
		//  Insert row data array into your database of choice here
		$status=1;
		$datefetch = $rowData[0][2];
		$dateformat = date('d/m/Y', PHPExcel_Shared_Date::ExcelToPHP($datefetch));
		//echo $dateformat;
		//break;
		$check = $rowData[0][0];
		if($check!=""){
			mysqli_query($con,"INSERT INTO attendance (stdid,class,date,attendancevalue,status)
					VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$dateformat."', '".$rowData[0][3]."','$status')");
			
			if(mysqli_affected_rows($con)==1)
										{   ?><script> alert(" Data Uploaded Successfully");
													window.location="attendance.php";
												</script><?php
										}
									   else
									  {
										?><script> alert(" Data  not Uploaded ");
												window.location="addattendance.php";
										</script><?php
									  }
			}
	}

	mysqli_close($con);
	
	}
 }
 }
?>
<html>
	
	<body>
	<section class="banner-area relative about-banner" id="home">
		 <div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Add Attendance
							</h4>
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
						</div>
					</div>
				</div>
			</section>
			
		<section class="info-area pb-40">
				<div class="container-fluid">
						<form action="" method="POST" enctype = "multipart/form-data">
							<div class="form-group">
								<label>Select File</label>
								<input type="file" name="file-upload" class="form-control">
							</div>
							<div class="form-group">
									<input type="submit" name="submit" class="btn btn-success">
							</div>
						</form>
				</div>
		</section>
	</body>
</html>