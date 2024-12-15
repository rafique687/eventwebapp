<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>

<script>
$(document).ready(function(){ 
$('.idd').on("click",function(){
 	var imgname =  $(this).attr("id");
	var cateid  = $("#edit").val();
	var confirmalert = confirm("Are you sure want to delete this image?");
  if (confirmalert == true) {
	 // AJAX Request
	 $.ajax({
				url: "<?php echo base_url("client/delimage");?>",
				type: "POST",
				data: {
						type: 1,
						cateid: cateid,
						imgnam: imgname,
					},
				cache: false,
				success: function(dataResult)
				{
					//location.reload();				
				}
	 });
  }

});

});
</script>
<!-- main content start-->

		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Update Client</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
							<h4>Update Client</h4>
						
						</div>
						<div class="form-body">
						
					<form action="<?php echo site_url()?>client/edit_insert" method="post">
					<input type="hidden" name="gett" value="<?php echo $editid?>">
					<div class="form-group"> 
						<label for="exampleInputEmail1">Select Event Type</label> 
						<select name='category' class="form-control" id="party" required="">
							<option value="" selected="" disabled="" >Select Event</option>
							<?php foreach ($service as $sr) 
							{?>
								<option <?php if($client['catid']==$sr['service_id']){ echo  'selected';}?> value="<?php echo $sr['service_id']?>"><?php echo $sr['sevices_name']?></option>
							<?php } ?>

						</select> 
						<?php if(form_error('name'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('name'));?></div> 
			 	 <?php  };?>
					</div> 
					
					<div class="form-group"> 
						<label for="exampleInputEmail1">First Name</label> 
						<input type="text" class="form-control" id="catename" name="name" required=""  value="<?php echo $client['name']; ?>"> 
						<?php if(form_error('name'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('name'));?></div> 
			 	 <?php  };?>
					</div> 
					
				 
					<div class="form-group"> 
						<label for="exampleInputEmail1">Last Name</label> 
						<input type="text" class="form-control" id="degi" name="lname" required=""  value="<?php echo $client['lname']; ?>"> 
						<?php if(form_error('lname'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('lname'));?></div> 
			 	 <?php  };?>
					</div> 
		<!----------Destination and wedding--------------------------------------->
					<div id="groom" style="display: none">
						<div class="form-group"> 
						<label for="exampleInputEmail1">Groom Name</label> 
						<input type="text" class="form-control" id="gname" name="gname" value="<?php echo $client['gname']; ?>"> 
						<?php if(form_error('gname'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('gname'));?></div> 
			 	 <?php  };?>
					</div> 

					<div class="form-group"> 
						<label for="exampleInputEmail1">Bride Name</label> 
						<input type="text" class="form-control" id="bname" name="bname"  value="<?php echo $client['bname'] ?>"> 
						<?php if(form_error('bname'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('bname'));?></div> 
			 	 <?php  };?>
					</div> 
					<div class="form-group"> 
						<label for="exampleInputEmail1">Your Relation</label> 
						<input type="text" class="form-control" id="degi" name="relation" value="<?php echo $client['relation'] ?>"> 
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
						<input type="text" class="form-control" id="holder" id="whosename" name="whosename"  value="<?php echo $client['bdayname']; ?>"> 
						<?php if(form_error('whosename'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('bdayname'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group" id="relation"> 
						<label for="exampleInputEmail1">Your Relation</label> 
						<input type="text" class="form-control" id="degi" name="relation" value="<?php echo $client['relation']; ?>"> 
						<?php if(form_error('relation'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('relation'));?></div> 
			 	 <?php  };?>
					</div>
				</div>
	
				  
					
					<div class="form-group"> 
						<label for="exampleInputEmail1">Contact No.</label> 
						<input type="text" class="form-control" id="degi" name="mobile" required=""  value="<?php echo $client['mobile']; ?>"> 
						<?php if(form_error('mobile'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('mobile'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group"> 
						<label for="exampleInputEmail1">Alternative Contact No.</label> 
						<input type="text" class="form-control" id="degi" name="altmobile" value="<?php echo $client['altmobile']; ?>"> 
						<?php if(form_error('altmobile'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('altmobile'));?></div> 
			 	 <?php  };?>
					</div>
						<div class="form-group"> 
						<label for="exampleInputEmail1">Your Email</label> 
						<input type="email" class="form-control" id="degi" name="email" value="<?php echo $client['email']; ?>"> 
						<?php if(form_error('email'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('email'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group"> 
						<label for="exampleInputEmail1">Event Date</label> 
						<input type="date" class="form-control" id="degi" name="edate" required=""  value="<?php echo $client['edate']; ?>"> 
						<?php if(form_error('edate'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('edate'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group"> 
						<label for="exampleInputEmail1">Event Time</label> 
						<div class="row well">
						
						 <select class="col-sm-1"  name="hr"required>
			                <option>Hours </option>
			                <option value="01"> 01 </option>
			                <option value="02"> 02 </option>
			                <option value="03"> 03 </option>
			                <option value="04"> 04 </option>
			                <option value="05"> 05 </option>
			                <option value="06"> 06 </option>
			                <option value="07"> 07 </option>
			                <option value="08"> 08 </option>
			                <option value="09"> 09 </option>
			                <option value="10"> 10 </option>
			                <option value="11"> 11 </option>
			                <option value="12"> 12 </option>
			              </select>
			               <select class="col-sm-1" required name="mn">
			                <option>Minuts</option>
			                <option value="10"> 10</option>
			                <option value="20"> 20 </option>
			                <option value="30"> 30 </option>
			                <option value="40"> 40 </option>
			                <option value="50"> 50 </option>
			                <option value="60"> 55</option>
			              
			              </select>
			              <select name="ampm">
			              	<option>Zone</option>
			                <option value="am">AM</option>
			                <option value="pm">PM</option>
			              </select>
			          </div>
			      </div>
					
						<div class="form-group"> 
						<label for="exampleInputEmail1">Location(City)</label> 
						<input type="text" class="form-control"  name="city" required=""  value="<?php echo $client['city']; ?>" required placeholder="Enter City"> 
						<?php if(form_error('city'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('city'));?></div> 
			 	 <?php  };?>
					</div>
					<div class="form-group"> 
						<label for="exampleInputEmail1">Event Venue</label> 
						<textarea rows="5" cols="12" class="form-control" placeholder="Enter Here..." required="" name="venue"><?php echo $client['venue'];?></textarea>
						<?php if(form_error('venue'))
						{?>
							<div class="custom"> <?php echo strip_tags(form_error('venue'));?></div> 
			 	 <?php  };?>
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