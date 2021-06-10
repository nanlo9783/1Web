<?php  
include('condb.php');

$m_name = $_REQUEST["m_name"];
$m_pass = $_REQUEST["m_pass"];
$m_tel = $_REQUEST["m_tel"];
$m_email = $_REQUEST["m_email"];

echo $m_name;



$sql = "INSERT INTO tbl_member(m_name,
m_pass,
m_tel,
m_email,status_user)
VALUES('$m_name','$m_pass','$m_tel','$m_email','member')
"; 

$result = mysqli_query($con,$sql) or die ("Error in query: $sql ".mysqli_error());

if($result)
{
    echo "<script type='text/javascript'>";
    echo "alert('สำเร็จ');";
    echo "window.location='login.php';";
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