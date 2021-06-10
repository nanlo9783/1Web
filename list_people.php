<?php include('head.php'); ?>
<button type="button" class="btn btn-primary" onclick="window.location='people_add.php';">เพิ่มข้อมูล</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
<p></p>
<?php
include('condb.php');

$sql = "SELECT * FROM  tbl_people
order by p_id asc
"; 

$result = mysqli_query($con,$sql) or die ("Error in query: $sql ".mysqli_error());


echo '<table class="table table-hover" >';

echo "<tr class='table table-active' align='center'>
<td>ID</td>
<td>ชื่อ-นามสกุล</td>
<td>ชื่อเล่น</td>
<td>รูปภาพ</td>
<td>แก้ไข</td>
<td>ลบ</td>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr align='center'>";
    echo "<td>" .$row["p_id"]. "</td>";
    echo "<td>" .$row["p_name"]. "</td>";
    echo "<td>" .$row["p_nickname"]. "</td>";
    echo "<td>"."<img src='img/ad/" .$row["p_img"]. "' width='100' >"."</td>";
    echo "<td><a href='update_list_people.php?p_id=$row[0]'class='btn btn-warning'>แก้ไข</td>";
    echo "<td><a href='del_people.php?ID=$row[0]'class='btn btn-danger'>ลบ</td>";
    echo "</tr>";
}



echo "</table>";


?>