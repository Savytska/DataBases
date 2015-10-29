<link rel="stylesheet" type="text/css" href="../base.css">
<meta charset="UTF-8">
 <title>Delete album</title>
<?php
 //
include '../database.php';
 

//Якщо була натиснута силка на видалення, видаляємо запис 
if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM albums WHERE (alb_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}

// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM albums";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);


// Виводимо дані з таблиці 
  echo '<table class="delete" border="1">';
  echo '<caption><b>Альбоми</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Id альбому</th>';
  echo '<th>Id жанру</th>';
  echo '<th>Id групи</th>';
  echo '<th>Назва групи</th>';
  echo '<th>Дата виходу</th>';
  echo '<th>Видалення</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $row['alb_id'] . '</td>';
    echo '<td>' . $row['genre_id'] . '</td>';
    echo '<td>' . $row['band_id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['pub_date'] . '</td>';

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_album.php?del=".$row["alb_id"]."\">Видалити</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");
 
// Закриваємо з'єднання 
mysql_close();
 
/* Виводимо кнопку повернення */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href='../index.html'><button class='back'>Повернутися</button></a></div>");
 
?>