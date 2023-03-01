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

        <div>
            <h2>
                Aggiungi To-Do
            </h2>
            <form action="create.php" method="post" @submit.prevent="addTask()">
                <label for="task-name">
                    Nome della task
                    <input type="text" v-model="newTask.taskName" id="task-name" name="task-name" placeholder="Inserisci il nome della task" required minlength="1" maxlength="64">
                </label>
                <button type="submit">
                    Aggiungi
                </button>
            </form>
        </div>
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