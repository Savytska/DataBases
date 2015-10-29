<link rel="stylesheet" type="text/css" href="../base.css">
<meta charset="UTF-8">
 <title>Delete compositions</title>
<?php
 //
include '../database.php';
 

//Якщо була натиснута силка на видалення, видаляємо запис 
if (isset($_GET['del'])) { 
    $del = intval($_GET['del']); 
    $query = "DELETE FROM compositions WHERE (c_id='$del')"; 
    //Виконуємо запит. Якщо буде помилка - вивести її.
    mysql_query($query) or die(mysql_error()); 
}

// Заносимо в змінну $qwery всю базу даних 
$query = "SELECT * FROM compositions";
// Виконуємо запит. Якщо буде помилка - вивести її.
$res = mysql_query($query) or die(mysql_error());
// Дізнаємося к-сть даних в таблиці 
$row = mysql_num_rows($res);


// Виводимо дані з таблиці 
  echo '<table class="delete" border="1">';
  echo '<caption><b>Композиції</b></caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Id композиції</th>';
  echo '<th>Id альбому</th>';
  echo '<th>Номер в альбомі</th>';
  echo '<th>Назва</th>';
  echo '<th>Час звучання</th>';
  echo '<th>Видалення</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';


// Цикл виводу даних з бази
while ($row = mysql_fetch_array($res)) {
  
    echo '<tr>';
    echo '<td>' . $row['c_id'] . '</td>';
    echo '<td>' . $row['alb_id'] . '</td>';
    echo '<td>' . $row['num_in_album'] . '</td>';
    echo '<td>' . $row['title'] . '</td>';
    echo '<td>' . $row['time_len'] . '</td>';
    

    // Генеруємо силку для видалення поля 
    echo "<td><a name=\"del\" href=\"delete_composition.php?del=".$row["c_id"]."\">Видалити</a></td>\n";
    echo "</tr>\n";
}
echo ("</table>\n");
 
// Закриваємо з'єднання 
mysql_close();
 
/* Виводимо кнопку повернення */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href='../index.html'><button class='back'>Повернутися</button></a></div>");
 
?>