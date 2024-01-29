<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="container py-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bolder my-3">GOT LIST</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-8 my-5">
                    <div class="d-flex">
                        <input type="text" v-model="newTask" class="form-control" placeholder="Inserisci una nuova Task!" @keyup.enter="updateTodoList">
                        <button type="button" class="btn btn-primary text-uppercase mx-4" @click="updateTodoList">Aggiungi</button>
                    </div>
                </div>
                <div class="col-12">
                    <ul>
                        <li v-for="(todo, index) in todoList" :key="index" class="fs-4"> {{ todo.task }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>