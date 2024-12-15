<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>
<!-- main content start-->

		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Add Project</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
							<h4>Add Project</h4>
						
						</div>
						<div class="form-body">
						
				<form action="<?php echo site_url()?>Client/add_client" method="post">
<?php //echo "<pre>"; print_r($event);?>
						<div class="form-group"> 
						<label for="exampleInputEmail1">Select Event Type</label> 
						<select name='category' class="form-control" id="party" required="">
							<option value="" selected="" disabled="" >Select Event</option>
							<?php foreach ($event as $project) 
							{?>
								<option value="<?php echo $project['service_id']?>"><?php echo $project['sevices_name']?></option>
							<?php } ?>

						</select> 
						<?php if(form_error('name'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('name'));?></div> 
			 	 <?php  };?>
					</div> 
					
					<div class="form-group"> 
						<label for="exampleInputEmail1">First Name</label> 
						<input type="text" class="form-control" id="catename" name="name" placeholder="Enter Name" required=""  value="<?php echo set_value('name'); ?>"> 
						<?php if(form_error('name'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('name'));?></div> 
			 	 <?php  };?>
					</div> 
					
				 
					<div class="form-group"> 
						<label for="exampleInputEmail1">Last Name</label> 
						<input type="text" class="form-control" id="degi" name="lname" placeholder="Enter Last Name" required=""  value="<?php echo set_value('lname'); ?>"> 
						<?php if(form_error('lname'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('lname'));?></div> 
			 	 <?php  };?>
					</div> 
		<!----------Destination and wedding--------------------------------------->
					<div id="groom" style="display: none">
						<div class="form-group"> 
						<label for="exampleInputEmail1">Groom Name</label> 
						<input type="text" class="form-control" id="gname" name="gname" placeholder="Enter Groom Name"  value="<?php echo set_value('gname'); ?>"> 
						<?php if(form_error('gname'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('gname'));?></div> 
			 	 <?php  };?>
					</div> 

					<div class="form-group"> 
						<label for="exampleInputEmail1">Bride Name</label> 
						<input type="text" class="form-control" id="bname" name="bname" placeholder="Enter name"   value="<?php echo set_value('bname'); ?>"> 
						<?php if(form_error('bname'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('bname'));?></div> 
			 	 <?php  };?>
					</div> 
					<div class="form-group"> 
						<label for="exampleInputEmail1">Your Relation</label> 
						<input type="text" class="form-control" id="degi" name="relation" placeholder="Enter Your Relation" value="<?php echo set_value('relation'); ?>"> 
						<?php if(form_error('relation'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('relation'));?></div> 
			 	 <?php  };?>
					</div>
						
					</div>
		<!-------------------------------Corporate party--------------------------------------------------->
		<div id="corporate" style="display: none">
						<div class="form-group"> 
						<label for="exampleInputEmail1">Principle Name</label> 
						<input type="text" class="form-control" id="principle" name="principle" placeholder="Enter Principle Name"  value="<?php echo set_value('principle'); ?>"> 
						<?php if(form_error('principle'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('principle'));?></div> 
			 	 <?php  };?>
					</div> 

					<div class="form-group">Your Designation</label> 
						<input type="text" class="form-control" id="degination" name="degination" placeholder="Enter Designation"   value="<?php echo set_value('degination'); ?>"> 
						<?php if(form_error('degination'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('degination'));?></div> 
			 	 <?php  };?>
					</div> 
						
					</div>
		<!------------------------------------Dirthday party------------------------------------------------>
		        <div id="bday" style="display: none;">
					<div class="form-group"> 
						<label for="exampleInputEmail1" id="cap">Whose Birthday</label> 
						<input type="text" class="form-control" id="holder"  name="whosename" placeholder="Enter Name"  value="<?php echo set_value('whosename'); ?>"> 
						<?php if(form_error('whosename'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('bdayname'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group" id="relation"> 
						<label for="exampleInputEmail1">Your Relation</label> 
						<input type="text" class="form-control" id="degi" name="relation" placeholder="Enter Your Relation"  value="<?php echo set_value('relation'); ?>"> 
						<?php if(form_error('relation'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('relation'));?></div> 
			 	 <?php  };?>
					</div>
				</div>
	
				  
					
					<div class="form-group"> 
						<label for="exampleInputEmail1">Contact No.</label> 
						<input type="text" class="form-control" id="degi" name="mobile" placeholder="Enter Your Contact" required=""  value="<?php echo set_value('mobile'); ?>"> 
						<?php if(form_error('mobile'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('mobile'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group"> 
						<label for="exampleInputEmail1">Alternative Contact No.</label> 
						<input type="text" class="form-control" id="degi" name="altmobile" placeholder="Enter Alternative Contact"  value="<?php echo set_value('altmobile'); ?>"> 
						<?php if(form_error('altmobile'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('altmobile'));?></div> 
			 	 <?php  };?>
					</div>
						<div class="form-group"> 
						<label for="exampleInputEmail1">Your Email</label> 
						<input type="email" class="form-control" id="degi" name="email" placeholder="Enter Email Address"  value="<?php echo set_value('email'); ?>"> 
						<?php if(form_error('email'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('email'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group"> 
						<label for="exampleInputEmail1">Event Date</label> 
						<input type="date" class="form-control" id="degi" name="edate" required=""  value="<?php echo set_value('edate'); ?>"> 
						<?php if(form_error('edate'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('edate'));?></div> 
			 	 <?php  };?>
					</div>
					
						<label for="exampleInputEmail1">Event Time</label> 
						
						 <input type="time" name="hr"  id="appt"  class="form-control" required="">
				
					
						<div class="form-group"> 
						<label for="exampleInputEmail1">Location(City)</label> 
						<input type="text" class="form-control"  name="city" required=""  value="<?php echo set_value('city'); ?>" required placeholder="Enter City"> 
						<?php if(form_error('city'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('city'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group"> 
						<label for="exampleInputEmail1">Event Venue</label> 
						<textarea rows="5" cols="12" class="form-control" placeholder="Enter Here..." required="" name="venue"><?php if(!empty(set_value('venue'))){ echo set_value('venue'); }?></textarea>
						<?php if(form_error('venue'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('venue'));?></div> 
			 	 <?php  };?>
					</div>

						<input type="hidden" value="" name="cateimg" id="cateimg">
							<div class="form-group col-12">
							<div id="dropzonewidget" class="dropzone" data-url="<?php echo site_url(); ?>client/uploadfiles">
							</div> 
						</div>
					
								
					<button type="submit" class="btn btn-default push" id="submi">Submit</button>
				</div>
				</form> 
				</div>
					</div>

				</div>
			</div>
		</div>


<script>
$(document).ready(function() {
	$('#party').on('change', function() { //alert('yss');
		var id = $("#party").val();
		if(id == 3 || id == 4 || id==5 || id == 7 || id == 8 || id == 9)
		{  //alert(id);
			 $("#groom").hide();
			 $("#corporate").hide();
		  $("#bday").show();
		  $("#holder").attr("required", "true");
			if(id==3)
			{
				$("#groom").hide();
			 	$("#corporate").hide();
				$('#cap').text("Whose Birthday");
				 $("#degination").removeAttr("required");
				$("#holder").attr("placeholder", "Enter Name").placeholder();
			}
			else if(id==4)
			{
				$("#groom").hide();
			 	$("#corporate").hide();
			 	$("#relation").hide();
				$("#bday").hide();
				$("#holder").hide();
				$("#holder").removeAttr("required");
			    $('#cap').text("Parents Name");
			    $("#holder").attr("placeholder", "Enter Parents Name").placeholder();
			}

				else if(id==5)
			{
				$("#groom").hide();
			 	$("#corporate").hide();
			 	$("#relation").hide();
				//$("#bday").hide();
			    $('#cap').text("Parents Name");
			    $("#holder").attr("placeholder", "Enter Parents Name").placeholder();
			}
			else if(id==7)
			{
				$("#groom").hide();
			 	$("#corporate").hide();
				$('#cap').text("Whose Anniversary");
				$("#holder").attr("placeholder", "Enter Name...").placeholder();
			}
			else if(id==8)
			{
				$("#groom").hide();
			 	$("#corporate").hide();
				$("#cap").text("Whose Engagement")
				$("#holder").attr("placeholder", "Enter Name..").placeholder();
			}
			else if(id==9)
			{   $("#relation").hide();
				$("#groom").hide();
			 	$("#corporate").hide();
				$("#cap").text("Whose Concert")
				$("#holder").attr("placeholder", "Enter Celebrities Name").placeholder();
			}
			
			else
			{   $("#relation").hide();
				$("#bday").hide();
				$("#groom").hide();
			 	$("#corporate").hide();
			}
		}

		else if(id==1)
		{	$("#bday").hide();
			 $("#corporate").hide();
		     $("#groom").show();
		     $("#gname").attr("required", "true");
		      $("#bname").attr("required", "true");
		}
		else if(id==2)
		{
			$("#bday").hide();
			 $("#groom").hide();
			 $("#corporate").show();
			   $("#gname").removeAttr("required");
			    $("#bname").removeAttr("required");
			  $("#f").attr("required", "true");
		      $("#degination").attr("required", "true");
		}

		else if(id==10)
			{
				$("#relation").hide();
				$("#bday").hide();
				$("#groom").hide();
			 	$("#corporate").hide();
			}
		else if(id==6)
		{
				
				$("#bday").hide();
				$("#groom").hide();
			 	$("#corporate").hide();
			 	$("#relation").show('show');
		}
		
	});
});
</script>

<script>
	Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			url: $("#dropzonewidget").data("url"),
			addRemoveLinks: true,
			success: function (file, response) {
				var nm = $("#cateimg").val();
				nm = nm.split(",");
				nm.push(response.replace(/"/g, ''));
				nm = nm.filter(ele=>ele!="");
				nm.join(",");
				$("#cateimg").val(nm)
				file.previewElement.classList.add("dz-success");
			},
			error: function (file, response) {
				file.previewElement.classList.add("dz-error");
			}
		});
</script>