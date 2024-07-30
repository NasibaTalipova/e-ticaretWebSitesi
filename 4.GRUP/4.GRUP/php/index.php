<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONGA</title>
    <link rel="icon" href="../image/favicon-96x96.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/webproje.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/kısaözellikler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <?php include ('../inc/header.php'); ?>          
    </header>
<div class="slider-container">
    <div class="slider">
        <img src="../image/foto1.jpg" alt="Image 1">
        <img src="../image/2161-notebook-coffee-book-still-life-4k.jpg" alt="Image 1">
        <img src="../image/5a9291527c52000b0e9b134a0e8e03e2.jpg" alt="Image 1">
    </div>
</div>
<br>
<br>
<div class="foto">
    <a class="foto-konum" href="../php/kitap.php">
        <img class="foto-image" width="600" height="300" alt="Tüm Ürünler" src="../image/kitap10.webp" style="color: transparent;">
        <h1 style="color:#74141e;">KİTAP</h1>
    </a>
    <a class="foto-konum" href="../php/ajanda.php">
        <img class="foto-image" width="600" height="300" alt="Ajanda" src="../image/kitap11.webp" style="color: transparent;">
        <h1 style="color:#74141e;">AJANDA</h1>
    </a>
</div>

<?php
    include ('../inc/footer.php');
?>