<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crazy Hour HTML Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<!-- Styles -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/color/color.css" title="color" />
</head>
<body>
<div class="page-loader">
  <div class="item one"></div>
</div><!-- Page Loader -->
<div class="comming-soon blackish">
	<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
	<div class="container">
		<div class="soon-logo">
			<a href="#" title=""><img src="images/logo.png" alt="" /></a>
		</div>
		<h1>COMMING SOON</h1>
		<p>Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sed commodo tempor dapibus tortor volutpat, eget rhoncus nisi fringilla. Phasellus ornare risus ineuismod varius.</p>

		<ul class="countdown">
			<li> 
				<div class="time-box">
					<span class="days">00</span><p class="days_ref">Days</p>
				</div>
			</li>
			<li> 
				<div class="time-box">
					<span class="hours">00</span><p class="hours_ref">Hours</p>
				</div>
			</li>
			<li> 
				<div class="time-box">
					<span class="minutes">00</span><p class="minutes_ref">Minutes</p>
				</div>
			</li>
			<li> 
				<div class="time-box">
					<span class="seconds">00</span><p class="seconds_ref">Seconds</p>
				</div>
			</li>
		</ul><!-- Event Countdown -->							

		<div class="newsletter">
			<h4>SUBSCRIBE TO NEWSLETTER</h4>
			<p>Powerfull HTML5/CSS3 Animations and Effects</p>
			<form>
				<input type="text" placeholder="Enter Your Email Address" />
				<input type="submit" Value="SUBSCRIBE NOW" />
			</form>
		</div><!-- Newsletter -->
	</div>
</div>


<div class="bottom-footer">
	<div class="container">
		<p>All rights reserved 2015-<a title="" href="#">Crazy Hour</a> By <a title="" href="http://themeforest.net/user/stillidea/portfolio?WT.ac=item_portfolio&amp;WT.z_author=stillidea">stillidea.com</a></p>
	</div>
</div><!-- Bottom Footer -->


<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="js/jquery2.1.1.js"></script>
<script type="text/javascript" src="js/prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.downCount.js"></script> 
<script type="text/javascript" src="js/script.js"></script>


<script>
$(document).ready(function() {
$( function() { $( 'audio' ).audioPlayer(); } );

	$('.countdown').downCount({
	    date: '06/25/2016 12:00:00',
	    offset: +10
	});

});
</script>

</body>
