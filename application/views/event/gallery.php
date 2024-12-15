<?php include('header.php');?>


<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(http://placehold.it/1866x1012);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						<span>WE PROVIDE AWESOME DEALS</span>
						<h1>SNAPS <span>FROM SHOWS</span></h1>
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
					<div class="controls">	
						<ul>
							<li class="filter" data-filter="all">All</li>
							<?php foreach ($galleryname as $gname) {?>
								
							<li class="filter" data-filter="<?php echo $gname['eventid']?>"><?php echo $gname['event_name']?></li>
						<?php } ?>
							
						</ul>
					</div>
					<div class="row">
						<ul id="Grid">
							<?php foreach ($photo as $pic) {?>
							
							<li class="mix col-md-6  <?php echo $pic['parent_cateid']?>">
								<div class="portfolio">
									<?php $grid=explode(",",$pic['eventvideo_photo_url']);
									//foreach ($grid as $pt) { ?>
									<img src="<?php echo base_url()?>event/<?php echo $grid[0];?>" alt="Not Found" onerror=this.src="<?php echo base_url()?>defualt/defualt.jpg" height="500" />
									 <div class="hover">
										<h3><?php echo  $pic['title'];?></h3>
										<p><?php echo $pic['description'];?></p>
									<!-- 	<a data-rel="prettyPhoto" href="<?php echo base_url()?>event/<?php echo $grid[0];?>" width="800" height="500"  title="" style="z-index: 3000 !important; border: 4px solid #000;">
											<img src="<?php echo base_url()?>event/<?php echo $grid[0];?>" alt="Not Found" onerror=this.src="<?php echo base_url()?>defualt/defualt.jpg"/></a> -->
									</div>
								<?php //} ?>
								</div>
							</li>
						<?php } ?>
						
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php');?>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.mixitup.min.js"></script>






<script>
jQuery(window).load(function() {
	/* =============== Masonary Tabs ===================== */
	$(function(){
		$('#Grid').mixitup({
			effects: ['fade','scale'],
			transitionSpeed: 600,
			layoutMode: 'list',
		});
	});

});	
</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>

</body>
