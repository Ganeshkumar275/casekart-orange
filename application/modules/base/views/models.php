<div id="ajax">

	<div class="models">

		<h3>Select by Brand</h3>



	</div>

	<div class="button_select">

	</div>


	<input type="text" id="sele_design_id">

	<textarea id='selected_model_name'></textarea>



</div>

<div class="button_right">

	<a href="javascript:void(0);" type="button" id="cancel_order"  class="cancel-selected"><i class="fa fa-times fa-lg" aria-hidden="true"></i> Cancel selected</a>

	<h4>Brands Selected</h4>

	<div class="recent_models"></div>

	<a class="cart-btn" id='cart' >Cart → </a>

</div>

<script type="text/javascript">

$(function(){

	$('.page-right').css({ height: $(window).innerHeight() });

	$('.page-right .button_right').css({ height: $(window).innerHeight() });

	$('#ajax').css({ height: $(window).innerHeight() });

	$(window).resize(function(){

		$('.page-right').css({ height: $(window).innerHeight() });

		$('.page-right .button_right').css({ height: $(window).innerHeight() });

		$('#ajax').css({ height: $(window).innerHeight() });

	});

	$.ajax({
		url:baseURL+'base/select_models/select_brands',
		dataType:'json',
		success:function(data){
			$.each(data,function(index,brand){
				$('.button_select').append('<a href=javascript:showonlyone("'+brand.brand_name+'"); id="showdiv" class="btn btn-primary-outline">'+brand.brand_name+'</a>');
				$('.button_select').after('<div id="'+brand.brand_name+'" class="modeldiv" style="display:none;">');
				var brands = brand.model_name.split(",");
				var id = brand.model_id.split(",");
				if (brands.length > 0 ) {
					for (var i = 0; i < brands.length; i++) {
						$('#'+brand.brand_name).append('<div id="ck-button"><label><input class="input_check" type="checkbox" value="'+id[i]+'"><span>'+brands[i]+'</span></label></div>');
					}
				}
			})
		}
	});
});

setTimeout(function() {
	$('.button_select a').filter(':first').addClass("active");

	showonlyone('Apple');


},1000)
var $textInput = $('#selected_model_name');

var $checkBox = $('.modeldiv');

var $recent_models = $(".button_right .recent_models");



$(document).on('click','.modeldiv input',function(){

	var design_id = $('.selected_designs input[type="radio"]:checked').val();

	if ($('#sele_design_id').val() == "") {

		$('#sele_design_id').val(design_id);

	};

	populateTextInput();

});



function populateTextInput () {

    // empty text input

    var temp = "";

    $textInput.val('');

    $recent_models.empty();

    // print out all checked inputs

    $('.modeldiv').find('input:checked').each(function() {

    	temp += $(this).val() +',';

    	$recent_models.append("<div class='dialog'><a href='javascript:void(0);' class='close-classic'>"+$(this).next().text()+"</a></div>");

    });   

    $textInput.val(temp);

    

}

$('#cart').click(function(){

	var id = $('#sele_design_id').val();

	var model = $('#selected_model_name').val();

	$.post(baseURL+"base/session_setting/set_cart_session", {"id":"design_"+id,"data": model}).done(function(data){

	if (data) {

		// var baseurl = "<?php print base_url(); ?>";

		 window.location.href = baseURL+"base/cart";

	}

	});

})



$(document).on('click','.button_select a',function(){
// alert('ok');
	$('a.active').removeClass("active");

	$(this).addClass("active");

});



$('#cancel_order').click(function(){

	$.ajax({

		url:'session_setting/cancel_order',

		dataType:'json',

		success:function(data){

			alert("orders "+data);

		}

	})

})

$('.recent_models').on('click','.close-classic',function(){

	var unselect = $(this).text();

	$('.modeldiv').find('input:checked').each(function(){

		if(unselect == $(this).next().text()){

			$(this).prop('checked',false);

			populateTextInput();

		}

	});

})

</script>