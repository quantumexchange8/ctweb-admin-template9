@extends('Layouts.master')
@section('contents')
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3>
        </div>
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
            <div class="col-lg-3">
                <div class="card nestable-cart p-3 flex-row">

                    <div class="mr-auto">
                        <div class="card-title">
                            <h5>REVENUE</h5>

                        </div>
                        <div class="sparkline-unix">
                            <span id="sparklinedash"></span>
                        </div>
                    </div>
                    <div class="pull-right text-right mt-1">
                        <i class="ti-bag ti-3x color-light"></i>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-3">
                <div class="card nestable-cart p-3 flex-row">
                    <div class="mr-auto">
                        <div class="card-title">
                            <h5>ORDER VALUE</h5>

                        </div>
                        <div class="sparkline-unix">
                            <span id="sparklinedash2"></span>
                        </div>
                    </div>
                    <div class="pull-right text-right mt-1">
                        <i class="ti-bar-chart ti-3x color-light"></i>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-3">
                <div class="card nestable-cart p-3 flex-row">
                    <div class="mr-auto">
                        <div class="card-title">
                            <h5>NEW ORDERS</h5>

                        </div>
                        <div class="sparkline-unix">
                            <span id="sparklinedash3"></span>
                        </div>
                    </div>
                    <div class="pull-right text-right mt-1">
                        <i class="ti-package ti-3x color-light"></i>
                    </div>

                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-3">
                <div class="card nestable-cart p-3 flex-row">
                    <div class="mr-auto">
                        <div class="card-title">
                            <h5>NEW USERS</h5>

                        </div>
                        <div class="sparkline-unix">
                            <span id="sparklinedash5"></span>
                        </div>
                    </div>
                    <div class="pull-right text-right mt-1">
                        <i class="ti-user ti-3x color-light"></i>
                    </div>

                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <div class="row">

            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card nestable-cart">
                    <div class="card-title">
                        <h5>SITE TRAFFIC</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline9"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card nestable-cart">
                    <div class="card-title">
                        <h5>SITE TRAFFIC</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline10"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card nestable-cart">
                    <div class="card-title">
                        <h5>PIE CHART</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline11" class="text-center"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->


            <div class="col-lg-6">
                <div class="card nestable-cart">
                    <div class="card-title">
                        <h5>Bar Chart</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline12" class="text-center"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div>
        <!-- /# row -->
        <div class="row">

            <div class="col-lg-6">
                <div class="card nestable-cart sperkline_fourteen_bg">
                    <div class="card-title">
                        <h5>LINE CHART</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline14" class="text-center"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card nestable-cart">
                    <div class="card-title">
                        <h5>Composite Bar Chart</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline13" class="text-center"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card nestable-cart">
                    <div class="card-title">
                        <h5>LINE CHART</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline16" class="text-center"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->




            <div class="col-lg-6">
                <div class="card nestable-cart">
                    <div class="card-title">
                        <h5>ALTERNATIVE COLOR CHART</h5>

                    </div>
                    <div class="sparkline-unix">
                        <div id="sparkline15" class="text-center"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div>
        <!-- /# row -->
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
@endsection
@section('scripts')
    <script src="js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <!-- sparkline init-->
    <script src="js/lib/sparklinechart/sparkline.init.js"></script>
@endsection