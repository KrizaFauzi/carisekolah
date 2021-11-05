
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','carisekolah');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tb_coba WHERE nama  = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>nama</th>
<th>jenjang</th>
<th>provinsi</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nama'] . "</td>";
  echo "<td>" . $row['jenjang'] . "</td>";
  echo "<td>" . $row['provinsi'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>