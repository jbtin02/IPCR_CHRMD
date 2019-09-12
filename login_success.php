<?php
session_start();
if(!session_is_registered(myusername)){
header("location:http://main_login.php");
}
?>

<html>

	<body>
		Login Successful
	</body>

</html>