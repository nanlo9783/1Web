<?php
session_start();

if(isset($_POST['username']) and isset($_POST['password']))
{
    include("condb.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

echo $username;
echo $password;

    $sql = "SELECT * FROM tbl_member
    WHERE m_name LIKE '".$username."' AND m_pass LIKE '".$password."' "; 

    $result = mysqli_query($con,$sql) or die ("Error in query: $sql ".mysqli_error());

    if(mysqli_num_rows($result))
    {
        $row = mysqli_fetch_array($result);
        $_SESSION["ID"] = $row["m_id"];
        $_SESSION["name"] = $row["m_name"];
        $_SESSION["level"] = $row["status_user"];

        if($row["status_user"]=='admin'){header("location: admin.php");}
        if($row["status_user"]=='member'){header("location: member.php");}
    }
    else
    {
        echo "<script type='text/javascript'>";
        echo "alert('username หรือ Password ไม่ถูกต้อง');";
        echo "window.history.back()";
        echo "</script>";
    }

}

?>