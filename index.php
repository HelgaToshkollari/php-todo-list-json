<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
    <div class="container">
            <div class="row p-4">
                <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder="add" aria-label="default input example"> 
                    <button class="btn btn-primary">add</button>  
                    <div class="list-group ">
                        <div class="list-group-item"
                            v-for="task in tasksList">
                            <label class="form-check form-switch ">
                                <input class="form-check-input" type="checkbox" role="switch" v-model="task.done" >
                                <div class="d-flex px-2 justify-content-between align-items-start">
                                
                                    <div :class="{'text-decoration-line-through' : task.done }" class="">
                                        {{task.text}}

                                    </div>
                                    <div class="">
                                        <button  class="btn btn-danger" >
                                            delete
                                        </button>
                                    </div>


                                </div>
                            </label>
                        </div>

                    </div>

                </div>
              
                
            </div>
        </div>



    </div>
    <script src ="js/main.js"></script>
</body>
</html>