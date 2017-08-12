<?php
    //include "header.php";
	if ( $_COOKIE["editor"] != "try"  ) {
		header( "refresh:0;url=nice_try.php" );
	} else {
		setcookie("needwork","beejee");
		include "editor_panel.php";
		//code//code//

		//view all with [edit];
	}

?>

<html>
<head>
	<title>admin_panel</title>
</head>
<body>
	<!-- <font size="5px"> WELLCOME BACK </font> -->
</body>
</html>