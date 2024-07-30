<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MONGA</title>
        <link rel="icon" href="../image/favicon-96x96.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/webproje.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/kısaözellikler.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body style="background-color: #ffe6f9 ;">
    <header class="header">
        <?php include ('../inc/header.php'); ?>
    </header>
    <div class="favorite-wrapper">    
        <div class="favorite-header">
            <div class="favorite-header-wrapper">
                <div class="header-left-section">
                    <a class="active" href="../php/favoriler.php">
                        <i class="fas fa-heart"></i>
                        <span>Favoriler</span>
                    </a>
                </div>
                <div class="header-right-section">
                    <div class="searchbox">
                        <div class="clickoutside">
                            <input type="text" class="search-input" id="search-input"
                            placeholder="Favorilerimde ara" value>
                            <button id="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="favored-product-container">
            <div class="p-card-wrapper">
                <div class="p-campaign-wrapper">
                    <a class="p-card-children-container" href="../html/kitap_detay3.html">
                        <div class="img-wrapper">
                            <img class="p-card-img" src="../image/kitap25.webp">
                        </div>
                        <div class="p-desc-container-wrapper">
                            <div class="p-desc-center">
                                <span class="p-desc-center-name no-white-space" title=" Ay Işığı Ajanda">
                                    Ay Işığı Ajanda
                                </span>
                            </div>
                            <div class="p-price">
                                <div class="price-wrapper">
                                    <div class="pr-bx-w">
                                        <div class="pr-bx-nm with-org-prc">
                                            <div class="prc-box-dscntd">
                                                72,95
                                                TL
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="add-to-basket-container">
                    <div class="basket-button" onclick="addToBasket()">
                        <span class="basket-text">Sepete Ekle</span>
                    </div>
                </div>
                <div class="unfavorite-btn-wrapper">
                    <i class="i-close">&times;</i>
                </div>
            </div>
            <div class="p-card-wrapper">
                <div class="p-campaign-wrapper">
                    <a class="p-card-children-container" href="../html/kitap_detay2.html">
                        <div class="img-wrapper">
                            <img class="p-card-img" src="../image/kitap21.webp">
                        </div>
                        <div class="p-desc-container-wrapper">
                            <div class="p-desc-center">
                                <span class="p-desc-center-name no-white-space" title="Vintage Ajanda">
                                    Vintage Ajanda
                                </span>
                            </div>
                            <div class="p-price">
                                <div class="price-wrapper">
                                    <div class="pr-bx-w">
                                        <div class="pr-bx-nm with-org-prc">
                                            <div class="prc-box-dscntd">
                                                72,95
                                                TL
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="add-to-basket-container">
                    <div class="basket-button" onclick="addToBasket()">
                        <span class="basket-text">Sepete Ekle</span>
                    </div>
                </div>
                <div class="unfavorite-btn-wrapper">
                    <i class="i-close">&times;</i>
                </div>
            </div>
            <div class="p-card-wrapper">
                <div class="p-campaign-wrapper">
                    <a class="p-card-children-container" href="../html/kitap_detay1.html">
                        <div class="img-wrapper">
                            <img class="p-card-img" src="../image/kitap10.webp">
                        </div>
                        <div class="p-desc-container-wrapper">
                            <div class="p-desc-center">
                                <span class="p-desc-center-name no-white-space" title="Dantel Desenli Ajanda">
                                    Dantel Desenli Ajanda
                                </span>
                            </div>
                            <div class="p-price">
                                <div class="price-wrapper">
                                    <div class="pr-bx-w">
                                        <div class="pr-bx-nm with-org-prc">
                                            <div class="prc-box-dscntd">
                                                72,95
                                                TL
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="add-to-basket-container">
                    <div class="basket-button" onclick="addToBasket()">
                        <span class="basket-text">Sepete Ekle</span>
                    </div>
                </div>
                <div class="unfavorite-btn-wrapper">
                    <i class="i-close">&times;</i>
                </div>
            </div>
            <div class="p-card-wrapper">
                <div class="p-campaign-wrapper">
                    <a class="p-card-children-container" href="../html/kitap_detay6.html">
                        <div class="img-wrapper">
                            <img class="p-card-img" src="../image/kitap13.webp">
                        </div>
                        <div class="p-desc-container-wrapper">
                            <div class="p-desc-center">
                                <span class="p-desc-center-name no-white-space" title="Sade Günlük Kitap">
                                    Sade Günlük Kitap
                                </span>
                            </div>
                            <div class="p-price">
                                <div class="price-wrapper">
                                    <div class="pr-bx-w">
                                        <div class="pr-bx-nm with-org-prc">
                                            <div class="prc-box-dscntd">
                                                72,95
                                                TL
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="add-to-basket-container">
                    <div class="basket-button" onclick="addToBasket()">
                        <span class="basket-text">Sepete Ekle</span>
                    </div>
                </div>
                <div class="unfavorite-btn-wrapper">
                    <i class="i-close">&times;</i>
                </div>
            </div>
        </div>
<?php include ('../inc/footer.php') ?>