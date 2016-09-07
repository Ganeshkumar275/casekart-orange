<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">

  <meta name="author" content="GeeksLabs">

  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <link rel="shortcut icon" href="img/favicon.png">

  <title>View Designs</title>

  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/Dashboard.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/sweetalert.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/example.css">

</head>

<body>

 <section id="container" class="">

  <header class="header dark-bg">

    <div class="toggle-nav">

      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>

    </div>

    <a href="#" class="logo"><span class="lite">Welcome</span></a>

    <div class="nav search-row" id="top_menu">                

    </div>

    <div class="top-nav notification-row">                

      <ul class="nav pull-right top-menu">

        <li class="dropdown">

          <a data-toggle="dropdown" class="dropdown-toggle" href="#">

            <span class="username">Welcome <?php echo $this->session->userdata('username');?>!</span>

            <b class="caret"></b>

          </a>

          <ul class="dropdown-menu extended logout">

            <div class="log-arrow-up"></div>

            <li>

              <a href="logout"><i class="icon_key_alt"></i> Log Out</a>

            </li>

          </ul>

        </li>

      </ul>

    </div>

  </header>   

  
 <aside>
      <div id="sidebar"  class="nav-collapse ">
       <ul class="sidebar-menu">                

        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/Customerorder" class="">
            <i class="icon_documents_alt"></i>
            <span>Order</span>
            <span class="arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/Customerimage" class="">
            <i class="icon_documents_alt"></i>
            <span>Upload Designs</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/Add_models" class="">
            <i class="icon_documents_alt"></i>
            <span>Add Mobiles</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/Add_brands" class="">
            <i class="icon_documents_alt"></i>
            <span>Add Brands</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/ViewDesigns" class="">
            <i class="icon_documents_alt"></i>
            <span>View Designs</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li> 
         <li class="sub-menu">
        <a href="<?php echo base_url();?>admin/Upload_csv" class="">
          <i class="icon_documents_alt"></i>
          <span>Upload csv</span>
          <span class=" arrow_carrot-right"></span>
        </a>
      </li> 
      </ul>
    </div>
  </aside>
<div id="main-content">

  

    <!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="display:none">

      <div class="container">

        <div class="navbar-header">

          <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="examples">

              <li class="warning confirm">

                <div class="ui">

                  <button class="delete">Delete!</button>

                </div>

              </li>

              <li class="input">

                <div class="ui">

                  <button class="update">Edit</button>

                </div>

              </li>

            </ul>

          </div>

        </div>

      </div>

    </nav>  -->

    <section class="wrapper" id="custom">

      <div class="alert-box">

          <span style="font-size:20px;">Uploaded Images</span>

            <ul class="alert-button" style="display:none;">

              <li class="warning confirm">

                   <button type="submit" class="btn btn-danger delete">Delete</button>

              </li>

              <li class="input">

                  <button type="submit" class="btn btn-success delete">Edit</button>

              </li>

            </ul>

          </div>

    <div id="images">

      <input type="hidden" name="limit" id="limit" value="50"/> 

      <input type="hidden" name="offset" id="offset" value="50"/>

    </div>

  </section>

</div>

</section>

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/ajaxupload.js"></script>

<script src="<?php echo base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>

<script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/admin/js/sweetalert-dev.js"></script>

<script>

$(document).ready(function(){

  $.ajax({

    url :"imageupload/image",

    dataType:'json',

    success:function(data){

      $.each(data,function(index,value){

       $('#images').append(

        '<ul class="hoverbox"><li><div class="image_'+value.img_id+'">'+

        '<input type="checkbox" name="checkbox" value="'+value.img_id+'" id="checkbox" style="display:none"/>'+

        '<input type="checkbox" name="img" value="'+value.img_name+'" id="iname" style="display:none"/>'+

        '<div  class="priice_style" value="'+value.img_price+'">₹'+value.img_price+'</div>'+

        '<a href="#"><img class="preview" src="<?php echo base_url()?>'+value.img_path+'"></a>'+

        '</div></li></ul>'

        );

     });

    }

  });

});

$(document).ready(function(){

 $("#images").on('click','div',function(event){

   event.preventDefault();

   $(this).toggleClass("selected");

   // alert('selected');

   $('.alert-button').show();

   var clicked = $("div.selected");

   var str1 = [];

   clicked.find('#checkbox').map(function() {

     str1.push(this.value);

   }).get();

   ff(str1);

   var chec = $.isEmptyObject(str1);

   if(chec == true){

   $('.alert-button').hide();

       }

   $("#clicked").removeClass("hidden").siblings().addClass("hidden");

 });

});

function ff(str1){

 document.querySelector('ul li.warning.confirm button').onclick = function(){

  swal({

    title: "Are you sure?",

    text: "You will not be able to recover these images!",

    type: "warning",

    showCancelButton: true,

    confirmButtonColor: '#DD6B55',

    confirmButtonText: 'Yes, delete it!',

    closeOnConfirm: false

  },

  function(){

    var formdata = {str1};

    $.ajax({

      type:"POST",

      url:"imageupload/delete",

      data: formdata,

      dataType: 'JSON',

      success:function(data){

      $('.navbar-fixed-top').toggle();

      location.reload(true);

      }

    });

    swal("Deleted!", "Selected images havebeen deleted", "success");

  });

};

document.querySelector('ul li.input button').onclick = function(){

  swal({

    title: "Update Price here!",

    text: 'Enter price for designs you have selected',

    type: 'input',

    showCancelButton: true,

    closeOnConfirm: false,

    animation: "slide-from-top",

    inputPlaceholder: "Enter Price here",

  },

  function(inputValue){

    if (inputValue === false) return false;



    if (inputValue === "") {

      swal.showInputError("Please Enter Price here!");

      return false;

    }

    var updated_price = {price : +inputValue,

      checked_id : str1};

      $.ajax ({

       type : "post",

       url : "ViewDesigns/update_price",

       data: updated_price,

       dataType: 'JSON',

       success:function(data){

       location.reload(true);       }

     });



      swal("Updated!", 'Updated Price: ' + inputValue, "success");

    });

};

}

$(document).ready(function(){

  $(window).scroll(function(){

    var datas = {limit:$('#images').find('#limit').val(),

    offset:$('#images').find('#offset').val(),};

    if ($(window).scrollTop() == $(document).height() - $(window).height() && datas != 0){

      $.ajax({

        type:'POST',

        url:'imageupload/loadmore',

        data:datas,

        dataType:'json',

        success:function(data){

                       // $('#images').remove();

                       var j = data.last_offset;

                       $('#images').find('#offset').val(data.offset);

                       $('#images').find('#limit').val(data.limit);

                       $.each(data,function(index,value){

                        for (var i = 0; i < value.length; i++) { 

                          if(typeof value[i].img_id != 'undefined'){

                            $('#images').append(

                              '<ul class="hoverbox"><li><div class="image_'+value[i].img_id+'">'+

                              '<input type="checkbox" name="checkbox" value="'+value[i].img_id+'" id="checkbox" style="display:none"/>'+

                              '<input type="checkbox" name="img" value="'+value[i].img_name+'" id="iname" style="display:none"/>'+

                              '<div  class="priice_style" value="'+value[i].img_price+'">₹'+value[i].img_price+'</div>'+

                              '<a href="#"><img class="preview" src="<?php echo base_url()?>'+value[i].img_path+'"></a>'+

                              '</div></li></ul>'

                              );

                          }

                        }



                      });

}

});

}

});

});



</script>

</body>

</html>

