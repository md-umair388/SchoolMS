<?php
   include("header.php");
   if(isset($_SESSION['clss']) OR $_SESSION['date'])
{       
		$clss=$_SESSION['clss'];
		$date=$_SESSION['date'];
?>
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
			<!-- End banner Area -->
			<br><br>
			
            <!-- Start info Area --->
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
					<div><p>Class:<?php echo $_SESSION['clss'];?></p></div>
					<div><p>Date:<?php echo $_SESSION['date'];?></p></div>
			<form action="" method="POST" ><table class="table">
					<tr><td><b>Id:</td>
					<td><b>Name:</td>
					<td><b>Attendance:</b></td>
					</tr>
			<?php
			  include("connect.php");
			  $result=mysqli_query($con,"SELECT * from student where class='$clss' AND status=1");  
			   while($row=mysqli_fetch_assoc($result)){
			    ?>
			            <tr><td><?php echo ucwords($row['stdid']);?>
								<input type="hidden" value="">
							</td>
						<td><?php echo ucwords($row['name']);?></td>
						<td>
								<input type="radio" name='<?php echo $row['stdid'];?>"[]"' value="2">
								<label>Present</label>
								<input type="radio" name='<?php echo $row['stdid'];?>"[]"' value="0">
								<label>Absent</label>
								<input type="radio" name='<?php echo $row['stdid'];?>"[]"' value="1">
								<label>Leave</label>
						</td></tr>
			   <?php } ?>
			  </table>
			  <div><input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success"></div>
			  </form> 
			  </div></div>
			</section>
			<?php
					if(isset($_POST['submit']))
					{
						print_r($_POST);
						foreach($_POST as $key=>$value){
							
							$stdid=$key;
							$atten=$value[0];
							$status=1;
							//echo $tem="insert into attendance(stdid,class,date,attendacevalue,status) values('$stdid','$clss','$date','$atten','$status')";
							if($value!=""){
							mysqli_query($con,"insert into attendance(stdid,class,date,attendacevalue,status) values($stdid,'$clss','$date','$atten','$status')");
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
					}
			?>
			</body>
<?php 
}
?>