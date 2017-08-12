<?php
	$connect = mysql_connect("localhost", "root") or die(mysql_error());
  	mysql_select_db("work");

// SQL-запрос
  $strSQL = "SELECT * FROM  beejee ORDER BY id DESC ";

  // Выполнить запрос (набор данных $rs содержит результат)
  $rs = mysql_query($strSQL);
  
  // Цикл по recordset $rs
  // Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array
  while($row = mysql_fetch_array($rs)) {

     // Записать значение столбца FirstName (который является теперь массивом $row)
   //echo "<div class='row' >";
   echo "<div class='col-sm-6'>";
   echo "id: ".$row['id'] . "</br>";
    echo "Name: ".$row['name'] . "</br>";
   echo "Email: ".$row['email']."</br>";
    echo "Text: ".$row['text'] . "</br>";
     echo "status: ".$row['status'] . "</br>";
    echo "</div>";
    echo "</BR>.</BR>";
    //echo "</div>";
    //echo "</br>";
    }
	mysql_close();
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://bootstrap-3.ru/assets/ico/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 

	<title></title>
</head>
<body>
	<!-- <div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>-->
<!--  </div> -->
</body>
</html>
