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
                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Basic</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-width="200" data-min="-100" data-displayPrevious=true value="44">
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Disable display input</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-width="200" data-displayInput=false value="35"> </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Cursor mode</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-width="200" data-cursor=true data-bgColor="#EEEEEE" data-fgColor="#FB6E52" data-thickness=.3 value="29"> </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Angle offset</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-angleOffset=90 data-linecap=round value="35"> </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Angle offset and arc</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-angleOffset=-125 data-angleArc=250 data-fgColor="#66EE66" data-rotation="anticlockwise" value="35"> </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>4-digit, step 0.1</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-min="-10000" data-displayPrevious=true data-max="10000" data-step=".1" value="0"> </div>
                            <!-- /# column -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Overloaded 'draw' method</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-width="200" data-displayPrevious=true data-bgColor="#EEEEEE" data-fgColor="#FB6E52" data-skin="tron" data-cursor=true value="75" data-thickness=".2">
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Overloaded 'draw' method</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-width="200" data-displayPrevious=true data-bgColor="#2FB594" data-fgColor="#2FB594" data-skin="tron" data-thickness=".2" value="75">
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Overloaded 'draw' method</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-width="200" data-angleOffset="180" data-bgColor="#237596" data-fgColor="#237596" data-skin="tron" data-thickness=".1" value="35"> </div>
                            <!-- /# column -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Responsive</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-width="75%" value="35">
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Read Only</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="knob" data-fgColor="chartreuse" data-thickness=".4" readonly value="22">
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>

                    <div class="col-lg-4">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Infinite || iPod click wheel</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="card-body m-t-15 text-center text-center">
                                <input class="infinite" value="0" data-width="200" data-thickness=".5" data-fgColor="#87CEEB" data-bgColor="#EEEEEE" data-displayInput="false" data-cursor=true>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card nestable-cart">
                            <div class="card-title">
                                <h4>Superpose (clock)</h4>
                            </div>

                            <div class="card-body m-t-15 text-center text-center ">
                                <div class="superpose ">
                                    <div class="superclock ">
                                        <div class="superclock1 ">
                                            <input class="knob hour " data-min="0 " data-max="24 " data-bgColor="#EEEEEE " data-fgColor="#FB6E52 " data-displayInput=false data-width="300 " data-height="300 " data-thickness=".3 ">
                                        </div>
                                        <div class="superclock2 ">
                                            <input class="knob minute " data-min="0 " data-max="60 " data-bgColor="#EEEEEE " data-fgColor="#48CFAE " data-displayInput=false data-width="200 " data-height="200 " data-thickness=".45 ">
                                        </div>
                                        <div class="superclock3 ">
                                            <input class="knob second " data-min="0 " data-max="60 " data-bgColor="#EEEEEE " data-fgColor="#50C1E9 " data-displayInput=false data-width="100 " data-height="100 " data-thickness=".3 ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
@endsection
@section('scripts')
    <!--ION Range Slider JS-->
    <script src="js/lib/knob/jquery.knob.min.js "></script>
    <!-- scripit init-->
    <script src="js/lib/knob/knob.init.js "></script>

@endsection