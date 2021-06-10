<?php
// ---------------------------------webcom------------------
include('condb.php');

$sql ="SELECT * FROM tbl_member
order by m_id asc";

include('result.php');

echo '<table class="table table-striped">';

echo "<thead>";

echo "<tr class='table align='center'>
<th>#</th>
<th>First</th>
<th>Last</th>
<th>Handle</th>
<th>Handle</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

echo "</thead>";


while($row = mysqli_fetch_array($result))
{
    echo "<tr align='center'>";
    echo "<th>";
    echo "<td>" .$row["m_id"]. "</td>";
    echo "<td>" .$row["m_name"]. "</td>";
    echo "<td>" .$row["m_pass"]. "</td>";
    echo "<td>" .$row["m_tel"]. "</td>";
    echo "<td>" .$row["m_email"]. "</td>";
    echo "<td> <a href='update_product_add.php?m_id=$row[0]' class='btn btn-warning'>Edit</a> </td>";
    echo "<td> <a href='del_product.php?ID=$row[0]' class='btn btn-danger'>Delete</a> </td>";
    echo "</th>";
    echo "</tr>";
}


echo "</table>";

?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>