<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONGA</title>
    <link rel="icon" href="../image/favicon-96x96.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/kısaözellikler.css">
    link rel="stylesheet" href="../css/sepet2.css">
    <link rel="stylesheet" href="../css/webproje.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body  style="background-color: #ffe6f9 ;">
    <header class="header">
        <?php include('../inc/header.php'); ?>
               
    </header>
    <?php
      include ('../inc/dbBaglan.php');
     

// Sepet session'ı oluşturulur
if (!isset($_SESSION['sepet'])) {
    $_SESSION['sepet'] = array();
}

// Ürünlerin kategorilerine göre listelenmesi
$query = "SELECT * FROM urunler ORDER BY kategori_ID";
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $kategori_ID = $row['kategori_ID'];
    $Urun_ID = $row['Urun_ID'];
    $UrunAdi = $row['UrunAdi'];
    $UrunFiyat = $row['UrunFiyat'];

    echo "<div class='kategori-$kategori_ID'>";
    echo "<h2>$UrunAdi</h2>";
    echo "<p>Fiyat: $UrunFiyat TL</p>";
    echo "<button class='sepete-ekle' data-urun-id='$Urun_ID'>Sepete Ekle</button>";
    echo "</div>";
}

// Sepet içeriğinin listelenmesi
if (isset($_SESSION['sepet']) && count($_SESSION['sepet']) > 0) {
    echo "<h2>Sepet İçeriği</h2>";
    echo "<ul>";
    foreach ($_SESSION['sepet'] as $urun) {
        $Urun_ID = $urun['Urun_ID'];
        $miktar = $urun['miktar'];
        $UrunAdi = $urun['UrunAdi'];
        $UrunFiyat = $urun['UrunFiyat'];

        echo "<li>$UrunAdi x $miktar adet - $UrunFiyat TL</li>";
    }
    echo "</ul>";
    echo "<p>Toplam Fiyat: " . toplamFiyat() . " TL</p>";
    echo "<button class='odeme-yap'>Ödeme Yap</button>";
}?>
      
     <!--
    <div class="container1">
        <h2 class="text-center">Sepetınızde <strong class="text-danger" >6</strong> adet ürün bulunmakta</h2>
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-hover table-bordered table-striped" box-shadow="0 0 8px rgba(5,5,5,.3)"; width="80"; margin ="0 auto" border-collapse="collapse" font-size="20px";>
                <thead font-weight="bold" padding="16px!important">
                    <th class="text text-center">Ürün Resmi</th>
                    <th class="text text-center">Ürün Adı</th>
                    <th class="text text-center">Fiyatı</th>
                    <th class="text text-center">Adeti</th>
                    <th class="text text-center">Toplam</th>
                    <th class="text text-center">Sepetten Çıkar</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" width="120" vertical-align="middle!important">
                            <img src="../image/kitap22.webp" alt="" width="50">
                        </td>
                        <td class="text-center" width="150" vertical-align="middle!important">Ajanda</td> 
                        <td class="text-center"><strong>100 TL</strong></td>
                        <td class="text-center">
                            <a href="#"  class=" btn-xs btn-success btn-sm">+
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <input type="text-center" class=".item-count-input" value="3" width="50px"; text-align="center!important";>
                            <a href="#" class=" btn-xs btn-danger btn-sm">-
                                <span class="glyphicon glyphicon-minus"></span>
                            </a>   
                        </td>
                        <td class="text-center" width="120" >100 TL</td>
                        <td class="text-center" >
                            <a href="#" class=" btn-mm btn-danger btn-sm">
                                <span class="glyphicon glyphicon-remove"></span>
                                Sepetten Çıkar
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="120" vertical-align="middle!important">
                            <img src="../image/kitap22.webp" alt="" width="50">
                        </td>
                        <td class="text-center"width="150" vertical-align="middle!important">Ajanda</td> 
                        <td class="text-center"><strong>100 TL</strong></td>
                        <td class="text-center">
                            <a href="#"  class=" btn-xs btn-success btn-sm">+
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <input type="text-center" class=".item-count-input" value="3" width="50px"; text-align="center!important";>
                            <a href="#" class=" btn-xs btn-danger btn-sm">-
                                <span class="glyphicon glyphicon-minus"></span>
                            </a>   
                        </td>
                        <td class="text-center" width="120" >100 TL</td>
                        <td class="text-center" >
                            <a href="#" class=" btn-sm btn-danger btn-mm">
                                <span class="glyphicon glyphicon-remove"></span>
                                Sepetten Çıkar
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" width="120" vertical-align="middle!important">
                            <img src="../image/kitap22.webp" alt="" width="50">
                        </td>
                        <td class="text-center"width="150" vertical-align="middle!important">Ajanda</td> 
                        <td class="text-center"><strong>100 TL</strong></td>
                        <td class="text-center">
                            <a href="#"  class=" btn-xs btn-success btn-sm">+
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <input type="text-center" class=".item-count-input" value="3" width="50px"; text-align="center!important";>
                            <a href="#" class=" btn-xs btn-danger btn-sm">-
                                <span class="glyphicon glyphicon-minus"></span>
                            </a>   
                        </td>
                        <td class="text-center" width="120" >100 TL</td>
                        <td class="text-center" >
                            <a href="#" class=" btn-sm btn-danger btn-sm">
                                <span class="glyphicon glyphicon-remove"></span>
                                Sepetten Çıkar
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <th colspan="2" class="text-right" padding="40px" background-color=" #dfdfdf!important">
                        Toplam ürün : <span class="text-danger">6 adet</span>
                    </th>
                    <th colspan="4" class="text-right">
                        Toplam Tutar : <span class="text-danger">600 TL</span>
                    </th>
                </tfoot>
            </table>
        </div>
    </div>
    
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/jd/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script> 
<?php include('../inc/footer.php'); ?>   