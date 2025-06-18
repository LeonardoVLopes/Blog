<?php
    include_once 'helpers/url.php';
    include_once 'data/posts.php';
    include_once 'data/categories.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <!-- estilos -->
    <link rel="stylesheet" href="<?= $base_url; ?>/css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $base_url; ?>" id="logo">
        <img src="<?= $base_url; ?>/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $base_url; ?>/index.php"  class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $base_url; ?>/contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
