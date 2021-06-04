<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÜRÜNLERİMİZ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>

    <div class="header">
        <div class="container4">
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo-05.png" width="200px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li><a href="products.php">Ürünlerimiz</a></li>
                        <!-- <li><a href="">Aksesuarlar</a></li>-->
                        <li><a href="hakkinda.php">Hakkımızda</a></li>
                        <li><a href="iletisim2.php">İletişim</a></li>
                    </ul>
                </nav>
                <a href="cart.php"> <img src="img/icon-09.png" width="50px" height="50px"></a>
                <a href="login.php"> <img src="img/icon-08.png" width="50px" height="50px"></a>
                <!--  <a href=""> <img src="img/icon-07.png" width="50px" height="50px"></a>-->
            </div>

        </div>
    </div>

    <!--   --------------------------------------------------------  -->
    <div class="google_trans" id="google_translate_element"></div>

    <div class="small-container3">
        <div class="row row-2">
            <h2>ÜRÜNLERİMİZ</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by price</option>
                <option>Short by sale</option>
                <option>Short by rating</option>
            </select>
        </div>

        
        <div class="container3">
            <div id="message"></div>
            <div class="row mt-2 pb-3">
            <?php
                    include 'config.php';
                    $stmt = $conn->prepare('SELECT * FROM product');
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()):
                ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                    <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
                    <div class="card-body p-1">
                    <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
                    <h5 class="card-text text-center text-danger">₺&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>

                    </div>
                    <div class="card-footer p-1">
                    <form action="" class="form-submit">
                        <div class="row p-2">
                        <div class="col-md-6 py-1 pl-4">
                            <b style="margin-left: 45px;">Adet: </b>
                        </div>
                        <div class="col-md-6">
                            <input type="number" style="margin-left: -20px; margin-top: 5px;" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                        </div>
                        </div> 
                        <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                        <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                        <input type="hidden" class="pprice"  value="<?= $row['product_price'] ?>">
                        <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                        <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                        <button class="btn4 btn-info btn-block addItemBtn" style="background-color:#331B3E; margin: 20px 0; border-color:#331B3E; padding: 8px 10px; border-radius: 30px;"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Sepete Ekle</button> 
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
            </div>
        </div>
        

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

        <script type="text/javascript">
        $(document).ready(function() {

            
            $(".addItemBtn").click(function(e) {
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var pid = $form.find(".pid").val();
            var pname = $form.find(".pname").val();
            var pprice = $form.find(".pprice").val();
            var pimage = $form.find(".pimage").val();
            var pcode = $form.find(".pcode").val();

            var pqty = $form.find(".pqty").val();

            $.ajax({
                url: 'action.php',
                method: 'post',
                data: {
                pid: pid,
                pname: pname,
                pprice: pprice,
                pqty: pqty,
                pimage: pimage,
                pcode: pcode
                },
                success: function(response) {
                $("#message").html(response);
                window.scrollTo(0, 0);
                load_cart_item_number();
                }
            });
            });

            
            load_cart_item_number();

            function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                cartItem: "cart_item"
                },
                success: function(response) {
                $("#cart-item").html(response);
                }
            });
            }
        });
        </script>

      
    </div>

    <div class="offer">
        <div class="small-container2">
            <div class="row">
                <div class="col-5">
                    <img src="img/foot3.png">
                </div>
                <div class="col-2">
                    <h1>AirTag</h1>
                    <h2>Kaybetme alışkanlığınız<br> kayboluyor.</h2>
                    <a href="" class="btn2">Satın Al</a>

                </div>

            </div>

        </div>
    </div>


    <div class="row">
        <div class="bilgi">
            <img src="img/bilgi4-07.png">
        </div>
        <div class="bilgi2">
            <img src="img/bilgi3.png">

        </div>

    </div>


    <div class="footer">
        <div class="container4">
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
                        <li><a href="cart.php">Sepetim</a></li>
                        <li><a href="products.php">Ürünlerimiz</a></li>
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


</body>

</html>