
<section>
	<div class="block remove-gap gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h2>EVENT <span>SERVICES</span></h2>
						<p>We Deliver Love, Laughter and Happily Ever After.</p>
					</div><!-- Title -->
					<div class="remove-ext">
						<div class="row">
							<?php foreach ($services as $sr)
							 {?>
								<div class="col-md-4">
								<div class="speaker">
									<div class="speaker-img">
										<div>
											<!-- <img src="http://placehold.it/370x436" alt="" /> -->
											<?php $exp=explode(",",$sr['service_pic']);
											//echo "<pre>"; print_r($exp);?>
											<img src="<?php echo base_url()?>item/<?php echo $exp[0]?>" alt="" widht="370" height="436"/>
										<p><?php echo $sr['service_des']?>.</p>
										</div>
									</div>
									<h3><?php echo $sr['sevices_name']?></h3>
									<!-- <span>web developer evangelist</span> -->
								</div><!-- Event Speaker -->
							</div>
						<?php } ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Event Speaker Section -->