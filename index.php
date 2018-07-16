<?php
include('config.php');

$query_homepage= mysqli_query($database,"SELECT * from homepage ");
$row = mysqli_fetch_array($query_homepage);
$title = $row['item_values'];   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/bliud/css/index.css">
    <script src="/bliud/js/main.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:<?=$title?>">

<h1><?=$title?></h1> 
  
</body>
</html>
