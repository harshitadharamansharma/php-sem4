<html>
<head>
<title>Email Validation</title>
</head>
<form method ="POST" >
Enter an email id: 
<input type="Text" name="num1"><br/>
<input type ="Submit" value="submit">
</form>
<body>
<?php
if(isset($_POST["num1"]))
{	$email = $_POST["num1"];
 	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
 	{	$emailErr = "Invalid email format";
 		echo"$emailErr";
 	}
 	else
 	echo"Valid Email Format";
}
?>
</body>
</html>
