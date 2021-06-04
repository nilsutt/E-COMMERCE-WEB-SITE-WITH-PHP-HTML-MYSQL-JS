<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÜYE OL</title>
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
                <a href="cart.php"> <img src="img/icon-09.png" width="50px" height="50px"></a>
                <a href="login.php"> <img src="img/icon-08.png" width="50px" height="50px"></a>
                <a href="register_lang.php"> <img src="img/language.png" width="40px" height="40px"></a>
            </div>
            <div class="row">
                <div class="col-7">
                    <h2> ÜYE OLUN </h2>
                <form class="col-9" method="post" action="">
                    <input type="text" placeholder="Ad Soyad" name="name" required>
                    <input type="text" placeholder="Şifre" name="password" required>
                    <input type="text" placeholder="E-Mail" name="email" required>

                    
                    <textarea name="adres" placeholder="Adres" required></textarea>
                    <input type="text" placeholder="Telefon" name="tel" required>
                    <button type="submit" name="submit">OLUŞTUR</button>

                    <p class="message">Üye misiniz? <a href="login.php">Giriş Yap</a></p>
                </form>
                <?php

include_once 'db.php';

if(isset($_POST["submit"]))
{
    $name= $_POST["name"];
    $password= $_POST["password"];
    $email= $_POST["email"];
    $adres= $_POST["adres"];
    $tel= $_POST["tel"];
    // $insert= mysqli_query($link, "INSERT INTO student2 VALUES('$name',  '$password', '$email')");

$res=mysqli_query($link," SELECT * FROM client WHERE name='$email'");
$res1=mysqli_num_rows($res);

if($res1==1){
    ?>
    echo'<script> window.onload=function()
    {
        alert("E-mail Already Exist! Please choose another e-mail");
    } </script>';
<?php
}

else{
    $insert=mysqli_query($link, "INSERT INTO client VALUES('$name','$password', '$email', '$adres', '$tel')");
    ?>
    echo'<script> window.onload=function()
    {
        var R=(confirm("User succesfully registred, Please Login"));
        if(R==true){
            location.href='login.php';
        }
        else{}

    } </script>';
<?php
}

}


?>

                </div>
                <div class="col-2 ">
                    <img src="img/login_resim2.png">
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
                        <li><a href="cart.php">Sepetim</a></li>
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



</body>

</html>