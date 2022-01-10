<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container-fluid pt-3">
        <h3 class="font-weight-light text-white">Kanban Board</h3>
        <div class="small  text-light">Drag and drop between swim lanes</div>
        <div class="row flex-row flex-sm-nowrap py-3">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase text-truncate py-2">To Do</h6>
                        <div class="items border border-light">
                            
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd2" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2">
                                    <div class="card-title">
                                        <img src="//via.placeholder.com/30" class="rounded-circle float-right">
                                        <a href="" class="lead font-weight-light">TSK-156</a>
                                    </div>
                                    <p> This is a description of a item on the board. </p>
                                    <button class="btn btn-primary btn-sm">View</button>
                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd3" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2">
                                    <div class="card-title">
                                        <img src="//via.placeholder.com/30" class="rounded-circle float-right">
                                        <a href="" class="lead font-weight-light">TSK-157</a>
                                    </div>
                                    <p> This is an item on the board. There is some descriptive text that explains the item here. </p>
                                    <button class="btn btn-primary btn-sm">View</button>
                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase text-truncate py-2">In-progess</h6>
                        <div class="items border border-light">
                            <div class="card draggable shadow-sm" id="cd1" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2">
                                    <div class="card-title">
                                        <img src="//via.placeholder.com/30" class="rounded-circle float-right">
                                        <a href="" class="lead font-weight-light">TSK-152</a>
                                    </div>
                                    <p> This is a task that is being worked on. </p>
                                    <button class="btn btn-primary btn-sm">View</button>
                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd2" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2">
                                    <div class="card-title">
                                        <img src="//via.placeholder.com/30" class="rounded-circle float-right">
                                        <a href="" class="lead font-weight-light">TSK-153</a>
                                    </div>
                                    <p> Another task here that is in progress. </p>
                                    <button class="btn btn-primary btn-sm">View</button>
                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase text-truncate py-2">Complete</h6>
                        <div class="items border border-light">
                            <div class="card draggable shadow-sm" id="cd11" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2">
                                    <div class="card-title">
                                        <img src="//via.placeholder.com/30" class="rounded-circle float-right">
                                        <a href="" class="lead font-weight-light">TSK-144</a>
                                    </div>
                                    <p> This is a description of an item. </p>
                                    <button class="btn btn-primary btn-sm">View</button>
                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd12" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2">
                                    <div class="card-title">
                                        <img src="//via.placeholder.com/30" class="rounded-circle float-right">
                                        <a href="" class="lead font-weight-light">TSK-146</a>
                                    </div>
                                    <p> This is a description of a task item. </p>
                                    <button class="btn btn-primary btn-sm">View</button>
                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="actions.js"></script>
</html>