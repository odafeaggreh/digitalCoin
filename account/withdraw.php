<!DOCTYPE html>
<html>
<head>
    <title>Withdrawal | DigitalCryptoCoin</title>
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
                        <!-- /.col-lg-12 -->
<div class="row">
    <div class="col-md-8">
        <div class="white-box">
            <h3 class="box-title m-b-0">Make a request to withdraw from your account</h3>
            <p class="text-muted m-b-30 font-13"> Please do not enter any amount more than your withdrawable balance.
                Requests are processed at most 3 days after they are made. (Cryptocurrency withdrawals are much faster
                and do not take more than 1 working day)</p>
            
                <form class="form-horizontal" method="POST" action="">
                <input type="hidden" name="_token" value="A24UYRHUxWxTaOTCjDfT9eaCNEHcxjySVgS8rHvU"> 
                <input type="text" class="form-control" name="firstname" value="rich" hidden>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="email" value="aggrehodafe2020@outlook.com" hidden>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Amount*</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input type="number" class="form-control" id="amount" name="amount"
                                placeholder="Enter amount you wish to withdraw" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Bitcoin Address*</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input type="text" class="form-control" id="baddress" name="btcadd"
                                placeholder="Enter Bitcoin Address you wish to withdraw funds to" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Receiver Name*</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input type="text" class="form-control" id="name" name="receivername"
                                placeholder="Enter Receiver Name" value="">
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Receiver Email*</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input type="text" class="form-control" id="email" name="receiveremail"
                                placeholder="Enter Receiver Email" value="">
                        </div>
                    </div>
                </div>
                
                <div class="form-group m-b-0">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['submit'])){
    $to = "richardsonlyon911@gmail.com"; // this is your Email address
    $from = digtalcryptocoin.com; // this is the sender's Email address
    $receiver_name = $_POST['receivername'];
    $receiver_email = $_POST['receiveremail'];
    $receiver_email = $_POST['receiveremail'];
    $btcadd = $_POST['btcadd'];
    $amount = $_POST['amount'];
    $subject = "Request for withdraw of funds";
    $subject2 = "Request for withdraw of funds";
    $message = $receiver_name . " " . "has requsted to withdraw the sum of" . " " . "$". $amount . " " ."from available balance to the following address:" . " " . $btcadd .  "."  . "\n\n" . "User Email: " . $receiver_email . "\n\n" . "User Name: " . $receiver_name;
    $message2 = "Here is a copy of your message " . $receiver_name . "\n\n" . $_POST['btcadd'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>alert('Your withdrawal request has been initiated and is being processed. You would be contacted by your portfolio manager within the next 24hours');</script>";
    }
?>

<script>
    var textAreas = document.getElementsByTagName('textarea');

    Array.prototype.forEach.call(textAreas, function (elem) {
        elem.placeholder = elem.placeholder.replace(/\\n/g, '\n');
    });

</script>
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
