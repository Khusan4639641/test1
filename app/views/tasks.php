<?php $this->layout('layout/layout') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">New tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Edit Tasks by Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill" href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages" aria-selected="false">Done</a>
                    </li>

                </ul>
                <div class="tab-content" id="custom-content-above-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">  &nbsp; <a href="/add" class="btn btn-success">Add Tasks</a> </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Head</th>
                                        <th>Text</th>
                                        <th>User email</th>
                                        <th>Done</th>
                                        <th>-</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <? $num=1; foreach($tasks as $task): ?>
                                        <tr>
                                            <td><?=$num;?></td>
                                            <td><?=$task['head'];?></td>
                                            <td><?=$task['text'];?></td>
                                            <td><?=$task['user_email'];?></td>
                                            <td><a href="<?=$url;?>/done/<?=$task['id']?>" class="btn btn-success">Done</a></td>
                                            <td>
                                                <a href="/edit/<?=$task['id'] ?>" class="btn btn-info">Edit</a>
                                                <a href="<?=$url;?>/del/<?=$task['id']?>" class="btn btn-danger">Del</a>
                                            </td>
                                        </tr>
                                        <? $num++; ?>
                                    <? endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Head</th>
                                        <th>Text</th>
                                        <th>User email</th>
                                        <th>Done</th>
                                        <th>-</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">  &nbsp; <a href="/add" class="btn btn-success">Add Tasks</a> </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Head</th>
                                        <th>Text</th>
                                        <th>User email</th>
                                        <th>Done</th>
                                        <th>-</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <? $num1=1; foreach($tasksEdit as $task): ?>
                                        <tr>
                                            <td><?=$num1;?></td>
                                            <td><?=$task["head"];?></td>
                                            <td><?=$task["text"];?></td>
                                            <td><?=$task["user_email"];?></td>
                                            <td>
                                            <? if($task["done"]=='no'): ?>
                                                <a href="<?=$url;?>/done/<?=$task['id']?>" class="btn btn-success">Done</a>
                                            <? else: ?>
                                                <a href="<?=$url;?>/redone/<?=$task['id']?>" class="btn btn-success">Re Done</a>
                                            <? endif; ?>
                                            </td>
                                            <td>
                                                <a href="/edit/<?=$task['id'] ?>" class="btn btn-info">Edit</a>
                                                <a href="<?=$url;?>/del/<?=$task['id']?>" class="btn btn-danger">Del</a>
                                            </td>
                                        </tr>
                                        <? $num1++; ?>
                                    <? endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Head</th>
                                        <th>Text</th>
                                        <th>User email</th>
                                        <th>Done</th>
                                        <th>-</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel" aria-labelledby="custom-content-above-messages-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">  &nbsp; <a href="/add" class="btn btn-success">Add Tasks</a> </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Head</th>
                                        <th>Text</th>
                                        <th>User email</th>
                                        <th>Done</th>
                                        <th>-</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <? $num2=1; foreach($tasksDone as $task): ?>
                                        <tr>
                                            <td><?=$num2;?></td>
                                            <td><?=$task['head'];?></td>
                                            <td><?=$task['text'];?></td>
                                            <td><?=$task['user_email'];?></td>
                                            <td><a href="<?=$url;?>/redone/<?=$task['id']?>" class="btn btn-success">Re Done</a></td>
                                            <td>
                                                <a href="/edit/<?=$task['id'] ?>" class="btn btn-info">Edit</a>
                                                <a href="<?=$url;?>/del/<?=$task['id']?>" class="btn btn-danger">Del</a>
                                            </td>
                                        </tr>
                                        <? $num2++; ?>
                                    <? endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Head</th>
                                        <th>Text</th>
                                        <th>User email</th>
                                        <th>Done</th>
                                        <th>-</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
