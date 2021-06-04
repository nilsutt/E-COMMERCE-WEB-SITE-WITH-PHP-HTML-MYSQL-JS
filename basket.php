<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPETİNİZ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>


    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo-05.png" width="200px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li><a href="products2.php">Ürünlerimiz</a></li>
                        <!-- <li><a href="">Aksesuarlar</a></li>-->
                        <li><a href="hakkinda.php">Hakkımızda</a></li>
                        <li><a href="iletisim2.php">İletişim</a></li>
                    </ul>
                </nav>
                <a href="basket.php"> <img src="img/icon-09.png" width="50px" height="50px"></a>
                <a href="login.php"> <img src="img/icon-08.png" width="50px" height="50px"></a>
                <!--<a href=""> <img src="img/icon-07.png" width="50px" height="50px"></a>-->

            </div>

        </div>
    </div>

    <!--   --------------------------------------------------------  -->
    <div class="google_trans" id="google_translate_element"></div>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Ürün</th>
                <th>Miktar</th>
                <th>Ara Toplam</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/telefon/iphone12/6.png" width="10%">
                        <div class="pro-info">
                            <p>Iphone 12</p>
                            <small>Fiyat: ₺10.200</small>
                            <br>
                            <a href="">Kaldır</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>₺ 10.200</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/telefon/iphone12/6.png" width="10%">
                        <div class="pro-info">
                            <p>Iphone 12</p>
                            <small>Fiyat: ₺10.200</small>
                            <br>
                            <a href="">Kaldır</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>₺ 10.200</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/telefon/iphone12/6.png" width="10%">
                        <div class="pro-info">
                            <p>Iphone 12</p>
                            <small>Fiyat: ₺10.200</small>
                            <br>
                            <a href="">Kaldır</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>₺ 10.200</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Ara Toplam</td>
                    <td>₺ 28.000</td>
                </tr>
                <tr>
                    <td>Vergi</td>
                    <td>₺ 2.600</td>
                </tr>
                <tr>
                    <td>Toplam</td>
                    <td>₺ 30.600</td>
                </tr>
            </table>
        </div>
    </div>





    <div class="footer">
        <div class="container">
            <div class="row">
            <div class="footer-col-1">
                    <h3>Kategoriler</h3>
                    <ul>
                        <li><a href="">Telefon</a></li>
                        <li><a href="">Kulaklık</a></li>
                        <li><a href="">Tablet</a></li>
                        <li><a href="">Akıllı Saatler</a></li>
                    </ul>
                </div>

                <div class="footer-col-2">
                    <h3>Kurumsal</h3>
                    <ul>
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="hakkinda.php">Hakkımızda</a></li>
                        <li><a href="iletisim2.php">İletişim</a></li>
                    </ul>
                </div>

                <div class="footer-col-3">
                    <img src="img/logo-05.png">
                </div>

                <div class="footer-col-4">
                    <h3>Hızlı Menü</h3>
                    <ul>
                        <li><a href="login.php">Giriş Yap</a></li>
                        <li><a href="basket.php">Sepetim</a></li>
                        <li><a href="products2.php">Ürünlerimiz</a></li>
                    </ul>
                </div>

                <div class="footer-col-5">
                    <h3>Bizi Takip Edin</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Teknoloji Dünyası</p>

        </div>
    </div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript" src="script.js"></script>

</body>

</html>