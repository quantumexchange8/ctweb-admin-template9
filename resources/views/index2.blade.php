@extends('Layouts.master')
@section('contents')    
    <link href="css/lib/amchart/export.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-bag f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body text-right">
                            <h4>2780</h4>
                            <p class="m-b-0">New Projects</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-comment f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body text-right">
                            <h4>178</h4>
                            <p class="m-b-0">Total Message</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-vector f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body text-right">
                            <h4>$27647</h4>
                            <p class="m-b-0">Total Earnings</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-location-pin f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body text-right">
                            <h4>278</h4>
                            <p class="m-b-0">Total Visitor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Statistics</h4>
                        <div id="chartdiv3"></div>
                    </div>
                </div>
            </div>
            <!-- column -->

            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Flight Map</h4>
                        <div id="chartMap"></div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center bg-primary">
                    <div class="m-t-10">
                        <p class="color-white">Monrhly Sales</p>
                        <h2 class="color-white text-white">385749</h2>
                    </div>
                    <ul class="widget-line-list m-b-15">
                        <li class="border-right">95% <br><span class="color-white"><i class="ti-hand-point-up m-r-5"></i> Sold</span></li>
                        <li>5% <br><span class="color-white f-s-14"><i class="ti-hand-point-down m-r-5"></i>Return</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-success">
                    <div class="m-t-10">
                        <p class="color-white">New Feedback</p>
                        <h2 class="color-white text-white">385749</h2>
                    </div>
                    <ul class="widget-line-list m-b-15">
                        <li class="border-right">98% <br><span class="color-white"><i class="ti-hand-point-up m-r-5"></i> Positive</span></li>
                        <li>2% <br><span class="color-white f-s-14"><i class="ti-hand-point-down m-r-5"></i>Negative</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-danger">
                    <div class="m-t-10">
                        <p class="color-white">Customer Feedback</p>
                        <h2 class="color-white text-white">385749</h2>
                    </div>
                    <ul class="widget-line-list m-b-15">
                        <li class="border-right">92% <br><span class="color-white"><i class="ti-hand-point-up m-r-5"></i> Positive</span></li>
                        <li>8% <br><span class="color-white f-s-14"><i class="ti-hand-point-down m-r-5"></i>Negative</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Todo</h4>
                        <div class="card-content">
                            <div class="todo-list">
                                <div class="tdl-holder">
                                    <div class="tdl-content">
                                        <ul>
                                            <li class="color-primary">
                                                <label>
                                                <input type="checkbox"><i class="bg-primary"></i><span>Post three to six times on Twitter.</span>
                                                <a href='#' class="ti-close"></a>
                                            </label>
                                            </li>
                                            <li class="color-success">
                                                <label>
                                                <input type="checkbox" checked><i class="bg-success"></i><span>Post one to two times on Facebook.</span>
                                                <a href='#' class="ti-close"></a>
                                            </label>
                                            </li>
                                            <li class="color-warning">
                                                <label>
                                                <input type="checkbox" checked><i class="bg-warning"></i><span>Follow back those who follow you</span>
                                                <a href='#' class="ti-close"></a>
                                            </label>
                                            </li>
                                            <li class="color-danger">
                                                <label>
                                                <input type="checkbox" checked><i class="bg-danger"></i><span>Connect with one new person</span>
                                                <a href='#' class="ti-close"></a>
                                            </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="text" class="tdl-new form-control" placeholder="Type here">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-title">
                        <h4>Recent Orders </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Product</th>
                                        <th>quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img class="w-35" src="images/avatar/1.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td><span>Dell-985</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img class="w-35" src="images/avatar/1.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td>Lew Shawon</td>
                                        <td><span>Asus-565</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img class="w-35" src="images/avatar/1.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td>lew Shawon</td>
                                        <td><span>Dell-985</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img class="w-35" src="images/avatar/1.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td>lew Shawon</td>
                                        <td><span>Dell-985</span></td>
                                        <td><span>456 pcs</span></td>
                                        <td><span class="badge badge-success">Done</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-title">
                        <h4>Browser</h4>
                    </div>
                    <div class="card-body browser">
                        <p>Chrome<span class="pull-right">85%</span></p>
                        <div class="progress ">
                            <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                        <p class="m-t-10">Firefox<span class="pull-right">90%</span></p>
                        <div class="progress">
                            <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                        <p class="m-t-10">Safari<span class="pull-right">65%</span></p>
                        <div class="progress m-b-30">
                            <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4">
                <div class="card bg-primary">
                    <div class="weather-widget">
                        <div id="weather-one" class="weather-one p-22"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-dark">
                    <div class="testimonial-widget-one p-17">
                        <div class="testimonial-widget-one owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testimonial-author-img" src="images/avatar/1.jpg" alt="" />
                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testimonial-author-img" src="images/avatar/1.jpg" alt="" />
                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testimonial-author-img" src="images/avatar/1.jpg" alt="" />
                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testimonial-author-img" src="images/avatar/1.jpg" alt="" />
                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testimonial-author-img" src="images/avatar/1.jpg" alt="" />
                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testimonial-author-img" src="images/avatar/1.jpg" alt="" />
                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>

                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
@endsection
@section('scripts')
    <!-- Amchart -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="js/lib/chart-amchart/serial.js"></script>
    <script src="js/lib/chart-amchart/export.min.js"></script>
    <script src="js/lib/chart-amchart/light.js"></script>
    <script src="js/lib/chart-amchart/ammap.js"></script>
    <script src="js/lib/chart-amchart/worldLow.js"></script>
    <script src="js/lib/chart-amchart/pie.js"></script>
    <script src="js/lib/chart-amchart/amstock.js"></script>
    <script src="js/lib/chart-amchart/amchart-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
@endsection