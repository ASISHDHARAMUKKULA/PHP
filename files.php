<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo readfile("web.txt");
$myfile = fopen("web.txt", "r") or die("unable to open file");
$txt="Asish";
fwrite($myfile, $txt);
while (!feof($myfile)) {
	echo fgets($myfile).<br>;
	# code...
}
echo fread($myfile, filesize("web.txt"));
fclose("web.txt");
?>
</body>
</html>