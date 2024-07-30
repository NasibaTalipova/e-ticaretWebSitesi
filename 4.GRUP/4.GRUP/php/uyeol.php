<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONGA</title>
    <link rel="icon" href="../image/favicon-96x96.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/kısaözellikler.css">
    <link rel="stylesheet" href="../css/webproje.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="../css/kayıtol.css">
    <script type="text/javascript" src="../js/sweetalert.min.js"></script>
</head>
<body>
    <header class="header">
        
       <?php 
       include('../inc/dbBaglan.php');
       include('../inc/header1.php'); 
       
        ?>
    </header>

    <?php
    
$adSoyad = isset($_POST['adSoyad']) ? $_POST['adSoyad'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$sifre = isset($_POST['sifre']) ? $_POST['sifre'] : '';
$sifre_tekrari = isset($_POST['sifre_tekrari']) ? $_POST['sifre_tekrari'] : '';

// Hata Kontrolü


// E-posta benzersizliği kontrolü için MySQL sorgusu yazın

$sifre = password_hash($sifre, PASSWORD_DEFAULT);

$sql = "INSERT INTO kullanici (adSoyad, email, sifre) VALUES ('$adSoyad', '$email', '$sifre')";


if ($conn->query($sql) === TRUE) {
    $_SESSION['kullanici_id'] = $conn->insert_id;
    $_SESSION['adsoyad'] = $adSoyad;
    $_SESSION['email'] = $email;
         
    
            echo "Kayıt başarılı.";
         } else {
        echo "Kayıt işlemi sırasında bir hata oluştu.";
      }


$conn->close();

?>



<!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adsoyad = $_POST["adsoyad"];
        $email = $_POST["email"];
        $sifre = $_POST["sifre"];
        $sifre_tekrari = $_POST["sifre_tekrari"];
    
        // Şifre ve şifre tekrarının eşleşip eşleşmediğini kontrol et
        if ($sifre === $sifre_tekrari) {
            // Şifreyi hashle
            $hashed_sifre = password_hash($sifre, PASSWORD_DEFAULT);
    
            // Veritabanına kaydetme sorgusu
            $sql = "INSERT INTO kullanici (adsoyad, email, sifre) VALUES ('$adsoyad','$email , '$sifre')";
            $stmt = $conn->prepare($sql);
    
            if ($stmt === false) {
                die('Prepare failed: ' . htmlspecialchars($conn->error));
            }
    
            // Parametreleri bağla ve sorguyu çalıştır
            $stmt->bind_param("sss", $adsoyad, $email, $hashed_sifre);
    
            if ($stmt->execute()) {
                // Kayıt başarılı olduğunda ana sayfaya yönlendir
                header("Location: index.php");
                exit;
            } else {
                $message = "Hata: " . htmlspecialchars($stmt->error);
            }
    
            $stmt->close();
        } else {
            $message = "Şifreler eşleşmiyor.";
        }
    }
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["adsoyad"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "Kayıtlı kullanıcı yok.";
    }
   
    ?>
    
    Şifrelerin eşleşip eşleşmediğini kontrol etme
if ($sifre != $sifre_tekrar) {
    echo "Şifreler eşleşmiyor. Lütfen tekrar deneyin.";
    exit;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adsoyad = $_POST["adSoyad"];
        $email = $_POST["email"];
        $sifre = $_POST["sifre"];
        $sifre_tekrari = $_POST["sifre_tekrari"];
    
        // Hata kontrolü
        if (empty($adsoyad) || empty($email) || empty($sifre) || empty($sifre_tekrari)) {
            echo "Lütfen tüm alanları doldurun.";
        } elseif ($sifre !== $sifre_tekrari) {
            echo "Şifreler eşleşmiyor.";
        } 
            // Sessiona verileri kaydet
        $_SESSION['adSoyad'] = $adSoyad;
        $_SESSION['email'] = $email;
        $_SESSION['sifre'] = $sifre;
    
            // SQL sorgusu
            $sql = "INSERT INTO kullanici (adSoyad, email, sifre) VALUES ('$adSoyad', '$email', '$sifre')";
    
            if ($conn->query($sql) === TRUE) {
                echo "Kayıt başarılı!";
            } else {
                echo "Hata: " . $sql . "<br>" . $conn->error;
            }
        }
    
    
    $conn->close();
    ?>
}
// Güvenlik için verileri filtreleme
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// E-posta adresinin benzersizliğini kontrol etme
$sql = "SELECT * FROM kullanicilar WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Bu e-posta adresi zaten kullanılıyor. Lütfen başka bir tane deneyin.";
} else {
    // Yeni kullanıcıyı veritabanına ekleme
    $hashed_sifre = password_hash($sifre, PASSWORD_DEFAULT);

    $sql = "INSERT INTO kullanicilar (adsoyad, email, sifre) VALUES ('$adsoyad', '$email', '$hashed_sifre')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Kayıt tamamlandı! Giriş yapabilirsiniz.";
    } else {
        echo "Kayıt sırasında bir hata oluştu: " . $conn->error;
    }
}*/



?>


$kullanicikaydet $db->prepare("INSERT INTO kullanici SET

$adsoyad: adsoyad,

$email=:email,

=: kullanici_password, 
kullanici_yetki=:kullanici_yetki

");

$insert $kullanicikaydet->execute(array(

'kullanici_adsoyad' => $kullanici_adsoyad, 'kullanici_mail' => $kullanici_mail,

'kullanici_password' => $password,

' kullanici_yetki' => $kullanici_yetki ));

if ($insert) {

I

header("Location:../../register.php?durum=basarisiz");

//Header("Location:../production/genel-ayarlar.php?durum=ok");

} else {

header("Location:../../register.php?durum=basarisiz");

}

 else {

header("Location:../../register.php?durum=mukerrerkayit");

} -->

<form id="kayitolmaformu" class="form3" method="post" action="index.php">
        <h1> Kayıt ol</h1>
        <label for="adsoyad">Ad - Soyad:</label><br>
        <input type="text" id="adSoyad" name="adSoyad" required placeholder="Ad-Soyad bilgilerinizi buraya yazın" class="input-type"><br>
        
    
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required placeholder="E-mail adresinizi buraya yazın" class="input-type"><br>
        
    
        <label for="sifre">Şifre:</label><br>
        <input type="password" id="sifre" name="sifre" required placeholder="Şifre belirleyın" class="input-password"><br>
        
    
        <label for="sifre_tekrar" >Şifre Tekrar:</label><br>
        <input type="password" id="sifre_tekrar" name="sifre_tekrar" required placeholder="Şifre tekrari" class="input-password"><br>
        
    
        <button style="background-color:#66004d" type="submit" value="Kayıt Ol" name ="kayıt ol" class="input-submit" action="php/">Kayıt ol</button> 
        <p>Hesabınız varmı?<a href="../php/girisyap.php"> Giriş Yapın</a></p>
    </form>
 
   



    

    <div id="uyarilar"></div>
<?php include('../inc/footer.php'); ?>