<!DOCTYPE html>
<html>
<head>
	<title>upload form</title>
</head>
<body>
<?php echo $error; ?>
<?php echo form_open_multipart('upload/do_upload'); ?>
<input type="file" name="userfile" size="20" />
<br />
<input type="submit" value="upload" />

</form>
</body>
</html>