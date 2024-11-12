@extends('Layouts.master')
@section('contents')
    <link href="css/lib/nestable/nestable.css" rel="stylesheet">
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nestedable</h4>
                        <div class="card-content">
                            <div class="nestable">
                                <div class="dd" id="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">Item 1</div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">Item 2</div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="3">
                                                    <div class="dd-handle">Item 3</div>
                                                </li>
                                                <li class="dd-item" data-id="4">
                                                    <div class="dd-handle">Item 4</div>
                                                </li>
                                                <li class="dd-item" data-id="5">
                                                    <div class="dd-handle">Item 5</div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle">Item 6</div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle">Item 7</div>
                                                        </li>
                                                        <li class="dd-item" data-id="8">
                                                            <div class="dd-handle">Item 8</div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li class="dd-item" data-id="9">
                                                    <div class="dd-handle">Item 9</div>
                                                </li>
                                                <li class="dd-item" data-id="10">
                                                    <div class="dd-handle">Item 10</div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nestedable</h4>
                        <div class="card-content">
                            <div class="nestable">
                                <div class="dd" id="nestable2">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="13">
                                            <div class="dd-handle">Item 13</div>
                                        </li>
                                        <li class="dd-item" data-id="13">
                                            <div class="dd-handle">Item 13</div>
                                        </li>
                                        <li class="dd-item" data-id="14">
                                            <div class="dd-handle">Item 14</div>
                                        </li>
                                        <li class="dd-item" data-id="15">
                                            <div class="dd-handle">Item 15</div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="16">
                                                    <div class="dd-handle">Item 16</div>
                                                </li>
                                                <li class="dd-item" data-id="17">
                                                    <div class="dd-handle">Item 17</div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle">Item 18</div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle">Item 19</div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle">Item 20</div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle">Item 21</div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nestedable</h4>
                        <div class="card-content">
                            <div class="nestable">
                                <div class="dd" id="nestable3">
                                    <ol class="dd-list">
                                        <li class="dd-item dd3-item" data-id="13">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 13</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 14</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 16</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 17</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 18</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 19</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="15">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 15</div>
                                            <ol class="dd-list">
                                                <li class="dd-item dd3-item" data-id="16">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 16</div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="17">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 17</div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="18">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 18</div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
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
        
    <script src="js/lib/nestable/jquery.nestable.js"></script>
    <!-- scripit init-->
    <script src="js/lib/nestable/nestable.init.js"></script>
@endsection