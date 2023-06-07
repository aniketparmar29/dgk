<?php
    include "../dbconnection.php";
    if (!isset($_SESSION['auth']) || $_SESSION['role'] !== "admin") {
      echo "op";
      header('Location: ../index.php');
      exit(); // It's recommended to include an exit() statement after a header redirect
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
</head>
<body>
    
</body>
</html>