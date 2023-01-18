<html>
<head>
<title>Welcome to ansible</title>
<style>
table, td, th {
  border: 1px solid;
}

table {
  width: 50%;
  border-collapse: collapse;
}
</style>
</head>
<body>
<h1>Simple web static page powered by Apache server.<br> Configured with help of Ansible</h1>
<br>
<h3>If you can see this! Ansible successfully configured everything.</h3>
<br>
<?php

$con=mysqli_connect("localhost","root","vagrant","data1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users");

echo "<center>";
echo "<table>
<tr>
<th>Username</th>
<th>Name</th>
<th>Age</th>
<th>Position</th>
</tr>";
echo "<center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['age']. "</td>";
echo "<td>" . $row['position']. "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<br>
<center>
<img src="success.jpg" width="400pt" height="400pt"  alt="image of Tux and Ansible logo">
</center>
</body>
</html>
