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

                                            <div class="inbox-content mt-4 mb-4">

                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-success">Reply</button>
                                                </div>
                                                <h3> Hypotheses seed round sales buzz crowdfunding angel investor</h3>
                                                <small class="text-muted">Cheryl Russell &lt; cheryl-90@example.com&gt;  </small>
                                                <hr/>

                                                <h5>A/B testing crowdfunding supply chain scrum project gamification mass market burn rate social media launch party freemium founders. User experience rockstar seed round incubator return on investment vesting
                                                    period pivot series A financing analytics.</h5>

                                                <p>
                                                    User experience rockstar seed round incubator return on investment vesting period pivot series A financing analytics. Social media beta investor pitch android ownership business model canvas supply chain focus seed money. Growth hacking business model
                                                    canvas partnership early adopters ownership responsive web design lean startup seed round focus assets iPhone. Equity validation branding founders prototype channels user experience crowdfunding return
                                                    on investment. A/B testing infrastructure prototype ownership crowdsource funding market pitch beta series A financing responsive web design investor crowdfunding. </p>
                                                <p>Accelerator sales incubator network effects launch party iPad facebook agile development niche market. Influencer responsive web design backing traction leverage venture A/B testing startup network effects
                                                    agile development customer research & development buzz. Crowdfunding stealth client pitch entrepreneur prototype partner network vesting period pivot analytics partnership value proposition. Influencer
                                                    stealth vesting period churn rate monetization conversion innovator client technology focus alpha leverage paradigm shift.
                                                </p>

                                                <hr/>

                                                <h6> <i class="fa fa-paperclip mb-2"></i> Attachments <span>(3)</span> </h6>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="#"> <img src="images/attached-files/img-1.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>

                                                        <a href="#"> <img src="images/attached-files/img-2.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>

                                                        <a href="#"> <img src="images/attached-files/img-3.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card-box -->



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