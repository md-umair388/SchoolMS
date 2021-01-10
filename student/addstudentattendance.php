<?php include("header.php");
	
	if(isset($_POST['submit']))
			{
				  $_SESSION['clss'] = $_POST['clss'];
				  $_SESSION['date'] = $_POST['date'];
					?><script>window.location="addattendance.php";</script><?php
			}
?>
<section class="banner-area relative about-banner" id="home">
		<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h4>
							 Add attendance
							</h4>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
						</div>	
					</div>
					<div id="wrapper">
					<div class="container-fluid">
					  <div class="row">
						<div class="col-lg-12">
							<form method="POST" name="myForm">
								<div><input id="clss" name="clss" type="text" class="form-control" placeholder="Class" data-validation="required"></div>
								<div><input id="date" name="date" type="date" class="form-control" placeholder="mm/dd/yyyy" data-validation="required"></div><br>
								<div><input id="submit" name="submit" type="submit" class="form-control btn btn-primary" value="Submit"></div>
							</form>
						</div>

					  </div>
					  </div>
					  </div>
		</div>
</section>
