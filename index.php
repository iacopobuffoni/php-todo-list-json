<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> PHP ToDo List JSON </title>
</head>

<body>  
    <div id="app">
        <ul>
            <li :class="todo.done ? 'done' : '' " v-for="(todo, index) in todos">
                {{ index }}. {{ todo.taskName }}
            </li>
        </ul>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>