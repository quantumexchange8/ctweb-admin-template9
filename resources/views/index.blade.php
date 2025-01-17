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
        <div class="col-12">
            <div class="crypto-ticker m-b-15">
                <ul id="webticker-dark-icons">
                    <li data-update="item1"><i class="cc BTC"></i> BTC <span class="coin-value"> $11.039232</span></li>
                    <li data-update="item2"><i class="cc ETH"></i> ETH <span class="coin-value"> $1.2792</span></li>
                    <li data-update="item3"><i class="cc GAME"></i> GAME <span class="coin-value"> $11.039232</span></li>
                    <li data-update="item4"><i class="cc LBC"></i> LBC <span class="coin-value"> $0.588418</span></li>
                    <li data-update="item5"><i class="cc NEO"></i> NEO <span class="coin-value"> $161.511</span></li>
                    <li data-update="item6"><i class="cc STEEM"></i> STE <span class="coin-value"> $0.551955</span></li>
                    <li data-update="item7"><i class="cc LTC"></i> LIT <span class="coin-value"> $177.80</span></li>
                    <li data-update="item8"><i class="cc NOTE"></i> NOTE <span class="coin-value"> $13.399</span></li>
                    <li data-update="item9"><i class="cc MINT"></i> MINT <span class="coin-value"> $0.880694</span></li>
                    <li data-update="item10"><i class="cc IOTA"></i> IOT <span class="coin-value"> $2.555</span></li>
                    <li data-update="item11"><i class="cc DASH"></i> DAS <span class="coin-value"> $769.22</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-seven">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc BTC" title="BTC"></i>
                            </div>
                            <div class="col-5">
                                <h3>Bitcoin BTC</h3>
                                <h6 class="text-muted">0.00000434 <span class="color-gray">BTC</span> <span class="text-info">$0.04</span></h6>
                            </div>
                            <div class="col-5 text-right">
                                <h3>$8,569</h3>
                                <h6 class="text-success">31% <i class="ti-arrow-up f-s-16 text-success m-l-5"></i></h6>
                            </div>
                        </div>
                        <div class="m-t-15">
                            <span class="peity-btc" data-peity='{ "fill": "rgba(247, 147, 26, 0.5)", "stroke": "#f7931a"}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-seven">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc LTC" title="LTC"></i>
                            </div>
                            <div class="col-5">
                                <h3>Litecoin LTC</h3>
                                <h6 class="text-muted">0.00000434 <span class="color-gray">BTC</span> <span class="text-info">$0.04</span></h6>
                            </div>
                            <div class="col-5 text-right">
                                <h3>$8,569</h3>
                                <h6 class="text-danger">31% <i class="ti-arrow-down f-s-16 text-danger m-l-5"></i></h6>
                            </div>
                        </div>
                        <div class="m-t-15">
                            <span class="peity-ltc" data-peity='{ "fill": "rgba(131, 131, 131, 0.59)", "stroke": "#838383"}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-seven">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc NEO" title="NEO"></i>
                            </div>
                            <div class="col-5">
                                <h3>Neo NEO</h3>
                                <h6 class="text-muted">0.00000434 <span class="color-gray">BTC</span> <span class="text-info">$0.04</span></h6>
                            </div>
                            <div class="col-5 text-right">
                                <h3>$8,569</h3>
                                <h6 class="text-warning">31% <i class="ti-arrow-up f-s-16 text-warning m-l-5"></i></h6>
                            </div>
                        </div>
                        <div class="m-t-15">
                            <span class="peity-neo" data-peity='{ "fill": "rgba(88, 191, 0, 0.59)", "stroke": "#58bf00"}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-seven">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc DASH"></i>
                            </div>
                            <div class="col-5">
                                <h3>Dash DASH</h3>
                                <h6 class="text-muted">0.00000434 <span class="color-gray">BTC</span> <span class="text-info">$0.04</span></h6>
                            </div>
                            <div class="col-5 text-right">
                                <h3>$8,569</h3>
                                <h6 class="text-primary">31% <i class="ti-arrow-up f-s-16 text-primary m-l-5"></i></h6>
                            </div>
                        </div>
                        <div class="m-t-15">
                            <span class="peity-dash" data-peity='{ "fill": "rgba(28, 117, 188, 0.45)", "stroke": "#1c75bc"}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-seven">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc ETH" title="ETH"></i>
                            </div>
                            <div class="col-5">
                                <h3>Ethereum  ETH</h3>
                                <h6 class="text-muted">0.00000434 <span class="color-gray">BTC</span> <span class="text-info">$0.04</span></h6>
                            </div>
                            <div class="col-5 text-right">
                                <h3>$8,569</h3>
                                <h6 class="text-info">31% <i class="ti-arrow-up f-s-16 text-info m-l-5"></i></h6>
                            </div>
                        </div>
                        <div class="m-t-15">
                            <span class="peity-eth" data-peity='{ "fill": "rgba(70, 70, 70, 0.5)", "stroke": "#282828"}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-seven">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc XRP" title="XRP"></i>
                            </div>
                            <div class="col-5">
                                <h3>Ripple  XRP</h3>
                                <h6 class="text-muted">0.00000434 <span class="color-gray">BTC</span> <span class="text-info">$0.04</span></h6>
                            </div>
                            <div class="col-5 text-right">
                                <h3>$8,569</h3>
                                <h6 class="text-danger">31% <i class="ti-arrow-up f-s-16 text-danger m-l-5"></i></h6>
                            </div>
                        </div>
                        <div class="m-t-15">
                            <span class="peity-xrp" data-peity='{ "fill": "rgba(52, 106, 169, 0.51)", "stroke": "#346aa9"}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /# row -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-title">
                    <h4>Trade History</h4>
                </div>
                <div class="card-body">
                    <div class="trade-history-table">
                        <div class="table-responsive">
                            <table class="table table-xs">
                                <thead>
                                    <tr>
                                        <th>Price($)</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-success">11900.12</td>
                                        <td><i class="cc BTC"></i> 0.215</td>
                                        <td>11:23:25</td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger">11903.18</td>
                                        <td><i class="cc LTC"></i> 1.545</td>
                                        <td>11:23:05</td>
                                    </tr>
                                    <tr>
                                        <td class="text-success">11899.56</td>
                                        <td><i class="cc BTC"></i> 0.541</td>
                                        <td>11:22:50</td>
                                    </tr>
                                    <tr>
                                        <td class="danger">11910.52</td>
                                        <td><i class="cc BTC"></i> 0.321</td>
                                        <td>11:22:15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger">11901.15</td>
                                        <td><i class="cc BTC"></i> 0.548</td>
                                        <td>11:21:25</td>
                                    </tr>
                                    <tr>
                                        <td class="text-success">11903.45</td>
                                        <td><i class="cc BTC"></i> 0.587</td>
                                        <td>11:21:01</td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger">11895.50</td>
                                        <td><i class="cc BTC"></i> 5.125</td>
                                        <td>11:20:15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger">11889.56</td>
                                        <td><i class="cc BTC"></i> 0.894</td>
                                        <td>11:20:03</td>
                                    </tr>
                                    <tr>
                                        <td class="text-success">11885.69</td>
                                        <td><i class="cc BTC"></i> 0.754</td>
                                        <td>11:19:55</td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger">11891.12</td>
                                        <td><i class="cc BTC"></i> 0.889</td>
                                        <td>11:19:15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger">11889.88</td>
                                        <td><i class="cc BTC"></i> 0.654</td>
                                        <td>11:18:18</td>
                                    </tr>
                                    <tr>
                                        <td class="text-success">11881.15</td>
                                        <td><i class="cc BTC"></i> 1.254</td>
                                        <td>11:18:01</td>
                                    </tr>
                                    <tr>
                                        <td class="text-success">11875.75</td>
                                        <td><i class="cc BTC"></i> 0.885</td>
                                        <td>11:17:25</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-title">
                    <h4>Active Order</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-de mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Amount BTC</th>
                                    <th>BTC Remaining</th>
                                    <th>Price</th>
                                    <th>USD</th>
                                    <th>Fee (%)</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018-01-31 06:51:51</td>
                                    <td class="success">Buy</td>
                                    <td><i class="cc BTC"></i> 0.58647</td>
                                    <td><i class="cc BTC"></i> 0.58647</td>
                                    <td>11900.12</td>
                                    <td>$ 6979.78</td>
                                    <td>0.2</td>
                                    <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2018-01-31 06:50:50</td>
                                    <td class="danger">Sell</td>
                                    <td><i class="cc BTC"></i> 1.38647</td>
                                    <td><i class="cc BTC"></i> 0.38647</td>
                                    <td>11905.09</td>
                                    <td>$ 4600.97</td>
                                    <td>0.2</td>
                                    <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2018-01-31 06:49:51</td>
                                    <td class="success">Buy</td>
                                    <td><i class="cc BTC"></i> 0.45879</td>
                                    <td><i class="cc BTC"></i> 0.45879</td>
                                    <td>11901.85</td>
                                    <td>$ 5460.44</td>
                                    <td>0.2</td>
                                    <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2018-01-31 06:51:51</td>
                                    <td class="success">Buy</td>
                                    <td><i class="cc BTC"></i> 0.89877</td>
                                    <td><i class="cc BTC"></i> 0.89877</td>
                                    <td>11899.25</td>
                                    <td>$ 10694.6</td>
                                    <td>0.2</td>
                                    <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2018-01-31 06:51:51</td>
                                    <td class="danger">Sell</td>
                                    <td><i class="cc BTC"></i> 0.45712</td>
                                    <td><i class="cc BTC"></i> 0.45712</td>
                                    <td>11908.58</td>
                                    <td>$ 5443.65</td>
                                    <td>0.2</td>
                                    <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2018-01-31 06:51:51</td>
                                    <td class="success">Buy</td>
                                    <td><i class="cc BTC"></i> 0.58647</td>
                                    <td><i class="cc BTC"></i> 0.58647</td>
                                    <td>11900.12</td>
                                    <td>$ 6979.78</td>
                                    <td>0.2</td>
                                    <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-title">
                    <h4>Sell Order</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-de mb-0">
                            <thead>
                                <tr>
                                    <th>Price per BTC</th>
                                    <th>BTC Ammount</th>
                                    <th>Total($)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10583.4</td>
                                    <td><i class="cc BTC"></i> 0.45000000</td>
                                    <td>$ 4762.53</td>
                                </tr>
                                <tr>
                                    <td>10583.5</td>
                                    <td><i class="cc BTC"></i> 0.04000000</td>
                                    <td>$ 423.34</td>
                                </tr>
                                <tr>
                                    <td>10583.7</td>
                                    <td><i class="cc BTC"></i> 0.25100000</td>
                                    <td>$ 2656.51</td>
                                </tr>
                                <tr>
                                    <td>10583.8</td>
                                    <td><i class="cc BTC"></i> 0.35000000</td>
                                    <td>$ 3704.33</td>
                                </tr>
                                <tr>
                                    <td>10595.7</td>
                                    <td><i class="cc BTC"></i> 0.30000000</td>
                                    <td>$ 3178.71</td>
                                </tr>
                                <tr>
                                    <td>10599.5</td>
                                    <td><i class="cc BTC"></i> 0.02000000</td>
                                    <td>$ 211.99</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-title">
                    <h4>Buy Order</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-de mb-0">
                            <thead>
                                <tr>
                                    <th>Price per BTC</th>
                                    <th>BTC Ammount</th>
                                    <th>Total($)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10599.5</td>
                                    <td><i class="cc BTC"></i> 0.02000000</td>
                                    <td>$ 211.99</td>
                                </tr>
                                <tr>
                                    <td>10583.5</td>
                                    <td><i class="cc BTC"></i> 0.04000000</td>
                                    <td>$ 423.34</td>
                                </tr>
                                <tr>
                                    <td>10583.8</td>
                                    <td><i class="cc BTC"></i> 0.35000000</td>
                                    <td>$ 3704.33</td>
                                </tr>
                                <tr>
                                    <td>10595.7</td>
                                    <td><i class="cc BTC"></i> 0.30000000</td>
                                    <td>$ 3178.71</td>
                                </tr>
                                <tr>
                                    <td>10583.7</td>
                                    <td><i class="cc BTC"></i> 0.25100000</td>
                                    <td>$ 2656.51</td>
                                </tr>
                                <tr>
                                    <td>10595.8</td>
                                    <td><i class="cc BTC"></i> 0.29697926</td>
                                    <td>$ 3146.74</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
    </div>
@endsection
@section('scripts')
    <!--Custom JavaScript -->
    <script src="js/lib/webticker/jquery.webticker.min.js"></script>
    <script src="js/lib/peitychart/jquery.peity.min.js"></script>
    <!-- scripit init-->
    <script src="js/dashboard-1.js"></script>
@endsection