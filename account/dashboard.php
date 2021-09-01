<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio | DigitalCryptoCoin</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta
        content="DigitalCryptoCoin investment online finance financial consultancy cryptocurrency forex stocks alternative investments"
        name="keywords">
    <meta content="DigitalCryptoCoin Dashboard" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
<link href=dash/bower_components/select2/dist/css/select2.min.css rel="stylesheet">
<link href=dash/bower_components/bootstrap-daterangepicker/daterangepicker.css rel="stylesheet">
<link href=dash/bower_components/dropzone/dist/dropzone.css rel="stylesheet">
<link href=dash/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css rel="stylesheet">
<link href=dash/bower_components/fullcalendar/dist/fullcalendar.min.css rel="stylesheet">
<link href=dash/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css rel="stylesheet">
<link href=dash/bower_components/slick-carousel/slick/slick.css rel="stylesheet">
<link href=dash/css/main.css?version=4.4.0 rel="stylesheet">
<link rel="stylesheet" href=dash/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css>
<link rel="stylesheet" href=dash/icon_fonts_assets/themefy/themify-icons.css>
<link rel="stylesheet" href=dash/icon_fonts_assets/font-awesome/css/font-awesome.css>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @media(max-width: 576px) {
        div.the-topbar {
            display: none !important;
        }
    }

    .menu-w.sub-menu-style-over.sub-menu-color-bright ul.main-menu>li.active>a {
        background-color: #3687a1;
    }
@font-face {
  font-family: 'simple-line-icons';
  src: url('../fonts/Simple-Line-Icons.eot?v=2.4.0');
  src: url('../fonts/Simple-Line-Icons.eot?v=2.4.0#iefix') format('embedded-opentype'), url('../fonts/Simple-Line-Icons.woff2?v=2.4.0') format('woff2'), url('../fonts/Simple-Line-Icons.ttf?v=2.4.0') format('truetype'), url('../fonts/Simple-Line-Icons.woff?v=2.4.0') format('woff'), url('../fonts/Simple-Line-Icons.svg?v=2.4.0#simple-line-icons') format('svg');
  font-weight: normal;
  font-style: normal;
}

.ctn-top-solid {
    width: 100%;
    overflow: hidden;
}

.solid-top {
    float: right;
}

.solid-top a.solidTop1 {
    background-position: 0 0;
    display: inline-block;
    width: 155px;
}

.solid-top a.solidTop2 {
    background-position: -174px 0;
    display: inline-block;
    width: 155px;
}

.solid-top a.solidTop3 {
    background-position: -350px 0;
    display: inline-block;
    width: 155px;
}

.solid-top a.solidTop4 {
    background-position: -526px 0;
    display: inline-block;
    width: 155px;
    margin-right: 0;
}

.solid-top a {
    background: url(ft-solid.png) no-repeat left center;
    height: 39px;
    margin-right: 30px;
}
a {
    color: #2127a8;
    text-decoration: none;
}
</style>
        
   
</head>



<?php include 'header.php';?>
<!--------------------
          END - Main Menu
          -------------------->
            <div class="content-w">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener"
                            target="_blank"><span class="blue-text"></span></a> </div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [{
                                    "title": "S&P 500",
                                    "proName": "OANDA:SPX500USD"
                                },
                                {
                                    "title": "Shanghai Composite",
                                    "proName": "INDEX:XLY0"
                                },
                                {
                                    "title": "EUR/USD",
                                    "proName": "FX_IDC:EURUSD"
                                },
                                {
                                    "title": "BTC/USD",
                                    "proName": "BITSTAMP:BTCUSD"
                                },
                                {
                                    "title": "ETH/USD",
                                    "proName": "BITSTAMP:ETHUSD"
                                }
                            ],
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "en"
                        }

                    </script>
                </div>
                <!-- TradingView Widget END -->
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper compact pt-4">
                            <h6 class="element-header">
                                Portfolio Overview
                            </h6>
                            <div class="element-box-tp">
                                <div class="row">             
                                    <div class="col-lg-7 col-xxl-6">
                                                    
                                                    
                                        <!--START - BALANCES-->
                                        <div class="element-balances">
                                            
                                            <div class="btn btn-primary btn-sm">
                                                        <a class="balance" href=add-account.php>
                                                            <div class="balance-title">
                                                    <h6>Total Balance</h6>
                                                </div><br>
                                                <div class="balance-value">
                                                    <span>
                                                    $<?php 
                                                        if (isset($user['totalbalance'])) {
                                                        printf('%s', $user['totalbalance']);
                                                        }
                                                    ?>
                                </span>
                                                    
                                                </div>
                                                </a>
                                                
                                            </div>&nbsp;&nbsp;
                                            <div class="balance">
                                                <div class="balance-title">
                                                    <h6>Total Deposit</h6>
                                                </div>
                                                <div class="balance-value">
                                                $<?php 
                                                        if (isset($user['totaldeposit'])) {
                                                        printf('%s', $user['totaldeposit']);
                                                        }
                                                    ?>
                                                </div>
                                                <div class="balance-link">
                                                    <a class="btn btn-link btn-underlined" href="<?php echo 'fund-account.php' .'?id='. $id?>'"><span>Fund Account</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                </div>
                                            </div>&nbsp;&nbsp;&nbsp;
                                            <div class="balance">
                                                <div class="balance-title">
                                                    <h6>Total Profit</h6>
                                                </div>
                                                <div class="balance-value danger">
                                                    $<?php 
                                                        if (isset($user['profit'])) {
                                                        printf('%s', $user['profit']);
                                                        }
                                                    ?>
                                                </div>
                                                <div class="balance-link">
                                                    <a class="btn btn-link btn-underlined btn-gold" href=<?php echo 'investments.php' .'?id='. $id?>><span>
                                                            View Investments</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--END - BALANCES-->
                                    </div>
                                    <div class="col-lg-5 col-xxl-6">
                                        <!--START - MESSAGE ALERT-->
                                        
                                        <!--END - MESSAGE ALERT-->
                                    </div>
                                </div>
                            </div>
                        </div>

                            <!--START - CHART-->
                            <div class="element-wrapper">
                                <div class="element-box">
                                    <h6 class="element-box-header text-uppercase">
                                        Trading Chart
                                    </h6>
                                    <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_59bb0"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/"
                                            rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.widget({
                                            "width": "100%",
                                            "height": 610,
                                            "symbol": "BITSTAMP:BTCUSD",
                                            "interval": "1",
                                            "timezone": "Etc/UTC",
                                            "theme": "Dark",
                                            "style": "9",
                                            "locale": "en",
                                            "toolbar_bg": "#f1f3f6",
                                            "enable_publishing": false,
                                            "hide_side_toolbar": false,
                                            "allow_symbol_change": true,
                                            "calendar": true,
                                            "studies": [
                        "BB@tv-basicstudies"
                    ],
                                            "container_id": "tradingview_59bb0"
                                        });

                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            
                                </div>
                                </div>
                                <!--END - CHART-->

                                <div class="row">
                    
                                    <div class="col-lg-7 col-xxl-6">
                                    <!--START - CHART-->
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                    <h6 class="element-box-header text-uppercase">
                                                        Live Forex Update
                                                    </h6>   
                                                    <!-- TradingView Widget BEGIN -->
                                                    <iframe src="https://fxpricing.com/fx-widget/simple-moving-widget.php?id=1&theme=dark" width="100%" height="554" style="border: 1px solid #eee;"></iframe><div id="fx-pricing-widget-copyright"><span> </span><a href="https://fxpricing.com/" target="_blank"></a></div><style type="text/css">#fx-pricing-widget-copyright{text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd;} #fx-pricing-widget-copyright a{text-decoration: unset; color: #bb3534; font-weight: 600;}</style>
                                                        <!-- TradingView Widget END -->
                                            </div>
                                        </div>
                                        <!--END - CHART-->
                                    </div>
                                    <div class="col-lg-5 col-xxl-6">
                                        <!--START - CHART-->
                                    <div class="element-wrapper">
                                    <div class="element-box">
                                        <h6 class="element-box-header text-uppercase">
                                            Btc Network 
                                        </h6>
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="ctn-top-solid">
                            <h1></h1>
                            <p> wallets: </p>
                            <div class="solid-top">
                                <img src="" alt=""> 
                                <a href="https://blockchain.info/" class="solidTop2" target="_blank"></a>
                                <a href="https://xapo.com/" class="solidTop3" target="_blank"></a>
                                <a href="https://airbitz.co/" class="solidTop4" target="_blank"></a>
                            </div>
                            </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                </div>
                                <!--END - CHART-->
                            </div>
                        </div>

                    <!--START - Transactions Table-->
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Latest Investments
                        </h6>
                        <div class="element-box-tp">
                            <div class="table-responsive">
                                <table class="table table-padded">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>

                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                Plan
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <a href="<?php echo 'investments.php' .'?id='. $id?>" class="btn btn-block">See All Details</a>
                            </div>
                        </div>
                    </div>
                    <!--END - Transactions Table-->


                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src=dash/bower_components/jquery/dist/jquery.min.js></script>
<script src=dash/bower_components/popper.js/dist/umd/popper.min.js></script>
<script src=dash/bower_components/moment/moment.js></script>
<script src=dash/bower_components/chart.js/dist/Chart.min.js></script>
<script src=dash/bower_components/select2/dist/js/select2.full.min.js></script>
<script src=dash/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js></script>
<script src=dash/bower_components/ckeditor/ckeditor.js></script>
<script src=dash/bower_components/bootstrap-validator/dist/validator.min.js></script>
<script src=dash/bower_components/bootstrap-daterangepicker/daterangepicker.js></script>
<script src=dash/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js></script>
<script src=dash/bower_components/dropzone/dist/dropzone.js></script>
<script src=dash/bower_components/editable-table/mindmup-editabletable.js></script>
<script src=dash/bower_components/datatables.net/js/jquery.dataTables.min.js></script>
<script src=dash/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js></script>
<script src=dash/bower_components/fullcalendar/dist/fullcalendar.min.js></script>
<script src=dash/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js></script>
<script src=dash/bower_components/tether/dist/js/tether.min.js></script>
<script src=dash/bower_components/slick-carousel/slick/slick.min.js></script>
<script src=dash/bower_components/bootstrap/js/dist/util.js></script>
<script src=dash/bower_components/bootstrap/js/dist/alert.js></script>
<script src=dash/bower_components/bootstrap/js/dist/button.js></script>
<script src=dash/bower_components/bootstrap/js/dist/carousel.js></script>
<script src=dash/bower_components/bootstrap/js/dist/collapse.js></script>
<script src=dash/bower_components/bootstrap/js/dist/dropdown.js></script>
<script src=dash/bower_components/bootstrap/js/dist/modal.js></script>
<script src=dash/bower_components/bootstrap/js/dist/tab.js></script>
<script src=dash/bower_components/bootstrap/js/dist/tooltip.js></script>
<script src=dash/bower_components/bootstrap/js/dist/popover.js></script>
<script src=dash/js/demo_customizer.js?version=4.4.0></script>
<script src=dash/js/main.js?version=4.4.0></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-XXXXXXX-9', 'auto');
    ga('send', 'pageview');

</script>

    </body>

</html>
