<!DOCTYPE html>
<html>
<head>
    <title>My Profile | DigitalCryptoCoin</title>
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

</style>
        
    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
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
                        <div class="content-box">
        <div class="row">
        <div class="col-sm-5">
            <div class="user-profile compact">
                <div class="up-head-w" style='background-image:url(https://www.DigitalCryptoCoin.com/prof_pics)'>

                    <div class="up-main-info">
                        <h2 class="up-header">
                            <?php 
                                if (isset($user['firstName'])) {
                                    printf('%s %s', $user['firstName'], $user['lastName']);
                                }
                            ?>
                        </h2>
                        <h6 class="up-sub-header">
                            Investor
                        </h6>
                    </div>
                    <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219"
                        preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF">
                            <path class="decor-path"
                                d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="up-controls">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="value-pair">
                                <div class="label">
                                    Status:
                                </div>
                                <div class="value badge badge-pill badge-success">
                                    Online
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-7">
            <div class="element-wrapper">
                <div class="element-box">
                    <form id="formValidate" novalidate="true">
                        <div class="element-info">
                            <div class="element-info-with-icon">
                                <div class="element-info-icon">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <div class="element-info-text">
                                    <h5 class="element-inner-header">
                                        Profile Settings
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""> Email address</label>
                            <input class="form-control" data-error="Your email address is invalid"
                                placeholder="Enter email" required="required" type="email" name="email"
                                value="<?php 
                                    if (isset($user['email'])) {
                                        printf('%s', $user['email']);
                                    }
                                ?>">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> First Name</label>
                                    <input class="form-control" name="first_name" placeholder="First Name"
                                        required="required" value="<?php 
                                    if (isset($user['firstName'])) {
                                        printf('%s', $user['firstName']);
                                    }
                                ?>">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input class="form-control" name="last_name" placeholder="Last Name"
                                        required="required" value="<?php 
                                    if (isset($user['lastName'])) {
                                        printf('%s', $user['lastName']);
                                    }
                                ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-buttons-w">
                            <button class="btn btn-primary disabled" type="submit"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
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
