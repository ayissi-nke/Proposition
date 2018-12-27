<?php
  use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Result Management';
?>


 <!DOCTYPE html>
<html lang="en">
  

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UB! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index-2.html" class="site_title"><i class="fa fa-paw"></i> <span>UB</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           <?= $this->renderFile('@app/views/site/menu-profile.php') ?>
            <!-- /menu profile quick info -->


            <!-- menu side bar profile -->
            <br />
                    <?= $this->renderFile('@app/views/site/sidebar-menu.php') ?>
           

            <!-- /menu footer buttons -->
            <?= $this->renderFile('@app/views/site/menufooter-buttons.php') ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
           <?= $this->renderFile('@app/views/site/top-navigation.php') ?>
        
        <!-- /top navigation -->
       
        <!-- /page content -->


            
      <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY  col-md-2 ">
                <div class="tile-stats">
                  <div class="icon"><i class="glyphicon glyphicon-book"></i></div>
                  <div class="count">COURSES</div>
                  <h3></h3>
                  
                </div>
              </div>
              <div class="animated flipInY  col-md-2 ">
                <div class="tile-stats">
                  <div class="icon"><i class="glyphicon glyphicon-education iconColor"></i></div>
                  <div class="count">STUDENT</div>
                  <h3></h3>
                  
                </div>
              </div>
              <div class="animated flipInY  col-md-2 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-windows "></i></div>
                  <div class="count">LEVELS</div>
                  <h3></h3>
                  
                </div>
              </div>
              <div class="animated flipInY  col-md-2 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sitemap " ></i></div>
                  <div class="count">SPECIALITY</div>
                  <h3></h3>
                  
                  
                </div>
              </div>


             <div class="animated flipInY  col-md-2 ">
                <div class="tile-stats">
                 <div class="icon"> <li><i class="glyphicon glyphicon-folder-open"></i></li></div>
                   <div class="count">REPORT </div>
                   <h3></h3>
                  
                </div>
              </div>



            </div>
          </div>




          <!-- start of weather widget -->
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>Daily active users <small>Sessions</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                              </ul>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="temperature"><b>Monday</b>, 07:30 AM
                                  <span>F</span>
                                  <span><b>C</b></span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4">
                              <div class="weather-icon">
                                  <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                              </div>
                          </div>
                          <div class="col-sm-8">
                              <div class="weather-text">
                                  <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <div class="weather-text pull-right">
                              <h3 class="degrees">23</h3>
                          </div>
                      </div>

                      <div class="clearfix"></div>

                      <div class="row weather-days">
                          <div class="col-sm-2">
                              <div class="daily-weather">
                                  <h2 class="day">Mon</h2>
                                  <h3 class="degrees">25</h3>
                                  <canvas id="clear-day" width="32" height="32"></canvas>
                                  <h5>15 <i>km/h</i></h5>
                              </div>
                          </div>
                          <div class="col-sm-2">
                              <div class="daily-weather">
                                  <h2 class="day">Tue</h2>
                                  <h3 class="degrees">25</h3>
                                  <canvas height="32" width="32" id="rain"></canvas>
                                  <h5>12 <i>km/h</i></h5>
                              </div>
                          </div>
                          <div class="col-sm-2">
                              <div class="daily-weather">
                                  <h2 class="day">Wed</h2>
                                  <h3 class="degrees">27</h3>
                                  <canvas height="32" width="32" id="snow"></canvas>
                                  <h5>14 <i>km/h</i></h5>
                              </div>
                          </div>
                          <div class="col-sm-2">
                              <div class="daily-weather">
                                  <h2 class="day">Thu</h2>
                                  <h3 class="degrees">28</h3>
                                  <canvas height="32" width="32" id="sleet"></canvas>
                                  <h5>15 <i>km/h</i></h5>
                              </div>
                          </div>
                          <div class="col-sm-2">
                              <div class="daily-weather">
                                  <h2 class="day">Fri</h2>
                                  <h3 class="degrees">28</h3>
                                  <canvas height="32" width="32" id="wind"></canvas>
                                  <h5>11 <i>km/h</i></h5>
                              </div>
                          </div>
                          <div class="col-sm-2">
                              <div class="daily-weather">
                                  <h2 class="day">Sat</h2>
                                  <h3 class="degrees">26</h3>
                                  <canvas height="32" width="32" id="cloudy"></canvas>
                                  <h5>10 <i>km/h</i></h5>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
          <!-- end of weather widget -->


        <!-- footer content -->
           
       
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-23581568-13', 'auto');
ga('send', 'pageview');

</script>
  </body>


</html>




