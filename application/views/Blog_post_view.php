<?php include('admin_includes/header.php');?>
<?php if (isset($_SESSION['success'])) {
  echo $_SESSION['success'];
} ?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
	<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page
 
        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.
 
        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
</script>
</head>
<body>
<?php echo form_open('Post_blog/post_blog'); ?>

<form id="post" action="" method="POST" enctype="multipart/form-data">
	<table align="center">
	<h2 align="center">Blog Post</h2>

		<tr>
			<td>Blog title</td>
			<td><input type="text" class="form-control" name="blog_title"></td>
		</tr>

		<tr>
			<td>Blog subject</td>
			<td><input type="text" class="form-control" name="blog_subject"></td>
		</tr>
		<tr>
			<td>upload image</td>
			<?php echo form_open_multipart('Post_blog/doupload');?>
			<td><input type="file" class="form-control" name="image" /></td>
		</tr>
		<tr>
			<td >Blog Description </td>
			<td><textarea id="area1" name="blog_description" cols="50" class="required"></textarea></td>
       
	</table>
	 <input type="submit" name="post" value="Post" />
	</form>

</body>
</html>


<?php include('admin_includes/footer.php');?>