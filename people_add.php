<?php include('head.php'); ?>
<?php
include('condb.php');

$sql = "SELECT * FROM tbl_sex order by s_id asc ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql" . mysqli_error());


?>
<?php include('navbar_admin.php'); ?>
<body class="text-center">
<p>
<section class="py-5 text-center container">
  <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
            <main class="form-signin">
            <form action="people_add_db.php" name="aadlogin" id="form-login" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <img class="mb-4" src="img/logo/logo1.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">เพิ่มข้อมูลนักพากย์</h1>
                <div class="form-floating" >
                <input type="text" class="form-control" name="p_name" id="p_name" required placeholder="ชื่อ-นามสกุล">
                <label for="floatingInput">ชื่อ-นามสกุล</label>
                </div><p></p>
                <div class="form-floating" >
                <input type="text" class="form-control" name="p_nickname" id="p_nickname" required placeholder="ชื่อเล่น">
                <label for="floatingInput">ชื่อเล่น</label>
                </div><p></p>
                <select name="s_id" class="form-select">
                <option selected>กรุณาเลือกเพศ</option>
                        <?php foreach ($result as $results){ ?>
                            <option value="<?php echo $results["s_id"]; ?>"><?php echo $results["s_name"]; ?></option>
                        <?php } ?>
                </select><p></p>
                <div class="form-floating">
                <textarea class="form-control" required placeholder="Leave a comment here" id="p_detail"  name="p_detail" style="height: 150px"></textarea>
                <label for="floatingTextarea2">ประวัติ</label>
                </div><p></p>
                <div class="form-floating">
                    <div class="input-group">
                    <input type="file" class="form-control" id="p_img" name="p_img" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div><p></p>
  
                    <input type="submit" name="update" id="update" value="บันทึก" class="w-100 btn btn-lg btn-warning"><p></p>
                    <input type="button" name="out" onclick="window.location='admin.php';" value="ยกเลิก" class="w-100 btn btn-lg btn-primary"> 
 
        </div>
        <br>
        <div class="col-lg-6 col-md-8 mx-auto">
        <div class="form-floating">
        <p></p>
            <textarea class="form-control" required id="p_work"  name="p_work" style="height: 500px"></textarea>
            <label for="floatingTextarea2">ผลงานการพากย์</label>
            </div><p></p>


            </form>
            </main>
        </div>
    </div>
</section>

    </p>
    
  </body>
</html>
