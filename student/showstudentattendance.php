<?php include("header.php");?>
<section class="banner-area relative about-banner" id="home">
		 <div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Show attendance
							</h4>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
						</div>	
					</div>
				</div>
			</section>
			<br><br>
			
            <!-- Start info Area --->
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
			<form action="" method="POST"><table class="table">
			<?php
			  include("connect.php");
			  $id=$_GET['data_id'];
			  $result=mysqli_query($con,"SELECT * from attendance JOIN student ON attendance.stdid=student.stdid where attendance.stdid='$id' AND attendance.status=1");
			  $count=mysqli_affected_rows($con);
			  $sum = mysqli_query($con,"SELECT SUM(attendancevalue) from attendance where stdid='$id' AND status=1");
			  $row=mysqli_fetch_assoc($result);
			  $row1=mysqli_fetch_assoc($sum);
			  $percentage=(($row1['SUM(attendancevalue)'])/(2*$count))*100;
			    ?>
			            <tr><td><b>Id:</td><td><?php echo ucwords($row['stdid']);?></b></td></tr>
			            <tr><td><b>Name:</td><td><?php echo ucwords($row['name']);?></b></td></tr>
						<tr><td><b>Class:</td><td><?php echo ucwords($row['class']);?></b></td></tr>
						<tr><td><b>Total Attendance:</td><td><?php echo $count; ?></b></td></tr>
						<tr><td><b>Percentage:</td><td><?php echo $percentage;?>%</b></td></tr>
			  </table></form> 
			  </div></div>
			</section>