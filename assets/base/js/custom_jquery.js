$('.side-right').on('click',function(){

	if($('#splitlayout').hasClass("open-right")){
		$(".backLo").css('display','none');

		$('#selected_designs').css('display','block');

		$('.side-right div:eq(0)').addClass("alter");

	}else{

		$('#selected_designs').css('display','none');
		$('.backLo').css('display','block');

	}

});

$('.back-left').on('click',function(){

	$('#selected_designs').css('display','none');

	$('.side-right div:eq(0)').removeClass("alter");
	$('.backLo').css('display','none');



});

/****** div toggle *****/

/*onload*/

function showonlyone(thechosenone) {

	$('.modeldiv').each(function(index) {

		if ($(this).attr("id") == thechosenone) {

			$(this).show(400);

		}

		else {

			$(this).hide(300);

		}

	});

}

/*

$('.modeldiv').on('click',function(){

	var selected = []

	$(this).find('input:checked').each(function() {

		selected.push($(this).val());

	});

	var save_data = localStorage.setItem('models', selected);

	if ($(this).find('input').is(':checked')) {

		$(this).find('input:eq(0)').prop('checked',true);

	}else if(selected == ""){

		$(this).find('input:eq(0)').prop('checked',false);

	}

})*/

$('#selected_designs').on('change','.radio_select',function(){

	$('.loader_bg').show();

	if($(this).prop("checked") == true){
		var design_id = $('.selected_designs input[type="radio"]:checked').val();

		var id = $('#sele_design_id').val();

		var model = $('#selected_model_name').val();
		if (model != "") {
		$.post(baseURL+"base/session_setting/set_session", {"id":"design_"+id,"data": model});
	};

		$(".page-right .page-inner").load(baseURL+"base/select_models/include_page");

		setTimeout(

			function() 

			{

				$('.loader_bg').hide();

				$.get(baseURL+"base/session_setting/get_session",function(data){

					if (data){
						$.each(data, function(key,value){
							key = key.replace('design_','');
							if (key == design_id) {
								var total = value.split(",");

								for (i=0;i<total.length;i++){

									var get_text = $('.modeldiv').find('input:checkbox[value="'+total[i]+'"]').prop("checked", true);

									if(total[i]){

									$('.recent_models').append("<div class='dialog'><a href='javascript:void(0)' class='close-classic'>"+$(get_text).next().text()+"</a></div>");

								}

								}

							};

						})

					}

				}, "json");

			}, 1500);

	}else{
		$('.page-right .page-inner').empty();
	}



})

$('#selected_designs').on('click','.radio_select',function() {

		if($(this).is(':checked')){

			$('#selected_designs').find('.design_image').removeClass('design_image');

			$(this).parent().parent().addClass('design_image');

		}else{

			console.log('notchecked');

		}

});



$('.side-right .intro-content h1').click(function(){

	$('.selected_designs').find('input[type="radio"]:eq(0)').trigger('click');

	$('input[type="radio"]:eq(0)').parent().parent().addClass('design_image', this.checked);

})

$('.side-left .intro-content h1,.menu__wrap a').click(function(){

	already_selected();

})

function already_selected(){

		setTimeout(

		function() 

		{

			var alr_selected = $('#sel_img_id').val();
			
			if (alr_selected) {

				var total = alr_selected.split(",");

				for (i=0;i<total.length;i++){

					$('.select-design').find('input:checkbox[value="'+total[i]+'"]').prop("checked", true);

				}

			};

		},2000);

	// var image = $('#sel_img_id').val();

	// 	$.post("session_setting/image_data", {"design":image});	

}