


<?php include("admin_includes/header.php");?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=utf-8 />
	<title>Blog List</title>
</head>
<body>
<table border="1" align="center">
	<tbody>
		<tr>
			<td>id</td>
			<td>blogtitle</td>
			<td>blogsubject</td>
			<td>image</td>
			<td>blogdescription</td>
		</tr>
		<?php
		foreach ($h->result() as $row) 
			{?>
			<tr>
				<td><?php echo $row->id;?></td>
				<td><?php echo $row->blog_title?></td>
				<td><?php echo $row->blog_subject?></td>
				<td><?php echo $row->image?></td>
				<td><?php echo $row->blog_description?></td>
				<td><a href="">Delete</a></td>
				<td><a href="Update_blog">Update</td>





			</tr>
			<?php } ?>
	</tbody>
</table>

</body>
</html>
 <?php include("admin_includes/footer.php");?> 