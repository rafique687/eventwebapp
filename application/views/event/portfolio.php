<?php include('header.php');?>
<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>OUR  <span>PORTFOLIO</span></h1>
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
					<div class="upcoming-event-page remove-ext">
						<?php foreach ($upcoming as $uevent) {  $pic=explode(',',$uevent['background']);
						//echo "<pre>"; print_r($uevent);?>

						<div class="upcoming-event">
							<div class="event-detail">
								<h3><?php echo $uevent['sevices_name'];?></h3>
								<span><img src="item/event-icon.png" alt="" />
									<?php if($uevent['catid']==1)
									{?>
									<h4 style="text-transform: uppercase;">
										<?php echo $uevent['gname'];?> <span style="color: red"> Weds </span> <?php echo $uevent['bname'];?></h4></span>
									<?php }
									else {?>
											<h4 style="text-transform: uppercase;"><?php echo $uevent['name'];?> <?php echo $uevent['lname'];?></h4></span>
									<?php } ?>
								<p>
									<b>Event Venue :  </b><?php echo  $uevent['venue'];?>
								</br>
									<b>Date : </b><?php $dd=explode(" ",$uevent['edate']);echo  $dd[0];?>   <span>  </span> <b>Time :</b>
									<span style="text-transform: uppercase;"><?php /*echo preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$uevent['etime']);*/echo $uevent['etime'];?></span>
								
							
								</p>
														
								<span class="event-date"><strong>
									<?php $date=explode('-',$uevent['edate']); echo substr_replace($date[2],"",2);?></strong><i>
									<?php 
									
									 echo date("F",strtotime($uevent['edate']));
									 ?>
								</i><i><?php echo $date[0];?></i></span>
							</div><!-- Event Details -->
				<div class="event-img">
				<a href="<?php echo base_url()?>client/portfoliogallery?id=<?php echo $uevent['client_id'];?>">
				<img src="<?php echo base_url()?>client/<?php echo $pic[0]?>" width="570" height="520" alt="" />
				</a>
				</div><!-- Event Image -->
						</div><!-- Upcoming Event -->
					<?php } ?>
						
						

					</div>					
				</div>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php');?>
<script type="text/javascript" src="js/jquery.downCount.js"></script> 
<script>
$(document).ready(function() {
$( function() { $( 'audio' ).audioPlayer(); } );

	$('.countdown').downCount({
	    date: '06/25/2016 12:00:00',
	    offset: +10
	});
	$('.countdown2').downCount({
	    date: '02/12/2016 12:00:00',
	    offset: +10
	});
	$('.countdown3').downCount({
	    date: '06/25/2014 12:00:00',
	    offset: +10
	});

});
</script>
<script type="text/javascript" src="js/script.js"></script>

</body>
