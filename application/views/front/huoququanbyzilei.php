<?php 


?>

<!DOCTYPE html>
<html>
<head>

	<title><?php echo $title; ?></title>

	<script src="../themes/js/jquery-1.11.1.js"></script>
</head>
<body>
	<table>
		<tr>请填写指定的父类ID::</tr>
		<tr><input id="parent_id" name="parent_id" type="text"></tr>
		<tr><input id="but" name="but" type="button" value="确定"></tr>
	</table>
	<hr>
	<hr>
	<hr>
	<table>
		<tr>美国::</tr>
		<?php foreach ($usa as $usa_key => $usa_value) { ?>
			
			<tr>
				《
				ID:
				<?php echo $usa_value['cate_id']; ?> ***
			</tr>
			<tr>
				name:
				<?php echo $usa_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>
	<hr>
	<table>
		<tr>中国::</tr>
		<?php foreach ($china as $china_key => $china_value) { ?>
			<tr>
				《
				ID:
				<?php echo $china_value['cate_id']; ?> ***
			</tr>
			<tr>
				name:
				<?php echo $china_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>
	<hr>
	<table>
		<tr>香港::</tr>
		<?php foreach ($hk as $hk_key => $hk_value) { ?>
			<tr>
				《
				ID:
				<?php echo $hk_value['cate_id']; ?> ***
			</tr>
			<tr>
				name:
				<?php echo $hk_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>
	<hr>
	<table>
		<tr>韩国::</tr>
		<?php foreach ($hg as $hg_key => $hg_value) { ?>
			<tr>
				《
				ID:
				<?php echo $hg_value['cate_id']; ?> ***
			</tr>
			<tr>
				name:
				<?php echo $hg_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>


	<hr>
	<hr>
	<hr>
	

	<table>
		<tr>对应的子类内容::</tr>
		<?php foreach ($hg as $hg_key => $hg_value) { ?>
			<tr>
				<?php echo $hg_value['cate_name']; ?> 》》
			</tr>
		<?php } ?>
	</table>

</body>


<script>


</script>


</html>





