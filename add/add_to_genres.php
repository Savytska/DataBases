 <meta charset="UTF-8">

<?php
include ('../database.php');

// передаємо змінній user_name значення глобального масиву POST
 $genre_name = $_POST['genre_name']; 

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO genres(genre_name)
 VALUES("'.$genre_name.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_genre.html"><button>Додати ще один жанр</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Додати дані до іншої таблиці</button></a></b></p></center>';
echo '<center><p><b><a href="../index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
