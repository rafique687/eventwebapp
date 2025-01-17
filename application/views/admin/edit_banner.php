<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>/css/dropzone.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>/js/dropzone.js"></script>
 
<script>
$(document).ready(function(){ 
    $("#pcate").change(function () {
        var gender = $("#pcate").val();
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
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Manage Section</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Edit Banner</h4>
							
						</div>
						<div class="form-body">
							<form  action="<?php echo site_url()?>/section/editinsert" method="post" enctype="multipart/form-data"> 
								<div class="form-group"> 
									<?php if(isset($row['bannerid']))
									{?>
									<input type="hidden" value="<?php echo $row['bannerid']?>" name="bannerid">
							  <?php } 
							  		else{?>
							  			<input type="hidden" value="<?php echo $bannerid;?>" name="bannerid">
							  	 <?php  } ?>
									<label for="exampleInputEmail1">Title</label> 
									<input type="text" class="form-control" id="" name="title"  required="" value="<?php echo $row['title']; ?>" > 
									<?php if(form_error('title'))
										{?>
										<div class="error" style="color:red"><?php echo form_error('title');?></div> 
								 <?php  };?>
								</div> 
								<div class="form-group"> 
									<label>Banner Section</label>
		                        	<select class="form-control" name="banner_section" required="" id="pcate">
		                        		<option <?php  if($row['banner_section']=='home'){ echo 'selected';} ?> value="home">Home Page</option>
		                        		<option <?php  if($row['banner_section']=='about'){ echo 'selected';} ?>  value="about">About Page</option>
		                        		<option <?php  if($row['banner_section']=='temsncondition'){ echo 'selected';} ?> value="temsncondition">T&C Page</option>   	
                         			</select>
								</div>
							    <div class="form-group">
								 <label>Banner Display Status</label>
                        			<select class="form-control" name="bannerstatus" required="">
                                    <option <?php if($row['bannerstatus']==1){ echo "selected";} ;?> value="1">Enable
                                    </option>
                           			<option <?php if($row['bannerstatus']==2){ echo "selected";} ;?>value="2">Disable</option>
                        				</select>
                        		</div>
                        		<div class="form-group">
					            <label>Upload Banner Image</label>
					           		<input type="file" name="bannerpic">
					           		<?php if(isset($imgerror)){?>
											<div class="error" style="color:red"><?php echo $imgerror['error']?></div> 
									 <?php } ?>
						        </div>
						        <input type="hidden" name="bannerpic" value="<?php echo $row['bannerpic']?>">
								<button type="submit" class="btn btn-default" id="submit" value="submit">Upload</button> 	
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>

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

<script>
$(document).ready(function() {
	$('#submi').on('click', function() {
		var p_cate 		= $('#main').val();
		var cateimg 	= $('#cateimg').val();
		var catename 	= $('#catename').val();
		var stock 		= $('#stock').val();
		var des 	= $('#des').val();
		if(p_cate!="" && cateimg!="" && catename!="" && stock!="" && des!="")
		{
			$("#submit").attr("disabled", "disabled");
			$.ajax({
				url: "<?php echo base_url("Product/ajaxiteninsert");?>",
				type: "POST",
				data: {
						type: 1,
						p_cate: p_cate,
						product_name: catename,
						des: des,
						stockstatus: stock,
						cateimg:cateimg
					 },
				cache: false,
				success: function(dataResult)
				{
				
				 window.location.href = "<?php echo site_url();?>product/view_product?sucess=Product Successfully Uploaded";	
				 	
				 			
				}
					
			});
		}
		else{
			alert('Please fill all the field !');
			/*if(p_cate=='NULL'|| p_cate=="")
			{
				$("#errmsg").show();
				var errName = document.getElementByID("errmsg");
				errName.innerHTML += "Category Name required";
				errName.innerHTML += ".red {color:red;}";
				document.getElementByID("name").val = errName;					
								
			}*/
		}
	});
});
</script>