<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Distinct 2.2</title>
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
$sql = "SELECT distinct(CustomerID) from db10_orders";
$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    ?>
    <div class="head"></div>
  <div align="center">
  <h1>2.2 Select Distinct CustomerID From Oders</h1>
    <table  border="1" cellpadding="9" cellspacing="5">
                                           <tr >
                                           <thead bgcolor = "gray">
                                              <th>CustomerID</th> 
                                              
  </thead >
                                          </tr>
                                         
  
      
    
    
    
    <?php
    while($row=mysqli_fetch_array($result)) {
        ?>
                                          <tr>
                                              <td align="center"><?=$row["CustomerID"]?></td>
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