<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="CryptoCoin is a powerful Bitcoin Crypto Currency Wallet and Mining Template with full of customization options and features">
    <!-- Bootstrap-extend -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">
    {{--Font-AWESOME--}}
    <script src="{{asset('assets/js/fa.js')}}"></script>
    {{--Main Style--}}
<!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Mathayo Funds - Home</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style5152.css?ver=1.0">
    <link rel="stylesheet" id="layoutstyle" href="assets/css/theme5152.css?ver=1.0">
    {{--File upload--}}
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css"/>
    <link href="file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css"/>


    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
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
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-91615293-2', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body>

<!-- Header -->
<header class="site-header header-s1 is-sticky">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="social">
                        <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                        <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                        <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 al-right">
                    <ul class="top-nav">
                        <li><a href="faqs.html">Help</a></li>
                        <li><a href="faqs.html">Support</a></li>
                        <li><a href="signup.html">Login</a></li>
                        <li><a href="signup.html">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Navbar -->
    <div class="navbar navbar-primary">
        <div class="container relative">
            <!-- Logo -->
            <a class="navbar-brand" href="index-2.html">
                <img class="logo logo-dark" alt="logo" src="{{asset('mat_logo.png')}}">
                <img class="logo logo-light" alt="logo" src="{{asset('mat_logo.png')}}">
            </a>
            <!-- #end Logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
                        aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="quote-btn"><a class="btn" href="contact.html"><span>get started</span></a></div>
            </div>
            <!-- MainNav -->
            <nav class="navbar-collapse collapse" id="mainnav">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle">Tade With Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index-2.html"><span class="fas fa-coins"></span> Trade Coin</a></li>
                            <li><a href="index-wallet.html"> <span class="fa fa-credit-card"></span> Trade Gift Card</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="market-data.html">About Us</a></li>
                    <li><a href="contact.html">Rates</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle">Welcome, StuNNer <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index-2.html"><span class="fa fa-user"></span> Account</a></li>
                            <li><a href="index-wallet.html"> <span class="fa fa-clock-o"></span> Transactions</a></li>
                            <li><a href="index-wallet.html"> <span class="fa fa-power-off"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    <!-- End Navbar -->
</header>
<!-- End Header -->


<!-- Transactions Count -->
<div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 res-m-bttm">
                <div class="pricing-box ucap shadow">
                    <div class="box round no-pt">
                        <img src="{{asset('mathayo-profile.png')}}" alt="box-icon" class="box-icon">
                        <h6 class="">Stunner</h6>
                        <p style="color: #f7921a"><b>Wallet: &#8358;30,000</b></p>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-dashboard"></i>&nbsp; Dashboard</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-credit-card"></i>&nbsp; Card Trades</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fas fa-coins"></i>&nbsp; Coin Trades</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-user"></i>&nbsp; Profile</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-envelope"></i>&nbsp; Messages</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-money"></i>&nbsp; Withdrawal</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-power-off"></i>&nbsp; Logout</span></a><br>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-6 res-m-bttm">
                <div class="row">
                    <div class="col-md-12 col-sm-6 res-m-bttm">
                        <!-- Transactions -->
                        <div class="features-box section section-pad no-pb no-pt">
                            <div class="container">
                                <div class="row">
                                    <div class="box round shadow-alt mb-15">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="ucap">All Card Trades</h6>
                                            <a href="#" data-toggle="modal" data-target="#leaveReview"><span><i class="fa fa-commenting"></i> &nbsp;</span><b>Leave a Review</b></a>
                                        </div>
                                        <p class="small">History of all the card trades you made with us</p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="sidebar-right wgs-box">
                                                    <div class="wgs-search">
                                                        <div class="wgs-content">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       id="search-card-trade"
                                                                       placeholder="Search Card Trade...">
                                                                <button class="search-btn"><i class="fa fa-search"
                                                                                              aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="gaps size-1x"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-15" id="cardTable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">S/N</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Asset</th>
                                                    <th scope="col">You Bought/Sold</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action(s)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Ethereum</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orange">Pending
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-1" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-1" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"
                                                                data-toggle="modal"
                                                                data-target="#adminPaymentProofCard"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Gift Card</td>
                                                    <td>Amazon</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-2" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-2" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"
                                                                data-toggle="modal"
                                                                data-target="#adminPaymentProofCard"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"
                                                                data-toggle="modal"
                                                                data-target="#adminPaymentProofCard"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"
                                                                data-toggle="modal"
                                                                data-target="#adminPaymentProofCard"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"
                                                                data-toggle="modal"
                                                                data-target="#adminPaymentProofCard"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"
                                                                data-toggle="modal"
                                                                data-target="#adminPaymentProofCard"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Bought</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orangered">
                                                            Canceled
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-3" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-3" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Coin</td>
                                                    <td>Bitcoin</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: green">Completed
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-4" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-4" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>May 21 2020, 15:30</td>
                                                    <td>Gift Card</td>
                                                    <td>iTunes</td>
                                                    <td>Sold</td>
                                                    <td>
                                                        <div class="badge" style="background-color: orange">Pending
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" id="upload-5" data-toggle="tooltip"
                                                           data-placement="bottom"
                                                           title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                class="fa fa-picture-o fa-lg"
                                                                style="color: mediumblue"></i></a> <b>/</b>
                                                        <a href="#" id="proof-5" data-toggle="tooltip"
                                                           data-placement="bottom" title="View Admin Payment Proof"><i
                                                                class="fa fa-picture-o fa-lg "
                                                                style="color: mediumblue"></i>*</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Features Box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Features Box -->


<!-- Section Footer -->
<div class="footer-section section section-pad-md light bg-footer">
    <div class="imagebg footerbg">
        <img src="images/footer-bg.png" alt="footer-bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-menu">
                    <h5 class="wgs-title ucap">Services</h5>
                    <div class="wgs-content">
                        <ul class="menu">
                            <li><a href="#">Bitcoin Trading</a></li>
                            <li><a href="#">Security Protected</a></li>
                            <li><a href="#">Support 24/7</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Registered Company</a></li>
                            <li><a href="#">Bitcoin Wallet Options</a></li>
                            <li><a href="#">Live Exchange Rates</a></li>
                            <li><a href="#">Affiliate Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-menu">
                    <h5 class="wgs-title ucap">Our Company</h5>
                    <div class="wgs-content">
                        <ul class="menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-contact">
                    <h5 class="wgs-title ucap">get in touch</h5>
                    <div class="wgs-content">
                        <ul class="wgs-contact-list">
                            <li><span class="pe pe-7s-map-marker"></span>4 Salako street. Magodo-Isheri, Isheri Magodo,
                                Kosofe, Lagos
                            </li>
                            <li><span class="pe pe-7s-call"></span>Telephone : +2348038103697 <br/>Telephone :
                                +2348086818135
                            </li>
                            <li><span class="pe pe-7s-global"></span>Email : <a href="#">mathayofund@gmail.com</a> <br/>Web
                                : <a href="#">mathayofunds</a></li>
                            <li><span class="pe pe-7s-clock"></span>Opening : Monday - Friday: 08:00 - 22:00 <br/>Closing
                                : Saturday, Sunday: Closed
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
        </div>
        <br>
        <h5>E-mail Newsletter</h5>
        <p>Stay updated, Subscribe to our newsletter</p>
        <form class="form-signup" action="http://demo.themenio.com/cryptocoin/action.php" method="post">
            <div class="form-results"></div>
            <div class="form-group">
                <div class="form-field form-m-bttm">
                    <input name="signup-email" type="email" placeholder="Enter your email"
                           class="form-control required email" aria-required="true">
                </div>
            </div>
            <button type="submit" class="btn btn-alt">Subscribe</button>
        </form>
    </div>
</div>
<!-- End Section -->

<!-- Copyright -->
<div class="copyright light">
    <div class="container">
        <div class="row">
            <div class="site-copy col-sm-7">
                <p>Copyright &copy; 2020 <a href="{{route('welcome')}}">Mathayo Funds </a>Cryptocurrency Trading Company
                </p>
            </div>
            <div class="col-sm-5 text-right mobile-left">
                <ul class="social">
                    <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                    <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                    <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                    <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright -->

<!-- Preloader !remove please if you do not want -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

{{--Leave A Review Modal--}}
<div class="modal" tabindex="-1" id="leaveReview" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Your Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <b class="text-info"><span class="fa fa-info"></span> &nbsp; Notice:: Your review may be used for promotional purposes</b>
                </div>
                <div class="modal-body">
                    <div class="form-field form-m-bttm">
                    <textarea name="message" cols="10" rows="8" style="resize: none" placeholder="Share your experience with us so far."
                              class="form-control required" aria-required="true"
                              type="text" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-alt"><span><i class="fa fa-send"></i> &nbsp;</span><b>Send</b></button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Admin Payment Proof For Card Modal--}}
<div class="modal" tabindex="-1" id="adminPaymentProofCard" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title">Our Payment Proof</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-field form-m-bttm">
                    <img src="{{asset('qrcode.png')}}" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                </button>
            </div>
        </div>
    </div>
</div>

{{--Main Scripts--}}
<script src="{{asset('assets/js/jquery.bundle.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="assets/js/scrollspyNav.js"></script>
<script src="file-upload/file-upload-with-preview.min.js"></script>


<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script>
    $(window).on('load', function () {
        $('div#themes_panel').hide();

        //ToolTip
        $('#upload-1').tooltip()
        $('#proof-1').tooltip()
        $('#upload-2').tooltip()
        $('#proof-2').tooltip()
        $('#upload-3').tooltip()
        $('#proof-3').tooltip()
        $('#upload-4').tooltip()
        $('#proof-4').tooltip()
        $('#upload-5').tooltip()
        $('#proof-5').tooltip()
        $('#upload-6').tooltip()
        $('#proof-6').tooltip()
        $('#upload-7').tooltip()
        $('#proof-7').tooltip()
        $('#upload-8').tooltip()
        $('#proof-8').tooltip()
        $('#upload-9').tooltip()
        $('#proof-9').tooltip()
        $('#upload-10').tooltip()
        $('#proof-10').tooltip()

        /*Data Table*/
        const cardTable = $('#cardTable').DataTable({
            responsive: true,
            bPaginate: true,
            bLengthChange: false,
            bFilter: true,
            bInfo: true,
            bAutoWidth: true,
            pageLength: 15,
        });
        /*Remove the default search box*/
        $('#cardTable_filter').remove()
        /*Add datatable search functionality to custom search box*/
        $('#search-card-trade').keyup(function () {
            cardTable.search($(this).val()).draw();
        })
    })
</script>

</body>

</html>

