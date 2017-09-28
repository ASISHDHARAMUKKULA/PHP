<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$cars=array("Audi","Benz");
	echo $cars[0] .",".$cars[1].".";
	$arrlength= count($cars);
	for ($i=0; $i <$arrlength ; $i++) { 
		echo "$cars[$i]";
		# code...
	}
	$age=array("peter"=>"35","Ben"=>"20","Asish"=>"25");
	echo "Asish age is". $age["peter"];
	?>

</body>
</html>