<?php include("header.php");?>
<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>ABOUT <span>US</span></h1>
						<p>We Deliver Love, Laughter and Happily Ever After..</p>
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
						<div class="about-video">
							<div class="about-detail">
								<h3>Creativity Based <span>on Knowledge</span></h3>
								<p><?php echo $contentt[3]['field_value'];?>.</p>
							</div><!-- Event Details -->
							<div class="about-img">
								<!-- <img src="http://placehold.it/570x520" alt="" /> -->
								<img src="<?php echo base_url()?>assets/frontbgpic.jpg" width="570" height="650"  alt="" />
							</div><!-- Event Image -->
						</div><!-- Upcoming Event -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Upcoming Event Section -->

<?php include('sponcer.php');?>
<?php include('becomesponsor.php');?>
<?php include("footer.php");?>
<script>
$(document).ready(function() { 
	$('.countdown').downCount({
	    date: '06/25/2016 12:00:00',
	    offset: +10
	});

	/* =============== Service Carousel ===================== */
	$('.service-carousel').owlCarousel({
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: true,
		mouseDrag: true,
		items:1,
		margin: 0,
		singleItem: true,
		autoplayHoverPause: true,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut'
	});

	$( function() { $( 'audio' ).audioPlayer(); } );

});

$(window).load(function() {
	/* =============== Fun Facts Counter ===================== */
	$(".counter").counterUp({ 
	    time: 1000
	    
	});
});
</script>



</body>
