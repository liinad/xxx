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
   //echo "<div class=div22>";
   //  echo "Name: ".$row['name'] . "</br>";
   // echo "Email: ".$row['email']."</br>";
   //  echo "Text: ".$row['text'] . "</br>";
   //   echo "status: ".$row['status'] . "</br>";
   //  //echo "</div>";
   //  echo "</br>";

    }
	mysql_close();
?>

 <?php 
 $num = 25;  
 $page = $_GET['page'];
 // Определяем общее число сообщений в базе данных 
$result = mysql_query("SELECT COUNT(*) FROM post"); 
//$posts = mysql_result($result, 0); 
// Находим общее число страниц 
$total = intval(($posts - 1) / $num) + 1; 
// Определяем начало сообщений для текущей страницы 
$page = intval($page); 
// Если значение $page меньше единицы или отрицательно 
// переходим на первую страницу 
// А если слишком большое, то переходим на последнюю 
if(empty($page) or $page < 0) $page = 1; 
  if($page > $total) $page = $total; 
// Вычисляем начиная к какого номера 
// следует выводить сообщения 
$start = $page * $num - $num; 




echo "<table>"; 
for($i = 0; $i < $num; $i++) 
{ 
 echo "<tr>
         <td>".$row['name']."</td>
         <td>".$row['email']."</td></tr>
       <tr><td colspan=\"2\">".$row['text']."</td></tr>"; 
} 
echo "</table>"; 
?> 




 <?php 
// Проверяем нужны ли стрелки назад 
if ($page != 1) $pervpage = '<a href= ./page?page=1><<</a> 
                               <a href= ./page?page='. ($page - 1) .'><</a> '; 
// Проверяем нужны ли стрелки вперед 
if ($page != $total) $nextpage = ' <a href= ./page?page='. ($page + 1) .'>></a> 
                                   <a href= ./page?page=' .$total. '>>></a>'; 

// Находим две ближайшие станицы с обоих краев, если они есть 
if($page - 2 > 0) $page2left = ' <a href= ./page?page='. ($page - 2) .'>'. ($page - 2) .'</a> | '; 
if($page - 1 > 0) $page1left = '<a href= ./page?page='. ($page - 1) .'>'. ($page - 1) .'</a> | '; 
if($page + 2 <= $total) $page2right = ' | <a href= ./page?page='. ($page + 2) .'>'. ($page + 2) .'</a>'; 
if($page + 1 <= $total) $page1right = ' | <a href= ./page?page='. ($page + 1) .'>'. ($page + 1) .'</a>';

// Вывод меню 
echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage; 

?> 