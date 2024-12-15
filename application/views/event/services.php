<?php include("header.php");?>


<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>OUR <span>SERVICES</span></h1>
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
						<?php foreach ($services as $service)
						 { $pic= explode(',',$service['service_pic']);?>
								<div class="col-md-6">
								<div class="package">
									<div class="row">
										<div class="col-md-8">
											<div class="package-img">
												<!-- <img src="http://placehold.it/370x432" alt="" /> -->
												<img src="<?php echo base_url()?>item/<?php echo $pic[0];?>" width="370" height="432" alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<strong><i><?php //echo $service['service_des'];?></i><span></span></strong>
											<span class="shortline"><i>-</i> -</span>
											<a href="#" title="" style="margin-top: 30px;">BOOK NOW</a>
											<div class="package-info">
												<h3><a href="#" title=""><?php echo $service['sevices_name'];?></a></h3>
												<span>By; VCREATE EVENT</span>
											</div>
										</div>
									</div>
								</div><!-- Package -->
							</div>
						<?php } ?>


						

							
						
						</div>
						<div class="row">
						<ul>
							<?php  foreach ($logistics as $service) {
								$pic= explode(',',$service['service_pic']);
							   ?>
							<li class="mix col-md-6">
								<div class="portfolio">
									<img src="<?php echo base_url()?>item/<?php echo $pic[0];?>" alt="" height="500" />
									<div class="hover">
										<h3><?php echo $service['sevices_name'];?></h3>
										<p><?php echo $service['service_des'];?></p>
										<a data-rel="prettyPhoto" href="<?php echo base_url()?>item/<?php echo $pic[0];?>" width="50%" height="500" title="">
											<!-- <img src="<?php echo base_url()?>item/<?php echo $pic[0];?>" alt="" /> -->
										</a>
									</div>
								</div>
							</li>
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