<div class="logo-menu">
    <h2 style="padding-left: 750;">MONGA</h2>
    <a href="../php/index.php" class="logo" >
        <img src="../image/logo.png" alt="logo" />
    </a>
    <button id="menu-btn">
        <i class="fas fa-bars"></i>
    </button>
    <div id="menu" class="hidden">
        <ul>
            <li><a href="../php/kitap.php">Kitap</a></li>
            <li><a href="../php/ajanda.php">Ajanda</a></li>
            <li><a href="../php/tumurunler.php">Tüm Ürünler</a></li>
        </ul>
    </div>
</div>
<div class="buttons">
    <button id="search-btn">
        <i class="fas fa-search" title="Arama Butonu"></i>
    </button>
    <div class="search-form hidden ">
        <input type="text" class="search-input" id="search-box" placeholder= "search here" />
        <i class="fas fa-search"></i>
    </div>
    <button id="cart-btn">
        <!-- <a href="../php/sepet.php"> -->
            <i class="fas fa-shopping-cart" title="Sepetim" onclick="toogleModal();"></i>
            <span class="basket-count"></span>
        <!-- </a> -->
    </button>
    <button id="redirectButton">
        <a href="../php/favoriler.php">
            <i class="fas fa-heart" title="Favoriler"></i>
        </a>
    </button>
    <button id="user-btn">
        <i class="fas fa-user" title="Hesabım"></i>
    </button>
    <div id="hesabım" class="hidden">
        <ul>
            <li><a href="../php/KullanıcıBilgileri.php">Kişisel Bilgiler</a></li>
            <li><a href="../php/AdresBilgileri.php">Adres Bilgileri</a></li>
            <li><a href="../html/EskiSiparişler.html">Eski Siparişler</a></li>
            <li><a href="../php/anasayfa.php"> Çıkış Yap  </a></li>
        </ul>
    </div>
</div>