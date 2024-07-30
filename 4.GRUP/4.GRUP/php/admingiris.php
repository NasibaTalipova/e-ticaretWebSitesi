<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONGA</title>
    <link href="../css/webproje.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/kısaözellikler.css" rel="stylesheet">
    <link rel="icon" href="../image/favicon-96x96.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body  style="background-color: #ffe6f9 ;">
    <header class="header">
        <?php include ('../inc/header.php'); ?>
    </header>
<form class="form2" action="../php/adminpanel.php">
    <h3> Admin Girişi </h3>
    <label for="email" style="font-size: 14px;">Email</label>
    <input type="email" placheholder="Email" class="txt1">
    <label for="password" style="font-size: 14px;">Password</label>
    <input type="password" placheholder="Password" class="txt1">
    <input type="submit" value="Create Account" style="font-size: 14px;">
</form>
</div>
<?php include ('../inc/footer.php'); ?>