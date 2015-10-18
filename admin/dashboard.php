<?php
session_start();
if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
?>

<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->


<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa  fa-check-square-o"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            0
                        </h1>
                        <p style="font-size: 12px; font-weight: 300;">OPINIÕES CADASTRADAS</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-list-alt "></i>
                    </div>
                    <div class="value">
                        <h1 class=" count2">
                            0
                        </h1>
                        <p style="font-size: 12px; font-weight: 300;">NOTÍCIAS CADASTRADAS</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count3">
                            888
                        </h1>
                        <p style="font-size: 12px; font-weight: 300;">INFORMATIVOS CADASTRADOS</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow-esc">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            0
                        </h1>
                        <p>TOTAL DE CADASTROS</p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->

        <!--<div class="row">
            <div class="col-lg-8">
        <!--custom chart start--*>
        <div class="border-head">
            <h3>Earning Graph</h3>
        </div>
        <div class="custom-bar-chart">
            <ul class="y-axis">
                <li><span>100</span></li>
                <li><span>80</span></li>
                <li><span>60</span></li>
                <li><span>40</span></li>
                <li><span>20</span></li>
                <li><span>0</span></li>
            </ul>
            <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
            </div>
            <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
            </div>
            <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
            </div>
            <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
            </div>
            <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
            </div>
            <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
            </div>
            <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
            </div>
            <div class="bar ">
                <div class="title">AUG</div>
                <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
            </div>
            <div class="bar ">
                <div class="title">SEP</div>
                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
            </div>
            <div class="bar ">
                <div class="title">OCT</div>
                <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
            </div>
            <div class="bar ">
                <div class="title">NOV</div>
                <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
            </div>
            <div class="bar ">
                <div class="title">DEC</div>
                <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
            </div>
        </div>
        <!--custom chart end--*>
    </div>
    <div class="col-lg-4">
        <!--new earning start--*>
        <div class="panel terques-chart">
            <div class="panel-body chart-texture">
                <div class="chart">
                    <div class="heading">
                        <span>Friday</span>
                        <strong>$ 57,00 | 15%</strong>
                    </div>
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
            </div>
            <div class="chart-tittle">
                <span class="title">New Earning</span>
                <span class="value">
                    <a href="#" class="active">Market</a>
                    |
                    <a href="#">Referal</a>
                    |
                    <a href="#">Online</a>
                </span>
            </div>
        </div>
        <!--new earning end--*>

        <!--total earning start--*>
        <div class="panel green-chart">
            <div class="panel-body">
                <div class="chart">
                    <div class="heading">
                        <span>June</span>
                        <strong>23 Days | 65%</strong>
                    </div>
                    <div id="barchart"></div>
                </div>
            </div>
            <div class="chart-tittle">
                <span class="title">Total Earning</span>
                <span class="value">$, 76,54,678</span>
            </div>
        </div>
        <!--total earning end--*>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <!--user info table start--*>
        <section class="panel">
            <div class="panel-body">
                <a href="#" class="task-thumb">
                    <img src="img/avatar1.jpg" alt="">
                </a>
                <div class="task-thumb-details">
                    <h1><a href="#">Anjelina Joli</a></h1>
                    <p>Senior Architect</p>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                    <tr>
                        <td>
                            <i class=" fa fa-tasks"></i>
                        </td>
                        <td>New Task Issued</td>
                        <td> 02</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-exclamation-triangle"></i>
                        </td>
                        <td>Task Pending</td>
                        <td> 14</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-envelope"></i>
                        </td>
                        <td>Inbox</td>
                        <td> 45</td>
                    </tr>
                    <tr>
                        <td>
                            <i class=" fa fa-bell-o"></i>
                        </td>
                        <td>New Notification</td>
                        <td> 09</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--user info table end--*>
    </div>
    <div class="col-lg-8">
        <!--work progress start--*>
        <section class="panel">
            <div class="panel-body progress-panel">
                <div class="task-progress">
                    <h1>Work Progress</h1>
                    <p>Anjelina Joli</p>
                </div>
                <div class="task-option">
                    <select class="styled">
                        <option>Anjelina Joli</option>
                        <option>Tom Crouse</option>
                        <option>Jhon Due</option>
                    </select>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            Target Sell
                        </td>
                        <td>
                            <span class="badge bg-important">75%</span>
                        </td>
                        <td>
                            <div id="work-progress1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Product Delivery
                        </td>
                        <td>
                            <span class="badge bg-success">43%</span>
                        </td>
                        <td>
                            <div id="work-progress2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Payment Collection
                        </td>
                        <td>
                            <span class="badge bg-info">67%</span>
                        </td>
                        <td>
                            <div id="work-progress3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Work Progress
                        </td>
                        <td>
                            <span class="badge bg-warning">30%</span>
                        </td>
                        <td>
                            <div id="work-progress4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            Delivery Pending
                        </td>
                        <td>
                            <span class="badge bg-primary">15%</span>
                        </td>
                        <td>
                            <div id="work-progress5"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!--work progress end--*>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <!--timeline start--*>
        <section class="panel">
            <div class="panel-body">
                <div class="text-center mbot30">
                    <h3 class="timeline-title">Timeline</h3>
                    <p class="t-info">This is a project timeline</p>
                </div>

                <div class="timeline">
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon red"></span>
                                    <span class="timeline-date">08:25 am</span>
                                    <h1 class="red">12 July | Sunday</h1>
                                    <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon green"></span>
                                    <span class="timeline-date">10:00 am</span>
                                    <h1 class="green">10 July | Wednesday</h1>
                                    <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon blue"></span>
                                    <span class="timeline-date">11:35 am</span>
                                    <h1 class="blue">05 July | Monday</h1>
                                    <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                                    <div class="album">
                                        <a href="#">
                                            <img alt="" src="img/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-2.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-3.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sm-img-2.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item alt">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon purple"></span>
                                    <span class="timeline-date">3:20 pm</span>
                                    <h1 class="purple">29 June | Saturday</h1>
                                    <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                    <div class="notification">
                                        <i class=" fa fa-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon light-green"></span>
                                    <span class="timeline-date">07:49 pm</span>
                                    <h1 class="light-green">10 June | Friday</h1>
                                    <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="clearfix">&nbsp;</div>
            </div>
        </section>
        <!--timeline end--*>
    </div>
    <div class="col-lg-4">
        <!--revenue start--*>
        <section class="panel">
            <div class="revenue-head">
                <span>
                    <i class="fa fa-bar-chart-o"></i>
                </span>
                <h3>Revenue</h3>
                <span class="rev-combo pull-right">
                    June 2013
                </span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 text-center">
                        <div class="easy-pie-chart">
                            <div class="percentage" data-percent="35"><span>35</span>%</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="chart-info chart-position">
                            <span class="increase"></span>
                            <span>Revenue Increase</span>
                        </div>
                        <div class="chart-info">
                            <span class="decrease"></span>
                            <span>Revenue Decrease</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer revenue-foot">
                <ul>
                    <li class="first active">
                        <a href="javascript:;">
                            <i class="fa fa-bullseye"></i>
                            Graphical
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class=" fa fa-th-large"></i>
                            Tabular
                        </a>
                    </li>
                    <li class="last">
                        <a href="javascript:;">
                            <i class=" fa fa-align-justify"></i>
                            Listing
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!--revenue end--*>
        <!--features carousel start--*>
        <section class="panel">
            <div class="flat-carousal">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <h1>Flatlab is new model of admin dashboard for happy use</h1>
                        <div class="text-center">
                            <a href="javascript:;" class="view-all">View All</a>
                        </div>
                    </div>
                    <div class="item">
                        <h1>Fully responsive and build with Bootstrap 3.0</h1>
                        <div class="text-center">
                            <a href="javascript:;" class="view-all">View All</a>
                        </div>
                    </div>
                    <div class="item">
                        <h1>Responsive Frontend is free if you get this.</h1>
                        <div class="text-center">
                            <a href="javascript:;" class="view-all">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <ul class="ft-link">
                    <li class="active">
                        <a href="javascript:;">
                            <i class="fa fa-bars"></i>
                            Sales
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class=" fa fa-calendar-o"></i>
                            promo
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class=" fa fa-camera"></i>
                            photo
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class=" fa fa-circle"></i>
                            other
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!--features carousel end--*>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <!--latest product info start--*>
        <section class="panel post-wrap pro-box">
            <aside>
                <div class="post-info">
                    <span class="arrow-pro right"></span>
                    <div class="panel-body">
                        <h1><strong>popular</strong> <br> Brand of this week</h1>
                        <div class="desk yellow">
                            <h3>Dimond Ring</h3>
                            <p>Lorem ipsum dolor set amet lorem ipsum dolor set amet ipsum dolor set amet</p>
                        </div>
                        <div class="post-btn">
                            <a href="javascript:;">
                                <i class="fa fa-chevron-circle-left"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="fa fa-chevron-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="post-highlight yellow v-align">
                <div class="panel-body text-center">
                    <div class="pro-thumb">
                        <img src="img/ring.jpg" alt="">
                    </div>
                </div>
            </aside>
        </section>
        <!--latest product info end--*>
        <!--twitter feedback start--*>
        <section class="panel post-wrap pro-box">
            <aside class="post-highlight terques v-align">
                <div class="panel-body">
                    <h2>Flatlab is new model of admin dashboard <a href="javascript:;"> http://demo.com/</a> 4 days ago  by jonathan smith</h2>
                </div>
            </aside>
            <aside>
                <div class="post-info">
                    <span class="arrow-pro left"></span>
                    <div class="panel-body">
                        <div class="text-center twite">
                            <h1>Twitter Feed</h1>
                        </div>

                        <footer class="social-footer">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </footer>
                    </div>
                </div>
            </aside>
        </section>
        <!--twitter feedback end--*>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-xs-6">
        <!--pie chart start--*>
        <section class="panel">
            <div class="panel-body">
                <div class="chart">
                    <div id="pie-chart" ></div>
                </div>
            </div>
            <footer class="pie-foot">
                Free: 260GB
            </footer>
        </section>
        <!--pie chart start--*>
    </div>
    <div class="col-xs-6">
        <!--follower start--*>
        <section class="panel">
            <div class="follower">
                <div class="panel-body">
                    <h4>Jonathan Smith</h4>
                    <div class="follow-ava">
                        <img src="img/follower-avatar.jpg" alt="">
                    </div>
                </div>
            </div>

            <footer class="follower-foot">
                <ul>
                    <li>
                        <h5>2789</h5>
                        <p>Follower</p>
                    </li>
                    <li>
                        <h5>270</h5>
                        <p>Following</p>
                    </li>
                </ul>
            </footer>
        </section>
        <!--follower end--*>
    </div>
</div>
        <!--weather statement start--*>
        <section class="panel">
            <div class="weather-bg">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-cloud"></i>
                            California
                        </div>
                        <div class="col-xs-6">
                            <div class="degree">
                                24°
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="weather-category">
                <ul>
                    <li class="active">
                        <h5>humidity</h5>
                        56%
                    </li>
                    <li>
                        <h5>precip</h5>
                        1.50 in
                    </li>
                    <li>
                        <h5>winds</h5>
                        10 mph
                    </li>
                </ul>
            </footer>

        </section>
        <!--weather statement end--*>
    </div>
</div>-->

    </section>
</section>
<!--main content end-->

<!--footer start-->
<?php include './footer.php'; ?>
<!--footer end-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>

<?php 
$select_count_opinioes = "SELECT COUNT(*) as qtdopiniao FROM opiniao";
$executa_select_count_opinioes = mysql_query($select_count_opinioes)or die(mysql_error());
$linha_opiniao_count = mysql_fetch_array($executa_select_count_opinioes);

$select_count_noticia = "SELECT COUNT(*) as qtdnoticia FROM noticia";
$executa_select_count_noticia = mysql_query($select_count_noticia)or die(mysql_error());
$linha_noticia_count = mysql_fetch_array($executa_select_count_noticia);
        
$select_count_informativo = "SELECT COUNT(*) as qtdinformativo FROM informativo";
$executa_select_count_informativo = mysql_query($select_count_informativo)or die(mysql_error());
$linha_informativo_count = mysql_fetch_array($executa_select_count_informativo);
        

$select_count_total_cadastros = "select count(*) qtd from banner
                                 union select  count(*) qtd from biografia";

$executa_count_total_cadastros = mysql_query($select_count_total_cadastros)or die(mysql_error());
$linha_total = mysql_fetch_array($executa_count_total_cadastros);

?>


<script>

    function countUp(count)
    {
        var div_by = 100,
                speed = Math.round(count / div_by),
                $display = $('.count'),
                run_count = 1,
                int_speed = 24;

        var int = setInterval(function () {
            if (run_count < div_by) {
                $display.text(speed * run_count);
                run_count++;
            } else if (parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }

    countUp(<?php echo $linha_opiniao_count['qtdopiniao'] ?>);

    function countUp2(count)
    {
        var div_by = 100,
                speed = Math.round(count / div_by),
                $display = $('.count2'),
                run_count = 1,
                int_speed = 24;

        var int = setInterval(function () {
            if (run_count < div_by) {
                $display.text(speed * run_count);
                run_count++;
            } else if (parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }

    countUp2(<?php echo $linha_noticia_count['qtdnoticia']; ?>);

    function countUp3(count)
    {
        var div_by = 100,
                speed = Math.round(count / div_by),
                $display = $('.count3'),
                run_count = 1,
                int_speed = 24;

        var int = setInterval(function () {
            if (run_count < div_by) {
                $display.text(speed * run_count);
                run_count++;
            } else if (parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }

    countUp3(<?php echo $linha_informativo_count['qtdinformativo']; ?>);

    function countUp4(count)
    {
        var div_by = 100,
                speed = Math.round(count / div_by),
                $display = $('.count4'),
                run_count = 1,
                int_speed = 24;

        var int = setInterval(function () {
            if (run_count < div_by) {
                $display.text(speed * run_count);
                run_count++;
            } else if (parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }


    countUp4(120);
</script>



<script>

    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
