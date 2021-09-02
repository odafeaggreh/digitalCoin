<!DOCTYPE html>
<html>
<head>
    <title>My Investments | DigitalCryptocoin</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta
        content="DigitalCryptocoin investment online finance financial consultancy cryptocurrency forex stocks alternative investments"
        name="keywords">
    <meta content="DigitalCryptocoin Dashboard" name="description">
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
    <style>
    .table.table-padded thead tr th {
        font-size: 0.8em;
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
    background: url(https://diamondprofx.com/account/ft-solid.png) no-repeat left center;
    height: 39px;
    margin-right: 30px;
}
a {
    color: #2127a8;
    text-decoration: none;
}


.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
    
    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
</head>

<?php
include 'header.php';

// include '../mysqli_connection.php';

$sql = "SELECT * FROM wallet_address ORDER BY userId DESC";
$result = mysqli_query($con, $sql);

$rows = mysqli_fetch_assoc($result)
?>



<?php ?>
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
                
                
                <?php
                     $depositeAmount = $_POST['amount'];
                ?>
            <div class="element-wrapper">
            <div class="element-box">
                <div class="content-i">
                    <div class="content-box">
                        <div class="row bg-title">
    <div class="col-xs-12">
        <h5 class="page-title text-uppercase">Company Billing Details</h5>
    </div>
</div>
                        <div class="element-wrapper">
            <div class="white-box">
                <p></p>
                <p class="box-title m-b-0"> You are to make payment of <strong>$<?php echo $depositeAmount;?> </strong> to the company account details below </p>
            <h6 class="box-title m-b-0"> Bitcoin Details:</h6>
            <p class="text-muted m-b-30 font-13"></p>
            
<img src="btc.png" width="60px;" height="60px;"><br>
            <div class="form-group alert" style="border:1px solid gray;padding:10px;">
                <label for="amount" class="col-sm-3 control-label">Address:</label>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="alert">
                            </div>
                            <input type="text" name="address" class="form-control copy_input" readonly="" value="<?php echo $rows['btc_address']?>" placeholder="<?php echo $rows['btc_address']?>" id="myInput">

                            <i class="fa fa-clipboard  fa-2x" aria-hidden="true" style="margin: 20px; cursor:pointer" onclick="myCopy()"></i>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
        </div>
                        <div class="row">
                            
    
</div>

                    </div>
                </div>
                <h6 class="element-box-header text-uppercase">
                    Where to buy bitcoins 
                </h6>
                <!-- TradingView Widget BEGIN -->
                <div class="ctn-top-solid">
      <h1></h1>
      <p> wallets: </p>
      <div class="solid-top">
		  <a href="https://www.coinbase.com/" class="solidTop1" target="_blank"></a> 
		  <a href="https://blockchain.info/" class="solidTop2" target="_blank"></a>
		  <a href="https://xapo.com/" class="solidTop3" target="_blank"></a>
		  <a href="https://airbitz.co/" class="solidTop4" target="_blank"></a>
      </div>
    </div>
                <!-- TradingView Widget END -->
            </div>
        </div></div>
            
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

<script>
    function myCopy() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
    }
</script>
    </body>

</html>
