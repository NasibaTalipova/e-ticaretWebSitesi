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
        <?php include "../inc/header.php" ?>       
    </header>
        <section class="store my-5">
            <!--soldan 2 boşluk için offset yazdık-->
            <div class="col-6 offset-2">
                <div class="row book_card">                  
                    <div class="col-6 ">
                    <img class="secme" src="../image/kitap10.webp" width="600" height="500"/>
                    <div class="secenek">
                      <ul class="sec" >
                        <li class="menuler"><a href="#" >Sayfa Özelligi</a>
                          <div class="aci-menuler">
                            <a href="#">Düz</a>
                            <a href="#">Çizgili</a>
                            <a href="#">Kareli</a>
                            <br/>
                          </div>
                        </li>
                      </ul>
                      <ul class="sec">
                        <li class="menuler"><a href="#" >Kenar Çesidi</a>
                          <div class="aci-menuler">
                            <a href="#">Sipralli</a>
                            <a href="#">Sipralsiz</a>
                            <br/>
                            <br/>
                           
                          </div>
                        </li>
                      </ul>
                      <ul class="sec">
                        <li class="menuler"><a href="#" >Kitap Büyüklügü</a>
                          <div class="aci-menuler">
                            <a href="#">A4</a>
                            <a href="#">A5</a>
                            <br/>
                          
                          </div>
                        </li>
                      </ul>
                      <h1 class="fw-bold "> Dantel Desenli Ajanda</h1>
                      <p class="book_description fos gray">
                        kitap tasarımını bir kafa olaarak tasarlanmıstır<br/> onu gördügünüzde aklınıza beyin geliyor.
                        kitap tasarımını bir kafa olaarak tasarlkitap tasarımını bir kafa olaarak tasarlkitap tasarımını bir kafa olaarak tasarlkitap tasarımını bir kafa olaarak tasarl
                        kitap tasarımını bir kafa olaarak tasarlkitap tasarımını bir kafa olaarak tasarl
                        kitap tasarımını bir kafa olaarak tasarlkitap tasarımını bir kafa olaarak tasarlkitap tasarımını bir kafa olaarak tasarlar.
                      </p>
                    </div>
                  </div>
                  <div class="col-5 d-flex flex-column justify-content-between">
                    <div class="book_detail">
                      <span class="fs-4 fw-font">puanlama</span><br/>
                      <span class="book_star-rate">
                        <i class="bi bi-star-fill active"></i>
                        <i class="bi bi-star-fill active"></i>
                        <i class="bi bi-star-fill active"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      <span class="gray">250 reviews</span>
                      </span>
                  
                    </div>
                    <div>
                      <span class="black fw-bold fs-4 me-2 ">72,95tl</span>
                      <!--üstü çizili yapılması lazım oldu ama strike ile yapılabildi-->
                      <span class=" fs-4 fw-bold old_price">98tl</span>
                    </div>
                    <button class="btn_purple">SEPETE EKLE</button>
                  </div>
                  </div>
                </div>
            </section>
<?php
    include "footer.php";
?>            