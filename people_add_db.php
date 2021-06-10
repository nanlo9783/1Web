<?php  
include('condb.php');

$numrand = (mt_rand());

$p_name = $_REQUEST["p_name"];
$p_nickname = $_REQUEST["p_nickname"];
$s_id = $_REQUEST["s_id"];
$p_work = $_REQUEST["p_work"];
$p_detail = $_REQUEST["p_detail"];
$p_img = (isset($_POST['p_img']) ? $_POST['p_img']: '');

$upload = $_FILES["p_img"];

if($upload <> '')
{
    $path = "img/ad/";
    $type = strrchr($_FILES["p_img"]["name"], ".");
    $newname = "p_img".$numrand.$type;
    $path_copy = $path.$newname;
    $path_link = "p_img/".$newname;

    move_uploaded_file($_FILES["p_img"]["tmp_name"],$path_copy);
}

$sql = "INSERT INTO tbl_people(p_name,
p_nickname,
s_id,
p_work,
p_detail,
p_img)
VALUES('$p_name','$p_nickname','$s_id','$p_work','$p_detail','$newname')
"; 

$result = mysqli_query($con,$sql) or die ("Error in query: $sql ".mysqli_error());

if($result)
{
    echo "<script type='text/javascript'>";
    echo "alert('สำเร็จ');";
    echo "window.location='admin.php';";
    echo "</script>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('ล้มเหลว');";
    echo "window.history.back()";
    echo "</script>";
}

?>