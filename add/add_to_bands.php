 <meta charset="UTF-8">

<?php
include ('../database.php');

// передаємо змінній user_name значення глобального масиву POST
 $band_id = $_POST['band_id']; 
 $band_name = $_POST['band_name']; 
 $date_bd = $_POST['date_bd']; 


 // добавляємо дані через INSERT
 $sql = 'INSERT INTO bands(band_id, band_name, date_bd)
 VALUES("'.$band_id.'","'.$band_name.'","'.$date_bd.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_album.html"><button>Додати ще одну групу</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Додати дані до іншої таблиці</button></a></b></p></center>';
echo '<center><p><b><a href="../index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
