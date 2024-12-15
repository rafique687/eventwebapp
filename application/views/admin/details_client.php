<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>
<!-- main content start-->

		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1"><?php echo $details['name'];?> Details</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
							<h4><?php echo $details['sevices_name'];?></h4>
						
						</div>
						<div class="form-body">
						
				<form action="<?php echo site_url()?>Client/add_client" method="post">
<?php //echo "<pre>"; print_r($details);?>
				<div class="row well">				
					
					<div class="col-sm-3">Name</div>
					<div class="col-sm-3"><b><?php echo $details['name'];?>  <?php echo $details['lname'];?></b>
					</div>						
					
				</div>
				<?php if($details['catid']==1 || $details['catid']==2){?>
				<div class="row well">				
					
					<div class="col-sm-3"><?php if($details['catid']==1){ echo 'Groom Name';} else{ echo "Principle Name "; }?></div>
					<div class="col-sm-3"><b><?php echo $details['gname'];?></b>
					</div>						
					
				</div>
				<div class="row well">				
					
					<div class="col-sm-3"><?php if($details['catid']==1){ echo 'Bride Name'; } else{ echo "Designation";}?></div>
					<div class="col-sm-3"><b><?php echo $details['bname'];?></b>
					</div>						
					
				</div>
			
			<?php } ?>

				<?php if($details['catid']==1 || $details['catid']==3 || $details['catid']==6){?>
				<div class="row well">				
					
					<div class="col-sm-3">Your Relation</div>
					<div class="col-sm-3"><b><?php echo $details['relation'];?></b>
					</div>						
					
				</div>
			<?php } ?>

			<?php if($details['catid']==3 || $details['catid']==4 || $details['catid']==5 || $details['catid']==9 || $details['catid']==7 || $details['catid']==8)
				{?>
					<div class="row well">				
					<div class="col-sm-3"><?php if($details['catid']==4 || $details['catid']==5){ echo 'Parents Name';} elseif($details['catid']==9){ echo 'Whose Concern';} elseif($details['catid']==7){ echo 'Whose Anniversary';} elseif($details['catid']==8){ echo "Whose Engagement";} else { echo 'Whose Birth Day';}?></div>
					<div class="col-sm-3"><b><?php echo $details['bdayname'];?></b>
					</div>						
					
				</div>
			<?php } ?>

			<div class="row well">				
					<div class="col-sm-3">Contact :</div>
					<div class="col-sm-3"><b><?php echo $details['mobile'];?></b>
					</div>						
					
				</div>

				<div class="row well">				
					<div class="col-sm-3">Alt Contact :</div>
					<div class="col-sm-3"><b><?php echo $details['altmobile'];?></b>
					</div>						
					
				</div>
				<div class="row well">				
					<div class="col-sm-3">Email :</div>
					<div class="col-sm-3"><b><?php echo $details['email'];?></b>
					</div>						
					
				</div>

				<div class="row well">				
					<div class="col-sm-3">Event Date :</div>
					<div class="col-sm-3"><b><?php echo $details['edate'];?></b>
					</div>						
					
				</div>

				<div class="row well">				
					<div class="col-sm-3">Event Time :</div>
					<div class="col-sm-3"><b><?php echo $details['etime']?></b>
					</div>						
					
				</div>
				<div class="row well">				
					<div class="col-sm-3">Event Venue :</div>
					<div class="col-sm-3"><b><?php echo $details['venue']?></b>
					</div>						
					
				</div>

				
					
								
					<!-- <button type="submit" class="btn btn-default push" id="submi">Submit</button> -->
				</div>
				</form> 
				</div>
					</div>

				</div>
			</div>
		</div>


