<?php
session_start();
include('head.php');
include('navbar.php');
include('condb.php');
?><br>
<center><h2>เพิ่มข้อมูล</h2>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form action="add_data_db.php" name="login"  method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ชื่อทีม</label>
                    <input type="text" name="t_name" id="t_name" class="form-control" placeholder="ชื่อทีม">
                </div>
                <div class="form-group">
                    <label>รายละเอียดทีม</label>
                    <textarea type="text" name="t_detail" id="t_detail" rows="5" cols="60" class="form-control" placeholder="รายละเอียดทีม"></textarea>
                </div>
                <div class="form-group">
                    <label>ช่องทางติดต่อ</label>
                    <input type="text" name="t_contact" id="t_contact" class="form-control" placeholder="ช่องทางติดต่อ">
                </div>
                <div class="form-group">
                    <label>รูปภาพ</label>
                    <input type="file" name="t_img" id="t_img" class="form-control">
                </div>
                <p>
                <div class="form-group">
                    <input type="submit" name="update" id="update" value="บันทึก" class="btn btn-block btn btn-warning">
                    <input type="button" name="update" onclick="window.location='index.php';" value="ยกเลิก" class="btn btn-block btn btn-danger">
                </div>
                </p>
            </form>
        </div>
    </div>
</div>
</center>