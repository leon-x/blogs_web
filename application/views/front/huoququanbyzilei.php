<?php 
/**
 * 获取全部的子类 内容
 * 指定父类ID
 * 获取全部的子类内容
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script src="../themes/js/jquery-1.11.1.js"></script>
</head>
<body>
	
	<table>
		<tr><td>请填写指定的父类ID::</td></tr>
		<tr>
			<td>
				国家区域：<input id="language_id" name="language_id" type="text">
			</td>
		</tr>
		<tr>
			<td>
				一级分类：<input id="parent_id" name="parent_id" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<input id="but" name="but" type="button" value="确定">
			</td>
		</tr>
	</table>
	<hr>
	<hr>
	<hr>
	<table>
		<tr>美国::区号（ 1 ）</tr>
		<?php foreach ($usa as $usa_key => $usa_value) { ?>
			<tr>
				《
				父类ID:
				<?php echo $usa_value['cate_id']; ?> ***
			</tr>
			<tr>
				父类name:
				<?php echo $usa_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>
	<hr>
	<table>
		<tr>中国::区号（ 2 ）</tr>
		<?php foreach ($china as $china_key => $china_value) { ?>
			<tr>
				《
				父类ID:
				<?php echo $china_value['cate_id']; ?> ***
			</tr>
			<tr>
				父类name:
				<?php echo $china_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>
	<hr>
	<table>
		<tr>香港::区号（ 3 ）</tr>
		<?php foreach ($hk as $hk_key => $hk_value) { ?>
			<tr>
				《
				父类ID:
				<?php echo $hk_value['cate_id']; ?> ***
			</tr>
			<tr>
				父类name:
				<?php echo $hk_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>
	<hr>
	<table>
		<tr>韩国::区号（ 4 ）</tr>
		<?php foreach ($hg as $hg_key => $hg_value) { ?>
			<tr>
				《
				父类ID:
				<?php echo $hg_value['cate_id']; ?> ***
			</tr>
			<tr>
				父类name:
				<?php echo $hg_value['cate_name']; ?> 
				》
			</tr>
		<?php } ?>
	</table>

	<hr>
	<hr>
	<hr>
	
	<!-- 父类中的子类ID -->
	<div id="neirong"></div>

</body>

<script>
	//查询父类中全部子类的方法
	$('#but').click(function(){
		var language_id = $('#language_id').val();
		var parent_id = $('#parent_id').val();
		$.ajax({
			type:'POST',
			url:'/Huoququanbyzilei/get_child_content',
			data:{language_id:language_id,parent_id:parent_id},
			dataType:'json',
			success:function(json){
				//console.log(json);
				var str = "<table  cellpadding='15' rules='cols' frame='vsides'>";
				str += "<tr><td align='center'>ID</td><td align='center'>名字</td><td align='center'>父类ID</td></tr>";
				for(var k in json){
					//console.log(json[k].cate_name);
					var cate_id = json[k].cate_id;
					var cate_name = json[k].cate_name;
					var parent_id = json[k].parent_id;
					str += "<tr><td align='center'>"+cate_id+"</td><td align='center'>"+cate_name+"</td><td align='center'>"+parent_id+"</td></tr>";
				}
				str += "</table>";
                $('#neirong').append(str);
			}
		})
	})
</script>

</html>


