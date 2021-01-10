<?php include("header.php");?>
<!--------------------------Main body--------------------------------------->
		 <section class="banner-area relative about-banner" id="home">
		 <div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h3>
							 Showing Student Result List
							</h3>	
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
			<form action="" method="POST"><table class="table">
			            <tr>
							<td><b>Id</b></td>
							<td><b>Name</b></td>
							<td><b>Results</b></td>
					   </tr>

			<?php
			  include("connect.php");
			  $result=mysqli_query($con,"select * from student JOIN result ON student.stdid=result.stdid where student.status=1 ORDER BY class ASC");
			   while( $row=mysqli_fetch_assoc($result))
			   {
			    ?>
			    <tr>
					        <td><?php echo ucwords($row['stdid']);?></td>
							<td><?php echo ucwords($row['name']);?></td>
							<td><a href='showstudentresult.php?data_id=<?php echo $row['stdid'] ?>' class="btn btn-primary text-uppercase" >Show Result</a></td>
				</tr>
			    <?php
			   }
			   ?>
			  </table></form> 
			  </div></div>
			  </section>