<?php


include('../inc/dbBaglan.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == 'ekle') {
        $urunID = $_POST['urunID'];
        $query = "SELECT * FROM urunler WHERE Urun_ID = $urunID";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);

        $UrunAdi = $row['UrunAdi'];
        $UrunFiyat = $row['UrunFiyat'];

        if (isset($_SESSION['sepet'][$urunID])) {
            $_SESSION['sepet'][$urunID]['miktar']++;
        } else {
            $_SESSION['sepet'][$urunID] = array(
                'Urun_ID' => $urunID,
                'UrunAdi' => $UrunAdi,
                'UrunFiyat' => $UrunFiyat,
                'miktar' => 1
            );
        }
    } elseif ($action == 'sil') {
        $urunID = $_POST['urunID'];
        unset($_SESSION['sepet'][$urunID]);
    }
}

function toplamFiyat() {
    $toplamFiyat = 0;
    foreach ($_SESSION['sepet'] as $urun) {
        $toplamFiyat += $urun['UrunFiyat'] * $urun['miktar'];
    }
    return $toplamFiyat;
}

?>
<!--?php
session_start();
include ('../inc/dbBaglan.php');

// İstek türünü kontrol et ve ilgili işlemi gerçekleştir
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $userId = $_POST['userId'];
    $productId = $_POST['productId'];

    switch ($action) {
        case 'add':
            addToBasket($productId, $userId);
            break;
        case 'update':
            $operation = $_POST['operation'];
            updateBasketQuantity($productId, $userId, $operation);
            break;
        case 'remove':
            removeFromBasket($productId, $userId);
            break;
        case 'list':
            listBasketItems($userId);
            break;
        default:
            echo "Geçersiz işlem.";
    }
}

// Sepete ürün ekleme fonksiyonu
function addToBasket($productId, $userId) {
    global $conn;

    // Ürünü bul
    $result = $conn->query("SELECT * FROM urunler WHERE Urun_ID = $productId");
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $stockQuantity = $product['stokMiktari'];

        // Sepette bu üründen var mı kontrol et
        $basketCheck = $conn->query("SELECT * FROM sepetdetay WHERE urun_id = $productId AND kullanici_id = $userId");
        if ($basketCheck->num_rows > 0) {
            $basketItem = $basketCheck->fetch_assoc();
            $newQuantity = $basketItem['miktar'] + 1;

            if ($newQuantity <= $stockQuantity) {
                // Miktarı artır
                $updateQuery = "UPDATE sepetdetay SET miktar = $newQuantity WHERE urun_id = $productId AND kullanici_id = $userId";
                $conn->query($updateQuery);
                echo "Ürün miktarı artırıldı.";
            } else {
                echo "Yeterli stok yok.";
            }
        } else {
            // Yeni ürün ekle
            if ($stockQuantity > 0) {
                $insertQuery = "INSERT INTO sepetdetay (kullanici_id, urun_id, miktar) VALUES ($userId, $productId, 1)";
                $conn->query($insertQuery);
                echo "Ürün sepete eklendi.";
            } else {
                echo "Stokta bu ürün yok.";
            }
        }
    } else {
        echo "Ürün bulunamadı.";
    }
}

// Sepette ürün miktarını güncelleme fonksiyonu
function updateBasketQuantity($productId, $userId, $operation) {
    global $conn;

    // Ürünü bul
    $result = $conn->query("SELECT * FROM urunler WHERE Urun_ID = $productId");
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $stockQuantity = $product['stokMiktari'];

        // Sepette bu üründen var mı kontrol et
        $basketCheck = $conn->query("SELECT * FROM sepetdetay WHERE urun_id = $productId AND kullanici_id = $userId");
        if ($basketCheck->num_rows > 0) {
            $basketItem = $basketCheck->fetch_assoc();
            $currentQuantity = $basketItem['miktar'];
            $newQuantity = $operation === 'increase' ? $currentQuantity + 1 : $currentQuantity - 1;

            if ($newQuantity > 0 && $newQuantity <= $stockQuantity) {
                // Miktarı güncelle
                $updateQuery = "UPDATE sepetdetay SET miktar = $newQuantity WHERE urun_id = $productId AND kullanici_id = $userId";
                $conn->query($updateQuery);
                echo "Ürün miktarı güncellendi.";
            } elseif ($newQuantity == 0) {
                // Sepetten ürünü sil
                $deleteQuery = "DELETE FROM sepetdetay WHERE urun_id = $productId AND kullanici_id = $userId";
                $conn->query($deleteQuery);
                echo "Ürün sepetten silindi.";
            } else {
                echo "Yeterli stok yok.";
            }
        } else {
            echo "Sepette böyle bir ürün yok.";
        }
    } else {
        echo "Ürün bulunamadı.";
    }
}

// Sepetten ürün silme fonksiyonu
function removeFromBasket($productId, $userId) {
    global $conn;

    // Sepetten ürünü sil
    $deleteQuery = "DELETE FROM sepetdetay WHERE urun_id = $productId AND kullanici_id = $userId";
    if ($conn->query($deleteQuery) === TRUE) {
        echo "Ürün sepetten silindi.";
    } else {
        echo "Hata: " . $conn->error;
    }
}

// Sepeti listeleme fonksiyonu
function listBasketItems($userId) {
    global $conn;

    $result = $conn->query("SELECT si.*, u.UrunAdi, u.UrunFiyat, u.fotograf FROM sepetdetay si JOIN urunler u ON si.urun_id = u.Urun_ID WHERE si.kullanici_id = $userId");

    if ($result->num_rows > 0) {
        $totalPrice = 0;
        while($item = $result->fetch_assoc()) {
            $totalPrice += $item['UrunFiyat'] * $item['miktar'];
            echo '<li class="basket-item">';
            echo '  <img src="' . htmlspecialchars($item['fotograf']) . '" width="100" height="100"/>';
            echo '  <div class="basket-item-info">';
            echo '      <h3 class="book-name">' . htmlspecialchars($item['UrunAdi']) . '</h3>';
            echo '      <span class="book-price">' . htmlspecialchars($item['UrunFiyat']) . '$</span><br/>';
            echo '      <span class="book-remove" onclick="removeFromBasket(' . intval($item['urun_id']) . ', ' . intval($item['kullanici_id']) . ')">Remove</span>';
            echo '  </div>';
            echo '  <div class="book-count">';
            echo '      <span class="decrease" onclick="updateBasketQuantity(' . intval($item['urun_id']) . ', ' . intval($item['kullanici_id']) . ', \'decrease\')">-</span>';
            echo '      <span class="my-5">' . htmlspecialchars($item['miktar']) . '</span>';
            echo '      <span class="increase" onclick="updateBasketQuantity(' . intval($item['urun_id']) . ', ' . intval($item['kullanici_id']) . ', \'increase\')">+</span>';
            echo '  </div>';
            echo '</li>';
        }
        echo '<div class="total-price">Total: ' . number_format($totalPrice, 2) . '$</div>';
    } 
    else {
        echo '<li class="basket-item yazi">No items to buy again.</li>';
    }
}


?>-->