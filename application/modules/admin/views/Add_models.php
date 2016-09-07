<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Add models</title>
  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />
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
  </aside>      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          
          <section class="wrapper">

            <h2>Add Models</h2>
            <div class="panel-body">
            <div class="alert alert-success" style="display:none" id="success"role="alert">Successfully inserted</div>
            <div class="alert alert-danger" style="display:none" id="Nt_exist"role="alert">Please Enter required fields</div>
            <div class="alert alert-danger" style="display:none" id="Nt_exist1"role="alert">The Data Already Exists in DataBase</div>
              <form class="form-horizontal" method="POST" id="select_model">
                      <div class="form-group"  >
                        <label class="control-label col-lg-2" for="inputSuccess">Select Brand</label>
                        <div class="col-lg-10">
                            <select class="form-control m-bot15" id="drp_select" name="model">
                                <option value="">-- Please select --</option>>
                                <?php
                                foreach ($result as $row) 
                                {
                                    ?> 
                                    <option value="<?php echo $row->brand_id;?>"><?php echo $row->brand_name;?></option>

                                    <?php 
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Enter Model Name</label>
                      <div class="col-sm-10">
                          <input type="text" name="model_name"class="form-control" required></input>
                      </div>
                  </div>
                    <div class="form-group">
                  <button class="btn btn-primary" id="submit">Submit</button>
                  <!-- <button class="btn btn-primary" id="submit">Cancel</button> -->
                </div>
              </form>
          </div>
      </section>
  </section>
</section>
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>
<script>
$(document).ready(function(){
   $("#submit").click(function(){
    var brand_id = $('#drp_select').val();
    var model_name =$("input[name=model_name]").val();
    if(brand_id == "" || model_name == "" ){
     $("div#Nt_exist").show(5000);
    $("div#Nt_exist").hide(10000);
    return false;
    }
    else{
        $.ajax({
            type:"POST",
            url:"Add_models/add_model",
            data:{brand_id : brand_id, model_name : model_name},
            dataType:"json",
            success:function(data){
              alert(data);
            if(data === "failed"){
            $("div#Nt_exist1").show(2000);
            $("div#Nt_exist1").hide(2000);
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
</script>
</body>
</html>
