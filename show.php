<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab013.mysql.database.azure.com', 'pat@lab013', 'Kmilt232545', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM Guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Product </div></th>
    <th width="350"> <div align="center">Price </div></th>
    <th width="150"> <div align="center">Amount </div></th>
    <th width="350"> <div align="center">Total </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Product'];?></div></td>
    <td><?php echo $Result['Price'];?></td>
    <td><?php echo $Result['Amount'];?></td>
    <td><?php echo $Result['Total'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>