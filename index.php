<?php
include('config.php');

$query_title= mysqli_query($database,"SELECT * from homepage where item_variable like 'title'");
$query_description= mysqli_query($database,"SELECT * from homepage where item_variable like 'description'");
$query_background_color= mysqli_query($database,"SELECT * from homepage where item_variable like 'background_color'");
$query_hero_image= mysqli_query($database,"SELECT * from homepage where item_variable like 'hero_image'");
$row = mysqli_fetch_array($query_title);
$row1 = mysqli_fetch_array($query_description);
$row2 = mysqli_fetch_array($query_background_color);
$row3 = mysqli_fetch_array($query_hero_image);
$title = $row['item_values'];
$description = $row1['item_values'];
$background_color = $row2['item_values'];
$img = $row3['item_values'];  
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="/bliud/css/index.css">
    <script src="/bliud/js/main.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:<?=$background_color?>">
<div class="hero"style="background-image:url(/upload/<?=$img?>)">
<h1><?=$title?></h1> 
<p><?=$description?></p>
</div>
</body>
</html>
