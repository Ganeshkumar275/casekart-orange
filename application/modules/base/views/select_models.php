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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/product_design.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/css/organicfoodicons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/css/demo.css" />
	<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/css/component.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/dist/simplebar.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/css/scroll/demo.css" />
	<script src="<?php echo base_url()?>assets/base/js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/imagegallery/css/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/imagegallery/css/component.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/theme/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/base/upload/dist/bootstrap.fd.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/base/font-awesome/css/font-awesome.css">
	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/base/js/jquery-1.12.4.min.js"></script>
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/base/fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/base/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/base/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/base/css/upload/bootstrap.min.css" /> -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/base/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/base/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<style type="text/css">
	.selected {

		border-color: #fff;

	}



	.selected:before {

		content: "✓";

		background-color: #FF7800;

		transform: scale(1);

	}
	.image_upload{    
		/*border: 1px solid #fff;*/
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
	.btn-upload{
		color: #fff;
		border: 1px solid #fff;
		background-color: #FF7800;

	}
	.btn-upload:hover{
		color: #FF7800;
		background-color: #fff;

	}
	.uploadedImages {
		display: none;
		left: 0%;
		position: fixed;
		top: 17%;
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
		color: #FF7800;
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
	.offers{
		display: none;
	}
	</style>
	<script type="text/javascript">
	var $= jQuery.noConflict();
	$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			 $('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			 $('.fancybox-buttons').fancybox({
			 	openEffect  : 'none',
			 	closeEffect : 'none',

			 	prevEffect : 'none',
			 	nextEffect : 'none',

			 	closeBtn  : false,

			 	helpers : {
			 		title : {
			 			type : 'inside'
			 		},
			 		buttons	: {}
			 	},

			 	afterLoad : function() {
			 		this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
			 	}
			 });


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			 $('.fancybox-thumbs').fancybox({
			 	prevEffect : 'none',
			 	nextEffect : 'none',

			 	closeBtn  : false,
			 	arrows    : false,
			 	nextClick : true,

			 	helpers : {
			 		thumbs : {
			 			width  : 50,
			 			height : 50
			 		}
			 	}
			 });

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			 */
			 $('.fancybox-media')
			 .attr('rel', 'media-gallery')
			 .fancybox({
			 	openEffect : 'none',
			 	closeEffect : 'none',
			 	prevEffect : 'none',
			 	nextEffect : 'none',

			 	arrows : false,
			 	helpers : {
			 		media : {},
			 		buttons : {}
			 	}
			 });

			/*
			 *  Open manually
			 */

			 $("#fancybox-manual-a").click(function() {
			 	$.fancybox.open('1_b.jpg');
			 });

			 $("#fancybox-manual-b").click(function() {
			 	$.fancybox.open({
			 		href : 'iframe.html',
			 		type : 'iframe',
			 		padding : 5
			 	});
			 });

			 $("#fancybox-manual-c").click(function() {
			 	$.fancybox.open([
			 	{
			 		href : '1_b.jpg',
			 		title : 'My title'
			 	}, {
			 		href : '2_b.jpg',
			 		title : '2nd title'
			 	}, {
			 		href : '3_b.jpg'
			 	}
			 	], {
			 		helpers : {
			 			thumbs : {
			 				width: 75,
			 				height: 50
			 			}
			 		}
			 	});
			 });


			});
</script>
</head>
<body>
	<div class="container">
		<div id="splitlayout" class="splitlayout">
			<div class="intro">
				<div class="side side-left">

					<div class="intro-content">
						<!-- <div class="profile"><img src="img/profile1.jpg" alt="profile1"></div> -->
						<h1><span id="all_designs">Designs </span><!-- <span>Web Designer</span> --></h1>
					</div>
					<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>

					<nav id="ml-menu" class="menu">
						<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
						<a href="<?php echo base_url()?>base/cart">
							<div class="cart-home">
								<i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i><p><?php echo $num_cart?></p>
							</div>
						</a>
<!-- 						<div class="image_upload">
							<h3>Upload Your Image</h3>				
							<?php $attributes = array('id'=>'new_image');
							echo form_open_multipart('customer_upload/do_upload',$attributes);
							?>
							<button id="open_btn" class="btn btn-upload"><i class="fa fa-upload"></i> | Upload</button>
							<?php echo form_close(); ?>
							<div class="uploadedImages">
								<a href="<?php echo base_url()?>customer_upload" >My Images</a>
							</div>
						</div> -->
						<div class="menu__wrap">
							<ul data-menu="submenu-1" class="menu__level">
								<li class="menu__item" ><a class="menu__link" data-rel="all"  href="javascript:;">All</a></li>
								<li class="menu__item" ><a class="menu__link" data-rel="stalk"  href="javascript:;">Abstract</a></li>
								<li class="menu__item" ><a class="menu__link" data-rel="seeds"  href="javascript:;">Animation</a></li>
								<li class="menu__item"><a class="menu__link" data-rel="cab"  href="javascript:;">Painting</a></li>
							</ul>
						</div>

					</nav>
					<div id="menus" class="offers">				
						<?php $attributes = array('id'=>'products');
						echo form_open('base/select_models',$attributes);
						?>
						<div class="price-range"><!--price-range-->
							<h3>Price Filter</h3>
							<div class="well text-center">
								<?php if (isset($price_from)) {?>
								<input type="text" class="span2" value="" data-slider-min="<?php echo $min;?>" data-slider-max="<?php echo $max;?>" data-slider-step="1" data-slider-value="[<?php echo $price_from;?>,<?php echo $price_to;?>]" id="sl2" ><br />
								<?php }else{?>
								<input type="text" class="span2" value="" data-slider-min="<?php echo $min;?>" data-slider-max="<?php echo $max;?>" data-slider-step="1" data-slider-value="[<?php echo $min+20;?>,<?php echo $max-20;?>]" id="sl2" ><br />
								<?php } ?>
								
								<b class="pull-left price-from">&#8377; <?php echo $min;?></b> <b class="pull-right price-to">&#8377; <?php echo $max;?></b>
								<input type="submit" value="" id="price-filter" hidden/>
							</div>
						</div><!--/price-range-->
						<?php echo form_close(); ?>
					</div>
					<div class="content">
						<p class="info"></p>
						<!-- Ajax loaded content here -->
					</div>
					<div class="overlay"></div>
				</div>
				<div class="side side-right">
					<div class="intro-content">
						<!-- <div class="profile"><img src="img/profile2.jpg" alt="profile2"></div> -->
						<h1><span id="showDesigns">Models</span><!-- <span>Web Developer</span> --></h1>
						<!-- <h1 id="none_selected" style="display:none;">No Design as selected</h1> -->
					</div>
					<div class="selected_designs" id="selected_designs" style="display:block;" >

					</div>
					<div class="overlay"></div>
				</div>
			</div><!-- /intro -->

			<div class="loader_bg" style="display:none;">
				<img src="<?php echo base_url()?>assets/base/img/gears.gif" id="loader">
			</div>
			<div class="page page-right">
				<div class="page-inner">
					<div class="alert alert-danger">
						<strong>Hi, <?php echo ucfirst($this->session->userdata('username')); ?>!</strong>
						<!-- <a id="moveToleft"  href="#"> ← Select Design</a> -->
					</div>
					<?php 
				// print_r($this->session->userdata('data'));
					?>
					<style type="text/css">
					
					.error-template {padding: 40px 15px;text-align: center;}
					.error-actions {margin-top:15px;margin-bottom:15px;}
					.error-actions .btn { margin-right:10px; }
					</style>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="error-template">
									<h1>
										Oops!
									</h1>
										<h2>
											No image as selected
										</h2>
											<div class="error-details">
												Please select the design!
											</div>
											<div class="error-actions">
												<a id="moveToleft" class="btn btn-primary btn-lg">
													<span class="glyphicon glyphicon-home"></span>
													Select design 
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- /page-inner -->
						</div><!-- /page-right -->
						<div class="loader_bg_left" style="display:none;">
							<img src="<?php echo base_url()?>assets/base/img/gears.gif" id="loader">
						</div>
						<div class="page page-left simplebar demo1" data-simplebar-direction="vertical">
							<h1><span>Select Images<?php //print_r($this->session->userdata('selected_design')); ?></span></h1>
<!-- 				<ul class="nav-bar">
					<li><a class="active" href="#home">Mockup 1</a></li>
					<li><a href="#news">Mockup 2</a></li>
					<li><a href="#contact">Tablet</a></li>
				</ul> -->
				<div class="page-inner select-design col-sm-9" >
					<?php
					foreach($results as $data) {?>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo">
									<a href="javascript:" data-largesrc="<?php echo base_url().substr($data->img_path,3);?>" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot." >
										<img id="<?php echo $data->img_id ?>" src="<?php echo base_url().$data->img_path;?>" alt="" width="200" height="200">
										<span class="rupee"><img src="<?php echo base_url()?>assets/base/img/rupee.png"><span class="price"><?php echo $data->img_price; ?></span></span>
									</a>
								</div>
								<div class="product-overlay">
									<div class="overlay-content">
										<!-- <img src="<?php echo base_url()?>assets/base/img/rupee-white.png"><h2><?php echo $data->img_price; ?></h2>
										<p>Easy Polo Black Edition</p> -->
										<a title="<?php echo '&#x20B9; '.$data->img_price; ?>" class="btn btn-default add-to-cart fancybox" data-fancybox-group="gallery" href="<?php echo base_url().$data->img_path;?>">View</a>
<!-- 											<label id="img_style" for="img<?php echo $data->img_id?>" class="btn btn-default add-to-cart">
												<input id="img<?php echo $data->img_id?>" value="<?php echo $data->img_id?>" type="checkbox">
												Select
											</label> -->
											<a href="javascript:" onClick="select(<?php echo $data->img_id ?>)" id="imgid" class="btn btn-default add-to-cart select-text">Select</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
						?>
						<ul class="tsc_pagination">
							<!-- Show pagination links -->
							<?php foreach ($links as $link) {
								echo "<li>". $link."</li>";
							} ?>
						</ul>					
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<textarea id="sel_img_id"></textarea>
				<a href="javascript:void(0);" class="back1 back-right1" style="display:none" id="img_id">Select Model</a>
				<a href="#" class="back back-right" title="back to intro">&rarr;</a>
				<a href="#" id="trig" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
		</div><!-- /container -->

		<script src="<?php echo base_url()?>assets/base/js/classie.js"></script>

		<script src="<?php echo base_url()?>assets/base/js/main.js"></script>
		<script src="<?php echo base_url()?>assets/base/js/cbpSplitLayout.js"></script>
		<script src="<?php echo base_url()?>assets/base/js/custom_jquery.js"></script>
		<script src="<?php echo base_url()?>assets/base/js/custom.js"></script>
		<script src="<?php echo base_url()?>assets/base/dist/simplebar.js"></script>
		<script src="<?php echo base_url()?>assets/base/imagegallery/js/modernizr.custom.js"></script>
		<script src="<?php echo base_url()?>assets/base/imagegallery/js/grid.js"></script>
		<script src="<?php echo base_url()?>assets/base/upload/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/base/js/theme/jquery-ui.js"></script>
		<script src="<?php echo base_url()?>assets/base/upload/src/bootstrap.fd.js"></script>
		<script type="text/javascript">
		$(function(){
			var RGBChange = function() {
				$('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
			};	
		})
		</script>
		<script src="<?php echo base_url()?>assets/base/js/pricerange/price-range.js"></script>
		<script type="text/javascript">
		$("#open_btn").click(function() {
			$.FileDialog({multiple: true}).on('files.bs.filedialog', function(ev) {
				var files = ev.files;
				var text = "";
				files.forEach(function(f) {
					text += f.name + "<br/>";
				});
				$("#output").html(text);
			}).on('cancel.bs.filedialog', function(ev) {
				$("#output").html("Cancelled!");
			});
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function(){
			var checked = <?php echo json_encode($this->session->userdata('selected_design')) ?>;
			if (checked !== null) {
				$('.productinfo img').each(function(){
					for (var i = 0; i < checked.length; i++) {
						// console.log(checked[i]);
						if(checked[i] == $(this).attr('id')){
			// getImgid(id);
			$(this).parent().parent().addClass('selected');
			$(this).parent().parent().parent().find('.select-text').text('Unselect');
		}else if(typeof checked[i] === 'undefined'){
			$(this).parent().parent().removeClass('selected');
			$(this).parent().parent().parent().find('.select-text').text('Select');
		}
	};
})
			};
		})
		</script>
		<script type="text/javascript">
		function select(id){
			$('.productinfo img').each(function(){
				if(id == $(this).attr('id')){
					getImgid(id);
					$(this).parent().parent().toggleClass('selected');
					if ($(this).parent().parent().parent().find('.select-text').text() === 'Select') {
						$(this).parent().parent().parent().find('.select-text').text('Unselect');
					}else{
						$(this).parent().parent().parent().find('.select-text').text('Select');
					}
				}else{
					return;
				}
			})
		}
		</script>
		<script type="text/javascript">
		$('#all_designs').on('click',function(){
			$('.image_upload ').css('display','block');
			$('.uploadedImages ').css('display','block');
			$('.ownimage ').css('display','block');
			$('.offers ').css('display','block');
			$('#sl2').slider();
		})
		$('.back-right').on('click',function(){
			$('.image_upload ').css('display','none');
			$('.uploadedImages ').css('display','none');
			$('.ownimage ').css('display','none');
			$('.offers ').css('display','none');

		})
		$('.back-left').on('click',function(){
			$('.offers ').css('display','none');
		})
		</script>
		<script type="text/javascript">
		var baseURL = "<?php echo base_url(); ?>";
		function getImgid(id){
			$.ajax({
				url: "<?php echo base_url() ?>base/select_models/setSelecteddesign",
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
		<script>


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
						gridWrapper.innerHTML += '<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="<?php echo base_url()?>assets/base/img/rupee.png">'+value.img_price+'</span></li>';
						i++;
					})
				},"json");
			}, 700);
		}
	})();
	$('#img_id').click(function(){
		$('#splitlayout').removeClass('open-left').addClass('open-right');
		$('.image_upload ').css('display','none');
		$('.uploadedImages ').css('display','none');
		$('.ownimage').css('display','none');
		$.ajax({
			url: "<?php echo base_url() ?>base/select_models/getSessionvalue",
			dataType:"json",
			success:function(ids){
				// console.log(ids);
				display_selectedImg(ids);
			}
		})
		// display_selectedImg();
	});	
	$('#showDesigns').click(function(){
		$.ajax({
			url: "<?php echo base_url() ?>base/select_models/getSessionvalue",
			dataType:"json",
			success:function(ids){
				// console.log(ids);
				if (ids.length > 0) {
				display_selectedImg(ids);
			}else{
				// $('.page-inner').empty();
			}
			}
		})
	})
	function display_selectedImg(ids){
		// var ids = <?php echo json_encode($this->session->userdata('selected_design'))?>;
		$.ajax({
			type:"post",
			url:"<?php echo base_url() ?>base/get_images/getImgName",
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
				$('div.button_right').slideUp();
				$('div#ajax').slideUp();
				$('div#selected_designs').slideUp();
				$('.alert-danger').css('display','block');
				}
			}
		});
}
$('#moveToleft').on('click',function(){
	$('#splitlayout').removeClass('open-right').addClass('open-left');
	$('#all_designs').trigger('click');
})
</script>
</body>
</html>