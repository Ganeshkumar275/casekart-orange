<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />
  <title>Add Brands</title>
</head>
<body>
 <section id="container" class="">
  <header class="header dark-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="#" class="logo"><span class="lite">Welcome</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
      <!--  search form start -->
      <ul class="nav top-menu">                    
        <!--  search form end -->                
      </div>

      <div class="top-nav notification-row">                
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <span class="profile-ava">
                <!-- <img alt="" src="img/avatar1_small.jpg"> -->
              </span>
              <span class="username">Welcome <?php echo $this->session->userdata('username');?>!</span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="<?php base_url();?>logout"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>      <aside>
      <div id="sidebar"  class="nav-collapse ">
       <ul class="sidebar-menu">                

        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/customerorder" class="">
            <i class="icon_documents_alt"></i>
            <span>Order</span>
            <span class="arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/customerimage" class="">
            <i class="icon_documents_alt"></i>
            <span>Upload Designs</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/add_models" class="">
            <i class="icon_documents_alt"></i>
            <span>Add Mobiles</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/add_brands" class="">
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
        <a href="<?php echo base_url();?>admin/upload_csv" class="">
          <i class="icon_documents_alt"></i>
          <span>Upload csv</span>
          <span class=" arrow_carrot-right"></span>
        </a>
      </li> 
      </ul>
    </div>
  </aside>
     
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="alert alert-success" style="display:none" id="success"role="alert">
            <a href="#" class="alert-link">Successfully inserted</a>
          </div>
          <div class="alert alert-danger" style="display:none" id="Nt_exist"role="alert">Oops already Exists.</div>
          <div class="alert alert-danger" style="display:none" id="Nt_exist1"role="alert">Please Enter the field</div>
          <!-- page start-->
          <h2>Add Brands</h2>
          <!-- page end-->
          <div class="panel-body">
            <form class="form-horizontal" method="POST" id='select_model'>
              <div class="form-group">
                <label class="col-sm-2 control-label">Brand Name</label>
                <div class="col-sm-10">
                  <input type="text"  id="my-input"name="brand_name1"class="form-control">
                </div>
              </div>
              <button type="submit" class="btn btn-primary" value="submit" id="submit">Submit</button>
              <!-- <button class="btn btn-primary" id="submit">Cancel</button> -->
            </form>
          </div>
        </div>
      </div>
    </section>
  </section>
</section>
<script src="<?php echo base_url();?>assets/admin/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>
<script type="text/javascript"></script>
<script>

$(document).ready(function(){
 $("#submit").click(function(){
  var  img_dtl = $("input[name=brand_name1]").val();
  if(img_dtl == null || img_dtl == ""){
    $("div#Nt_exist1").show(2000);
    $("div#Nt_exist1").hide(2000);
  }
  else{
    $.ajax({
      type:"POST",
      dataType:"json",
      url:"Add_brands/add_brand",
      data:"id=" + img_dtl,
      success:function(data){
            // alert(data);

            if(data === "yes"){
              $("div#Nt_exist").show(2000);
              $("div#Nt_exist").hide(2000);
              $('#select_model')[0].reset();
            // alert('all ready exists');
          }
          else{
            $("div#success").show(2000);
            $("div#success").hide(2000);
            $('#select_model')[0].reset();

          }

        }
      });
  }
  return false;
});

});
$("#my-input").autocomplete({
  source: "Add_brands/auto_cmpl"
});
</script>
</body>
</html>
