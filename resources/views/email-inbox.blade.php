@extends('Layouts.master')
@section('contents')
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3>
        </div>
        <div class="col-12 col-xl-7 align-self-center">
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
                                        <a class="btn btn-primary btn-flat btn-addon btn-lg btn-block" href="/email-compose">Compose</a>

                                        <div class="mail-list mt-4">
                                            <a class="list-group-item border-0 text-danger active" href="#"><i class="mdi mdi-inbox font-18 align-middle mr-2"></i><b>Inbox</b><span class="label label-danger float-right ml-2">5</span></a>
                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-timer font-18 align-middle mr-2"></i>Snoozed</a>
                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-send font-18 align-middle mr-2"></i>Sent</a>
                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Drafts<span class="label label-warning float-right ml-2">12</span></a>

                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-delete font-18 align-middle mr-2"></i>Spam</a>
                                        </div>
                                    </div>


                                </div>
                                <!-- End Left sidebar -->


                                <div class="col-lg-9">


                                    <div class="">
                                        <div class="mt-4">
                                            <div class="">
                                                <ul class="message-list">

                                                    <li class="unread">
                                                        <a href="/email-read">
                                                            <div class="row">

                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/1.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap"><strong>Latoya Lane (2)</strong></span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Hypotheses seed round sales buzz crowdfunding angel investor
                                                                    </div>
                                                                    <div class="content">
                                                                        Ramen value proposition focus. Investor deployment growth hacking A/B testing focus founders success angel investor market infrastructure business-to-business partner network. Business-to-consumer iteration innovator business-to-business influencer.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/2.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Willie	Todd</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Incubator deployment startup bootstrapping handshake user experience.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/3.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Yvonne	Shaw</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Learning curve MVP client. Business model canvas deployment investor series A financing venture virality leverage bandwidth iPad pitch marketing termsheet metrics. Buyer pivot early adopters creative focus entrepreneur first mover advantage android.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/4.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Robin	Harrington</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Stock vesting period business plan founders iPhone freemium beta churn rate early adopters success assets ecosystem niche market responsive web design. Series A financing infographic vesting period.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/2.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Marion	Roberson (3)</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Bootstrapping leverage rockstar pivot hackathon disruptive virality direct mailing. Long tail crowdfunding bootstrapping paradigm shift focus partnership vesting period metrics early adopters creative agile development backing stealth growth hacking.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>


                                                    <li class="unread">
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/1.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap"><strong>Mandy	Williamson</strong></span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Twitter sales iPad termsheet startup ecosystem stock monetization analytics launch party vesting period. Validation analytics vesting period assets business model canvas scrum project customer supply chain seed round handshake innovator.
                                                                    </div>
                                                                    <div class="content">
                                                                        Technology venture supply chain buzz user experience hypotheses analytics iteration release lean startup metrics ownership.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>


                                                    <li class="unread">
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/3.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap"><strong>Luke	Fleming (2)</strong></span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Funding interaction design android innovator responsive web design.
                                                                    </div>
                                                                    <div class="content">
                                                                        Partner network innovator holy grail conversion seed money twitter. Business-to-consumer success iPad responsive web design.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/4.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Ismael	Stevenson</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Product management marketing innovator iPad. Interaction design learning curve buzz MVP scrum project business-to-consumer
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/1.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Jeremy	Holmes</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        crowdfunding gen-z equity success client hypotheses. IPad leverage MVP. Channels growth hacking innovator
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/2.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Samuel	Haynes, Me (3)</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        buzz backing advisor hypotheses angel investor twitter virality deployment
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/3.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Sophia	Mckinney</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Traction stealth technology ramen handshake social media long tail. Gen-z funding ramen paradigm shift learning
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/4.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Tammy	Hart, me</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        curve launch party investor agile development analytics user experience. Success creative validation.
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="/email-read">
                                                            <div class="row">
                                                                <div class="col-8 col-xl-3 d-flex align-items-top">
                                                                    <div class="checkbox-wrapper-mail d-none d-xl-block">
                                                                        <input type="checkbox">
                                                                        <label class="toggle"></label>
                                                                    </div>
                                                                    <span class="email-avatar"><img src="images/avatar/2.jpg" alt="" srcset=""></span>
                                                                    <span class="text-nowrap">Billy	Ortiz (5)</span>
                                                                </div>
                                                                <div class="col-4 col-xl-2 text-right order-xl-3">
                                                                    <div class="date mr-2">10:15 pm</div>
                                                                </div>
                                                                <div class="col-12 col-xl-7">
                                                                    <div class="subject">
                                                                        Mass market advisor direct mailing crowdsource value proposition venture monetization assets
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </li>



                                                </ul>
                                            </div>

                                        </div>
                                        <!-- panel body -->
                                    </div>
                                    <!-- panel -->

                                    <div class="row">
                                        <div class="col-7">
                                            Showing 1 - 10 of 100
                                        </div>
                                        <div class="col-5">
                                            <div class="btn-group float-right">
                                                <button class="btn btn-gradient" type="button"><i class="fa fa-chevron-left"></i></button>
                                                <button class="btn btn-gradient" type="button"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
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
