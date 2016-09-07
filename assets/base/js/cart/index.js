/* Set rates + misc */
var taxRate = 0.00;
var shippingRate = 0.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal .remove-product').click( function() {
  var img_id = $(this).parent().find('#img_id').val();
  var model_id = $(this).parent().find('#model_id').val();
  $.ajax({
    url: "cart/remove_item",
    type: 'post',
    dataType: 'json',
    data: {'img_id':img_id,'model_id':model_id},
    success:function(data){
      var total = data;
      $('.alert-danger').html('');
      $('.alert-danger').append('<strong>'+data+'</strong> item is removed from cart.');
      $('.alert-danger').removeClass('hide');
      setTimeout(function(){
        $('.alert-danger').addClass('hide');
      },5000);
    }
  })
  removeItem(this);
  return false;
});
/** onload **/
$(function(){
  recalculateCart();
})

/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
      // location.reload();
      $('#do_action').css('display','none');
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var model_price = parseFloat(productRow.children('.model-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = (price + model_price) * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}