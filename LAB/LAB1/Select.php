<!DOCTYPE html>
  <html lang="en">
    
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
      h1{
        text-align: center;
      }

      table{

        margin : 100px; 
        border-radius: 50px;
      }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <style>
      th{
        
        width: 500px;
      }
      td{
        align-self: center;
        width: 500px;
      }
      tr{
        width: 500px;
        align-self: center;
        width: 500px;
      }
      #box4 {
            
            width: 100%;
            height: 100px;
            
            
        }
        a:hover.home{
            background-color: rgb(255, 255, 255);
        }
        a.home{
            color: coral;
            text-decoration: none;
            position: center;
            left: 30%;
            top: 40%;
        }
    </style>
  </head>
  <body>
  <!-- NAVBAR -->

<?php
  include '../../detail/bootstrap.php';
  include '../../detail/navbar.php';
?>

<br>
<br>
<br>
<br>
<?php
include("../../condb.php");
// $servername = "localhost";
// $username = "web435_db10";
// $password = "web435_db10";
// $dbname = "web435_db10";


// // Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM db10_customers ORDER BY `CustomerID`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <h1>Customer</h1>
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
<?php
$sql = "SELECT * FROM db10_categories ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  ?>

<h1>Categories</h1>
  <table  border="1" cellpadding="9" cellspacing="5">
                                         <tr >
                                         <thead bgcolor = "gray">
                                            <th>CategoryID</th> 
                                            <th>CategoryName</th>
                                            <th>Description</th>
</thead >
                                        </tr>
                                       

    
  
  
  
  <?php
  while($row=mysqli_fetch_array($result)) {
      ?>
                                        <tr>
                                            <td><?=$row["CategoryID"]?></td>
                                            <td><?=$row["CategoryName"]?></td>
                                            <td><?=$row["Description"]?></td>
                                            
                                        </tr>
      <?php 
  }
} else {
  echo "0 results";
}

?>
</table>
<?php
$sql = "SELECT * FROM db10_employees ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  ?>

<h1>Employees</h1>
  <table  border="1" cellpadding="9" cellspacing="5">
                                         <tr >
                                         <thead bgcolor = "gray">
                                            <th>EmployeeID</th> 
                                            <th>LastName</th>
                                            <th>FirstName</th>
                                            <th>BirthDate</th>
                                            <th>Photo</th>
                                            <th>Notes</th>
</thead >
                                        </tr>
                                       

    
  
  
  
  <?php
  while($row=mysqli_fetch_array($result)) {
      ?>
                                        <tr>
                                            <td><?=$row["EmployeeID"]?></td>
                                            <td><?=$row["LastName"]?></td>
                                            <td><?=$row["FirstName"]?></td>
                                            <td><?=$row["BirthDate"]?></td>
                                            <td><?=$row["Photo"]?></td>
                                            <td><?=$row["Notes"]?></td>
                                        </tr>
      <?php 
  }
} else {
  echo "0 results";
}

?>
</table>
<?php
$sql = "SELECT * FROM db10_orderdetails ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  ?>

<h1>Orderdetails</h1>
  <table  border="1" cellpadding="9" cellspacing="5">
                                         <tr >
                                         <thead bgcolor = "gray">
                                            <th>OrderDetailID</th> 
                                            <th>OrderID</th>
                                            <th>ProductID</th>
                                            <th>Quantity</th>
                                        
</thead >
                                        </tr>
                                       

    
  
  
  
  <?php
  while($row=mysqli_fetch_array($result)) {
      ?>
                                        <tr>
                                            <td><?=$row["OrderDetailID"]?></td>
                                            <td><?=$row["OrderID"]?></td>
                                            <td><?=$row["ProductID"]?></td>
                                            <td><?=$row["Quantity"]?></td>
                                          
                                        </tr>
      <?php 
  }
} else {
  echo "0 results";
}

?>
</table>
<?php
$sql = "SELECT * FROM db10_orders";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  ?>

<h1>Orders</h1>
  <table  border="1" cellpadding="9" cellspacing="5">
                                         <tr >
                                         <thead bgcolor = "gray">
                                            <th>OrderID</th> 
                                            <th>CustomerID</th>
                                            <th>EmployeeID</th>
                                            <th>OrderDate</th>
                                            <th>ShipperID</th>
                                        
</thead >
                                        </tr>
                                       

    
  
  
  
  <?php
  while($row=mysqli_fetch_array($result)) {
      ?>
                                        <tr>
                                            <td><?=$row["OrderID"]?></td>
                                            <td><?=$row["CustomerID"]?></td>
                                            <td><?=$row["EmployeeID"]?></td>
                                            <td><?=$row["OrderDate"]?></td>
                                            <td><?=$row["ShipperID"]?></td>
                                            
                                          
                                        </tr>
      <?php 
  }
} else {
  echo "0 results";
}

?>
</table>
<?php
$sql = "SELECT * FROM db10_products";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  ?>

<h1>Products</h1>
  <table  border="1" cellpadding="9" cellspacing="5">
                                         <tr >
                                         <thead bgcolor = "gray">
                                            <th>ProductID</th> 
                                            <th>ProductName</th>
                                            <th>SupplierID</th>
                                            <th>CategoryID</th>
                                            <th>Unit</th>
                                            <th>Price</th>
                                        
</thead >
                                        </tr>
                                       

    
  
  
  
  <?php
  while($row=mysqli_fetch_array($result)) {
      ?>
                                        <tr>
                                            <td><?=$row["ProductID"]?></td>
                                            <td><?=$row["ProductName"]?></td>
                                            <td><?=$row["SupplierID"]?></td>
                                            <td><?=$row["CategoryID"]?></td>
                                            <td><?=$row["Unit"]?></td>
                                            <td><?=$row["Price"]?></td>
                                          
                                        </tr>
      <?php 
  }
} else {
  echo "0 results";
}

?>
</table>
<?php
$sql = "SELECT * FROM db10_shippers";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  ?>

<h1>Shippers</h1>
  <table  border="1" cellpadding="9" cellspacing="5">
                                         <tr >
                                         <thead bgcolor = "gray">
                                            <th>ShipperID</th> 
                                            <th>ShipperName</th>
                                            <th>Phone</th>
                                            
                                        
</thead >
                                        </tr>
                                       

    
  
  
  
  <?php
  while($row=mysqli_fetch_array($result)) {
      ?>
                                        <tr>
                                            <td><?=$row["ShipperID"]?></td>
                                            <td><?=$row["ShipperName"]?></td>
                                            <td><?=$row["Phone"]?></td>
                                           
                                          
                                        </tr>
      <?php 
  }
} else {
  echo "0 results";
}

?>
</table>
<?php
$sql = "SELECT * FROM db10_suppliers";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  ?>

<h1>Suppliers</h1>
  <table  border="1" cellpadding="9" cellspacing="5">
                                         <tr >
                                         <thead bgcolor = "gray">
                                            <th>SupplierID</th> 
                                            <th>SupplierName</th>
                                            <th>ContactName</th>
                                            <th>Address</th> 
                                            <th>City</th>
                                            <th>PostalCode</th>
                                            <th>Country</th> 
                                            <th>Phone</th>
                                            
                                            
                                        
</thead >
                                        </tr>
                                       

    
  
  
  
  <?php
  while($row=mysqli_fetch_array($result)) {
      ?>
                                        <tr>
                                            <td><?=$row["SupplierID"]?></td>
                                            <td><?=$row["SupplierName"]?></td>
                                            <td><?=$row["ContactName"]?></td>
                                            <td><?=$row["Address"]?></td>
                                            <td><?=$row["City"]?></td>
                                            <td><?=$row["PostalCode"]?></td>
                                            <td><?=$row["Country"]?></td>
                                            <td><?=$row["Phone"]?></td>
                                           
                                          
                                        </tr>
      <?php 
  }
} else {
  echo "0 results";
}

?>
</table>
  </body>
</html>