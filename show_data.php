<link rel="stylesheet" type="text/css" href="base.css">
<meta charset="UTF-8">
<?php 
	// підключаємо базу даних
	include 'database.php';
  

//Compositions

// вибираємо всі значання з таблиці "compositions"
    $qr_result = mysql_query("SELECT * FROM compositions;" 
 . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці
  echo '<table class="compositions" border="1">';
  echo '<caption>Композиції</caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Id композиції</th>';
  echo '<th>Id альбому</th>';
  echo '<th>№ в альбомі</th>';
  echo '<th>Назва</th>';
  echo '<th>Час звучання</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  echo '<a href="index.html"><button class="back">Повернутися</button></a>';
  
   // виводимо в HTML-таблицю всі дані з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['c_id'] . '</td>';
    echo '<td>' . $data['alb_id'] . '</td>';
    echo '<td>' . $data['num_in_album'] . '</td>';
    echo '<td>' . $data['title'] . '</td>';
    echo '<td>' . $data['time_len'] . '</td>';
    echo '</tr>';
  }
  
    echo '</tbody>';
  echo '</table>';


//Bands

    // вибираємо всі значання з таблиці "bands"
    $qr_result = mysql_query("SELECT * FROM bands;") or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="bands" border="1">';
  echo '<caption>Групи</caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Id групи</th>';
  echo '<th>Назва групи</th>';
  echo '<th>Дата заснування</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані користувачів з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['band_id'] . '</td>';
    echo '<td>' . $data['band_name'] . '</td>';
     echo '<td>' . $data['date_bd'] . '</td>';

    echo '</tr>';
  }
  
  echo '</tbody>';
  echo '</table>';

//Albums

    // вибираємо всі значання з таблиці "albums"
    $qr_result = mysql_query("SELECT * FROM albums;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="albums" border="1">';
  echo '<caption> Альбоми </caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Id альбому</th>';
  echo '<th>Id жанру</th>';
  echo '<th>Id групи</th>';
  echo '<th>Назва альбому</th>';
  echo '<th>Дата виходу</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['alb_id'] . '</td>';
    echo '<td>' . $data['genre_id'] . '</td>';
    echo '<td>' . $data['band_id'] . '</td>';
    echo '<td>' . $data['name'] . '</td>';
    echo '<td>' . $data['pub_date'] . '</td>';
    echo '</tr>';
  }
    echo '</tbody>';
  echo '</table>';


//Genres

    // вибираємо всі значання з таблиці "genres"
    $qr_result = mysql_query("SELECT * FROM genres;" 
							  . $db_table_to_show) or die(mysql_error());

    // виводимо заголовки HTML-таблиці

  echo '<table class="genres" border="1">';
  echo '<caption>Жанри</caption>';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Id жанру</th>';
  echo '<th>Назва жанру</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // виводимо в HTML-таблицю всі дані з таблиці MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    echo '<td>' . $data['genre_id'] . '</td>';
    echo '<td>' . $data['genre_name'] . '</td>';
    echo '</tr>';
  }
  
  echo '</tbody>';
  echo '</table>';



    // закриваємо з'єднання с сервером бази даних
    mysql_close($connect_to_db);
?>

