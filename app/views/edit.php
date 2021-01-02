<?php $this->layout('layout/layout') ?>
<section class="content">
    <div class="container-fluid">
        <br>
        <h3>Edit Task</h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <? if(!empty($task) && isset($task)): ?>
                    <form action="<?=$url?>/save" method="post">
                        <input type="hidden" name="id" value="<?=$id?>"/>
                        <input type="hidden" name="edit_date" value="<?=date('Y-m-d');?>"/>
                        <div class="row">
                            <div class="col-6">
                                <label>Header</label>
                                <input type="text" name="head" value="<?=$task['head']?>" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label>User email</label>
                                <input type="email" name="user_email" value="<?=$task['user_email']?>" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label>Task</label>
                                <textarea name="text" class="form-control" rows="5"><?=$task['text']?></textarea>
                            </div>
                            <div class="col-12">
                                <br>
                                <button class="btn btn-success col-12">Save</button>
                            </div>
                        </div>
                    </form>
                <? else: ?>
                    <h3>Information is empty or not exit</h3>
                <? endif; ?>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
