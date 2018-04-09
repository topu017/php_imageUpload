<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
	<style>
	    .form_container{
		    width: 50%;
			height: 600px;
			margin:0 25%;
			background-color: #2ab27b;
		}
	    .form-imageUpload{
		    width: 100%;
			padding-top: 25%;
		}
	</style>
</head>
<body>
    <div class="form_container">
	    <form class="form-imageUpload" action="upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="image_file" id="image_file">
			<input type="submit" value="Upload Image" name="submit">
        </form>
	</div>
</body>
</html>