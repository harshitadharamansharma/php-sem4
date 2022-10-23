<html>
<head>
<title>Login Page</title>
</head>
<body>
<form method="POST" action="">
Username:
<input type="Text" id="Username" name="Username"<br/><br/>
Password:
<input type="Password" id="Password" name="Password"<br/><br/>
<input type="Submit" Value="Submit" name="Button">
</form>
<?php
if(!empty(isset($_POST['Username'])&&isset($_POST['Password])))
echo "Welcome ".$_POST['Username'];
else
echo "Error";
?>
</body>
</html>

