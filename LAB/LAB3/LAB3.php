<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>LAB3</title>
</head>
<body>
<!-- NAVBAR -->

<?php
  include '../../detail/bootstrap.php';
  include '../../detail/navbar.php';
?>
  <div align="center">
      <form  method="post"  style=" width: 120pxbackground-color: dark;">
        <select name="option">
        <option value="1">CREATETABLE</option>
        <option value="2">INSERT</option>
        <option value="3">ADD COLUMN</option>
      </select>
        <input type="submit" value="Submit">
      </form>   
     
  </div>

  <div align="center">
  <?php
     $option = $_POST['option'];
     
     switch ($option) {
        case "1": 
           include 'CREATETABLE.php' ;

          break;
        case "2":
          include 'insertt.php' ;
          break;
        case "3":
          
          break;
        default:
          
          break;
      }
    ?>
  </div>

</body>
</html>