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
	<link rel="stylesheet" type="text/css" href="../assets/css/organicfoodicons.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/demo.css" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="../assets/css/component.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="../assets/dist/simplebar.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/scroll/demo.css" />
	<script src="../assets/js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/imagegrid/css/style2.css" />
	<script src="../assets/imagegrid/js/modernizr-custom.js"></script>
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
						<div id="menus" class="offers">
<!-- 				<select class="offer" id="price" name="price" required>
						<option selected="selected" value="">-- Select Price --</option>
						<option value="low-high" id="asc">Price Low to High</option>
						<option value="high-low" id="desc">Price High to Low</option>
					</select> -->
				</div>
				<div class="menu__wrap">
					<ul data-menu="submenu-1" class="menu__level">
						<li class="menu__item" ><a class="menu__link" data-rel="all"  href="javascript:;">All</a></li>
						<li class="menu__item" ><a class="menu__link" data-rel="stalk"  href="javascript:;">Abstract</a></li>
						<li class="menu__item" ><a class="menu__link" data-rel="seeds"  href="javascript:;">Animation</a></li>
						<li class="menu__item"><a class="menu__link" data-rel="cab"  href="javascript:;">Painting</a></li>
					</li>
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
			<h1><span>Designs</span><!-- <span>Web Developer</span> --></h1>
			<!-- <h1 id="none_selected" style="display:none;">No Design as selected</h1> -->
		</div>
		<div class="selected_designs" id="selected_designs" style="display:block;" >

		</div>
		<div class="overlay"></div>
	</div>
</div><!-- /intro -->

<div class="loader_bg" style="display:none;">
	<img src="../assets/img/gears.gif" id="loader">
</div>
<div class="page page-right">
	<div class="page-inner">
	</div>
</div><!-- /page-right -->
<div class="loader_bg_left" style="display:none;">
	<img src="../assets/img/gears.gif" id="loader">
</div>
<div class="page page-left simplebar demo1" data-simplebar-direction="vertical">
	<h1><span>Select Images</span></h1>
	<div class="page-inner select-design" >
		<ul class="mockup co_top">
			<li><a class="active" href="#iphone">Mockup 1</a></li>
			<li><a href="#news">Mockup 2</a></li>
			<li><a href="#tablet">Tablet</a></li>
		</ul>
		<div class="grid" id="select-design">
			
		</div>
		<div class="preview">
			<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
			<div class="description description--preview"></div>
		</div>
	</div><!-- /page-inner -->
</div><!-- /page-left -->
<textarea id="sel_img_id"></textarea>
<a href="javascript:void(0);" class="back1 back-right1" style="display:none" id="img_id">Select Model</a>
<a href="#" class="back back-right" title="back to intro">&rarr;</a>

<input type="hidden" name="limit" id="limit" value="25"/>
<input type="hidden" name="offset" id="offset" value="51"/>
<a href="#" id="trig" class="back back-left" title="back to intro">&larr;</a>
</div><!-- /splitlayout -->
</div><!-- /container -->
<script type="text/javascript" src="../assets/js/jquery-1.12.4.min.js"></script>
<script src="../assets/js/classie.js"></script>

<script src="../assets/js/main.js"></script>
<script src="../assets/js/cbpSplitLayout.js"></script>
<script src="../assets/js/custom_jquery.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/dist/simplebar.js"></script>
<script>
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
						gridWrapper.innerHTML += '<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="../assets/img/rupee.png">'+value.img_price+'</span></li>';
						i++;
					})
				},"json");
			}, 700);
		}
	})();
	$('#all_designs').click(function(){
		$('.loader_bg_left').show();
		var gridWrapper = document.querySelector('#select-design');
		gridWrapper.innerHTML = '';
		classie.add(gridWrapper, 'content--loading');
		setTimeout(function() {
			classie.remove(gridWrapper, 'content--loading');
			$.get("get_images/load_all_image",function(data){
				var i = 1;
				$.each(data,function(index,value){
					gridWrapper.innerHTML += '<input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><div class="grid__item" data-size="1280x857" ><a href=\"'+value.img_path+'\" class="img-wrap"><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></a></div></label><span><img src="../assets/img/rupee.png">'+value.img_price+'</span>';
					
					i++;
				})
				gridWrapper.innerHTML += '<li class=\"product_align\"><button class="btn btn-primary backLo loadmore" value="loadmore" style="display: block;float:left;margin-top:160px;" onclick="loadmore()">Loadmore</button></li>';
			},"json");
			
		}, 700);
		$('.loader_bg_left').hide();
	})

$('#img_id').click(function(){
	$('#splitlayout').removeClass('open-left').addClass('open-right');
	var selectedImages = $('#sel_img_id').val();
	$.ajax({
		url: 'select_models/top_viewed',
		type: 'post',
		dataType: 'json',
		data: 'id='+selectedImages,
		success:function(data){
			alert(data);
		}
	})
	display_selectedImg(selectedImages);
});	
function loadmore(){
	$(".backLo").css('display','none');
	var gridWrapper = document.querySelector('#select-design');
	$.ajax({
		url:"get_images/loadmore",
		data:{
			offset :$('#offset').val(),
			limit :$('#limit').val()
		},
		type:"POST",
		dataType:"json", 
		success :function(data){
			var i = data.last_offset;
			$('#load-more').prepend(data.view);
			$('#offset').val(data.offset);
			$('#limit').val(data.limit);
			$.each(data.view,function(index,value){
				gridWrapper.innerHTML +='<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="../assets/img/rupee.png">'+value.img_price+'</span></li>';
				i++;
			})
			gridWrapper.innerHTML += '<li class=\"product_align\"><button class="btn btn-primary backLo loadmore" value="loadmore" style="display: block;float:left;margin-top:160px;" onclick="loadmore()">Loadmore</button></li>';

		}
	});
}

function display_selectedImg(selectedImages){
	$.ajax({
		type:"post",
		url:"get_images/getImgName",
		data:'id='+selectedImages,
		dataType:"json",
		success:function(link){
			$('#selected_designs').empty();
			$.each(link,function(key,data){
				$.each(data,function(index,value){
					$('#selected_designs').append('<div class="design"><label><input type="radio" class="radio_select" name="image" value="'+value.img_id+'" ><img src="'+value.img_path+'" alt="profile2"></label></div>');	
				});
			});
			$('.selected_designs').find('input[type="radio"]:eq(0)').trigger('click');
			$('input[type="radio"]:eq(0)').parent().parent().addClass('design_image', this.checked);
					// $(".page-right .page-inner").load("index.php/select_models/include_page");
					$('.intro-content').find('#none_selected').css('display','none');
				}
			});

}
$('#asc').on('click', function() {
	var gridWrapper = document.querySelector('.page-left .page-inner');
	gridWrapper.innerHTML = '';
	$.ajax({
		url :"filter/item_list",
		dataType:'json',
		success:function(data){
			var i = 1;
			$.each(data, function(index, value){   
				gridWrapper.innerHTML += '<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_path+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="../assets/img/rupee.png">'+value.img_price+'</span></li>';
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
				gridWrapper.innerHTML += '<li class=\"product_align\"><input id="img'+i+'" value=\"'+value.img_id+'\" type=\"checkbox\"><label id="img_style" for="img'+i+'"><img src=\"'+value.img_name+'\" alt=\"\" width=\"250\" height=\"250\"></label><span><img src="../assets/img/rupee.png">'+value.img_price+'</span></li>';
				i++;
			});

		}
	});
});
</script>
<script type="text/javascript">
var stickySidebar = $('.co_top').offset().top;
$('.page-left').scroll(function() {
	if ($('.page-left').scrollTop() < stickySidebar) {
			// alert('ok');
			$('.co_top').addClass('affix');
		}
		else {
			$('.co_top').removeClass('affix');
		}
	});
</script>
<script src="../assets/imagegrid/js/imagesloaded.pkgd.min.js"></script>
<script src="../assets/imagegrid/js/masonry.pkgd.min.js"></script>
<script src="../assets/imagegrid/js/classie.js"></script>
<script src="../assets/imagegrid/js/main.js"></script>
<script>
(function() {
	var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

				new GridFx(document.querySelector('.grid'), {
					imgPosition : {
						x : -0.5,
						y : 1
					},
					onOpenItem : function(instance, item) {
						instance.items.forEach(function(el) {
							if(item != el) {
								var delay = Math.floor(Math.random() * 50);
								el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
								el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
								el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
								el.style.transform = 'scale3d(0.1,0.1,1)';
								el.style.opacity = 0;
							}
						});
					},
					onCloseItem : function(instance, item) {
						instance.items.forEach(function(el) {
							if(item != el) {
								el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
								el.style.transition = 'opacity .4s, transform .4s';
								el.style.WebkitTransform = 'scale3d(1,1,1)';
								el.style.transform = 'scale3d(1,1,1)';
								el.style.opacity = 1;

								onEndTransition(el, function() {
									el.style.transition = 'none';
									el.style.WebkitTransform = 'none';
								});
							}
						});
					}
				});
})();
</script>
</body>
</html>