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
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="b-line" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="b-area" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="rainfall" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="nb-chart" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="bs-chart" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="basic-Pie" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="np-Pie" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="doughnut" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="radar" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Echart</h4>
                            </div>
                            <div class="card-content">
                                <div id="gauge" style="height: 370px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
@endsection

@section('scripts')
    <!-- Echart -->
    <script src="js/lib/echart/echarts.js"></script>
    <script src="js/lib/echart/echarts-init.js"></script>

@endsection