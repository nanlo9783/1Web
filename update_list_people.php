<?php 
include('head.php');
include('navbar_admin.php'); 
include('condb.php');

if($_GET["p_id"]=='')
{
    echo "<script type='text/javascript'>";
    echo "alert('ล้มเหลว');";
    echo "window.history.back()";
    echo "</script>";
}

$p_id = mysqli_real_escape_string($con,$_GET["p_id"]);

$sql = "SELECT * FROM tbl_people WHERE p_id='$p_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql" . mysqli_error());

$row = mysqli_fetch_array($result);

extract($row);

?>
<?php

$sql = "SELECT * FROM tbl_people order by p_id asc ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql" . mysqli_error());


?>
<br>

<body class="text-center">
<p>
<section class="py-5 text-center container">
  <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
            <main class="form-signin">
            <form action="update_list_people_db.php" name="aadlogin" id="form-login" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <h1 class="h3 mb-3 fw-normal">แกไข้ข้อมูลนักพากย์</h1>
                <?php echo "<img src='img/ad/" .$row["p_img"]. "' width='150' >"; ?><p></p>
                <div class="form-floating" >
                <input type="text" class="form-control" name="p_name" id="p_name" required placeholder="ชื่อ-นามสกุล" value="<?php echo $p_name; ?>">
                <input type="hidden" class="form-control" name="p_id" id="p_id" value="<?php echo $p_id; ?>">
                <label for="floatingInput">ชื่อ-นามสกุล</label>
                </div><p></p>
                <div class="form-floating" >
                <input type="text" class="form-control" name="p_nickname" id="p_nickname" required placeholder="ชื่อเล่น" value="<?php echo $p_nickname; ?>">
                <label for="floatingInput">ชื่อเล่น</label>
                </div><p></p>
                <div class="form-floating">
                <textarea class="form-control" required placeholder="Leave a comment here" id="p_detail"  name="p_detail" style="height: 150px"><?php echo $p_detail; ?></textarea>
                <label for="floatingTextarea2">ประวัติ</label>
                </div><p></p>
        
            <input type="submit" name="update" id="update" value="บันทึก" class="w-100 btn btn-lg btn-warning"><p></p>
            <input type="button" name="out" onclick="window.location='admin.php';" value="ยกเลิก" class="w-100 btn btn-lg btn-primary"> 
 
        </div>
        <br>
        <div class="col-lg-6 col-md-8 mx-auto">
        <div class="form-floating">
        <p></p>
            <textarea class="form-control" required id="p_work"  name="p_work" style="height: 500px"><?php echo $p_work; ?></textarea>
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