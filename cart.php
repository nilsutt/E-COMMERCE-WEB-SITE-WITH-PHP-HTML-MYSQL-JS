<?php
  session_start();
?>

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
                <a href="basket.php"> <img src="img/icon-09.png" width="50px" height="50px"></a>
                <a href="login.php"> <img src="img/icon-08.png" width="50px" height="50px"></a>
                <!--  <a href=""> <img src="img/icon-07.png" width="50px" height="50px"></a>-->
            </div>

        </div>
    </div>

    <!--   --------------------------------------------------------  -->
    <div class="google_trans" id="google_translate_element"></div>

    <div class="small-container3">
        

        
        <div class="container3">
           
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Ürün Sepete Eklenmiştir!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Resim</th>
                <th>Ürün</th>
                <th>Ara Toplam</th>
                <th>Adet</th>
                <th>Toplam</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Sepeti Sil</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
                 ₺ &nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><i class=""></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Alışverişe Devam Et</a>
                </td>
                <td colspan="2"><b>Ara Toplam</b></td>
                <td><b>₺&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="son.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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
</body>

</html>

      
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





</body>

</html>


