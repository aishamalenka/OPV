<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
<header>

<?php wp_nav_menu (

array(
    'theme_locaton' => 'top-menu', 
    // 'menu_class' => 'navigation'
)
);?> 

</header>
