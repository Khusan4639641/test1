<?php $this->layout('layout/layout') ?>
<section class="content">
    <div class="container-fluid">
        <br>
        <h3>New Task</h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                    <form action="<?=$url?>/addtask" method="post">
                        <div class="row">
                            <div class="col-6">
                                <label>Header</label>
                                <input type="text" required name="head" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label>User email</label>
                                <input type="email" required name="user_email" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label>Task</label>
                                <textarea name="text" required class="form-control" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <br>
                                <button class="btn btn-success col-12">Add tasks</button>
                            </div>
                        </div>
                    </form>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
