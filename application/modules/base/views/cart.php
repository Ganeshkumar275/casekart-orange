<!DOCTYPE html>

<html >

<head>

  <meta charset="UTF-8">

  <title>Shopping Cart</title>

  <link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/cart/normalize.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/cart/style.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/bootstrap/bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/cart/jquery-confirm.css">

</head>

<body>



  <div class="co_top">

    <h1 class="shopping_cart">CaseKart</h1>

    <!-- <div class="cart_count"><span><?php echo $num_rows = mysql_num_rows($image_path);?></span></div> -->

  </div>
  <div class="alert alert-danger hide">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    
  </div>
  <div class="shopping-cart container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Shopping Cart</li>
      </ol>
    </div>

    <?php if (!empty($image_path)) {?>
    <div class="column-labels">

      <label class="product-image">Image</label>

      <label class="product-details">Model</label>

      <label class="product-price">Design Price</label>

      <label class="product-price">Model Price</label>

      <label class="product-quantity">Quantity</label>

      <label class="product-removal">Remove</label>

      <label class="product-line-price">Total</label>

    </div>

    

    <?php foreach ($image_path as $key => $value) {
      ?>
      <?php echo form_open('base/checkout'); ?>
      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url().'/'.$value->img_path; ?>">

        </div>

        <div class="product-details">
          <p><?php echo $value->model_name; ?></p>

        </div>

        <div class="product-price"><?php echo $value->img_price;?></div>
        <div class="model-price"><?php echo $value->price;?></div>

        <div class="product-quantity">

          <input type="number" name='qty[]' value="1" min="1">

        </div>    

        <div class="product-removal">
          <input type="hidden" id="img_id" name="image_id[]" value="<?php echo $value->image_id;?>">
          <input type="hidden" id="model_id" name="model_id[]" value="<?php echo $value->model_id;?>">
          <button class="remove-product">

            Remove

          </button>

        </div>

        <div class="product-line-price"><?php echo number_format($value->img_price+$value->price,2);?></div>

      </div>

      <?php }?>
      <button class="btn btn-default empty_cart" >Empty Cart</button>

<!--       <div class="totals">

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

      </div

      <div class="totals-item totals-item-total">

        <label>Grand Total</label>

        <div class="totals-value" id="cart-total">90.57</div>

      </div>

    </div>>-->
    <div class="ckt_btn">
      <input type="submit" class="checkout" value="Checkout" id="checkout" hidden>
      <a href="<?php echo base_url()?>" class="cont_shopping" value="" hidden>Continue Shopping</a>
    </div>
    <?php echo form_close(); 
  }else{
    echo "Your shopping cart is empty.<br /> <a href='".base_url()."'>Click here</a> to continue shopping.";
  }?>
</div>
<section id="do_action">
  <div class="container">
    <div class="heading">
      <h3>What would you like to do next?</h3>
      <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="chose_area">
          <ul class="user_option">
            <li>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Use Coupon Code
                </label>
              </div>
            </li>
            <li>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Use Gift Voucher
                </label>
              </div>
            </li>
            <li>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Estimate Shipping & Taxes
                </label>
              </div>
            </li>
          </ul>
          <ul class="user_info">
            <li class="single_field">
              <label>Country:</label>
              <select>
                <option>United States</option>
                <option>Bangladesh</option>
                <option>UK</option>
                <option>India</option>
                <option>Pakistan</option>
                <option>Ucrane</option>
                <option>Canada</option>
                <option>Dubai</option>
              </select>

            </li>
            <li class="single_field">
              <label>Region / State:</label>
              <select>
                <option>Select</option>
                <option>Dhaka</option>
                <option>London</option>
                <option>Dillih</option>
                <option>Lahore</option>
                <option>Alaska</option>
                <option>Canada</option>
                <option>Dubai</option>
              </select>
              
            </li>
            <li class="single_field zip-field">
              <label>Zip Code:</label>
              <input type="text">
            </li>
          </ul>
          <a class="btn btn-default update" href="">Get Quotes</a>
          <a class="btn btn-default check_out" href="">Continue</a>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="total_area totals">
          <ul>
            <li>Cart Sub Total <span class="totals-value" id="cart-subtotal"></span></li>
            <li>VAT<span class="totals-value">0</span></li>
            <li>Shipping Cost <span>Free</span></li>
            <li>Grand Total <span class="totals-value" id="cart-total">61</span></li>
          </ul>
          <a class="btn btn-default update" href="<?php echo base_url()?>">Continue Shopping</a>
          <a class="btn btn-default check_out"  id="check_out">Check Out</a>
        </div>
      </div>
    </div>
  </div>
</section><!--/#do_action-->
<script type="text/javascript" src="<?php echo base_url()?>assets/base/js/jquery-1.12.4.min.js"></script>

<script src="<?php echo base_url()?>assets/base/js/cart/index.js"></script>
<script src="<?php echo base_url()?>assets/base/js/cart/jquery-confirm.js"></script>

</body>

</html>

<script type="text/javascript">
$(function(){
  $('#check_out').on('click',function(){
    $('#checkout').trigger('click');
  })
})

$('.empty_cart').on('click',function(){
  $.confirm({
    title: 'Confirm!',
    content: 'Are you sure to empty the cart!',
    confirm: function(){
      $.ajax({
        url:'cart/empty_cart',
        type: 'POST',
        dataType: 'json',
        success:function(data){
          location.reload();
          return false;
        }
      })
    },
    cancel: function(){
      $.alert('Canceled!')
    }
  });
  return false;
})
</script>