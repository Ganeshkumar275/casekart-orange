<link rel="stylesheet" href="<?php echo base_url()?>assets/base/checkout/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/base/checkout_new/style.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/base/checkout/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/base/css/fontawesome/css/font-awesome.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/base/js/jquery-1.12.4.min.js"></script>
<title>Casekart | Checkout</title>
<div class="container">
    <div class="row">
        <div class="product-bit-title pull-left">
         <h1 class="chk_title">Casekart</h1>
     </div>
     <!-- <h1 class="col-md-5 col-sm-12 col-xs-12">Registration</h1> -->
     <div class="checkout-wrap col-md-12 col-sm-12 col-xs-12">
        <ul class="checkout-bar nav nav-tabs">
            <li class="active"><a href="#get-started" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
            </li>
            <li class=""><a href="#about-you" data-toggle="tab"><i class="fa fa-truck icon-flip-horizontal" aria-hidden="true"></i> Shipping Details</a>
            </li>
            <li class=""><a href="#looking-for" data-toggle="tab"><i class="fa fa-list-alt" aria-hidden="true"></i> Order Summary</a>
            </li>
            <li class=""><a href="#payment" data-toggle="tab"><i class="fa fa-inr" aria-hidden="true"></i> Payment</a>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="tabbable-panel">
        <div class="tabbable-line"><!-- 
            <ul class="nav nav-tabs ">
                <li class="active"><a href="#get-started" data-toggle="tab"> Get Started </a>
                </li>
                <li><a href="#about-you" data-toggle="tab"> About You </a>
                </li>
                <li><a href="#looking-for" data-toggle="tab"> Looking For </a>
                </li>
                <li><a href="#payment" data-toggle="tab"> Payment </a>
                </li>
            </ul> -->
            <div class="tab-content">
                <div class="tab-pane active" id="get-started">
                    <div class="form">
                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <div class="wrapper">
                                        <?php if(!$this->session->userdata('username')){?>
                                        <form id="login-form-wrap" class="login" >
                                            <h2 class="form-signin-heading">Please login</h2>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" placeholder="Password" required="" autofocus="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" id='login' value="Sign In" class="btn btn-lg btn-primary btn-block" />
                                            </div>
                                            <div class="remember-forgot">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <div class="checkbox">
                                                      <label>
                                                        <input type="checkbox" />
                                                        Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 forgot-pass-content">
                                                <a href="javascript:void(0)" class="forgot-pass">Forgot Password</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php }else{
                                    echo "Already Logged in";?>
                                    <script type="text/javascript">
                                    $(function(){
                                        $('ul li:eq(0)').removeClass('active');
                                        $('ul li:eq(0)').addClass('visited');
                                        $('ul li:eq(0) a').css('cursor','not-allowed');
                                        $('ul li:eq(0)').css('disabled',true);
                                        $('ul li:eq(1)').find('a').trigger('click');
                                    })
                                    </script>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="about-you">
            <div class="form">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                    <?php 
                    if (count($customer_details) > 0) {
                       ?>
                       <div class="row" id="prev-address">
                        <h4 class="address_title"><i class="fa fa-sticky-note" aria-hidden="true"></i> Select a delivery address</h4>
                        <hr>
                        <?php
                        foreach ($customer_details as $key => $value) {?>
                        <div class="col-md-4 col-sm-4 col-xs-4 picture">
                            <div class="form-group" id="address">
                                <address>
                                    <strong id="billing_first_name"><?php echo $value->first_name; ?></strong>&nbsp;<strong id="billing_last_name"><?php echo $value->last_name; ?></strong><br>
                                    <span id="billing_address_1"><?php echo $value->billing_address_line_1; ?></span><br>
                                    <span id="billing_address_2"><?php echo $value->billing_address_line_2; ?></span><br>
                                    <span id="billing_city"><?php echo $value->city; ?></span><br>
                                    <span id="billing_state"><?php echo $value->state; ?></span><br>
                                    <span id="billing_postcode"><?php echo $value->zip_code; ?></span><br>
                                    <strong>M:</strong><abbr title="Phone" id="billing_phone"><?php echo $value->mobile_number; ?></abbr>
                                </address>
<!--                                 <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Select this as Shipping Address
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Select this as Billing Address
                                    </label>
                                </div> -->
                                <div class="deliv-add">
                                    <input type="radio" name="selectAdd" value="<?php echo $value->ent_id;?>" id="<?php echo $value->ent_id;?>" class="selectAdd">
                                    <button type="" id="ent_<?php echo $value->ent_id;?>" class="btn btn-primary" onClick="selectAddress(<?php echo $value->ent_id;?>)">Deliver to this address</button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <hr>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <a id="cancel-address" class="btn btn-primary">Cancel</a>
                        <a id="add-address" class="btn btn-primary">Add a new address</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 picture" id="new-address" >
                            <div class="col-md-12">
                                <h4><i class="fa fa-sticky-note" aria-hidden="true"></i> Add a new address</h4>
                                <form id="newShipform" role="form">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="form-control" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" value="" placeholder="" id="shipping_last_name" name="shipping_last_name" class="form-control" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" value="" placeholder="Street address" id="shipping_address_1" name="shipping_address_1" class="form-control" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="shipping_address_2" name="shipping_address_2" class="form-control">
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile number</label>
                                    <input type="tel" value="" placeholder="" id="mobile_number" name="mobile_number" class="form-control" maxlength="10" pattern="[789][0-9]{9}" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Town / City</label>
                                    <input type="text" value="" placeholder="Town / City" id="shipping_city" name="shipping_city" class="form-control" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">State</label>
                                    <input type="text" id="shipping_state" name="shipping_state" placeholder="State / County" value="" class="form-control" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Postcode</label>
                                    <input type="text" value="" placeholder="Postcode / Zip" id="shipping_postcode" name="shipping_postcode" class="form-control" maxlength="6" pattern="[0-9]{6}" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        Select this as Billing Address
                                    </label>
                                </div>
                                <button type="submit" id="newShipaddress" class="btn btn-primary">Deliver to this address</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="looking-for">
        <h4>Review Your Order</h4>
        <button class="btn btn-primary pull-right payment" id="proc_paymtop">Proced to Payment</button>
        <table class="shop_table table table-striped">
            <thead>
                <tr>
                    <th class="product-name">Image</th>
                    <th class="product-name">Model</th>
                    <th class="product-name">Qty</th>
                    <th class="product-total">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sum = 0; 
                foreach ($cart_detail as $key => $value) {
                    ?>
                    <tr class="cart_item">
                        <td class="product-image col-sm-3">
                            <img src="<?php echo base_url().$value->img_path;?>" height="100px" width="100px">
                        </td>
                        <td class="product-name">
                            <!-- <?php echo $value->img_name ." , ". $value->model_name; ?> <strong class="product-quantity">× <?php echo $value->qty; ?></strong> -->
                            <?php echo $value->img_name ." , ". $value->model_name; ?>
                        </td>
                        <td class="product-qty">
                            <strong class="product-quantity"><?php echo $value->qty; ?></strong>
                        </td>
                        <td class="product-total">
                            <span class="amount"><?php echo ($value->img_price + $value->price) * $value->qty; ?></span>
                        </td>
                    </tr>
                    <?php $sum += ($value->img_price + $value->price) * $value->qty; } ?>
                </tbody>
                <tfoot>
                    <tr class="cart-subtotal">
                        <th colspan="3">Cart Subtotal</th>
                        <td><span class="amount"><?php echo $sum; ?></span>
                        </td>
                    </tr>
                    <tr class="shipping">
                        <th colspan="3">Shipping and Handling</th>
                        <td>
                            Free Shipping
                            <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                        </td>
                    </tr>
                    <tr class="order-total">
                        <th colspan="3">Order Total</th>
                        <td><strong><span class="amount"><?php echo $sum;  ?></span></strong> </td>
                    </tr>
                </tfoot>
            </table>
            <button class="btn btn-primary pull-right" id="proc_paymdown">Proceed to Payment</button>
        </div>
        <div class="tab-pane col-md-12 col-sm-12 col-xs-12" id="payment">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <ul class="payment_methods methods">
                    <li class="payment_method_bacs">
                        <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                        <label for="payment_method_bacs">Direct Bank Transfer </label>
                        <div class="payment_box payment_method_bacs">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                    </li>
                </ul>
                <div class="form-row place-order">
                    <a id="place_order" name="woocommerce_checkout_place_order" class="btn btn-primary">Place Order</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 shipAdd">
                <h4 class="address_title"><i class="fa fa-sticky-note" aria-hidden="true"></i> Cart total</h4>
                <hr>
                <strong>Payable amount: <span class="totals-value"><?php echo $sum;  ?></span></strong>
                <h4 class="address_title"><i class="fa fa-sticky-note" aria-hidden="true"></i> Shipping address</h4>
                <hr>
                <a href="#about-you" data-toggle="tab" class="pull-right">Change</a>
                <div id="shipingAddress"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url()?>assets/base/checkout/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/base/checkout/js/checkout.js"></script>
<script src="<?php echo base_url()?>assets/base/js/bootstrap/bootstrapValidator.js"></script>
<script type="text/javascript">var baseurl = "<?php print base_url(); ?>";</script>
<script type="text/javascript">
$(document).ready(function () {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var href = $(e.target).attr('href');
        var $curr = $(".checkout-bar  a[href='" + href + "']").parent();

        $('.checkout-bar li').removeClass();

        $curr.addClass("active");
        $curr.prevAll().addClass("visited");


    });
});
</script>