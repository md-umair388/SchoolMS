<?php include("header.php");?>
<?php	
		 if(isset($_POST['submit']))
			{		
				  $stdid=$_GET['data_id'];
				  $fathername=$_POST['fathername'];
				  $mothername=$_POST['mothername'];
				  $contact=$_POST['contact'];
				  $gender=$_POST['gender'];
				  $dob=$_POST['dob'];
				  $address=$_POST['address'];
				  $status=1;
			      include("connect.php");
				  mysqli_query($con,"update studentinfo set fathername='$fathername',mothername='$mothername',contact='$contact',gender='$gender',dob='$dob',address='$address',status='$status' where stdid='$stdid' ");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert(" Data Uploaded Successfully");
							window.location="showstudentinfo.php?data_id=<?php echo $_GET['data_id'] ?>";
						</script><?php
			        }
				   else
				  {
					?><script> alert(" Data  not Uploaded ");
							window.location="editstudentinfo.php?data_id=<?php echo $_GET['data_id'] ?>";
					</script><?php
				  }
			}
		  ?>
<body>
<section class="banner-area relative about-banner" id="home">
		 <div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Adding Student Information
							</h4>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
							<p><a href="showstudentinfo.php?data_id=<?php echo $_GET['data_id'] ?>">Student Information</a></p>
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
						<tr><td><b>Father Name:</td><td><input type="text" name="fathername" id="fathername" class="form-control" value="<?php echo ucwords($row['fathername']);?>" data-validation="custom" data-validation-regexp="^([a-zA-Z ]+)$"></b></td></tr>
						<tr><td><b>Mother Name:</td><td><input type="text" name="mothername" id="mothername" class="form-control" value="<?php echo ucwords($row['mothername']);?>" data-validation="custom" data-validation-regexp="^([a-zA-Z ]+)$"></b></td></tr>
						<tr><td><b>Contact Number:</td><td><input type="text" name="contact" id="contact" class="form-control" value="<?php echo ucwords($row['contact']);?>" data-validation="required number length" data-validation-length="10-10"></b></td></tr>
						<tr><td><b>Gender:</td><td><input type="text" name="gender" id="gender" class="form-control" value="<?php echo ucwords($row['gender']);?>" placeholder="Male/Female" data-validation="custom" data-validation-regexp="^([a-zA-Z ]+)$"></b></td></tr>
						<tr><td><b>Date Of Birth:</td><td><input type="text" name="dob" id="dob" class="form-control"value="<?php echo ucwords($row['dob']);?>" placeholder="mm/dd/yyyy" data-validation="required"></b></td></tr>
						<tr><td><b>Address:</td><td><input type="text" name="address" id="address" class="form-control" value="<?php echo ucwords($row['address']);?>" data-validation="required"></b></td></tr>
						<tr><td><b>For Add:</b></td><td><input class="btn btn-primary" type="submit"  name="submit" 
					value="Submit"></td></tr>
			  </table></form> 
			  </div></div>
			</section>
			<script src="js/sb-admin-2.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
			<script>
$.validate({
    lang: 'en',
	modules : 'security'
  });
			</script>
			</body>

