<html>
<head>
<title>check string contains string</title>
</head>
<body>
<form method="POST" action="">
Enter 1st String:
<input type="Text" id="s1" name="String1"<br/><br/>
Enter 2nd String:
<input type="Text" id="s2" name="String2"<br/><br/>
<input type="Submit" Value="Submit" name="Button">
</form>
<?php
if(isset($_POST['String1']))
{	if(isset($_POST['String1']))
	$s1=$_POST['String1'];
	$s2=$_POST['String2'];
	if(strchr($s1,$s2))
	echo"<br/> The string contains the substring";
 	else
 	echo"<br/> The string doesn't contains the substring";
}
?>
</body>
</html>
	
