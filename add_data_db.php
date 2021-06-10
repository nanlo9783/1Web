<?php
include('condb.php');

$numrand = (mt_rand());

$t_name = $_POST['t_name'];
$t_detail = $_POST['t_detail'];
$t_contact = $_POST['t_contact'];
$t_img = (isset($_POST['t_img']) ? $_POST['t_img']: '');

$upload = $_FILES["t_img"];

if($upload <> '')
{
    $path = "img/ad/";
    $type = strrchr($_FILES["t_img"]["name"], ".");
    $newname = "t_img".$numrand.$type;
    $path_copy = $path.$newname;
    $path_link = "t_img/".$newname;

    move_uploaded_file($_FILES["t_img"]["tmp_name"],$path_copy);
}

$sql ="INSERT INTO tbl_team(t_name,
t_detail,
t_contact,
t_img)
VALUES('$t_name','$t_detail','$t_contact','$newname')";

include('result.php');

if($result)
{
    echo "<script type='text/javascript'>";
    echo "alert('สำเร็จ');";
    echo "window.location='index.php';";
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