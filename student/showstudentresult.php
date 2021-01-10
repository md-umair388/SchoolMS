<?php include("header.php");?>
<body>
<section class="banner-area relative about-banner" id="home">
		 <div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Showing Student Result Information
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
			  $result=mysqli_query($con,"SELECT * from student JOIN result ON student.stdid=result.stdid where student.stdid='$id' AND student.status=1");  
			   $row=mysqli_fetch_assoc($result);
			    ?>
			            <tr><td><b>Id:</td><td><?php echo ucwords($row['stdid']);?></b></td></tr>
						<tr><td><b>Name:</td><td><?php echo ucwords($row['name']);?></b></td></tr>
						<tr><td><b>Your Result:</td><td><img class="gallery_img" src="../img/result/<?php echo $row['photo'] ?>" alt="img" /></b></td></tr>
			  </table></form> 
			  </div></div>
			</section>
			</body>