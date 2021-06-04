<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ YAP</title>
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
                        <li><a href="products.php">Ürünlerimiz</a></li>
                        <!-- <li><a href="">Aksesuarlar</a></li>-->
                        <li><a href="hakkinda.php">Hakkımızda</a></li>
                        <li><a href="iletisim2.php">İletişim</a></li>
                    </ul>
                </nav>
                <a href="basket.php"> <img src="img/icon-09.png" width="50px" height="50px"></a>
                <a href="login.php"> <img src="img/icon-08.png" width="50px" height="50px"></a>
                <div class="google_trans2" id="google_translate_element"></div>  
            </div>
            <div class="row">
                <div class="col-7">
                <h3> GİRİN YAPIN </h3>
                <form class="col-8" method="post" action="">
                    <input type="text" placeholder="E-Mail" name="email" required>
                    <input type="text" placeholder="Şifre" name="password" required>
                    <button type="submit" name="submit">Giriş</button>

                    <p class="message">Üye değil misiniz? <a href="register.php"> Üye Ol</a></p>
                </form>
                    
<?php
session_start();

    include_once 'db.php';

    if(isset($_POST["submit"]))
    {
        $email= $_POST["email"];
        $password= $_POST["password"];
        // $insert= mysqli_query($link, "INSERT INTO student2 VALUES('$name',  '$password', '$email')");
    
    $res=mysqli_query($link, "SELECT * FROM client WHERE email='$email' && password='$password'");
    $res1=mysqli_num_rows($res);

    if($res1==1){
        ?>

        <?php
        $_SESSION['email']=$email;
        
        echo'<script> window.onload=function()
        {
            alert("Succesfully Login! Welcome");
        } </script>';
        header("location: index.php");
    
    }

    else{
        //$insert=mysqli_query($link, );
        ?>
        
        echo'<script> window.onload=function()
        {
            var R=(confirm("The username or password is incorrect. Are you sure you are a member? If not, please register."));
            if(R==true){
                location.href='register.php';
            }
            else{}

        } </script>';
<?php
    }

}


?>
   

                </div>
                <div class="col-2 ">
                    <img src="img/login_resim1.png">
                </div>
            </div>
        </div>
    </div>

    <!--   --------------------------------------------------------  -->


    <div class="row">
        <div class="bilgi">
            <img src="img/bilgi4-07.png">
        </div>
        <div class="bilgi2">
            <img src="img/bilgi3.png">

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