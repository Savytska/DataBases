 <meta charset="UTF-8">

<?php
include ('../database.php');

// передаємо змінній user_name значення глобального масиву POST
 $alb_id = $_POST['alb_id']; 
 $num_in_album = $_POST['num_in_album']; 
 $title = $_POST['title']; 
 $time_len = $_POST['time_len']; 

 // добавляємо дані через INSERT
 $sql = 'INSERT INTO compositions(alb_id, num_in_album, title, time_len)
 VALUES("'.$alb_id.'","'.$num_in_album.'","'.$title.'","'.$time_len.'")';

// перевірка та поява повідомлень

 if(!mysql_query($sql))
 {echo '<center><p><b>Помилка при збереженні! Перевірте правильність вводу!</b></p></center>';}
 else
 {echo '<center><p style="color:green"><b>Дані успішно добавлені!</b></p></center>';}


echo '<center><p><b><a href="add_composition.html"><button>Додати ще одну композицію</button></a></b></p></center>';
echo '<center><p><b><a href="add.html"><button>Додати дані до іншої таблиці</button></a></b></p></center>';
echo '<center><p><b><a href="../index.html"><button>Повернутися на головну</button></a></b></p></center>';
?>
