<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="list-container rounded-3">
                        <h2 class="text-center fw-bolder text-white">GOT LIST</h2>
                        <div class="add-task d-flex justify-content-between py-3">
                            <input type="text" class="form-control" v-model="newTask" placeholder="Qui, per inserire una nuova Task!" @keyup.enter="updateTodoList">
                            <button type="button" class="btn btn-success" @click="updateTodoList">Aggiungi</button>
                        </div>
                        <ul class="list-unstyled text-white">
                            <li v-for="(todo, index) in todoList" :key="index" :class="todo.done ? 'text-decoration-line-through' : ''">
                                <div class="d-flex justify-content-between">
                                    <span>
                                        {{ todo.task }}
                                    </span>
                                    <div class="buttons">
                                        <button type="button" class="btn mx-1" :class="todo.done ? 'btn-danger' : 'btn-success'">
                                            <i class="fas" :class="todo.done ? 'fa-times' : 'fa-check'"></i>
                                        </button>
                                        <button type="button" class="btn btn-warning mx-1">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--         <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="fw-bolder my-3">GOT LIST</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-7 my-3">
                    <div>
                        <input type="text" v-model="newTask" class="form-control" placeholder="Inserisci una nuova Task!" @keyup.enter="updateTodoList">
                        <div class="d-flex justify-content-center my-4">
                            <button type="button" class="btn btn-primary text-uppercase mx-4 fw-bolder" @click="updateTodoList">Aggiungi</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <ul>
                        <li v-for="(todo, index) in todoList" :key="index" class="fs-4">
                            <span :class="todo.done ? 'text-decoration-line-through' : ''">{{ todo.task }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->



    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>