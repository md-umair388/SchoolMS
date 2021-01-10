<?php include("header.php");?>
<!--------------------------Main body--------------------------------------->
		 <section class="banner-area relative about-banner" id="home">
		 <div class="container">
		 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Student List</h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Welcome to the Here ! Feel free to delete and modify.   
                        <br />
                    </div>
                </div>
            </div>
         </div> 
		 <!--------------------------------------------------------------->
		 <!-- start banner Area -->
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Showing Student List
							</h4>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
							<p><a href="addstudent.php">Add Student</a></p>
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
							<td><b>Class</b></td>
							<td><b>Show Information</b></td>
							<td><b>Edit Information</b></td>
							<td><b>Show Result</b></td>
							<td><b>Show Attendance</b></td>
							<td><b>Delete</b></td>
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
							<td><?php echo ucwords($row['class']);?></td>
							<td><a href='showstudentinfo.php?data_id=<?php echo $row['stdid'] ?>' class="btn btn-primary text-uppercase">Show Information</a></td>
							<td><a href='editstudentinfo.php?data_id=<?php echo $row['stdid'] ?>' class="btn btn-primary text-uppercase" onclick='javascript:return confirm("Sure to edit ?" );'>Edit Information</a></td>
							<td><a href='showstudentresult.php?data_id=<?php echo $row['stdid'] ?>' class="btn btn-primary text-uppercase" >Show Result</a></td>
							<td><a href='showstudentattendance.php?data_id=<?php echo $row['stdid'] ?>' class="btn btn-primary text-uppercase">Show Attendance</a></td>
							<td><a href='studentlist.php?data_id=<?php echo $row['stdid'] ?>' class="btn btn-primary text-uppercase"  onclick=' return deletebyid();'>Delete</a></td>
				</tr>
			    <?php
			   }
			   ?>
			  </table></form> 
			  </div></div>
			  </section>
			  <script>
			    function deletebyid()
				{ if(confirm("Sure You Want to Delete"))
					{<?php
                        $id=$_GET['data_id'];
                       mysqli_query($con,"update student set status=0 where stdid='$id'");
					?>
					   header('location: studentlist.php');
					}
					
				}
			  </script>