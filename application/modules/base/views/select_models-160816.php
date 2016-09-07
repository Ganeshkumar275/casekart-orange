<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Image gallery</title>
	<meta name="description" content="Blueprint: Split Layout" />
	<meta name="keywords" content="website template, layout, css3, transition, effect, split, dual, two sides, portfolio" />
	<meta name="author" content="Codrops" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/organicfoodicons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/demo.css" />
	<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/component.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dist/simplebar.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/scroll/demo.css" />
	<script src="<?php echo base_url()?>assets/js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/imagegallery/css/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/imagegallery/css/component.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<!--script src="<?php echo base_url()?>assets/imagegallery/js/modernizr.custom.js"></script-->
	<style type="text/css">
	ul.tsc_pagination li a
	{
		border:solid 1px;
		border-radius:3px;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		padding:6px 9px 6px 9px;
	}
	ul.tsc_pagination li
	{
		padding-bottom:1px;
	}
	ul.tsc_pagination li a:hover,
	ul.tsc_pagination li a.current
	{
		color:#FFFFFF;
		box-shadow:0px 1px #EDEDED;
		-moz-box-shadow:0px 1px #EDEDED;
		-webkit-box-shadow:0px 1px #EDEDED;
	}
	ul.tsc_pagination
	{
		display: inline-block;
		font: 12px "Tahoma";
		height: 100%;
		list-style-type: none;
		margin: 50px auto;
		overflow: hidden;
		padding: 0;
		width: 70%;
	}
	ul.tsc_pagination li
	{
		float:left;
		margin:0px;
		padding:0px;
		margin-left:5px;
	}
	ul.tsc_pagination li a
	{
		color:black;
		display:block;
		text-decoration:none;
		padding:7px 10px 7px 10px;
	}
	ul.tsc_pagination li a img
	{
		border:none;
	}
	ul.tsc_pagination li a
	{
		color:#47a3da;
		border-color:#47a3da;
		background:#F8FCFF;
	}
	ul.tsc_pagination li a:hover,
	ul.tsc_pagination li a.current
	{
		text-shadow:0px 1px #388DBE;
		border-color:#3390CA;
		background:#58B0E7;
		background:-moz-linear-gradient(top, #B4F6FF 1px, #63D0FE 1px, #58B0E7);
		background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #B4F6FF), color-stop(0.02, #63D0FE), color-stop(1, #58B0E7));
	}
	ul.tsc_pagination li strong{
		color: #47a3da;
		text-decoration: underline;
	}
	#products {
		margin-top: 330px;
		position: absolute;
	}
	#products input[type="submit"] {
		float: right;
		margin-left: 135px;
		margin-top: -20px;
		position: absolute;
	}
	.ui-widget-content{
		margin-left: 40px;
	}
	.rupee > img {
		position: absolute;
		margin: -10px 0 0 105px;
		width: 20px;
		z-index: 999;
	}
	.price {
		margin: -23px 0 0 5px;
		position: absolute;
		z-index: 999;
	}
	li:hover span.show-image input
	{
		display: block;
	}
	li span.show-image input:checked
	{
		display: none;
	}
	li span.show-image input {
		position:absolute;
		top:0;
		left:0;
		display:none;
	}
	li span.show-image{
		position: relative;
	}
	span.show-image input {
		margin: -217px 0 0 35px;
		z-index: 999;
	}
span.show-image label {
    z-index: 999;
}
/*	input[type=checkbox] { 
		background-image: url('https://www.iconfinder.com/icons/42186/checkbox_checked_unchecked_icon');
		background-repeat: no-repeat;
		width: 16px;
		height: 16px;
		cursor: pointer;
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		outline: 0
	}
	input[type=checkbox]::after {
		padding-right: 3px;
		top: 1px;
		font-family: 'Arial' !important;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		/*content: "O";*
		color: #000;
		display:block;
	}
	input[type=checkbox]:checked::after {
		-webkit-appearance: checkbox;
		content: "X";
		color: red;
	}*/
	input[type=checkbox] {
display:none;
}
 
input[type=checkbox] + label
{
background: #999;
height: 16px;
width: 16px;
display:inline-block;
padding: 0 0 0 0px;
    margin: -240px 0 0 34px;
    position: absolute;
}
input[type=checkbox]:checked + label
{
background: #0080FF;
height: 16px;
width: 16px;
display:inline-block;
padding: 0 0 0 0px;
}
/*	li .tick-design::after {
		background-color: red;
		border: 1px solid black;
		border-radius: 55%;
		/*content: "X";*
		cursor: pointer;
		font-size: 15px;
		height: 20px;
		margin: -235px 0 0 30px;
		position: absolute;
		width: 20px;
		z-index: 999;
		display: none;
	}
	span.show-image input {
		margin: -217px 0 0 35px;
		z-index: 1;
	}*/
	ul.nav-bar {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}

	.nav-bar li {
		float: left;
	}

	.nav-bar li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.nav-bar li a:hover:not(.active) {
		background-color: #111;
	}

	.active {
		background-color: #47a3da;
	}
	.alert {
		padding: 15px;
		margin-bottom: 1rem;
		border: 1px solid transparent;
		border-radius: .25rem;
	}
	.alert-danger {
		color: #a94442;
		background-color: #f2dede;
		border-color: #ebcccc;
	}

	.alert-danger hr {
		border-top-color: #e4b9b9;
	}

	.alert-danger .alert-link {
		color: #843534;
	}
	.alert.alert-danger > a {
		color: #47a3da;
		float: right;
	}
	.fileUpload {    
/*		border: 1px solid;
		display: none;
		left: 78%;
		margin: 10px;
		overflow: hidden;
		position: fixed;
		top: 6%;
		width: 15%;
		z-index: 999;*/
	}
	.image_upload{    
		border: 1px solid #fff;
		display: none;
		left: 0%;
		margin: 10px;
		overflow: hidden;
		position: fixed;
		text-align: center;
		top: 6.5%;
		width: 44%;
		z-index: 999;
		color: #ffffff;
	}
/*	.fileUpload input.upload {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
		}*/
		.upload:active{
			background-color: transparent !important;
			color: #ffffff !important;
			border-color: #ffffff !important;
			-webkit-transition: color 0.5s  ease-in-out;
			transition: color 0.5s  ease-in-out;

		}
		.uploadedImages {
			display: none;
			left: 0%;
			position: fixed;
			top: 23%;
			width: 48%;
			z-index: 999;
		}
		.uploadedImages > a {
			position: absolute;
			padding: 5px;
			width: 70px;
		}

		.uploadedImages > a:hover{
			background: #fff;
			color: #47a3da;
		}

		.uploadedImages > a {
			position: relative;
		}

		.uploadedImages > a:before {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			top: 0;
			right: 0;

			-webkit-transition-duration: 0.3s;
			-moz-transition-duration: 0.3s;
			-ms-transition-duration: 0.3s;
			-o-transition-duration: 0.3s;
			transition-duration: 0.2s;

			-webkit-transition-property: top, left, right, bottom;
			-moz-transition-property: top, left, right, bottom;
			-ms-transition-property: top, left, right, bottom;
			-o-transition-property: top, left, right, bottom;
			transition-property: top, left, right, bottom;
		}

		.uploadedImages > a:hover:before, .uploadedImages > a:focus:before{
			-webkit-transition-delay: .1s;
			-moz-transition-delay: .1s;
			-ms-transition-delay: .1s;
			-o-transition-delay: .1s;
			transition-delay: .1s; 

			border: #fff solid 3px;
			bottom: -7px;
			left: -7px;
			top: -7px;
			right: -7px;
		}
		.ownimage{
			display: none;
			left: 75%; 
			margin-bottom: -12px;
    		position: relative;
			top: -27px;
			z-index: 999;
			cursor: pointer;
		}
		.ownimage {
			background: #47a3da;
			background-image: -webkit-linear-gradient(top, #47a3da, #2980b9);
			background-image: -moz-linear-gradient(top, #47a3da, #2980b9);
			background-image: -ms-linear-gradient(top, #47a3da, #2980b9);
			background-image: -o-linear-gradient(top, #47a3da, #2980b9);
			background-image: linear-gradient(to bottom, #47a3da, #2980b9);
			-webkit-border-radius: 28;
			-moz-border-radius: 28;
			border-radius: 28px;
			color: #ffffff;
			font-size: 12px;
			padding: 5px 10px;
			text-decoration: none;
			width: 23%;
		}

		.ownimage:hover {
			background: #47a4da;
			text-decoration: none;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left">

						<div class="intro-content">
							<div class="profile"><img src="img/profile1.jpg" alt="profile1"></div>
							<h1><span id="all_designs">View designs </span><!-- <span>Web Designer</span> --></h1>
						</div>
						<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>

						<nav id="ml-menu" class="menu">
							<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>

							<div class="image_upload">
								<h3>Upload Your Image</h3>				
								<?php $attributes = array('id'=>'new_image');
								echo form_open_multipart('customer_upload/do_upload',$attributes);
								?>
									<div class="" style="padding-top:10px">
										<!-- <span>Select your Image</span> -->
										<?php echo "<input type='file' name='userfile' class='upload' />"; ?>
										<?php echo "<input type='submit' name='newimage' class='ownimage' value='Upload' />";?>
									</div>
								<?php echo form_close(); ?>
								<div class="uploadedImages">
									<a href="<?php echo base_url()?>customer_upload" >My Images</a>
								</div>
							</div>
							<div id="menus" class="offers">				
								<?php $attributes = array('id'=>'products');
								echo form_open('select_models',$attributes);
								?>
								<div style="margin-left:20px">
									<label for="amount">Price range:</label>
									<input type="text" id="amount" name="amount" style="border:0; color:#f6931f; font-weight:bold;" readonly>
									<br><br>
									<div id="slider-range" style="width:80%;"></div><input type="submit" value=" Apply " />
									<br><br>

									<br><br>
								</div>
								<?php form_close(); ?>
							</div>
							<div class="menu__wrap">
								<ul data-menu="submenu-1" class="menu__level">
									<li class="menu__item" ><a class="menu__link" data-rel="all"  href="javascript:;">All</a></li>
									<li class="menu__item" ><a class="menu__link" data-rel="stalk"  href="javascript:;">Abstract</a></li>
									<li class="menu__item" ><a class="menu__link" data-rel="seeds"  href="javascript:;">Animation</a></li>
									<li class="menu__item"><a class="menu__link" data-rel="cab"  href="javascript:;">Painting</a></li>
								</ul>
							</div>

						</nav>
						<div class="content">
							<p class="info"></p>
							<!-- Ajax loaded content here -->
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right">
						<div class="intro-content">
							<div class="profile"><img src="img/profile2.jpg" alt="profile2"></div>
							<h1><span id="showDesigns">Designs</span><!-- <span>Web Developer</span> --></h1>
							<!-- <h1 id="none_selected" style="display:none;">No Design as selected</h1> -->
						</div>
						<div class="selected_designs" id="selected_designs" style="display:block;" >

						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->

				<div class="loader_bg" style="display:none;">
					<img src="<?php echo base_url()?>assets/img/gears.gif" id="loader">
				</div>
				<div class="page page-right">
					<div class="page-inner">
						<div class="alert alert-danger">
							<strong>Hi, <?php echo ucfirst($this->session->userdata('username')); ?>!</strong> No image as selected.
							<a id="moveToleft"  href="#"> ← Select design</a>
						</div>
						<?php 
				// print_r($this->session->userdata('data'));
						?>
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				<div class="loader_bg_left" style="display:none;">
					<img src="<?php echo base_url()?>assets/img/gears.gif" id="loader">
				</div>
				<div class="page page-left simplebar demo1" data-simplebar-direction="vertical">
					<h1><span>Select Images<?php //print_r($this->session->userdata('selected_design')); ?></span></h1>
					<ul class="nav-bar">
						<li><a class="active" href="#home">Mockup 1</a></li>
						<li><a href="#news">Mockup 2</a></li>
						<li><a href="#contact">Tablet</a></li>
					</ul>
					<div class="page-inner select-design" >
						<ul id="og-grid" class="og-grid">
							<?php
							foreach($results as $data) {?>
							<li>
								<a href="<?php echo base_url().substr($data->img_path,3);?>" data-largesrc="<?php echo base_url().substr($data->img_path,3);?>" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot." >
									<img id="img_style" src="<?php echo base_url().substr($data->img_path,3);?>" alt="" width="250" height="250">
									<span class="rupee"><img src="<?php echo base_url()?>assets/img/rupee.png"><span class="price"><?php echo $data->img_price; ?></span></span>

								</a>
								<span class="show-image">
 									<?php 
									$checked = $this->session->userdata('selected_design');
									// print_r($checked);
									if ($checked) {
										for ($i=0; $i < count($checked); $i++) {
											if ($checked[$i] == $data->img_id) { ?>
											<input id="image_<?php echo $data->img_id ?>" value="<?php echo $data->img_id ?>" type="checkbox" class="imgId" name="<?php echo $data->img_id ?>"  onClick="getImgid(<?php echo $data->img_id ?>);" checked="checked"><label for="<?php echo $data->img_id ?>"></label> 
											<?php }else{?>
											<input id="image_<?php echo $data->img_id ?>" value="<?php echo $data->img_id ?>" type="checkbox" class="imgId" name="<?php echo $data->img_id ?>"  onClick="getImgid(<?php echo $data->img_id ?>);" ><label for="<?php echo $data->img_id ?>"></label>
											<?php
									break 1; 
										}
									}
								}else{?>
								<input id="image_<?php echo $data->img_id ?>" value="<?php echo $data->img_id ?>" type="checkbox" class="imgId" name="image_<?php echo $data->img_id ?>" onClick="getImgid(<?php echo $data->img_id ?>);" ><label for="image_<?php echo $data->img_id ?>"></label>
								<?php }?> 

								<div class="tick-design"></div>
							</span>
						</li>
						<?php }
						?>
					</ul>
					<ul class="tsc_pagination">
						<!-- Show pagination links -->
						<?php foreach ($links as $link) {
							echo "<li>". $link."</li>";
						} ?>
					</ul>
					<!-- <button class="primary-button" onclick="loadmore()">Load More</button>	 -->						
				</div><!-- /page-inner -->
			</div><!-- /page-left -->
			<textarea id="sel_img_id"></textarea>
			<a href="javascript:void(0);" class="back1 back-right1" style="display:none" id="img_id">Select Model</a>
			<a href="#" class="back back-right" title="back to intro">&rarr;</a>

			<input type="hidden" name="limit" id="limit" value="25"/>
			<input type="hidden" name="offset" id="offset" value="52"/>
			<a href="#" id="trig" class="back back-left" title="back to intro">&larr;</a>
		</div><!-- /splitlayout -->
	</div><!-- /container -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.12.4.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/classie.js"></script>

	<script src="<?php echo base_url()?>assets/js/main.js"></script>
	<script src="<?php echo base_url()?>assets/js/cbpSplitLayout.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom_jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
	<script src="<?php echo base_url()?>assets/dist/simplebar.js"></script>
	<script src="<?php echo base_url()?>assets/imagegallery/js/modernizr.custom.js"></script>
	<script src="<?php echo base_url()?>assets/imagegallery/js/grid.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
	$('#all_designs').on('click',function(){
		$('.image_upload ').css('display','block');
		$('.uploadedImages ').css('display','block');
		$('.ownimage ').css('display','block');
	})
	$('.back-right').on('click',function(){
		$('.image_upload ').css('display','none');
		$('.uploadedImages ').css('display','none');
		$('.ownimage ').css('display','none');

	})
// $('#products').click(function(){
// 	var formdata = $(this).serialize();

// 	return false;
// })
</script>
<script type="text/javascript">
var baseURL = "<?php echo base_url(); ?>";
function getImgid(id){
	$.ajax({
		url: "<?php echo base_url() ?>select_models/setSelecteddesign",
		type: "post",
		data: "ids="+id,
		dataType: 'json',
		success:function(data){
			$.each(data,function(index,value){
				var check = $('#og-grid li').find('input[name="imgId"]').val();
				if (value == check) {
					$(this).attr('checked',true);
					alert('ok');
				}else{
					$(this).attr('checked',false)
				}
			})
		}
	})
}

</script>
<script type="text/javascript">
$(function() {
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: <?php echo $max; ?>,
		values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "Rs." + ui.values[ 0 ] + " - Rs." + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "Rs." + $( "#slider-range" ).slider( "values", 0 ) +
		" - Rs." + $( "#slider-range" ).slider( "values", 1 ) );
});
</script>
<script>
$(function(){
	var pathname = window.location.pathname.split("/");
	var filename = pathname[pathname.length-1];

	if ($.isNumeric(filename)) {

			// Grid.init();
			setTimeout(function() {
				Grid.init();
				$('.side-left').find('h1 span').trigger('click');
				$('#all_designs').trigger('click');
			},1000);

		}else{
			Grid.init();
		}
	})
var $textInput = $('#sel_img_id');
var $checkBox = $('.select-design');
$('.select-design').on('click','li input',function(){
	getallchecked();
});

function getallchecked () {
    		// empty text input
    		var temp = "";
    		// print out all checked inputs
    		$('.select-design').find('li input:checked').each(function() {
    			temp += $(this).val() +',';
    		});
    		$textInput.val(temp.substring(0,temp.length-1));
    		$('#sel_img_id').val(temp.substring(0,temp.length-1));
    	}
    	

    	(function() {
    		var menuEl = document.getElementById('ml-menu');
    		mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu togglef
		var openMenuCtrl = document.querySelector('.action--open'),
		closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.page-left .page-inner');

		function loadDummyData(ev, itemName) {
			$('.loader_bg_left').show();
			$('.loadmore').hide();
			ev.preventDefault();
			var cat = itemName.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '_').toLowerCase();
			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				$('.loader_bg_left').show();
				classie.remove(gridWrapper, 'content--loading');
				$.get("get_images/load_image?cat="+cat,function(data){
					var i = 1;
					$.each(data,function(index,value){
						gridWrapper.innerHTML += '<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="<?php echo base_url()?>assets/img/rupee.png">'+value.img_price+'</span></li>';
						i++;
					})
				},"json");
			}, 700);
		}
	})();
/*	$('#all_designs').click(function(){
		$('.loader_bg_left').show();
		var gridWrapper = document.querySelector('#og-grid');
		gridWrapper.innerHTML = '';
		classie.add(gridWrapper, 'content--loading');
		setTimeout(function() {
			classie.remove(gridWrapper, 'content--loading');
			$.get("get_images/load_all_image",function(data){
				var i = 1;
				$.each(data,function(index,value){
					gridWrapper.innerHTML += '<li ><a href=\"'+value.img_path+'\" data-largesrc=\"'+value.img_path+'\" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></a></li>';
					
					i++;
				});
				gridWrapper.innerHTML += '<li class=\"product_align\"><button class="btn btn-primary backLo loadmore" value="loadmore" style="display: block;float:left;margin-top:160px;" onclick="loadmore()">Loadmore</button></li>';
			},"json");
		}, 700);
		$('.loader_bg_left').hide();
	})*/
$('#img_id').click(function(){
	$('#splitlayout').removeClass('open-left').addClass('open-right');
	$('.image_upload ').css('display','none');
	$('.uploadedImages ').css('display','none');
	$('.ownimage ').css('display','none');
	// var selectedImages = <?php echo json_encode($this->session->userdata('selected_design'))?>;
	// $.ajax({
	// 	url: '<?php echo base_url() ?>select_models/top_viewed',
	// 	type: 'post',
	// 	dataType: 'json',
	// 	data: 'id='+selectedImages,
	// 	success:function(data){
	// 		alert(data);
	// 	}
	// })
display_selectedImg();
});	
$('#showDesigns').click(function(){
	display_selectedImg();
})
// function loadmore(){
// 	$(".backLo").css('display','none');
// 	var gridWrapper = document.querySelector('#og-grid');
// 	$.ajax({
// 		url:"get_images/loadmore",
// 		data:{
// 			offset :$('#offset').val(),
// 			limit :$('#limit').val()
// 		},
// 		type:"POST",
// 		dataType:"json", 
// 		success :function(data){
// 			var i = data.last_offset;
// 			$('#load-more').prepend(data.view);
// 			$('#offset').val(data.offset);
// 			$('#limit').val(data.limit);
// 			$.each(data.view,function(index,value){
// 				gridWrapper.innerHTML +='<li><a href=\"'+value.img_path+'\" data-largesrc=\"'+value.img_path+'\" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot."><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></a></li>';
// 				i++;
// 			})
// 			gridWrapper.innerHTML += '<li class=\"product_align\"><button class="btn btn-primary backLo loadmore" value="loadmore" style="display: block;float:left;margin-top:160px;" onclick="loadmore()">Loadmore</button></li>';

// 		}
// 	});
// }

function display_selectedImg(){
	var ids = <?php echo json_encode($this->session->userdata('selected_design'))?>;
	$.ajax({
		type:"post",
		url:"<?php echo base_url() ?>get_images/getImgName",
		data: 'id='+ids,
		dataType:"json",
		success:function(link){
			if (link != "") {
				$('.page-right').find('.page-inner .alert').css('display','none');
				$('#selected_designs').empty();
				$.each(link,function(key,data){
					$.each(data,function(index,value){
						$('#selected_designs').append('<div class="design"><label><input type="radio" class="radio_select" name="image" value="'+value.img_id+'" ><img src="<?php echo base_url() ?>/'+value.img_path+'" alt="profile2"></label></div>');	
					});
				});
				$('.selected_designs').find('input[type="radio"]:eq(0)').trigger('click');
				$('input[type="radio"]:eq(0)').parent().parent().addClass('design_image', this.checked);
					// $(".page-right .page-inner").load("index.php/select_models/include_page");
					$('.intro-content').find('#none_selected').css('display','none');
				}else{
					$('.page-right').find('.page-inner .alert').css('display','block');
					// alert("No image selected");
				}
			}
		});

}
$('#moveToleft').on('click',function(){
	$('#splitlayout').removeClass('open-right').addClass('open-left');
	$('#all_designs').trigger('click');
})
$('#asc').on('click', function() {
	var gridWrapper = document.querySelector('.page-left .page-inner');
	gridWrapper.innerHTML = '';
	$.ajax({
		url :"filter/item_list",
		dataType:'json',
		success:function(data){
			var i = 1;
			$.each(data, function(index, value){   
				gridWrapper.innerHTML += '<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="<?php echo base_url()?>assets/img/rupee.png">'+value.img_price+'</span></li>';
				i++;

			});

		}
	});
});

$('#desc').on('click', function() {
	var gridWrapper = document.querySelector('.page-left .page-inner');
	gridWrapper.innerHTML = '';
	$.ajax({
		url :"filter/item_lists",
		dataType:'json',
		success:function(data){
			var i = 1;
			$.each(data, function(index, value){    
				gridWrapper.innerHTML += '<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_name+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="<?php echo base_url()?>assets/img/rupee.png">'+value.img_price+'</span></li>';
				i++;
			});

		}
	});
});
</script>
<script type="text/javascript">
$(function($) {
   /* $('.simplebar').on('scroll', function() {
    	var p = $('.simplebar-scrollbar');
    	var position = p.position();
    	console.log($('.simplebar-content').innerHeight());
    	console.log(position.top + 2685);
        if(position.top + 2685 >= $('.simplebar-content').innerHeight()) {
            // loadmore();
        }
    })*/
/*
    $(window).scroll(function() {
	    
 	     var end = $(".simplebar").offset().top; 
 	     var viewEnd = $(".simplebar").scrollTop() + $(".simplebar").height(); 
 	     var distance = end - viewEnd; 
 	     if (distance < 10) {
 	     	alert("loading");
 	     }
	    
 	 });*/

/*	console.log($('.simplebar-scrollbar').scrollTop());
	console.log($('.simplebar-scrollbar').height());
	console.log($('.simplebar').height());
$('.simplebar-scrollbar').scroll(function() {
    if($('.simplebar-scrollbar').scrollTop() == $('.simplebar-scrollbar').height() - $('.simplebar').height()) {
        console.log("asdf");
    }
});*/

    // $(".simplebar").scroll(function() {
    //     var $this = $(this);
    //     var $results = $("#select-design").position();
    //     var $round = 115.6;
    //     console.log($this.scrollTop());
    //     console.log( Math.abs($results.top-115.6));
    //         if ($this.scrollTop() ==  Math.abs($results.top-$round)) {
    //             // loadmore();
    //             $round = 0;

    //         }
    // });
});
</script>
</body>
</html>