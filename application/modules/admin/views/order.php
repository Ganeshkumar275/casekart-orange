<!DOCTYPE html>

<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">

  <meta name="author" content="GeeksLabs">

  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <link rel="shortcut icon" href="img/favicon.png">



  <title>Order</title>

  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/jquery.dataTables.min.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/admin/css/Dashboard.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />

 <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />
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

      <!--  search form end -->                

    </div>



    <div class="top-nav notification-row">                

      <!-- notificatoin dropdown start-->

      <ul class="nav pull-right top-menu">

        <li class="dropdown">

          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
<!-- 
            <span class="profile-ava">

              <img alt="" src="img/avatar1_small.jpg">

            </span> -->

            <span class="username">Welcome <?php echo $this->session->userdata('username');?>!</span>

            <b class="caret"></b>

          </a>

          <ul class="dropdown-menu extended logout">

            <div class="log-arrow-up"></div>

            <li>

              <a href="<?php base_url();?>logout"> Log Out</a>

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
  </aside>
<section id="main-content">

  <section class="wrapper">

              <div id="muModal" class="modal" style="display:none">
                <div class="modal-content customModal"><div><h1 style="margin-left:25px;">Detailed View</h1></div>
                <button type="button" class="close" style="margin-right:25px;margin-top: -40px;"data-dismiss="modal">&times;</button>
                <div class="row" style="margin-left:45px;">
                  <div class="col-lg-6">
                    <section class="panel" style="width:50%; margin-top:0px;">
                      <header class="panel-heading"> Order Details </header>
                      <div class="boxOrder panel-body">
                      </div>
                    </section>
                    <section class="panel"style="width:50%;">
                      <header class="panel-heading"> Customer Details </header>
                      <div class="boxcdetails panel-body">  </div>
                    </section>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <section class="panel" style="width:50%; margin-top:0px;">
                        <header class="panel-heading"> Billing Address </header>
                        <div class="cus_bill_address panel-body">
                        </div>
                      </section>
                      <section class="panel" style="width:50%;">
                        <header class="panel-heading"> Shipping Address </header>
                        <div class="cus_ship_address panel-body">
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- page end-->

            <div class="panel-body">
              <div class="row">
              <div class="col-lg-12">
              <h3 class="page-header">
              <i class="fa fa-laptop"></i>
              Dashboard
              </h3>
            </div>
            </div>
            </div>
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="info-box blue-bg">
                    <i class="fa fa-cloud-download"></i>
                    <div class="count"></div>
                    <div class="title">Download</div>   
                     <a class="style" href="customerorder/ExportCSV">Click me to Download full order details</a>       
                  </div><!--/.info-box-->     
                </div><!--/.col-->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="info-box dark-bg">
                    <i class="fa fa-thumbs-o-up"></i>
                    <div class="count orders"></div>
                    <div class="title">Orders</div>            
                  </div><!--/.info-box-->     
                </div><!--/.col-->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="info-box brown-bg">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="count models"></div>
                    <div class="title">Mobile Models</div>            
                  </div><!--/.info-box-->     
                </div><!--/.col--> 
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="info-box green-bg">
                    <i class="fa fa-cubes"></i>
                    <div class="count images"></div>
                    <div class="title">Images</div>            
                  </div><!--/.info-box-->     
                </div><!--/.col-->
              </div><!--/.row-->
            <!--   <div class="panel-body">
              <div class="row">
              <div class="col-lg-12"> -->
              <h3 class="page-header">
              <!-- <i class="fa fa-laptop"></i> -->
              Orders
              </h3>
           <!--  </div>
            </div>
            </div> -->
              <table  class = "table table-hover"  id="mytable">

                <thead>

                 <tr> 

                  <!--   <th>Sno</th> -->

                  <th>Customer Name</th>

                  <th>Mobile No.</th>

                  <th>Order Id</th>

                  <th>Order Date</th>

                  <th>Satus</th>
                  <th>View Details</th>
                  <th>Download</th>


                </tr>

              </thead>

            </table>


          </div>

        </section>

      </section>

      <!--main content end-->

    </section>

    <!-- container section end -->

    <!-- javascripts -->



    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/custom-order.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>
    <script>
    $(document).ready(function(){
      $.ajax({
        url:'Customerorder/widgets',
        dataType:'json',
        type:'POST',
        success:function(data){
          $.each(data,function(index,value){
            if(index == 'orders'){
            $('div.orders').text(value);
          }else if(index == 'images'){
            $('div.images').text(value);
          }else if (index == 'models') {
            $('div.models').text(value);
          };
          })
        }
      });
    });
    </script>
</body>
</html>
