<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$target="f:/";
	$target=$target.basename($_FILES['fileToUpload']['name']);
	if(move_uploaded_file($_FILES['fileToUpload']['tmp-name'],$target)){
		echo "file uploaded";
	}else{
		echo "sorry not uploaded";
	}
?>
</body>
</html>