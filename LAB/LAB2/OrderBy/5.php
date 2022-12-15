<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
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
 $valz = $_GET['val']

?>
<?php
if ($valz == 1) {
    $sql = "SELECT * from db10_customers order by CustomerName asc ";
    $result = $conn->query($sql);
    // output data of each row
    ?>
    <div class="head"></div>
  <div align="center">
  <h1>5.1</h1>
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
  } 
  ?>
  </table>
  </div>
  <?php
if ($valz == 2) {
    $sql = "SELECT * from db10_customers order by CustomerName desc ";
    $result = $conn->query($sql);
    // output data of each row
    ?>
    <div class="head"></div>
  <div align="center">
  <h1>5.2</h1>
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
  }
  
  ?>
  </table>
  </div>
  <?php
if ($valz == 3) {
    $sql = "SELECT * from db10_customers order by City asc ";
    $result = $conn->query($sql);
    // output data of each row
    ?>
    <div class="head"></div>
  <div align="center">
  <h1>5.3</h1>
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
  }
  
  ?>
  </table>
  </div>
  <?php
if ($valz == 4) {
    $sql = "SELECT * from db10_customers order by City desc ";
    $result = $conn->query($sql);
    // output data of each row
    ?>
    <div class="head"></div>
  <div align="center">
  <h1>5.3</h1>
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
  }
  
  ?>
  </table>
  </div>
  
</body>