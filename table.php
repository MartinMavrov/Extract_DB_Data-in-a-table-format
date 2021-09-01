<?php 
  require 'dbconnect/dbconnect.inc.php';
?>

<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Users Details</h2>

<table border="2">
  <tr>
    
    <td><b>First_Name</b></td>
    <td><b>Last_Name</b></td>
    <td><b>Email</b></td>
    <td><b>Phone_Number</b></td>
    <td><b>Username</b></td>
    <td><b>Password</b></td>
    <td><b>Address</b></td>
    <td><b>City</b></td>
    <td><b>Zip</b></td>
  </tr>

<?php


$records = mysqli_query($conn, "SELECT * FROM customer_info "); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['First_Name']; ?></td>
    <td><?php echo $data['Last_Name']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Phone_Number']; ?></td>
    <td><?php echo $data['Username']; ?></td>
    <td><?php echo $data['Password']; ?></td>
    <td><?php echo $data['Address']; ?></td>
    <td><?php echo $data['City']; ?></td>
    <td><?php echo $data['Zip']; ?></td>
    
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

</body>
</html>