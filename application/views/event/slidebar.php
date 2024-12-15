<div class="slider-bar">
	<div class="container">
		<div class="bottom-bar">
			<div class="row">
				<div class="col-md-6 column">
					<div class="search-event">
						<h4>Want The Latest Event News</h4>
						<span>Subscribe To Our News Letter And Don’t Forget To Miss Event</span>
						<form action="<?php echo site_url('contact/news')?>" method="post">
							<input type="text" name="email" placeholder="Enter Your E-mail Address" id="news" class="form-control" required="" />
							<input type="submit" value="Submit Now" id="newsletter" />
						</form>
						<?php if($this->session->flashdata('news'))
					{?> 
						<div class="alert alert-success">
  						<strong>Success!</strong> <?php echo $this->session->flashdata('news');?>
						</div>
					<?php } ?>
					</div><!-- Search Events -->
					
				</div>
				<div class="col-md-6 column">
					<div class="audio-box">
						<h4>Give Your Life Some New Energy</h4>
						<strong>Unknown Artist</strong>
						<audio preload="auto" controls>
							<source src="<?php echo base_url()?>assets/BlueDucks_FourFlossFiveSix.mp3">
							<source src="<?php echo base_url()?>assets/BlueDucks_FourFlossFiveSix.ogg">
							<source src="<?php echo base_url()?>assets/BlueDucks_FourFlossFiveSix.wav">
						</audio>
					</div><!-- Audio Box -->
				</div>
			</div>
		</div>
	</div>
</div><!-- Slider Bar -->

<script>
$(document).ready(function(){ 
    $("#newsletter").click(function () { alert("yss")
        var email = $("#news").val();
            jQuery.ajax({
            url: "<?php echo site_url()?>/product/jquerysubcate?id="+gender,
            type: "GET",
            data: "id = "+ gender,
            dataType: "html",
            success: function(data)
            { 
             $("#subcate").html(data);
            }               
        });
    });
});
</script>


