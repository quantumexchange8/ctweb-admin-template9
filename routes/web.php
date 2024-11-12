<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/chart-amchart', function () {
    return view('chart-amchart');
});

Route::get('/chart-chartist', function () {
    return view('chart-chartist');
});

Route::get('/chart-chartjs', function () {
    return view('chart-chartjs');
});

Route::get('/chart-echart', function () {
    return view('chart-echart');
});

Route::get('/chart-knob', function () {
    return view('chart-knob');
});

Route::get('/chart-morris', function () {
    return view('chart-morris');
});

Route::get('/chart-peity', function () {
    return view('chart-peity');
});

Route::get('/chart-sparkline', function () {
    return view('chart-sparkline');
});

Route::get('/email-compose', function () {
    return view('email-compose');
});

Route::get('/email-inbox', function () {
    return view('email-inbox');
});

Route::get('/email-read', function () {
    return view('email-read');
});

Route::get('/form-basic', function () {
    return view('form-basic');
});

Route::get('/form-dropzone', function () {
    return view('form-dropzone');
});

Route::get('/form-editor', function () {
    return view('form-editor');
});

Route::get('/form-layout', function () {
    return view('form-layout');
});

Route::get('/form-validation', function () {
    return view('form-validation');
});

Route::get('/index1', function () {
    return view('index1');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index3', function () {
    return view('index3');
});

Route::get('/index4', function () {
    return view('index4');
});

Route::get('/index5', function () {
    return view('index5');
});

Route::get('/layout-blank', function () {
    return view('layout-blank');
});

Route::get('/layout-boxed', function () {
    return view('layout-boxed');
});

Route::get('/layout-fix-header', function () {
    return view('layout-fix-header');
});

Route::get('/layout-fix-sidebar', function () {
    return view('layout-fix-sidebar');
});

Route::get('/map-vector', function () {
    return view('map-vector');
});

Route::get('/page-error-400', function () {
    return view('page-error-400');
});

Route::get('/page-error-403', function () {
    return view('page-error-403');
});

Route::get('/page-error-404', function () {
    return view('page-error-404');
});

Route::get('/page-error-500', function () {
    return view('page-error-500');
});

Route::get('/page-error-503', function () {
    return view('page-error-503');
});

Route::get('/page-invoice', function () {
    return view('page-invoice');
});

Route::get('/page-login', function () {
    return view('page-login');
});

Route::get('/page-register', function () {
    return view('page-register');
});

Route::get('/table-bootstrap', function () {
    return view('table-bootstrap');
});

Route::get('/table-datatable', function () {
    return view('table-datatable');
});

Route::get('/uc-calender', function () {
    return view('uc-calender');
});

Route::get('/uc-datamap', function () {
    return view('uc-datamap');
});

Route::get('/uc-nestedable', function () {
    return view('uc-nestedable');
});

Route::get('/uc-sweetalert', function () {
    return view('uc-sweetalert');
});

Route::get('/uc-toastr', function () {
    return view('uc-toastr');
});

Route::get('/uc-weather', function () {
    return view('uc-weather');
});

Route::get('/ui-alert', function () {
    return view('ui-alert');
});

Route::get('/ui-button', function () {
    return view('ui-button');
});

Route::get('/ui-dropdown', function () {
    return view('ui-dropdown');
});

Route::get('/ui-progressbar', function () {
    return view('ui-progressbar');
});

Route::get('/ui-tab', function () {
    return view('ui-tab');
});

Route::get('/ui-typographt', function () {
    return view('ui-typographt');
});

Route::get('/ui-typography', function () {
    return view('ui-typography');
});

Route::get('/widget', function () {
    return view('widget');
});
