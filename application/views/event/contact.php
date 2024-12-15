<?php include("header.php");?>
<style type="text/css">
	.coloured-layer:before{ background-color: #00188 !important;
							opacity: 0.7; }
</style>
<section style="">
</section>
<section>
	<!-- <div class="block coloured-layer extra-gap" style="background: none repeat scroll 0 0 rgba(0, 0, 0, 0.6); background-color: #ccc !important;"> -->
		<div class="block coloured-layer extra-gap">
	 <div style="background:url(<?php echo base_url()?>assets/frontbgpic.jpg);" class="parallax"></div>
	<div  class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 column col-sm-pull-1" style="z-index: 500">
					
								<div class="widget">
									<div class="map">
										<iframe src="<?php echo $logo[6]['field_value'];?>"></iframe>		
									</div>
								</div><!-- Map Widget -->
								<div class="col-sm-10">
									
								<ul class="contact-info">
										<li class="row"><span><i class="fa fa-phone"></i></span><p style="color:#fff;"><?php echo $logo[1]['field_value'];?></p></li>
										<li class="row"><span><i class="fa fa-envelope-o"></i></span><p style="color:#fff;"><?php echo $logo[2]['field_value'];?></p></li>
										<li class="row"><span><i class="fa fa-map-marker"></i></span><p style="color:#fff;"><?php echo $logo[5]['field_value'];?></p></li>
									</ul>
								</div>
							
				</div>
				<div class="col-md-6 column col-sm-push-1">
					<div class="fun-facts">
						<!-----------form start here------------------>
 <div class="contact-wrap w-100 p-md-5 p-4">



 <?php 
 if($this->session->flashdata('msg'))
 	{?>
 		<div id="form-message-success" class="mb-4" style="background-color: #0000; color:#fff"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>
<form method="POST" action="<?php echo site_url('Contact/contactform')?>" id="contactForm" name="contactForm" class="contactForm" novalidate="novalidate">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="label" for="name">Full Name*</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Name"  value="<?php echo set_value('name'); ?>" required="">
</div>
<?php if(form_error('name'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('name'));?></div> 
<?php   };?>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="email">Contact*</label>
<input type="number" class="form-control" name="contact" id="contact" placeholder="Contact"  value="<?php echo set_value('contact'); ?>" required="">
</div>
<?php if(form_error('contact'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('contact'));?></div> 
<?php   };?>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="label" for="subject">Email Address*</label>
<input type="email" class="form-control" name="email"  value="<?php echo set_value('email'); ?>" id="email" placeholder="Email" required="">
</div>
<?php if(form_error('email'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('email'));?></div> 
<?php   };?>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="subject">Event Date*</label>
<input type="date" class="form-control" name="date"  value="<?php echo set_value('date'); ?>" id="date" placeholder="date" required="">
</div>
<?php if(form_error('date'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('date'));?></div> 
<?php   };?>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="subject">Venue*</label>
<input type="email" class="form-control" name="venue" id="venue"  value="<?php echo set_value('venue'); ?>" placeholder="Venue" required="">
</div>
<?php if(form_error('venue'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('venue'));?></div> 
<?php   };?>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="subject">Occasion*</label>
<input type="email" class="form-control" name="ocacasion" id="ocacasion"  value="<?php echo set_value('ocacasion'); ?>" placeholder="Occasion" required="">
</div>
<?php if(form_error('ocacasion'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('ocacasion'));?></div> 
<?php   };?>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="subject">Number Of Guest*</label>
<input type="email" class="form-control" name="guest" id="guest"  value="<?php echo set_value('guest'); ?>" placeholder="Number Of Guest" required="">
</div>
<?php if(form_error('guest'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('guest'));?></div> 
<?php   };?>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="subject">Tentative Budget*</label>
<input type="email" class="form-control" name="budget"  value="<?php echo set_value('budget'); ?>" id="budget" placeholder="Tentative Budget" required="">
</div>
<?php if(form_error('budget'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('budget'));?></div> 
<?php   };?>
</div>

 <div class="col-md-12">
<div class="form-group">
<label class="label" for="#">Message</label>
<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"  value="<?php echo set_value('message'); ?>"></textarea>
</div>
<?php if(form_error('message'))
		{?>
			<div class="custom"><?php echo strip_tags(form_error('message'));?></div> 
<?php   };?>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Submit" class="button">
<div class="Request"></div>
</div>
</div>
</div>
</form>
</div>
						<!-----------form end here-------------------->
					</div><!-- Fun Facts -->
				</div>
			</div>
		</div>
	</div>
</section><!-- Fun Factors -->
<footer>
	
</footer><!-- Footer -->
<div class="bottom-footer">
	<div class="container"	>
		<?php echo $logo[7]['field_value'];?>
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