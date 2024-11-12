@extends('Layouts.master')
@section('contents')
<link href="css/lib/amchart/export.css" rel="stylesheet">
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>AmChart</h4>
                    </div>
                    <div class="card-body">
                        <div id="chartdiv3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>AmChart</h4>
                    </div>
                    <div class="card-body">
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>AmChart</h4>
                    </div>
                    <div class="card-body">
                        <div id="chartMap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>AmChart</h4>
                    </div>
                    <div class="card-body">
                        <div id="zoomable"></div>
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

@endsection