<html>
<head>
<title>Login Page</title>
</head>
<body>
<form method="POST">
Username:
<input type="Text" name="Username" placeholder="Enter Username"<br/><br/><br/>
Password:
<input type="Password" name="Password" placeholder="Enter Password"<br/><br/><br/>
<input type="Submit">
</form>
<?php
if(empty($_POST['Username']))
echo "ERROR";
else
echo "WELCOME ".$_POST['Username'];
?>
</body>
</html>
