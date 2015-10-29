<?php
    $db = mysql_connect("localhost", "root", "lorelei");
    mysql_select_db("great_music", $db);

    mysql_query("SET NAMES 'utf8';"); 
    mysql_query("SET CHARACTER SET 'utf8';"); 
    mysql_query("SET SESSION collation_connection = 'utf8_general_ci';"); 

?>
