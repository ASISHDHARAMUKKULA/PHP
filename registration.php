<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$name=$email=$website=$comments=$gender="";
$nameerr=$emailerr=$commentserr=$gendererr=$websiteerr="";

if($_SERVER["REQUEST_METHOD"]=="POST") {
	if(empty($_POST["name"])){
		$nameerr="Name is required";

	}
	else
	{
		$name=test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/, $name))
		{
			$nameerr="only whitespaces and letters are allowed";
		}
	}
	}
	if(empty($_POST["email"]))
	{
		$emailerr="email is required";

	}
	else
	{
		$email=test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$emailerr="required email format is required";

		}
		
	if(empty($_POST["website"]))
	{
		$websiteerr="website URL is required";

	}
	else
	{
		$website=test_input($_POST["website"]);
		if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website))
		{
			$website="invalid URL"
		}
		
	}
	if(empty($_POST["comments"])){
		$commentserr="comments are reuired";
	}
	else
	{
		$comments=test_input($_POST["comments"]);
		
	}
	if(empty($_POST["gender"]))
	{
		gendererr="you must specify";

	}
	else
	{
		$gender=test_input($_POST["gender"]);
	}

}
function test_input($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
}
?>
</body>
</html>