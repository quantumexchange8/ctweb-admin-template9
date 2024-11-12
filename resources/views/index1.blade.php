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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BTC</h4>
                        <div id="morris-area-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BTC vs LTC</h4>
                        <div id="morris-area-chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BTC vs LTC vs NEO</h4>
                        <div id="morris-area-chart3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BTC vs LTC vs NEO vs DASH</h4>
                        <div id="morris-area-chart4"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BTC vs LTC vs NEO vs DASH vs ETH</h4>
                        <div id="morris-area-chart5"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BTC vs LTC vs NEO vs DASH vs ETH vs XRP</h4>
                        <div id="morris-area-chart6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div id="accordion" class="accordion">
                    <div class="card">
                        <a class="card-header bg-primary-darken-5 card-title" data-toggle="collapse" aria-expanded="true" href="#collapseOne">
                            Limit
                        </a>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row my-2 p-l-15 p-r-15">
                                        <div class="col-4">
                                            <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                        </div>
                                        <div class="col-8 text-right">
                                            <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                        </div>
                                    </div>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-limit-buy-price">Price</label>
                                                <div class="col-md-8">
                                                    <input type="number" id="btc-limit-buy-price" class="form-control" placeholder="$ 11916.9" name="btc-limit-buy-price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-limit-buy-amount">Amount</label>
                                                <div class="col-md-8">
                                                    <input type="number" id="btc-limit-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-limit-buy-amount">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-limit-buy-total">Total</label>
                                                <div class="col-md-8">
                                                    <input type="number" disabled id="btc-limit-buy-total" class="form-control" placeholder="$ 318.1856" name="btc-limit-buy-total">
                                                </div>
                                            </div>
                                            <div class="form-actions pb-0 m-l-15 m-r-15">
                                                <button type="submit" class="btn round btn-success btn-block btn-glow"> Buy BTC </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row my-2 p-r-15 p-l-15">
                                        <div class="col-4">
                                            <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                        </div>
                                        <div class="col-8 text-right">
                                            <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                        </div>
                                    </div>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Price</label>
                                                <div class="col-md-8">
                                                    <input type="number" id="btc-limit-sell-price" class="form-control" placeholder="$ 11916.9" name="btc-limit-sell-price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-limit-sell-amount">Amount</label>
                                                <div class="col-md-8">
                                                    <input type="number" id="btc-limit-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-limit-sell-amount">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-limit-sell-total">Total</label>
                                                <div class="col-md-8">
                                                    <input type="number" disabled id="btc-limit-sell-total" class="form-control" placeholder="$ 318.1856" name="btc-limit-sell-total">
                                                </div>
                                            </div>
                                            <div class="form-actions pb-0 m-l-15 m-r-15">
                                                <button type="submit" class="btn round btn-danger btn-block btn-glow"> Sell BTC </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a class="card-header collapsed bg-primary-darken-5 card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Market 
                        </a>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="row my-2 p-l-15 p-r-15">
                                        <div class="col-4">
                                            <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                        </div>
                                        <div class="col-8 text-right">
                                            <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                        </div>
                                    </div>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-market-buy-price">Price</label>
                                                <div class="col-md-8">
                                                    <input type="number" disabled id="btc-market-buy-price" class="form-control" placeholder="Market prise $" name="btc-market-buy-price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-market-buy-amount">Amount</label>
                                                <div class="col-md-8">
                                                    <input type="number" id="btc-market-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-market-buy-amount">
                                                </div>
                                            </div>
                                            <div class="form-actions pb-0 m-l-15 m-r-15">
                                                <button type="submit" class="btn round btn-success btn-block btn-glow"> Buy BTC </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="row my-2 p-r-15 p-l-15">
                                        <div class="col-4">
                                            <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                        </div>
                                        <div class="col-8 text-right">
                                            <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                        </div>
                                    </div>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Price</label>
                                                <div class="col-md-8">
                                                    <input type="number" disabled id="btc-market-sell-price" class="form-control" placeholder="Market prise $" name="btc-market-sell-price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="btc-market-sell-amount">Amount</label>
                                                <div class="col-md-8">
                                                    <input type="number" id="btc-market-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-market-sell-amount">
                                                </div>
                                            </div>
                                            <div class="form-actions pb-0 m-l-15 m-r-15">
                                                <button type="submit" class="btn round btn-danger btn-block btn-glow"> Sell BTC </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a class="card-header collapsed bg-primary-darken-5 card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Stop Limit 
                        </a>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="row my-2 p-l-15 p-r-15">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-buy">Stop</label>
                                                    <div class="col-md-8">
                                                        <input type="number" id="btc-stop-buy" class="form-control" placeholder="$ 11916.9" name="btc-stop-buy">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-buy-limit">Limit</label>
                                                    <div class="col-md-8">
                                                        <input type="number" id="btc-stop-buy-limit" class="form-control" placeholder="$ 12000.0" name="btc-stop-buy-limit">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-buy-amount">Amount</label>
                                                    <div class="col-md-8">
                                                        <input type="number" id="btc-stop-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-stop-buy-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-buy-total">Total</label>
                                                    <div class="col-md-8">
                                                        <input type="number" disabled id="btc-stop-buy-total" class="form-control" placeholder="$ 318.1856" name="btc-stop-buy-total">
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0 m-l-15 m-r-15">
                                                    <button type="submit" class="btn round btn-success btn-block btn-glow"> Buy BTC </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="row my-2 p-r-15 p-l-15">
                                            <div class="col-4">
                                                <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                                            </div>
                                            <div class="col-8 text-right">
                                                <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                                            </div>
                                        </div>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-sell">Stop</label>
                                                    <div class="col-md-8">
                                                        <input type="number" id="btc-stop-sell" class="form-control" placeholder="$ 11916.9" name="btc-stop-sell">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-sell-limit">Limit</label>
                                                    <div class="col-md-8">
                                                        <input type="number" id="btc-stop-sell-limit" class="form-control" placeholder="$ 12000.0" name="btc-stop-sell-limit">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-sell-amount">Amount</label>
                                                    <div class="col-md-8">
                                                        <input type="number" id="btc-stop-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-stop-sell-amount">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 col-form-label" for="btc-stop-sell-total">Total</label>
                                                    <div class="col-md-8">
                                                        <input type="number" disabled id="btc-stop-sell-total" class="form-control" placeholder="$ 318.1856" name="btc-stop-sell-total">
                                                    </div>
                                                </div>
                                                <div class="form-actions pb-0 m-l-15 m-r-15">
                                                    <button type="submit" class="btn round btn-danger btn-block btn-glow"> Sell BTC </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
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
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
@endsection
@section('scripts')
    <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>

    <script src="js/dashboard-2.js"></script>
@endsection