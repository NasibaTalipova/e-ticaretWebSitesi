const menuBtn = document.getElementById('menu-btn');
const menu = document.getElementById('menu');

menuBtn.addEventListener('click', function() {
    // Menünün görünürlüğünü kontrol et
    if (menu.classList.contains('hidden')) {
      // Menü gizliyse, göster
      menu.classList.remove('hidden');
    } else {
      // Açıksa, gizle
      menu.classList.add('hidden');
    }
});

const searchButton = document.getElementById('search-btn');
const searchForm = document.querySelector('.search-form');

searchButton.addEventListener('click', function() {
    // Arama formunun görünürlüğünü kontrol et
    if (searchForm.classList.contains('hidden')) {
        // Gizliyse, göster
        searchForm.classList.remove('hidden');
    } else {
        // Açıksa, gizle
        searchForm.classList.add('hidden');
    }
});

const userBtn = document.getElementById('user-btn');
const hesabım = document.getElementById('hesabım');

userBtn.addEventListener('click', function() {
    // Hesabın görünürlüğünü kontrol et
    if (hesabım.classList.contains('hidden')) {
      // Hesabım gizliyse, göster
      hesabım.classList.remove('hidden');
    } else {
      // Açıksa, gizle
      hesabım.classList.add('hidden');
    }
  });

document.getElementById("redirectButton").addEventListener("click", function() {
    // Yönlendirme yapılacak olan sayfanın URL'sini aşağıya yazınız
    window.location.href = "favoriler.php";
});

$(document).ready(function() {
  var slider = $('.slider');
  var images = slider.find('img');
  var imageWidth = images.first().width();
  var imageCount = images.length;
  var currentIndex = 0;

  setInterval(function() {
    currentIndex = (currentIndex + 1) % imageCount;
    updateSlider();
  }, 5000);

  function updateSlider() {
    var newPosition = -1 * currentIndex * imageWidth;
    slider.css('transform', 'translateX(' + newPosition + 'px)');
  }
});

document.getElementById("kayitolmaformu").addEventListener("submit", function(event) {
  event.preventDefault(); // Formun yüklenmesini engelle

  var uyarilar = document.getElementById("uyarilar");
  uyarilar.innerHTML = ""; // Önceki uyarıları temizle

  var adsoyad = document.getElementById("adsoyad").value;
  var email = document.getElementById("email").value;
  var sifre = document.getElementById("sifre").value;
  var sifretekrar = document.getElementById("sifretekrar").value;
  

  if (!adsoyad) {
      uyarilar.innerHTML += "<p>Lütfen ad-soyad giriniz.</p>";
  }

  if (!email) {
      uyarilar.innerHTML += "<p>Lütfen geçerli bir e-mail adresi giriniz.</p>";
  }

  if (!sifre) {
      uyarilar.innerHTML += "<p>Lütfen şifre giriniz.</p>";
  }

  if (sifre.length < 5) {
      uyarilar.innerHTML += "<p>Şifreniz 5 karakterden kısa olamaz.</p>";
  }

  if (sifre !== sifretekrar) {
      uyarilar.innerHTML += "<p>Girilen şifreler aynı değil.</p>";
  }
  if (adsoyad, email ,sifre == "") {
      uyarilar.innerHTML += "<p>Bu alanı.</p>";
   }
 
  if (!uyarilar.innerHTML) {
      uyarilar.innerHTML = "<p>Kayıdınız başarılı bir şekilde oluşturuldu.</p>";
  }
})

$(document).ready(function() {
    $('.fa-heart').on('click', function() {
      var product = $(this).siblings('h2').text();
  
      // Favori listesine eklemek için yeni bir liste öğesi oluştur
      var favoriteItem = $('<li></li>').text(product);
  
      // Liste öğesini favori listesine ekle
      $('favoriler.php').append(favoriteItem);
    });
});  

let bookList = [];
let basketList = [];

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
 
function toogleModal() {
    const basketModalEl = document.querySelector(".basket-modal");
    basketModalEl.classList.toggle("active");
};

function createBookStars (starRate){
  let starRateHtml = "";
  for (let i = 1; i <= 5; i++) {
      if(Math.round(starRate) >=i) starRateHtml +=  `<i class="bi bi-star-fill active"></i>`;
      else starRateHtml +=  `<i class="bi bi-star-fill"></i>`
      }
  return starRateHtml;
}

function sendRequest(action, productId, operation = null) {
  const userId = currentUserId; // Kullanıcı kimliğini buradan alın

  $.post('sepet_islemleri.php', { action: action, productId: productId, userId: userId, operation: operation }, function(response) {
      alert(response);
      listBasketItems(); // Sepeti güncelle
  });
}

function addToBasket(UrunId) {
  sendRequest('add', UrunId);
}

function updateBasketQuantity(UrunId, operation) {
  sendRequest('update', UrunId, operation);
}

function removeFromBasket(UrunId) {
  sendRequest('remove', UrunId);
}

function listBasketItems() {
  const kullanici_ID  = currentUserId; // Kullanıcı kimliğini buradan alın

  $.post('sepet_islemleri.php', { action: 'list', userId: kullanici_ID  }, function(response) {
      document.querySelector('.basket-list').innerHTML = response;
  });
}

// Sayfa yüklendiğinde sepeti listele
$(document).ready(function() {
  listBasketItems();
});



// if (localStorage.getItem("basketList")) {
//   basketList = JSON.parse(localStorage.getItem("basketList"));
//   listBasketItems();
// }


$(document).ready(function() {
  $('.sepete-ekle').click(function() {
      var urunID = $(this).data('urun-id');
      $.ajax({
          type: 'POST',
          url: 'sepet_islemleri.php',
          data: {action: 'ekle', urunID: urunID},
          success: function(data) {
              location.reload();
          }
      });
  });

  $('.odeme-yap').click(function() {
      $.ajax({
          type: 'POST',
          url: 'odeme.php',
          data: {action: 'odeme'},
          success: function(data) {
              location.href = 'odeme.php';
          }
      });
  });
});
