<footer>
	<div class="block">
		<div class="container">
			<div class="row"> 
				<div class="col-md-12 column">
					<div class="title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h2>LET'S SAY <span>HELLO</span></h2>
						<p>Satisfaction is a rating, Loyalty is a brand.</p>
					</div><!-- Title -->
					<div class="footer-widgets">
						<div class="row">
							<div class="col-md-4">
								<div class="widget">
									<div class="about">
										<p style=" text-transform: capitalize">Explaining why someone should contact us, and describing how we can help solve our visitors problems. Include an email and phone number so visitors can quickly find the correct information. Include a short form using fields that'll help the business understand who's contacting us..</p>
									</div>
									<ul class="contact-info">
										<li><span><i class="fa fa-phone"></i></span><?php echo $logo[1]['field_value'];?></li>
										<li><span><i class="fa fa-envelope-o"></i></span><?php echo $logo[2]['field_value'];?></li>
										<li><span><i class="fa fa-map-marker"></i></span><?php echo $logo[5]['field_value'];?></li>
									</ul>
								</div><!-- About Widget -->
							</div>
							<div class="col-md-4">
								<div class="widget">
									<div id="message"></div>
									<form  class="contact" method="post" action="<?php echo site_url('contact/inquery');?>" name="contactform" id="contactform">
										<input name="name" type="text" id="name" placeholder="Full Name" />
										<input  name="mobile" type="number" id="Mobile"  placeholder="Contact" />
										<input  name="email" type="text" id="email"  placeholder="Email" />
										<textarea name="comments" id="comments"  placeholder="Details"></textarea>
										<button class="button" type="submit" id="submit">REQUEST NOW</button>
									</form>
								</div><!-- Contact Form Widget -->
							</div>
							<div class="col-md-4">
								<div class="widget">
									<div class="map">
										<iframe src="<?php echo $logo[6]['field_value'];?>"></iframe>		
									</div>
								</div><!-- Map Widget -->
							</div>
						</div>
						<?php echo $logo[7]['field_value'];?>
					</div><!-- Footer Widgets -->
				</div>
			</div>
		</div>
	</div>
</footer><!-- Footer -->
<div class="bottom-footer">
	<div class="container"	>
		
		<p>
			All rights reserved 2021-<a title="" href="#">Vcreate Event</a> By <a title="" href="https://www.facebook.com/Kyt-Technosoft-1711015072456341" target="_blank">KYT Technosoft</a></p>
	</div>
</div><!-- Bottom Footer -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery2.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.downCount.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/audioplayer.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>

<script type="text/javascript">
	/**
 * Demonstrates getting a review by name.
 * @param reviewName The name (resource path) of the review to retrieve.
 * @return Account The requested review.
 */
private static Review getReview(String reviewName) throws Exception {
  Mybusiness.Accounts.Locations.Reviews.Get review =
      mybusiness.accounts().locations().reviews().get(reviewName);
  Review response = review.execute();

  return response;
}
</script>