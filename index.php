<?php
include('config.php');
include('db_helper.php');
$title = get_select('homepage','title');
$description = get_select('homepage','description');
$background_color = get_select('homepage','background_color');
$img = get_select('homepage','hero_image');
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

<h1><?=$title?></h1> 
<p><?=$description?></p>
<div class="pic">
<img  src="/upload/<?=$img?>" alt="">
</div>

</body>
</html>
