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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="row">
                                        <!-- Left sidebar -->
                                        <div class="col-lg-3">
                                            <div class="mt-4 ml-3">
                                                <div class="mail-list">
                                                    <a class="list-group-item border-0 text-danger active" href="/email-inbox"><i class="mdi mdi-inbox font-18 align-middle mr-2"></i><b>Inbox</b><span class="label label-danger float-right ml-2">5</span></a>
                                                    <a class="list-group-item border-0" href="#"><i class="mdi mdi-timer font-18 align-middle mr-2"></i>Snoozed</a>
                                                    <a class="list-group-item border-0" href="#"><i class="mdi mdi-send font-18 align-middle mr-2"></i>Sent</a>
                                                    <a class="list-group-item border-0" href="#"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Drafts<span class="label label-warning float-right ml-2">12</span></a>

                                                    <a class="list-group-item border-0" href="#"><i class="mdi mdi-delete font-18 align-middle mr-2"></i>Spam</a>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Left sidebar -->
                                        <div class="col-lg-9">

                                            <div class="mt-4">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="To">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="name" rows="8" cols="80" class="form-control" style="height:300px" placeholder="Enter Message"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text-center">
                                                            <a class="btn btn-success btn-flat btn-addon btn-lg btn-block" href="/email-compose">Send Email</a>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end card-->
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
