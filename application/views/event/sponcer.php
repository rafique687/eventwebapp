
<section>
	<div class="block gray remove-gap" style="background-color:#e05f60; !important; margin-top: 5%;">
		<div class="container">
			<div class="row">
				<div class="title" >
						<span style="color:#fff;">WE PROVIDE AWESOME DEALS</span>
						<h2 style="color:#fff;">EVENT <span style="color:#000;">TESTIMONIAL</span></h2>
						<p style="color:#fff;">We Deliver Love, Laughter and Happily Ever After.</p>
					</div>
			<div class="col-md-12 column" style="padding: 0px !important;">
					<div class="service-carousel" style="padding: 0px !important;">
						<?php foreach ($testimonials as $testi)
							 { 
							 	$img=explode(",",$testi['image']);?>
				<div class="service-item" style="padding: 0px !important; top: 0px !important;height: 570px; ">
				<div class="service-detail" style="width: 100% !important; height: 100% !important;padding:0px !important; ">
			<div class="row" style="height: 100% !important; width: 100% !important; background-color: #e05f60;">
									<div class="col-sm-8" style="padding-top: 10%;">
										<h2 style="color:#fff;"><?php echo $testi['name'];?></h2>
								<strong>  </strong>
								<p style="color:#fff"><?php echo $testi['review'];?></p>
									</div>
									<div class="col-sm-4" style=" border-radius: 15px 50px; padding-top: 5% ">
										<img src="<?php echo base_url()?>products/<?php echo $img[0] ;?>" alt="" style="width: 350px; height: 350px; border-color:#fff solid 2px;"/></span>
									</div>
								</div>
								<span>
									
							</div>
						</div><!-- Service Item -->
					<?php } ?>
						
					</div><!-- Service Carousel -->
				</div>
				
			</div>
		</div>
	</div>
</section><!-- Services Section -->