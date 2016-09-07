

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



  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">



  <!-- bootstrap theme -->



  <link href="<?php echo base_url();?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">



  <!--external css-->



  <!-- font icon -->



  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />



  <link href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />



  <link href="<?php echo base_url();?>assets/admin/css/jquery.dataTables.min.css" rel="stylesheet" />



  <!-- Custom styles -->



  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/Dashboard.css" rel="stylesheet" />



  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />



  <link href="<?php echo base_url();?>assets/admin/css/jquery-ui.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/jquery-ui.min.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/jquery-ui.structure.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/jquery-ui.structure.min.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/jquery-ui.theme.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/jquery-ui.theme.min.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/jquery-ui.css" rel="stylesheet">



  <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet" />



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



            <!--   <span class="profile-ava">



                <img alt="" src="img/avatar1_small.jpg">



              </span> -->



              <span class="username">Welcome <?php echo $this->session->userdata('username');?>!</span>



                <b class="caret"></b>



              </a>



              <ul class="dropdown-menu extended logout">



                <div class="log-arrow-up"></div>



                <li>



                  <a href="<?php echo base_url();?>assets/admin/logout"><i class="icon_key_alt"></i> Log Out</a>



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



        <!-- page start-->



        <h2>Order Views</h2>

        <!-- page end-->



        <!-- <div class="panel-body"> -->

          <div class="col-lg-6">

            <section class="panel">

              <header class="panel-heading">

                Order Details

              </header>

              <div class="panel-body"> 

               <!-- <div class="panel panel-success"> -->

                <!-- <div class="panel-heading">Oder Details</div> -->

                <div class="panel-content"><label>Order Date: <?php echo $details[0]->order_date;?></label><br></div>

                <div class="panel-content"><label>Status: <?php echo ucfirst($details[0]->status);?></label></div>

              <!-- </div> -->

            </div> 

          </section>

          <section class="panel">

            <header class="panel-heading">Order Total</header>

            <div class="panel-body grandtotal">

             <!-- <div class="panel panel-success"> -->

              <!-- <div class="panel-heading">Order Details</div> -->

              <div class="panel-content"><label>Shipping & Handling Chrgs:₹ 250.00 (default)</label></div>

              <div class="panel-content grandtotal1"></div>            

              <!-- <div class="panel-content"><label>Total Paid: </label></div> -->

              <!-- <div class="panel-content"><label>Total Refunded: </label></div> -->

              <!-- <div class="panel-content"><label>Total Due: </label></div> -->

            </div>

        </section>

      <!-- </div> -->

      </div>

      <div class="col-lg-6">

        <section class="panel">                        

          <header class="panel-heading">

            Customer Details

          </header>

          <div class="panel-body">

            <!-- <div class="panel panel-success"> -->

              <!-- <div class="panel-heading">Account Info</div> -->

              <div class="panel-content"><label>Customer Name:<?php echo $details[0]->first_name;?></label></div>

              <!-- <div class="panel-content"><label>Email:<?php echo $details[0]->email;?></label></div> -->

            </div>          

            <div class="panel-body">

              <div class="panel-heading">Billing Address</div>

              <div class="panel-content"><label>Address:<?php echo ucfirst($details[0]->billing_address_line_1) . " , ". ucfirst($details[0]->billing_address_line_2)?></label></div>

              <div class="panel-content"><label>Mobile Number:<?php echo $details[0]->mobile_number;?></label></div>  

            </div>

            <div class="panel panel-body">

              <div class="panel-heading">Shipping Address</div>

              <div class="panel-content"><label>Address:<?php echo ucfirst($details[0]->shipping_address_line_1) . " , ". ucfirst($details[0]->shipping_address_line_2)?></label></div>

              <div class="panel-content"><label>Mobile Number:<?php echo $details[0]->mobile_number;?></label></div> 

            </div>

          </section>

        </div>

        <div class="row">

          <div class="col-lg-12">

            <section class="panel">

              <header class="panel-heading">

                Responsive tables

              </header>

              <div class="table-responsive">

                <table class="table">

                  <thead>

                    <tr>

                      <th>Sno.</th>

                      <th>Product Image</th>

                      <th>Model Name</th>

                      <th>Model Price</th>

                      <th>Image Price</th>

                      <th>Qty</th>

                      <th>Sub Total</th>

                      <th>Total</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php 

                    for ($i=0; $i < count($path); $i++) { 

                      echo "<tr>";

                      echo "<td>$i</td>";

                      // echo "<td>"+count($path)+"</td>";

                      echo "<td><img src='http://casekart.com/".$path[$i]."'height=100;width=100></td>";

                      echo "<td>".$model_name[$i]."</td>";

                      echo "<td>".$mprice[$i]."</td>";

                      echo "<td>".$iprice[$i]."</td>";

                      echo "<td>".$qty[$i]."</td>";

                      echo "<td>".$sub_total[$i]."</td>";

                      echo "<td>".$row_total[$i] = ($mprice[$i]+$iprice[$i])*($qty[$i])."</td>";

                      $grand_total = array_sum($row_total);

                      $design_total = array_sum($qty);

                      $iprice_total = array_sum($iprice);

                      $tax = 14.5;

                      $with_tax = number_format($grand_total*($tax/100),2);

                      echo "</tr>";

                    }

                    ?>

                    <?php 

                    echo "<tr>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td><label>Total</label></td>";

                    echo "<td>Price :₹".$iprice_total."</td>";

                    echo "<td>Total Qty :".$design_total."</td>";

                    echo "<td></td>";

                    echo "<td>Total Amt :₹ ".$grand_total."</td>";

                    echo "</tr>";

                    ?>

                     <?php 

                    echo "<tr>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "<td></td>";

                    echo "</tr>";

                    ?>

                  </tbody>

                </table>

         <!--  <div class="col-lg-12">

        <section class="panel">      -->                   

                <label style="margin-left:85%;">Tax @ 14.5%:  ₹ <?php echo $with_tax?></label>

                <label style="margin-left:73%;">Shipping and logistics charges:₹ 250.00</label>

                <label style="margin-left:83%; border:solid; border-width:1px;border-radius:0.25em; padding:10px;">Grand Total : ₹<?php setlocale(LC_MONETARY, 'en_IN');echo ($grand_total+250+$with_tax);?></label>

            <!--   </section>

              </div> -->

              </div>

            </section>

          </div>

        </div>

      </section>

    </section>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>


    <script>

    $(document).ready(function(){

      $('div.grandtotal').find('div.grandtotal1').append('<label>Sub Total: '+<?php setlocale(LC_MONETARY, 'en_IN'); $grand_totalm = money_format("'%!i'", $grand_total); echo $grand_totalm?>+'</label>');

    });

    </script>

  </body>

  </html>



