<div id="contact">
<section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <?php 
				                  include("connect.php");
								 $result=mysqli_query($con,"select * from slider where status=1");
								 while($row=mysqli_fetch_assoc($result))
								 { ?> 
				<li>
                  <?php echo ("<img class='ns-img' src='img/slider/".$row['photo']."'>");?>
                   <div class="slider_caption">
                    <?php // ucwords($row['title']);?>
                    <?php //echo ucwords($row['description']);?>
                  </div>
                  </li>
				  <?php
								 }
								  ?>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>