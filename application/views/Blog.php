


<?php include("includes/header.php");?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=utf-8 />
	<title>Blog List</title>
</head>
<body>
<div class="blog-area">
<div class="blog-post">
<div class="card">
<div class="card-content blog-post-content">
<h2 class="title">Blog Details</a></h2>
<table border="1" align="center">
	
		<!-- <tr>
			<td>id</span></td>
			<td>blogtitle</td>
			<td>blogsubject</td>
			<td>image</td>
			<td>blogdescription</td>
		</tr> -->
		<?php
		foreach ($h->result() as $row) 
			{?>
			<tr>
			<div>
				<div class="education-inner">
				<div class="card">
				<div class="card-content">
				<p><?php echo $row->blog_title?></p>
				<p><?php echo $row->blog_subject?></p>
				<!-- <p><?php echo $row->image?></p> -->
				<p><?php echo $row->blog_description?></p>
				</div>
				</div>
				</div>
				<div>
				<?php echo form_open('Comment_post/comment'); ?>
				<form>
				<textarea cols="12"></textarea>
				<input type="submit" value="Comment" name="comment" />
				</form>
				</div>

			</div>	




			</tr>
			<?php } ?>
	
</table>
</div>
</div>
</div>
</div>
</body>
</html>
 <?php include("includes/footer.php");?> 