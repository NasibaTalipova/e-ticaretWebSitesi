<!DOCTYPE html>
<html >
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
        <div class="logo-menu">
            <h2 style="padding-left: 1050;">MONGA</h2>
            <button id="menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <div id="menu" class="hidden">
                <ul>
                   <li> <a href="#">Ana Sayfa</a></li>
                   <li> <a href="#">Hakkımızda</a></li>
                   <li>  <a href="">Ürünler</a></li>
                   <li> <a href="../html/yeniuyeekle.html">  Yeni Ürün Ekle</a></li>
                   <li>  <a href="#">Kullanıcılar</a></li>
                   <li>  <a href="#">İletişim</a></li>
                   <li>   <a href="../php/index.php">Site Ana Sayfa</a></li>
                   <li> <a href="../php/admingiris.php">Çıkış</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="main3">
        <h3>Ürünler Listesi</h3>
        <table>
                <tr>
                    <th>Aktif</th>
                    <th>Sıra</th>
                    <th>Foto</th>
                    <th>Üst Başlık</th>
                    <th>TL Başlık</th>
                    <th>TL İçerik</th>
                    <th>Arama</th>
                    <th>Güncelle</th>
                    <th>Sil</th>
                </tr>
        </table>
        <table>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td><img style="width:80px; height:80px;" src="../image/kitap23.webp" alt="Product 1"></td>
                    <td> en sevilen kitaplar</td>
                    <td>Kitap ve Ajanda </td>
                    <td> 99.99 tl</td>
                    <td><input type="text" placeholder="Search..."></td>
                    <td><button  onclick="updateRow()" style="background-color: rgb(70, 70, 75);  padding: 10px; border-radius: 5px;">Güncelle</button></td>
                    <td><button  onclick="deleteRow(this)" style="background-color: rgb(51, 51, 53);  padding: 10px; border-radius: 5px;">Sil</button></td>
                </tr>
        </table>
        <table>
            <tr>
                <td><input type="checkbox"></td>
                <td>2</td>
                <td><img style="width:80px; height:80px;" src="../image/kitap13.webp" alt="Product 1"></td>
                <td> en sevilen kitaplar</td>
                <td>Kitap ve Ajanda </td>
                <td> 99.99 tl</td>
                <td><input type="text" placeholder="Search..."></td>
                <td><button onclick="updateRow()" style="background-color: rgb(91, 91, 95);  padding: 10px; border-radius: 5px; " >Güncelle</button></td>
                <td><button  onclick="deleteRow(this)" style="background-color: rgb(71, 71, 74);  padding: 10px; border-radius: 5px;">Sil</button></td>
            </tr>
    </table>
    <table>
        <tr>
            <td><input type="checkbox"></td>
            <td>3</td>
            <td><img style="width:80px; height:80px;" src="../image/kitap10.webp" alt="Product 1"></td>
            <td> en sevilen kitaplar</td>
            <td>Kitap ve Ajanda </td>
            <td> 99.99 tl</td>
            <td><input type="text" placeholder="Search..."></td>
            <td><button onclick="updateRow()" style="background-color: rgb(112, 112, 126) ; padding: 10px; border-radius: 5px;" >Güncelle</button></td>
            <td><button   onclick="deleteRow(this)" style="background-color: rgb(167, 167, 182); padding: 10px; border-radius: 5px;" >Sil</button></td>
        </tr>
</table>
<script>
    function deleteRow(button) {
        var row = button.parentNode.parentNode; 
        row.parentNode.removeChild(row); 
    }
    function updateRow() {   
        alert('Güncelleme işlemi yapılacak.');
    }
</script>
<?php include ('../inc/footer.php'); ?>
