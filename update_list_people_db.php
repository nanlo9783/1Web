<?php  
include('condb.php');

$p_id = $_POST["p_id"];
$p_name = $_POST["p_name"];
$p_detail = $_POST["p_detail"];
$p_work = $_POST['p_work'];


$sql = "UPDATE tbl_people SET
p_id ='$p_id',
p_name ='$p_name',
p_detail ='$p_detail',
p_work ='$p_work'
WHERE p_id='$p_id'
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
    echo "</script>";
}

?>