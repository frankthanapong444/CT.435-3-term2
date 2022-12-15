<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhereAND,OR,NOT 4.3</title>
<style>
    div.head {
        width: 100%;
        height: 50px;
    }
</style>
</head>
<body>
<?php
include("../../../condb.php");
?>
<?php
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from db10_customers WHERE City = 'México D.F.' ";
$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    ?>
    <div class="head"></div>
  <div align="center">
  <h1>4.3 Where city ที่ไม่ใช่ Berlin</h1>
    <table  border="1" cellpadding="9" cellspacing="5">
                                           <tr >
                                           <thead bgcolor = "gray">
                                           <th>CustomerID</th> 
                                            <th>CustomerName</th>
                                            <th>ContactName</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>PostalCode</th>
                                            <th>Country</th>
  </thead >
                                          </tr>
                                         
  
      
    
    
    
    <?php
    while($row=mysqli_fetch_array($result)) {
        ?>
                                          <tr>
                                          <td><?=$row["CustomerID"]?></td>
                                            <td><?=$row["CustomerName"]?></td>
                                            <td><?=$row["ContactName"]?></td>
                                            <td><?=$row["Address"]?></td>
                                            <td><?=$row["City"]?></td>
                                            <td><?=$row["PostalCode"]?></td>
                                            <td><?=$row["Country"]?></td>
                                          </tr>
        <?php 
    }
  } else {
    echo "0 results";
  }
  
  ?>
  </table>
  </div>
</body>