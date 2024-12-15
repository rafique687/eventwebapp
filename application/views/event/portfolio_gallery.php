<?php include("header.php");?>


<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>Hight <span>Light</span></h1>
						<p>We Deliver Love, Laughter and Happily Ever After.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="remove-ext">
						<div class="row">
						
						<div class="row">
						<ul>
							<?php  foreach ($album as $gl) {?>
								<div class="page-title" style="margin-top:0px !important; padding:0px !important;">
								<h1><span><?php echo $gl['title'];?></span></h1>
								</div>
								<h3 style="text-align: center;"></h3>
								<div class="row">
								<?php
								$pic= explode(',',$gl['eventvideo_photo_url']);
							
								foreach ($pic as $photo) {?>
							
							<li class="mix col-md-6">
								<div class="portfolio">
									<img src="<?php echo base_url()?>client/<?php echo $photo;?>" alt="" height="500" />
									<div class="hover">
										<h3><?php echo $gl['title'];?></h3>
										<p><?php //echo $gl['service_des'];?></p>
										<a data-rel="prettyPhoto" href="<?php echo base_url()?>client/<?php echo $pic[0];?>" width="50%" height="500" title="">
											<!-- <img src="<?php echo base_url()?>item/<?php echo $pic[0];?>" alt="" /> -->
										</a>
									</div>
								</div>
							</li>
						<?php 
					} ?>
					</div>
					<?php } ?>
						
						</ul>
					</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>







<?php include("footer.php");?>