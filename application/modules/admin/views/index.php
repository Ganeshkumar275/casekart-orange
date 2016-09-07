<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">

    <meta name="author" content="GeeksLabs">

    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

    <link rel="shortcut icon" href="img/favicon.png">



    <title>Order</title>



    <!-- Bootstrap CSS -->    

    <link href="/template_generator/css/bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap theme -->

    <link href="/template_generator/css/bootstrap-theme.css" rel="stylesheet">

    <!--external css-->

    <!-- font icon -->

    <link href="/template_generator/css/elegant-icons-style.css" rel="stylesheet" />

    <link href="/template_generator/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles -->

    <link href="/template_generator/css/style.css" rel="stylesheet">

    <link href="/template_generator/css/Dashboard.css" rel="stylesheet" />

    <link href="/template_generator/css/bootstrap.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>

    <link href="/template_generator/css/jquery-ui.css" rel="stylesheet">

    <link href="/template_generator/css/jquery-ui.min.css" rel="stylesheet">

    <link href="/template_generator/css/jquery-ui.structure.css" rel="stylesheet">

    <link href="/template_generator/css/jquery-ui.structure.min.css" rel="stylesheet">

    <link href="/template_generator/css/jquery-ui.theme.css" rel="stylesheet">

    <link href="/template_generator/css/jquery-ui.theme.min.css" rel="stylesheet">

    <link href="/template_generator/css/jquery-ui.css" rel="stylesheet">

    <link href="/template_generator/css/style-responsive.css" rel="stylesheet" />

    <link href="/template_generator/css/jquery.dashboard.min.css" rel="stylesheet" />



    <link href="/template_generator/css/custom.css" rel="stylesheet" />

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

                            <span class="profile-ava">

                                <img alt="" src="img/avatar1_small.jpg">

                            </span>

                            <span class="username"></span>

                            <b class="caret"></b>

                        </a>

                        <ul class="dropdown-menu extended logout">

                            <div class="log-arrow-up"></div>

                            <li>

                                <a href="http://www.casekart.com/template_generator/index.php/admindashboard"><i class="icon_key_alt"></i> Log Out</a>

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
      <!--sidebar end-->



      <!--main content start-->

      <section id="main-content">

          <section class="wrapper">

      <!--     <div class="row">

                <div class="col-lg-12">

                    <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>

                    <ol class="breadcrumb">

                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>

                        <li><i class="fa fa-bars"></i>Pages</li>

                        <li><i class="fa fa-square-o"></i>Pages</li>

                    </ol>

                </div>

            </div> -->

              <!-- page start-->

              <h2>Orders</h2>

              <!-- page end-->

               <div class="panel-body">

    <table  class = "table table-hover" id="mytable">

    <thead>

     <tr>

      <th>Customer id</th>

      <th>Invoice No</th>

      <th>Address</th>

      <th>Order Details</th>

      <th>Eamil id</th>

      <th>Order date</th>

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



<script type="text/javascript" src="/template_generator/js/jquery-1.12.0.min.js"></script>

<script type="text/javascript" src="/template_generator/js/custom-order.js"></script>

<script type="text/javascript" src="/template_generator/js/jquery.dataTables.js"></script>

<script type="text/javascript" src="/template_generator/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="/template_generator/js/bootstrap.min.js"></script>

<script src="/template_generator/js/jquery.scrollTo.min.js"></script>

<script src="/template_generator/js/jquery.nicescroll.js" type="text/javascript"></script>

<script src="/template_generator/js/scripts.js"></script>