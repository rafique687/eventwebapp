<?php
	foreach ($product as  $cat) {?>
			<option value="<?php echo $cat['prod_id']?>"><?php echo $cat['product_name']?></option>
<?php	}
?>