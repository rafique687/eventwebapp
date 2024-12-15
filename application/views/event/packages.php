<?php include("header.php");?>
<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>EVENT <span>PACKAGES</span></h1>
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
							<?php foreach ($package as $pkg) {?>
							<div class="col-md-6">
								<div class="package">
									<div class="row">
										<div class="col-md-8">
											<div class="package-img">
												<!-- <img src="http://placehold.it/370x432" alt="" /> -->
												<?php $pic=explode(",",$pkg['image']) ?>
												<img src="<?php echo base_url()?>package/<?php echo $pic[0] ?>" height="435" width="370" alt="" />
											</div>
										</div>
										<div class="col-md-4">
											<strong><i><i class="fa fa-rupee"></i></i><?php echo $pkg['package_price']?><span></span></strong>
											<span class="shortline"><i>.</i></span>
											<a href="#" title="">BOOK NOW</a>
											<div class="package-info">
												<h3><a href="#" title=""><?php echo $pkg['package_name'];?></a></h3>
												<span><?php echo $pkg['caption'];?></span>
											</div>
										</div>
									</div>
								</div><!-- Package -->
							</div>
						<?php } ?>
							
							
						
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<?php include("footer.php");?>