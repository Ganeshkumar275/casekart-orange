<!DOCTYPE html>

<html >

<head>

  <meta charset="UTF-8">

  <title>Shopping Cart</title>

  <link rel="stylesheet" href="../assets/css/cart/normalize.css">

  <link rel="stylesheet" href="../assets/css/cart/style.css">

  <link rel="stylesheet" href="../assets/css/fontawesome/css/font-awesome.min.css">

</head>

<body>



  <div class="co_top">

  <h1 class="shopping_cart">Shopping Cart</h1>

    <button class="tp_checkout">Checkout</button>

  <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>

  <!-- <div class="cart_count"><span><?php echo $num_rows = mysql_num_rows($image_path);?></span></div> -->

  </div>

  <div class="shopping-cart">

    <div class="column-labels">

      <label class="product-image">Image</label>

      <label class="product-details">Model</label>

      <label class="product-price">Price</label>

      <label class="product-quantity">Quantity</label>

      <label class="product-removal">Remove</label>

      <label class="product-line-price">Total</label>

    </div>

    <?php while ($row = mysql_fetch_assoc($image_path)) { $count = count($row);?>

    <div class="product">

      <div class="product-image">

        <img src="../<?php echo $row['img_path']; ?>">

    </div>

    <div class="product-details">

      <p><?php echo $row['model_name']; ?></p>

 </div>

 <div class="product-price">12.99</div>

     <div class="product-quantity">

      <input type="number" value="2" min="1">

    </div>    

    <div class="product-removal">

      <button class="remove-product">

        Remove

      </button>

    </div>

    <div class="product-line-price">25.98</div>

</div>

<?php }?>

    <div class="totals">

      <div class="totals-item">

        <label>Subtotal</label>

        <div class="totals-value" id="cart-subtotal">71.97</div>

      </div>

      <div class="totals-item">

        <label>Tax (5%)</label>

        <div class="totals-value" id="cart-tax">3.60</div>

      </div>

      <div class="totals-item">

        <label>Shipping</label>

        <div class="totals-value" id="cart-shipping">15.00</div>

      </div>

      <div class="totals-item totals-item-total">

        <label>Grand Total</label>

        <div class="totals-value" id="cart-total">90.57</div>

      </div>

    </div>

    <button class="checkout">Checkout</button>

  </div>

  <script type="text/javascript" src="../assets/js/jquery-1.12.4.min.js"></script>

  <script src="../assets/js/cart/index.js"></script>

</body>

</html>

<script type="text/javascript">

var stickySidebar = $('.co_top').offset().top;



$(window).scroll(function() {  

    if ($(window).scrollTop() > stickySidebar) {

        $('.co_top').addClass('affix');

    }

    else {

        $('.co_top').removeClass('affix');

    }  

});

</script>