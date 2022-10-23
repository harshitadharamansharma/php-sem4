<html>
<head>
<title>Check String is all Lower Case</title>
<body>
<form method="POST" action="">
Enter String:
<input type="Text" id="s" name="String"</br></br>
<input type="SUbmit" Value="Submit" name="Button">
</form>
<?php
if(isset($_POST['String']))
{	$s=$_POST['String'];
	if(ctype_lower($s))
	echo $s." is all Lower Case";
	else
	echo $s." is not all Lower Case";
}
?>
</body>
</html> 
