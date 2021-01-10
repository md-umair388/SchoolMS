<?php include("header.php");?>
<?php
		 if(isset($_POST['submit']))
			{
				  $stdid=$_POST['stdid'];
				  $name=$_POST['name'];
				  $clss=$_POST['clss'];
				  $status=1;
			      include("connect.php");
				  mysqli_query($con,"insert into student(stdid,name,class,status) values('$stdid','$name','$clss','$status')");
				  mysqli_query($con,"insert into studentinfo(stdid,status) values('$stdid','$status')");
				  mysqli_query($con,"insert into result(stdid,status) values('$stdid','$status')");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert(" Data Uploaded Successfully");
							window.location="studentlist.php";
						</script><?php
			        }
				   else
				  {
					?><script> alert(" Data  not Uploaded ");
							window.location="addstudent.php";
					</script><?php
				  }
			}
		  ?>
		  <style>
			.errro{
				font-size:1rem;
			}
		  </style>
		  <section class="banner-area relative about-banner" id="home">
		 <div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Add Student
							</h4>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
						</div>	
					</div>
<div id="wrapper">
<div class="container-fluid">
  <div class="row">
	<div class="col-lg-12">
		<form method="POST" name="myForm">
			<div><input id="stdid" name="stdid" type="text" class="form-control" placeholder="Student Id" data-validation="required number"></div>
			<div><input id="name" name="name" type="text" class="form-control" placeholder="Name" data-validation="custom" data-validation-regexp="^([a-zA-Z ]+)$"></div>
			<div><input id="clss" name="clss" type="text" class="form-control" placeholder="Class" data-validation="required"></div><br>
			<div><input id="submit" name="submit" type="submit" class="form-control btn btn-primary" value="Submit"></div>
		</form>
	</div>

  </div>
  </div>
  </div>
  </div>
  </section>
<!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
			<script>
$.validate({
    lang: 'en',
	modules : 'security'
  });
			</script>
