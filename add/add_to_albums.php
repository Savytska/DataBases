 <meta charset="UTF-8">
<?php
include ('../database.php');

// передаємо змінній user_name значення глобального масиву POST
 $genre_id = $_POST['genre_id']; 
 $band_id = $_POST['band_id']; 
 $name = $_POST['name']; 
 $pub_date = $_POST['pub_date']; 

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO albums(genre_id, band_id, name, pub_date)
 VALUES("'.$genre_id.'","'.$band_id.'","'.$name.'","'.$pub_date.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_album.html"><button>Додати ще один альбом</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Додати дані до іншої таблиці</button></a></b></p></center>';
echo '<center><p><b><a href="../index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
