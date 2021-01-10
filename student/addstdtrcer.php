<?php include("header.php");?>
<html lang="en">
	<head>
        <?php
        $condition=0;
        if(isset($_FILES['image']))
        {
            if(is_uploaded_file($_FILES['image']['tmp_name']))
            {
                $filename=$_FILES['image']['name'];
                $tmp=$_FILES['image']['tmp_name'];
                $file_size = $_FILES['image']['size'];
                $type=$_FILES['image']['type'];
                $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

                $types=array("jpeg","jpg","png","pdf");
                if(in_array($file_ext,$types))
                {
                    if($file_size > 2097152)
                    {
                        ?><script> alert(" File size should not be more than 2 MB");</script><?php
                    }
                    else
                    {
                        if(move_uploaded_file($tmp,"../img/stdtrcer/".$filename))
                        {
                            $photo=$filename;
                            $condition=1;
                            ?><script> alert(" Photo Uploaded Successfully");</script><?php
                        }
                    }
                }
                else
                {
                    ?><script> alert(" Please Select valid Image");
                    window.location="addstdtrcer.php";
                </script><?php
                }
            }
            else
            {
                ?><script> alert(" Please select a file to Upload Or Your file is more than 2 MB");
                window.location="addstdtrcer.php";
            </script><?php
            }
        }

        if(isset($_POST['submit']))
        {
            if($condition==1)
            {
                $stdid=$_POST['stdid'];
                $name=$_POST['name'];
                $status=1;
                include("connect.php");
                mysqli_query($con,"INSERT into stdtrcer(stdid,name,photo,status) values('$stdid','$name','$photo','$status')");
                if(mysqli_affected_rows($con)==1)
                {
                    ?><script> alert(" Data Uploaded Successfully");
                    window.location="index.php";
                </script><?php
                }
                else
                {
                    ?><script> alert(" Data  not Uploaded ");
                    window.location="addstdtrcer.php";
                </script><?php
                }
            }
            else
            {
                ?><script> alert("Image not uploaded");</script><?php
            }
        } ?>
    </head>
	<body>
		<section class="banner-area relative about-banner" id="home">
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h4>
						Add Student Transfer Certificate
					</h4>
					<p class="text-white link-nav"><a href="index.php">Dashboard </a></p>
				</div>
				</div>
				<div id="wrapper">
				<div class="container-fluid">
				<div class="row">
				<div class="col-lg-12">
						<form class="form" method="POST" enctype="multipart/form-data">
							<div>
								<input id="stdid" name="stdid" type="text" class="form-control" placeholder="Student Id" data-validation="required number">
							</div><br>
							<div>
								<input id="name" name="name" type="text" class="form-control" placeholder="Student Name" data-validation="custom" data-validation-regexp="^([a-zA-Z ]+)$">
							</div><br>
							<div>
								<input type="file" id="image" name="image" class="btn btn-success" data-validation="required" >
							</div><br>
							<div>
								<input id="submit" name="submit" type="submit" class="form-control btn btn-primary" value="Submit">
							</div>
						</form>
				</div></div></div></div>
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
	</body>
</html>
