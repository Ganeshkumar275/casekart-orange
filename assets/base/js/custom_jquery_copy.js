$('.side-right').on('click',function(){
	if($('#splitlayout').hasClass("open-right")){
		$('#selected_designs').css('display','block');
		$('.side-right div:eq(0)').addClass("alter");
	}else{
		$('#selected_designs').css('display','none');
	}
});
$('.back-left').on('click',function(){
	$('#selected_designs').css('display','none');
	$('.side-right div:eq(0)').removeClass("alter");

});
/****** div toggle *****/
/*onload*/

function showonlyone(thechosenone) {
	$('.modeldiv').each(function(index) {
		if ($(this).attr("id") == thechosenone) {
			$(this).show(200);
		}
		else {
			$(this).hide(400);
		}
	});
}

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

})
function selected_model(design_name){
	var $sheck = $('.modeldiv');
	var checkValues =  $sheck.filter(':checked').map(function()
	{
		return $(this).val();
	}).get();
alert(checkValues);
return checkValues;
}

function checkout(){
	var design_id = $('.selected_designs input[type="radio"]').val();
	if (design_id) {
		return design_id;
	}else{
		return selected_model(design_id);
	}
}
// var design_id = "";
$('#selected_designs input[type="radio"]').click(function(){
	if($(this).prop("checked") == true){
		var design_id = $('.selected_designs input[type="radio"]:checked').val();
		$(".page-inner").load("models.php");
		var model = selected_model();
		$.post("/splitlayout/session_values.php", {"id": design_id,"data": model});

	}
})
$(document).ready(function() {
	// $('#selected_designs input[type="radio"]').on('change',function(){
		// var design_id = $('.selected_designs input[type="radio"]').val();
		if ($('.modeldiv').find('input').is(':checked')) {
			var model = selected_model();
			$.post("/splitlayout/session_values.php", {"data": model});
			// $.post("/splitlayout/session_values.php", {"id": model});
			// var save_data = localStorage.setItem('models', model);
			// var get_data = localStorage.getItem(design_id)+','+localStorage.getItem('models');
			// console.log(get_data);
		}else{
			var design_id = checkout();
		// localStorage.setItem(design_id, save_data);
		// $.post("/splitlayout/session_values.php", {"id": design_id});
	}
// });
});