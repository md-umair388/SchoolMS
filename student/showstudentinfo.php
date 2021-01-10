<?php include("header.php");?>
<body>
<section class="banner-area relative about-banner" id="home">
		 <div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Showing Student Information
							</h4>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
							<p><a href="studentlist.php">Student List</a></p>
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
			<form action="" method="POST"><table class="table">
			<?php
			  include("connect.php");
			  $id=$_GET['data_id'];
			  $result=mysqli_query($con,"SELECT * from student JOIN studentinfo ON student.stdid=studentinfo.stdid where student.stdid='$id' AND student.status=1");  
			   $row=mysqli_fetch_assoc($result);
			    ?>
			            <tr><td><b>Id:</td><td><?php echo ucwords($row['stdid']);?></b></td></tr>
						<tr><td><b>Name:</td><td><?php echo ucwords($row['name']);?></b></td></tr>
						<tr><td><b>Class:</td><td><?php echo ucwords($row['class']);?></b></td></tr>
						<tr><td><b>Father Name:</td><td><?php echo ucwords($row['fathername']);?></b></td></tr>
						<tr><td><b>Mother Name:</td><td><?php echo ucwords($row['mothername']);?></b></td></tr>
						<tr><td><b>Contact Number:</td><td><?php echo ucwords($row['contact']);?></b></td></tr>
						<tr><td><b>Gender:</td><td><?php echo ucwords($row['gender']);?></b></td></tr>
						<tr><td><b>Date Of Birth:</td><td><?php echo ucwords($row['dob']);?></b></td></tr>
						<tr><td><b>Address:</td><td><?php echo ucwords($row['address']);?></b></td></tr>
						<tr><td><b>Edit Information:</td><td><a href='editstudentinfo.php?data_id=<?php echo $row['stdid'] ?>' class="btn btn-primary text-uppercase" onclick='javascript:return confirm("Sure to edit ?" );'>Edit Information</a></b></td></tr>
			  </table></form> 
			  </div></div>
			</section>
			</body>