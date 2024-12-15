<!DOCTYPE html>

<head> 
<?php //echo "<pre>"; print_r($contentt);exit();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $logo[0]['field_value'];?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php //echo "<pre>"; print_r($logo);exit;?>
  <link rel = "icon" href="<?php echo base_url()?>settingpic/<?php echo $logo[4]['field_value'];?>" 
        type = "image/x-icon">
<meta name="description" content="<?php echo $contentt[2]['field_value'];?>" />
<meta name="keywords" content="<?php echo $contentt[1]['field_value'];?>" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<!-- Styles -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="<?php echo base_url()?>assets/stylesheet" type="text/css" href="css/revolution.css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/audioplayer.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" />
<link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/color/color.css" title="color" />
<!------------------social media icom------------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/*body {margin:0;height:2000px;}*/

.icon-bar {
  position: fixed;
  z-index: 500;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>
<!------------------end social media icon--------------------------------------->
</head>
<body>
	<!--------------------------icom container------------------------------>
	<div class="icon-bar">
<?php if(!empty($basic[0]['field_value']))
  {?>
  <a href="<?php echo $basic[0]['field_value']?>" class="facebook" target="_blank">
  	<i class="fa fa-facebook"></i>
  </a> 
<?php } ?>
<?php if(!empty($basic[1]['field_value']))
 	 {?>
		<a href="<?php echo $basic[1]['field_value'];?>" target="_blank" class="google">
			<i class="fa fa-instagram"></i>
		</a>
<?php } ?>
 <?php if(!empty($basic[3]['field_value']))
        {?>
 		 <a href="<?php echo $basic[3]['field_value']?>" class="twitter" target="_blank">
 		 	<i class="fa fa-twitter"></i></a> 
<?php  } ?>
<?php if(!empty($basic[2]['field_value']))
        {?>  
  <a href="<?php echo $basic[2]['field_value'];?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
<?php } ?>
 <?php if(!empty($basic[4]['field_value']))
        {?>
  <a href="<?php echo $basic[4]['field_value'];?>" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a> 
<?php } ?>
</div>
	<!--------------------------end icon container-------------------------->
	<!----------------------Modal box---------------------------------------->
	  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="background-color: #0000">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Entery Your Details</h4>
        </div>
        <div class="modal-body">
          <!------------form goes here----------------------->
          <div class="contact-wrap w-100 p-md-5 p-4">

<div id="form-message-warning" class="mb-4"></div>
<div id="form-message-success" class="mb-4">
<!-- Your message was sent, thank you! -->
</div>
<form  class="contact" method="post" action="<?php echo site_url('contact/modalinquery');?>" name="contactform" id="contactform1">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="label" for="name" style="color:#000">Full Name</label>
<input type="text" class="form-control" name="name" id="namee" placeholder="Name" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="email" style="color:#000">Contact</label>
<input type="tel" class="form-control" name="contact" id="cnt" placeholder="Contact" pattern=".{10}"  required="">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label class="label" for="subject" style="color:#000">Description</label>
<textarea class="form-control" cols="12" rows="2" name="email" id="emaill" placeholder="Description" required=""></textarea>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<!-- <input type="submit" value="Send Message" id="submit" class="button"> -->
<button class="button" type="submit" id="submit">Send Message</button>
<div class="Request"></div>
</div>
</div>
</div>
</form>
</div>
          <!------------end form here----------------------------->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<!---------------------end modal box------------------------------------->
	<!----------------------success message modal box----------------------->
	<!----------------------Modal box---------------------------------------->
	  <!-- Modal -->
  <div class="modal fade" id="myModall" role="dialog" style="background-color: #0000">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-body">
          <!------------form goes here----------------------->
       		<div class="alert alert-success" role="alert" id="formmessagesuccess">
  				
			</div>
          <!------------end form here----------------------------->
        </div>
     
          <button type="button" class="button" data-dismiss="modal">Close</button>
       
      </div>
      
    </div>
  </div>
	<!----------------------end success message modal box------------------->
<div class="page-loader">
  <div class="item one"></div>
</div><!-- Page Loader -->

<header>
	<div class="container">
		<div class="logo"><a href="<?php echo base_url()?>" title="">
			<img src="<?php echo base_url()?>settingpic/<?php echo $logo[3]['field_value'];?>" alt="" /></a></div><!-- Logo -->
		<nav>
			<ul>
				<li><a href="index.php" title=""><span><i class="fa fa-home"></i></span>Home</a>
					<!-- <ul>
						<li><a href="index8.html" title="">New Wedding Homepage</a></li>
				<li><a href="index7.html" title="">New Charity Homepage With Sticky Header</a></li>
				<li><a href="index.html" title="">Home Page 1</a></li>
						<li><a href="index2.html" title="">Home Page 2</a></li>
						<li><a href="index3.html" title="">Home Page 3</a></li>
						<li><a href="index4.html" title="">Home Page With Text Carousel</a></li>
						<li><a href="index5.html" title="">Home Page With Kenburns</a></li>
						<li><a href="index6.html" title="">Home Page With Video Slide</a></li>
					</ul> -->
				</li>
				<li>
					<a href="<?php echo site_url('about')?>" title=""><span><i class="fa fa-edit"></i></span>About</a>
				</li>
				<li><a href="<?php echo site_url('ourservices');?>" title="">Services</a></li>
				<li><a href="<?php echo site_url('glimps')?>" title=""><span><i class="fa fa-picture-o"></i></span>Glimps</a>
				<!-- 	<ul>
						<li><a href="snaps1.html" title="">Gallery Style 1</a></li>
						<li><a href="snaps2.html" title="">Gallery Style 2</a></li>
						<li><a href="snaps3.html" title="">Gallery Style 3</a></li>
						<li><a href="snaps4.html" title="">Gallery Style 4</a></li>
						<li><a href="snaps5.html" title="">Gallery Style 5</a></li>
					</ul> -->
				</li>
				<li><a href="#" title=""><span><i class="fa fa-pagelines"></i></span>Event</a>
					 <ul>
						<li><a href="<?php echo site_url('events')?>" title="">Upcoming Events</a></li>
						<li><a href="<?php echo site_url('events/portfolio')?>" title="">Portfolio</a></li>
							<!-- <ul>
								<li><a href="<?php echo site_url('events')?>" title="">Portfolio</a></li>
								<li><a href="#" title="">Event Detail Page</a></li>
								
							</ul> -->
						</ul>
						</li>
						<!-- <li><a href="blog.html" title="">Blog</a>
							<ul>
								<li><a href="blog.html" title="">Blog Page</a></li>
								<li><a href="post-detail.html" title="">Blog Single Page</a></li>
								<li><a href="post-detail-sidebar1.html" title="">Blog Single Left Sidebar</a></li>
								<li><a href="post-detail-sidebar2.html" title="">Blog Single Right Sidebar</a></li>
							</ul>
						</li>
						 <li><a href="speakers.html" title="">Event Speakers</a></li>
						<li><a href="404.html" title="">Error 404</a></li>
						<li><a href="<?php echo site_url('commingsoon')?>" title="">Comming soon Page</a></li>
					</ul> -->
				
				</li>
				<!-- <li><a href="schedule.html" title=""><span><i class="fa fa-joomla"></i></span>Schedule</a></li> -->
				
				<li><a href="<?php echo site_url('packages')?>" title=""><span><i class="fa fa-google-wallet"></i></span>Packages</a></li>
				<li><a href="<?php echo site_url('contact')?>" title=""><span><i class="fa fa-paper-plane"></i></span>Contact</a></li>
				
			</ul>
		</nav><!-- Navigation -->
	</div>
</header><!-- Header -->

<div class="responsive-header">
	<div class="responsive-logo">
		<a href="#" title=""><img src="<?php echo base_url()?>settingpic/<?php echo $logo[3]['field_value'];?>" alt="Logo" /></a>
	</div><!-- Responsive Logo -->	
	<span><i class="fa fa-align-justify"></i></span>
	<ul>
		<li><a href="index.php" title="">Home</a>
			<!-- <ul>
				<li><a href="index8.html" title="">New Wedding Homepage</a></li>
				<li><a href="index7.html" title="">New Charity Homepage With Sticky Header</a></li>
				<li><a href="index.html" title="">Home Page 1</a></li>
				<li><a href="index2.html" title="">Home Page 2</a></li>
				<li><a href="index3.html" title="">Home Page 3</a></li>
				<li><a href="index4.html" title="">Home Page With Text Carousel</a></li>
				<li><a href="index5.html" title="">Home Page With Kenburns</a></li>
				<li><a href="index6.html" title="">Home Page With Video Slide</a></li>
			</ul> -->
		</li>
		<li><a href="<?php echo site_url('about');?>" title="">About</a></li>
		<li><a href="<?php echo site_url('ourservices');?>" title="">Services</a></li>
		<li><a href="<?php echo site_url('glimps');?>" title="">Glimps</a>
			<!-- <ul>
				<li><a href="snaps1.html" title="">Gallery Style 1</a></li>
				<li><a href="snaps2.html" title="">Gallery Style 2</a></li>
				<li><a href="snaps3.html" title="">Gallery Style 3</a></li>
				<li><a href="snaps4.html" title="">Gallery Style 4</a></li>
				<li><a href="snaps5.html" title="">Gallery Style 5</a></li>
			</ul> -->
		</li>
		<li><a href="#" title="">Event</a>
			 <ul>
				<li><a href="<?php echo site_url('events');?>" title="">Events</a>
					 <ul>
						<li><a href="<?php echo site_url('events')?>" title="">Upcoming Events</a></li>
						<li><a href="<?php echo site_url('events/portfolio')?>" title="">Portfolio</a></li>
						
					</ul>
				</li>
			 	<!--<li><a href="blog.html" title="">Blog</a>
					<ul>
						<li><a href="blog.html" title="">Blog Page</a></li>
						<li><a href="post-detail.html" title="">Blog Single Page</a></li>
						<li><a href="post-detail-sidebar1.html" title="">Blog Single Left Sidebar</a></li>
						<li><a href="post-detail-sidebar2.html" title="">Blog Single Right Sidebar</a></li>
					</ul>
				</li>
				 <li><a href="schedule.html" title="">Event Schedule Page</a></li>
				<li><a href="speakers.html" title="">Event Speakers</a></li>
				<li><a href="404.html" title="">Error 404</a></li>
				<li><a href="<?php echo site_url('commingsoon');?>" title="">Comming soon Page</a></li>-->
			</ul>
		</li>
		
		<li><a href="<?php echo site_url('packages')?>" title="">Packages</a></li>
		
	</ul>
</div><!--Responsive header -->

