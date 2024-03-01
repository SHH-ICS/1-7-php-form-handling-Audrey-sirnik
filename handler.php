<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    $lastName = "";
    if ( isset( $_POST['lastName'] ) ){
      $lastName = $_POST['lastName'];
    }
    echo "<h1>Welcome ".$userName." ".$lastName."!</h1>\n";
    ?>
    
  </body>
  
</html>
