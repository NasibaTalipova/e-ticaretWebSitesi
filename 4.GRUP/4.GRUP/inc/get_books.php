<?php
include ('../inc/dbBaglan.php');

$stmt = $pdo->query('SELECT * FROM urunler');
$books = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($books);

function createBookStars($starRate) {
    $starRateHtml = "";
    for ($i = 1; $i <= 5; i++) {
        if (round($starRate) >= $i) {
            $starRateHtml .= '<i class="bi bi-star-fill active"></i>';
        } else {
            $starRateHtml .= '<i class="bi bi-star-fill"></i>';
        }
    }
    return $starRateHtml;
}
?>
