@extends('Layouts.master')
@section('contents')
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
                                <h4>Yearly Sales </h4>

                            </div>
                            <div class="sales-chart">
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Team Total Completed </h4>

                            </div>
                            <div class="sales-chart">
                                <canvas id="team-chart"></canvas>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <!-- Bar Chart -->
                    <div class="col-sm-12 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Bar chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Radar Chart -->
                    <div class="col-sm-12 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Rader chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="radarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Line Chart -->
                    <div class="col-sm-12 col-md-8">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Line chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Pie Chart -->
                    <div class="col-sm-12 col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Pie chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Doughnut Chart -->
                    <div class="col-sm-12 col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Doughut chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="doughutChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Polar Chart -->
                    <div class="col-sm-12 col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Polar chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="polarChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Single Bar Chart -->
                    <div class="col-sm-12 col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Single Bar Chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="singelBarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End PAge Content -->
            </div>
    <!-- End Container fluid  -->
@endsection
@section('scripts')
    <script src="js/lib/chart-js/Chart.bundle.js"></script>
    <script src="js/lib/chart-js/chartjs-init.js"></script>

@endsection