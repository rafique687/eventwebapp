<?php include("header.php");?>
<style type="text/css">
	.frame-container {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */  
    padding-top: 25px;
    width: 300%; /* enlarge beyond browser width */
    left: -100%; /* center */
}

.frame-container iframe {
    position: absolute; 
    top: 0%; 
    left: 0; 
    width: 100%; 
    height: 100%;
}
.wrapper {

	overflow: hidden;
   max-width: 100%;
   height: 100% !important;
}

@media (min-aspect-ratio: 16/9) {
  .fwrapper { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .wrapper { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.wrapper { width: 100%; padding-left:10%; }
/*.wrapper h1 { margin-bottom: .2rem; }*/
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
/*.frame-container iframe {

  top: 50%;
  left: 50%;
  width: 100vw;
  height: 100vh;
 transform: translate(-5%, -5%);
}
*/
</style>

<!-- <div class="video-slide"> -->
<!-- <iframe src="http://player.vimeo.com/video/99226596?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;autoplay=1&amp;loop=1"></iframe> -->
<!-- <iframe src="https://www.youtube.com/embed/d6v4h6un9Vc"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
 <!-- <iframe src="https://www.youtube.com/embed/EwfNyI46gaI?rel=0"   frameborder="0"  allow="accelerometer; autoplay;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
<!--  <iframe width="560" height="315" src="https://www.youtube.com/embed/v-f8Hvg3DFQ?controls=0 " title="YouTube video player" frameborder="0"></iframe>
 
</div> -->

<div class="wrapper">
	<div class="video-slide">
   <div class="frame-container" style="padding-top: 600px !important;" >
     <iframe  src="https://www.youtube.com/embed/v-f8Hvg3DFQ?controls=0 " title="YouTube video player" frameborder="0"></iframe>

   </div>
</div>
</div>
<?php include("slidebar.php");?>

<?php include("show.php");?>
<?php include('home-services.php');?>
<?php //include('bookticket.php');?>
<?php //include('homeupcommingevent.php');?>
<?php include('video.php');?>
<?php //include('packages.php');?>
<?php include('sponcer.php');?>
<?php include('becomesponsor.php');?>
<?php //include('contact.php');?>
<?php include('footer.php');?>



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
