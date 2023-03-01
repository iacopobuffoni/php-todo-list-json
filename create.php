<?php
    var_dump($_POST);
    $_NewTask = [
        'taskName' => $_POST['task']['taskName'],
        'done' => $_POST['task']['done'] == 'true' ? true : false
    ];

    $_ToDoListString = file_get_contents('./database.json');
    $_ToDoListDecoded = json_decode($_ToDoListString, true);
    $_ToDoListDecoded[] = $_NewTask;
    $_ToDoListEncoded = json_encode($_ToDoListDecoded);
    file_put_contents('./database.json', $_ToDoListEncoded);
?>