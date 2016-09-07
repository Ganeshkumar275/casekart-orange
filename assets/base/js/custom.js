$(".side-left").on('click',function(){

	if($("#splitlayout").hasClass("open-left")){

		$(".menu").css('display','block');

	}

	else{

		$(".menu").css('display','none');
		$(".backLo").css('display','none');



	}

});

$(".back-right").click(function(){

	$(".menu").css('display','none');

});

$("#img_id").click(function(){

	$(".menu").css('display','none');

});

$(".side-left").on('click',function(){

	if ($("#splitlayout").hasClass("open-left"))

	 {

	 	$(".back1").css('display','block');

	 }

	});



$(".side-right").on('click',function(){

	if ($("#splitlayout").hasClass("open-right"))

	 {

	 	$(".back1").css('display','none');

	 }

});

$(".back-right").on('click',function(){

	if ($("#splitlayout").hasClass("close-left"))

	 {

	 	$(".back1").css('display','none');

	 }

});
$(".back1").on('click',function(){

	if($("#splitlayout").hasClass("open-right")){

		$(".back1").css('display','none');

		$(".backLo").css('display','none');

	}
});

$(".back1").on('click',function(){

	if($("#splitlayout").hasClass("open-right")){

		$(".back1").css('display','none');
		$(".backLo").css('display','none');

		$(".product_align").css('display','block');

	}

	else{

		$(".back1").css('display','none');
		$(".backLo").css('display','none');

		// $(".product_align").css('display','none');



	}

});
$(".side-left").on('click',function(){

	if ($("#splitlayout").hasClass("open-left"))

	 {

	 	$(".backLo").css('display','block');

	 }
	 else{
	 	$(".backLo").css('display','none');
	 }

	});



$(".side-right").on('click',function(){

	if ($("#splitlayout").hasClass("open-right"))

	 {

	 	$(".backLo").css('display','none');

	 }

});

$(".back-right").on('click',function(){

	if ($("#splitlayout").hasClass("close-left"))

	 {

	 	$(".backLo").css('display','none');

	 }

});