<?php include('header.php');?>
<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>UPCOMING <span>EVENTS</span></h1>
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
						<?php  foreach ($upcoming as $uevent) {  $pic=explode(',',$uevent['background']);
						//echo "<pre>"; print_r($uevent);?>

						<div class="upcoming-event">
							<div class="event-detail">
								<h3><?php echo $uevent['sevices_name'];?></h3>
								<span><img src="item/event-icon.png" alt="" />
									<?php if($uevent['catid']==1)
									{?>
									<h4 style="text-transform: uppercase;"><?php echo $uevent['gname'];?> <span style="color: red"> Weds </span> <?php echo $uevent['bname'];?></h4></span>
								<?php } 
								else{?> 
									<h4 style="text-transform: uppercase;"><?php echo $uevent['name'];?> <?php echo $uevent['lname'];?></h4></span>
						<?php } ?>
								<p>

									<b>Event Venue :  </b><?php echo  $uevent['venue'];?>
								</br>
									<b>Date : </b><?php $ed=explode(" ",$uevent['edate']);echo  $ed[0];?>   <span>  </span> <b>Time :</b>
									<span style="text-transform: uppercase;"><?php echo $uevent['etime']?></span>
									<?php /********************************************/
									date_default_timezone_set("Asia/Kolkata");
										$datet=date("Y-m-d H:i:s");
										 $datetimemixed=$ed[0]." ".$uevent['etime'];
										$date1 = new DateTime($datet);
										$date2 = new DateTime($datetimemixed);
									
									?>

								</br>
								<!-------------------------------------------------------------->
			<?php
			/*$date1 = new DateTime($datetimemixed);
				$now = new DateTime();
				echo $ss = $date1->format('U') - $now->format('U');
			$seconds = $ss%60;
			$hours = (intval($ss) / 3600) % 24;
			$days = intval(intval($ss) / (3600*24));
			$hours = (intval($ss) / 3600) % 24;
			$minutes = floor($ss/2592000);*/

		   $rem = strtotime($datetimemixed) - time();
			$days = floor($rem / 86400);
			//$hours  = floor(($rem % 86400) / 3600 );
			$hours = floor($rem % (24 * 60 * 60) / 3600);
			$minutes = floor(($rem % 3600) / 60);
			$seconds = ($rem % 60);

			//echo $time_end = microtime(true);
			
		?> 
	
									<!-------------------------------------------------------------->
								<b>Contact No. : </b> <?php echo $uevent['mobile'];?>
								</p>
								<ul class="countdown">
									<li> 
										<div class="time-box">
											<?php /*
											$datetime1 = new DateTime(date("Y-m-d"));
											$datetime2 = new DateTime($uevent['edate']);
											$interval = $datetime1->diff($datetime2);*/
											?>
											<span class="days"><?php if($days<0){ echo 00;}else{ echo $days;}?></span><p class="days_ref">DAYS</p>
										</div>
									</li>
									<li> 
										<div class="time-box">
											<span class="hours"><?php if($hours< 0) { echo 00 ;} else{ echo $hours;}?></span><p class="hours_ref">HOURS</p>
										</div>
									</li>
									<li> 
										<div class="time-box">
											<span class="minutes"><?php if($minutes < 0){ echo 00; } else{ echo substr($minutes, 0, 3);}?></span><p class="minutes_ref">MINTS</p>
										</div>
									</li>
									<li> 
										<div class="time-box">
											<span class="seconds"><?php if($seconds< 0) { echo 00 ;} else{ echo substr($seconds, 0, 3);}?></span><p class="seconds_ref">SECS</p>
										</div>		
									</li>
								</ul><!-- Event Countdown -->							
								<span class="event-date"><strong>
									<?php $date=explode('-',$uevent['edate']); echo substr_replace($date[2],"",2);?></strong><i>
									<?php 
									
									 echo date("F",strtotime($uevent['edate']));
									 ?>
								</i><i><?php echo substr_replace($date[0] ,"",4);?></i></span>
							</div><!-- Event Details -->
							<div class="event-img">
								<!-- <img src="http://placehold.it/570x520" alt="" /> -->
								<img src="<?php echo base_url()?>client/<?php echo $pic[0]?>" width="570" height="520" alt="" />
								
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
