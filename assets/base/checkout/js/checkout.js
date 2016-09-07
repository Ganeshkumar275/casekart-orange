 $(document).ready(function(){
 	$('#select_billing').click(function(){
 		if($(this).is(":checked")){
 			$('.shipping_address').css('display','block');
 		}
 		else if($(this).is(":not(:checked)")){
 			$('.shipping_address').css('display','none');
 		}
 	});
// check_user_login();
 });
$('#add-address').on('click',function(){
    $('#new-address').css('display','block');
    $('#add-address').css('display','none');
    $('#cancel-address').css('display','block');
    $('#prev-address').css('display','none');
})
$('#cancel-address').on('click',function(){
    $('#new-address').css('display','none');
    $('#add-address').css('display','block');
    $('#prev-address').css('display','block');
    $('#cancel-address').css('display','none');
})
 $('#login').on('click',function(){
 	var formdata = $('#login-form-wrap').serialize();
 	$.ajax({
 		url:'checkout/customer_login',
 		type:'post',
 		dataType:'json',
 		data: formdata,
 		success:function(data){
 			if (data.length == 0) {
 				$('#invalid').css({'display':'block','color':'red'});
 			}else{
 				$('#invalid').css({'display':'none'});
 				$('.login').addClass('logged-in');
 				$.each(data,function(index,value){
 					$('#billing_first_name').val(value.first_name);
 					$('#billing_last_name').val(value.last_name);
 					$('#billing_address_1').val(value.billing_address_line_1);
 					$('#billing_address_2').val(value.billing_address_line_2);
 					$('#billing_city').val(value.city);
 					$('#billing_state').val(value.country);
 					$('#billing_postcode').val(value.pincode);
 					$('#billing_email').val(value.email);
 					$('#billing_phone').val(value.mobile_number);
 					$('[name=billing_country] option').filter(function() { 
    					return ($(this).val() == value.country);
						}).prop('selected', true); 
 					$('[name=billing_state] option').filter(function() { 
    					return ($(this).val() == value.state);
						}).prop('selected', true);
 				})
 				check_user_login();
 			}
 		}
 	})
 	return false;
 })

 function check_user_login(){
 	 	$.ajax({
 		url:'checkout/check_login',
 		type:'post',
 		dataType:'json',
 		success:function(data){
 			if (data.length == 0) {
 				$('#invalid').css({'display':'block','color':'red'});
 			}else{
 				$('#invalid').css({'display':'none'});
 				$('.login').addClass('logged-in');
/* 				$.each(data,function(index,value){
 					$('#address').append('<strong>'+value.first_name+' '+value.last_name+'</strong><br>');
 					$('#address').append('<span>'+value.billing_address_line_1+'</span><br>');
 					$('#address').append('<span>'+value.billing_address_line_2+'</span><br>');
 					$('#address').append('<span>'+value.city+'</span><br>');
 					$('#address').append('<span>'+value.state+'</span><br>');
 					$('#address').append('<span>'+value.zip_code+'</span><br>');
 					$('#address').append('<strong>M:</strong><abbr title="Phone" id="billing_phone">'+value.mobile_number+'</abbr><br>');
 					// $('#billing_first_name').text(value.first_name);
 					// $('#billing_last_name').text(value.last_name);
 					// $('#billing_address_1').text(value.billing_address_line_1);
 					// $('#billing_address_2').text(value.billing_address_line_2);
 					// $('#billing_city').text(value.city);
 					// $('#billing_state').text(value.state);
 					// $('#billing_postcode').text(value.zip_code);
 					// $('#billing_email').text(value.email);
 					// $('#billing_phone').text(value.mobile_number);
 					// $('[name=billing_country] option').filter(function() { 
    		// 			return ($(this).text() == value.country);
						// }).prop('selected', true); 
 					// $('[name=billing_state] option').filter(function() { 
    		// 			return ($(this).text() == value.state);
						// }).prop('selected', true);
 				}); */
 			}
 		}
 	})
 }
$(document).ready(function() {
    $('#newShipform').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            shipping_first_name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            shipping_last_name: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            mobile_number: {
                validators: {
                    notEmpty: {
                        message: 'The mobile phone number is required'
                    },
                    digits: {
                        message: 'The mobile phone number is not valid'
                    },
                }
            },
            shipping_city: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            shipping_state: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            shipping_postcode: {
                validators: {
                    notEmpty: {
                        message: 'The pincode is required'
                    },
                    digits: {
                        message: 'The pincode is not valid'
                    },
                }
            },
        },
        submitHandler: function(validator, form, submitButton) {
        		var formdata = $('#newShipform').serialize();
				$.ajax({
					url:baseurl+"base/checkout/newshipaddress",
					type:'POST',
					dataType:'json',
					data:formdata,
					success:function(data){
						if(data == "success"){
                            $('ul li:eq(1)').removeClass('active');
                            $('ul li:eq(1)').addClass('visited');
                            $('ul li:eq(2)').find('a').trigger('click');
						}else{
							location.reload();
						}
					}
				})
	return false;
        }
    });
});

function selectAddress (id) {
    $('.selectAdd').each(function(){
        if(id == $(this).val()){
            $(this).prop('checked',true);
            $('ul li:eq(1)').removeClass('active');
            $('ul li:eq(1)').addClass('visited');
            $('ul li:eq(2)').find('a').trigger('click');

        }
      
    })
}
$(function() {
$('#proc_paymtop,#proc_paymdown').on('click',function(){
    $('ul li:eq(2)').removeClass('active');
    $('ul li:eq(2)').addClass('visited');
    $('ul li:eq(3)').find('a').trigger('click');
})
})
$(function(){
    $('#proc_paymtop,#proc_paymdown').on('click',function(){
        $('.deliv-add').each(function() {
        var checked = $(this).find('input:radio:checked').val();
        $('#place_order').attr('href',"checkout/order_detail?id="+checked);
        if (typeof checked !== "undefined") {
            $.ajax({
                url:'checkout/select_shippingaddress',
                type:'POST',
                dataType: 'json',
                data: "id="+checked,
                success:function(data){
                    $('#shipingAddress').empty();
             $.each(data,function(index,value){
                    $('#shipingAddress').append('<strong>'+value.first_name+' '+value.last_name+'</strong><br>');
                    $('#shipingAddress').append('<span>'+value.billing_address_line_1+'</span><br>');
                    $('#shipingAddress').append('<span>'+value.billing_address_line_2+'</span><br>');
                    $('#shipingAddress').append('<span>'+value.city+'</span><br>');
                    $('#shipingAddress').append('<span>'+value.state+'</span><br>');
                    $('#shipingAddress').append('<span>'+value.zip_code+'</span><br>');
                    $('#shipingAddress').append('<strong>M:</strong><abbr title="Phone" id="billing_phone">'+value.mobile_number+'</abbr><br>');
                })
                }
            })
        }
        
    });
    })
})