<?php
	//setcookie("adminos_login", "md5($_POST[login_name]");
	//setcookie("adminos_password", 'md5($_POST["login_pass"]');
	$login = md5($_POST["login_name"]);
	$pass = md5($_POST["login_pass"]);
	if ( $login == "21232f297a57a5a743894a0e4a801fc3") {
		if ( $pass == "202cb962ac59075b964b07152d234b70") {
			setcookie("editor","try");
			echo "WELLCOME ADMIN"."</br>";
			//code
			
			//echo $_COOKIE["adminos_login"];
			//header( "refresh:0;url=admin_panel.php" );
			echo "<a href='admin_panel.php'>"."edit"."</a>";
		} else {
			setcookie("editor","try1");
			echo "bad pass";
		}
	} else {
		setcookie("editor","try2");
		echo "bad login";
	}
?>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form method="post">
		<label> ENTER NAME </label>
			<input type="text" name="login_name" >

		<br><br>

		<label> ENTER PASSWORD </label>
			<input type="text" name="login_pass" >

		<br><br>

		<input type="submit" name="login_button" value="login"> </input>

	</form>
</body>
</html>