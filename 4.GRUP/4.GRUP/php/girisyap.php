<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MONGA</title>
        <link rel="icon" href="../image/favicon-96x96.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/kısaözellikler.css">
        <link rel="stylesheet" href="../css/Girişyap2.css">
        <link rel="stylesheet" href="../css/webproje.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body style="background-color:#ffe6f9 ;">
    <header class="header">
        <?php 
        include('../inc/dbBaglan.php');
         include ('../inc/header1.php'); ?>
    </header>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["email"]) && isset($_POST["sifre"])){
            $email = $_POST["email"];
            $sifre = $_POST["sifre"];
    
            $sql = "SELECT * FROM kullanici WHERE email='$email' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if($row >1){
                    $_SESSION["kullanici_ID"] =$row["kullanici_ID"];
                    $_SESSION["email"] = $email;
                    $_SESSION["sifre"] =$sifre;
                    header("Location: index.php");
                    exit();
                } else {
                    echo "Geçersiz email veya şifre.";
                         
                }
            }
        }
    } 
    
    
  


 ?>
    



<!-- /*
// Giriş işlemi
if (isset($_POST['giris yap'])) {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    $sql = "SELECT * FROM kullanici WHERE email = '$email'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $sifreliHash = $row['sifre'];

        if (password_verify($sifre, $sifreliHash)) {
            // Giriş Başarılı
            session_start();
            $_SESSION['kullanici_id'] = $row['kullanici_id'];
            echo "Giriş başarılı.";
        } else {
            echo "Hatalı şifre girdiniz.";
        }
    } else {
        echo "Böyle bir kullanıcı bulunamadı.";
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["email"]) && isset($_POST["sifre"])){
            $email = $_POST["email"];
            $sifre = hash('sha512', $_POST["sifre"]);
    
            $sql = "SELECT * FROM kullanici WHERE kullanici='$email'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $asilsifre = hash('sha512', $row["sifre"]);
                if($sifre ==$sifre){
                    $_SESSION["kullanici_ID"] =$row["kullanici_ID"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["sifre"] =$row["sifre"];
                    header("Location: index.php");
                    exit();
                } else {
                    echo "Geçersiz email veya şifre.";
                         
                }
            }
        }
    } 
    
    ?>
    
Kullanıcıyı veritabanında arama
$sql = "SELECT * FROM kullanici WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Kullanıcı bulunursa...
    while($row = $result->fetch_assoc()) {
        $hashed_sifre = $row["sifre"];

        // Şifreyi doğrulama
        if (password_verify($sifre, $hashed_sifre)) {
            // Giriş başarılı
            echo "Giriş Başarılı!";
            // Giriş sonrası işlemleri buraya ekleyin (örneğin, kullanıcı oturumunu başlatma)
        } else {
            // Hatalı şifre
            echo "Hatalı e-posta veya şifre.";
        }
    }
} else {
     // Kullanıcı bulunamadı
     echo "Bu e-posta adresine kayıtlı bir kullanıcı bulunamadı.";
    }*/ -->
    
    
   
    
    ?>

    <form id="GirişYap2" method="POST"  action="index.php" >
        <h1>Giriş Yap</h1>
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" class="text3">
        <br>
        <label for="sifre">Şifre:</label>
        <input type="password" id="sifre" name="sifre" class="password3">
        <br>
        <label for="BeniHatırla">Beni Hatırla<input type="checkbox" id="BeniHatırla" name="BeniHatırla"></label> 
        
        <br>
        <input style="background-color:#66004d ;" type="submit" value="Giriş Yap" class="submit2">
        <p>Hesabınız yokmu?<a href="../php/uyeol.php" >Kayıt Oluştur</a></p>
        <br>
        <a1 href="#">Şifremi unuttum</a1>
    </form>
    <div id="uyarilar"></div>
<?php include('../inc/footer.php'); ?>