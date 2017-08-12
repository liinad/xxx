<?php
	if ( $_POST["this_id_done"]) {
		$connect = mysql_connect("localhost", "root") or die(mysql_error());
  		mysql_select_db("work");

  		$id =$_POST['id'];

  		//$sql = "UPDATE beejee SET status='Done' WHERE id=$id";

  		$sql = "UPDATE `beejee` SET `status`=`done`, WHERE `id`=$id";
  		$query = mysql_query($sql);
  		mysql_close();
	}


	if ( $_POST["this_id_notdone"]) {
		$connect = mysql_connect("localhost", "root") or die(mysql_error());
  		mysql_select_db("work");

  		$id =$_POST['id'];

  		//$sql = "UPDATE beejee SET status='Done' WHERE id=$id";

  		$sql = "UPDATE `beejee` SET `status`=`notdone`, WHERE `id`=$id";
  		$query = mysql_query($sql);
  		mysql_close();
	}

?>
<html>
<head>
	<title></title>
</head>
<body>

<form method=post>
	<label> Enter id </label>
	<br><br>
	<input type=text name=id> </input>
	<br>
	<input type="submit" name="this_id_done" value="done"> </input>
	<br>
	<input type="submit" name="this_id_notdone" value="notdone"> </input>
</form>

</body>
</html>


<?php
	if ( $_COOKIE["needwork"] != "beejee"  ) {
		header( "refresh:0;url=nice_try.php" );
	} else {
		$connect = mysql_connect("localhost", "root") or die(mysql_error());
  	mysql_select_db("work");

// SQL-запрос
  $strSQL = "SELECT * FROM  beejee ORDER BY id DESC ";

  // Выполнить запрос (набор данных $rs содержит результат)
  $rs = mysql_query($strSQL);
  
  // Цикл по recordset $rs
  // Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array
  while($lovebeejee = mysql_fetch_array($rs)) {

     // Записать значение столбца FirstName (который является теперь массивом $row)
   //echo "<div class=div22>";
  	echo "ID: ".$lovebeejee['id'] . "</br>";
    echo "Name: ".$lovebeejee['name'] . "</br>";
   echo "Email: ".$lovebeejee['email']."</br>";
    echo "Text: ".$lovebeejee['text'] . "</br>";
     echo "status: ".$lovebeejee['status'] . "</br>";
    // echo "EDIT STATUS: "." <input type=radio name=status_not_done> ". "NOT DONE" . " " . "<input type=radio name=status_done>"."DONE"."</br>";
    //echo "</div>";
    echo "</br>";
    }
	mysql_close();
	}
?>