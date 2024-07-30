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
        <link rel="stylesheet" href="../css/forms.css">
        <link rel="stylesheet" href="../css/kısaözellikler.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <header class="header" >
        <?php include('../inc/header.php'); ?>
    </header>
    <section class="store1 my-5">
        <div class="row book-list">
<?php

include('../inc/dbBaglan.php');

$sql = "SELECT Urun_ID, UrunAdi, Aciklama, UrunFiyat, fotograf FROM urunler where kategori_ID=2";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $index = 0; 
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-5 ' . ($index % 2 == 0 ? 'offset-2' : '') . ' my-5">';
        echo '  <div class="row book-card">';
        echo '      <div class="col-6">';
        echo '          <img class="img-fluid shadow" src="' . htmlspecialchars($row['fotograf']) . '" width="258" height="400"/>';
        echo '      </div>';
        echo '      <div class="col-6 d-flex flex-column justify-content-between;">';
        echo '          <div class="book-details">';
        echo '              <span class="fs-4 fw-bold">' . htmlspecialchars($row['UrunAdi']) . '</span><br>';
        echo '          </div>';
        echo '          <p class="book-description fos gray">' . htmlspecialchars($row['Aciklama']) . '</p>';
        echo '          <div>';
        echo '              <span class="black fw-bold fs-4 me-2">' . htmlspecialchars($row['UrunFiyat']) . ' TL</span>';
        echo '          </div>';
        echo '          <button class="favorite-btn" onclick="addToFavorites(' . intval($row['Urun_ID']) . ')"><i class="bi bi-heart"></i></button>';
        echo '          <button class="btn-purple" onclick="addToBasket(' . intval($row['Urun_ID']) . ')">ADD BASKET</button>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
        $index++;
    }
} else {
    echo "Kitap bulunamadı.";
}
$stmt->close();
$conn->close();
?>

    </div>
</section>
    <div class="basket-modal">
      <div class="basket-items">
        <i class="bi bi-x" onclick="toogleModal();"></i>
        <h2 class="basket-title">Your Items</h2>
        <ul class="basket-list">
          <li class="basket-item yazi">No items to buy again.</li>
        </ul>
        <div class="basket-total">
          <span class="fw-bold fs-4 mb-3 total-price"></span>
          <button class="btn-purple">CHECKOUT</button>
        </div>
      </div>
    </div>
    <!-- <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">&raquo;</a>
    </div> -->

<?php include('../inc/footer.php'); ?>