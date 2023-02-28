<?php
    $_ToDoListString = file_get_contents('./database.json');
    $_ToDoList = json_decode($_ToDoListString, true);
    header('Content-Type: application/json');
    echo $_ToDoListString; //diventa direttamente un array perchè Axios capisce che il formato è JSON
?>
