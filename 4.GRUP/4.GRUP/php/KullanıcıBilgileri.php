<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MONGA</title>
        <link rel="icon" href="../image/favicon-96x96.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/webproje.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/forms.css">
        <link rel="stylesheet" href="../css/kısaözellikler.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body style="background-color: #ffe6f9 ;">
    <header class="header" >
        <?php include('../inc/header.php'); ?>
    </header>
    <div id="member-user-information">
        <div class="user-account-info">
            <div class="my-account-title">Kullanıcı Bilgilerim</div>
        </div>
        <div class="user-forms">
            <div class="form-section">
                <h1 class="text color-green font-header-md font-w-bold">Üyelik Bilgileri</h1>
                <form class="form-1 user-information-form">
                    <div class="display-flex flex-row form-group form-group-stretched">
                        <div class="display-flex color-black font-md flex-column input-w">
                            <label class="text color-black font-sm font-w-bold  mgb-1">Ad</label>
                            <input name="firstname" autocomplete="off" class="bg-beige input textbox bordered input-large" value>
                            <!-- Aralarında boşluk bırakmak için kullandık-->
                            <div class="display-flex mgt-1">
                                <span class="text color-black font-sm font-w-bold"></span>
                                <span class="text color-soft-gray font-sm mgl-auto"></span>
                            </div>
                        </div>
                        <div class="display-flex color-black font-md flex-column input-w">
                            <label class="text color-black font-sm font-w-bold mgb-1">Soyad</label>
                            <input name="lastname" autocomplete="off" class="bg-beige input textbox bordered input-large" value>
                            <div class="display-flex mgt-1">
                                <span class="text color-black font-sm font-w-bold"></span>
                                <span class="text color-soft-gray font-sm mgl-auto"></span>
                            </div>
                        </div>
                    </div>
                    <div class="display-flex flex-row form-group form-group-stretched">
                        <div class="display-flex color-black font-md flex-column input-w">
                            <label class="text color-black font-sm font-w-bold mgb-1">Email</label>
                            <input name="Email" autocomplete="off" class="bg-beige input textbox bordered input-large" value>
                            <div class="display-flex mgt-1">
                                <span class="text color-black font-sm font-w-bold"></span>
                                <span class="text color-soft-gray font-sm mgl-auto"></span>
                            </div>
                        </div>
                    </div>
                    <div class="display-flex flex-row form-group form-group-stretched phone-input">
                        <div class="display-flex color-black font-md flex-column input-w">
                            <label class="text color-black font-sm font-w-bold mgb-1">Cep Telefonu</label>
                            <input name="phone-input" autocomplete="off" class="bg-beige input-phone textbox bordered input-large" value>
                       </div>
                    </div>
                    <div class="display-flex flex-row form-group form-group-stretched">
                        <div class="display-flex color-black font-md flex-column input-w">
                            <label class="text color-black font-sm font-w-bold mgb-1">Doğum Tarihiniz</label>
                            <br>
                            <input name="birthday" class="display-flex bg-beige relative input select bordered transition input-large">
                                <span class="text color-dark-gray font-sm"></span>
                        </div>
                        <div class="display-flex color-black font-md flex-column input-w">
                            <label class="text color-black font-sm font-w-bold mgb-1"></label>
                            <br>
                            <input name="birthmonth" class="display-flex bg-beige relative input select bordered transition input-large">
                                <span class="text color-dark-gray font-sm"></span>
                        </div>
                        <div class="display-flex color-black font-md flex-column input-w">
                            <label class="text color-black font-sm font-w-bold mgb-1"></label>
                            <br>
                            <input name="birthyear" class="display-flex bg-beige relative input select bordered transition input-large">
                                <span class="text color-dark-gray font-sm"></span>
                        </div>
                    </div>
                    <button type="submit" id="guncelleButonu" class="font-w-semi-bold button bordered transition input-large secondary" onclick="updateProfile()">GÜNCELLE</button>
                </form>
            </div>
            <div class="divider"></div> <!--Araya çizgi koymak için kullanılır-->
            <div class="form-section">
                <h1 class="text color-green font-header-md font-w-bold">Şifre Güncelleme</h1>
                <form class="form-1">
                    <div class="display-flex1 flex-row form-group form-group-stretched">
                        <div class="password-wrapper">
                            <div class="password-input-area">
                                <div class="display-flex1 color-black font-md flex-colum input-w">
                                    <label class="text color-black font-sm font-w-bold mgb-1">Şu Anki Şifre</label>
                                    <input name="oldPassword" autocomplete="off" class="bg-beige input textbox bordered input-large" value type="password">
                                    <div class="display-flex1 mgt-1">
                                        <span class="text color-black font-sm font-w-bold"></span>
                                        <span class="text color-soft-gray font-sm mgl-auto"></span>
                                    </div>
                                </div>
                            </div>
                            <i class="i-eye-close"></i>
                        </div>
                    </div>
                    <div class="display-flex1 flex-row form-group form-group-column form-password">     
                        <div class="password-wrapper">
                            <div class="password-input-area">
                                <div class="display-flex1 color-black font-md flex- column input-w">
                                    <label class="text color-black font-sm font-w-bold mgb-1">Yeni Şifre</label>
                                    <input name="password" autocomplete="off" class="bg-beige input textbox bordered input-large" value type="password">
                                    <div class="display-flex1 mgt-1">
                                        <span class="text color-black font-sm font-w-bold"></span>
                                        <span class="text color-soft-gray font-sm mgl-auto"></span>
                                    </div>
                                </div>
                            </div>
                            <i class="i-eye-close"></i>
                        </div>
                    </div>
                    <div class="display-flex1 flex-row form-group form-group-column">
                        <p class="form-password-info-message">
                            Şifreniz
                            <span class="text-bold">en az 7 karakter</span>
                             ve 
                            <span class="text-bold">en fazla 64 karakter</span>
                             olmalı, harf ve rakam içermelidir.
                        </p>
                        <div class="password-wrapper">
                            <div class="password-input-area">
                                <div class="display-flex1 color-black font-md flex-column input-w">
                                    <label class="text color-black font-sm font-w-bold mgb-1">Yeni Şifre(Tekrar)</label>
                                    <input name="passwordAgain" autocomplete="off" class="bg-beige input textbox bordered input-large" value type="password">
                                    <div class="display-flex1 mgt-1">
                                        <span class="text color-black font-sm font-w-bold"></span>
                                        <span class="text color-soft-gray font-sm mgl-auto"></span>
                                    </div>
                                </div>
                            </div>
                            <i class="i-eye-close"></i>
                        </div>
                    </div>
                    <button type="submit" class="font-w-semi-bold button bordered transition input-large secondary" onclick="updatePage2()">GÜNCELLE</button>
                </form>
            </div>
        </div>
    </div>
<?php include('../inc/footer.php'); ?>