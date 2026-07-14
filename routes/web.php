<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/microsite-1', function () {
    return view('microsite-page-1.index',[
        'pageCSS' => 'assets/microsite-page-1/style.css',
        'title' => 'Microsite 1',
        ]);
});

Route::get('/practice-microsite-1', function () {
    return view('practice-microsite-page-1.index',[
        'pageCSS' => 'assets/practice-microsite-1/style.css',
        'title' => 'Practice Microsite 1',
        ]);
});

Route::get('/convert-csv-to-json', function () {
    return view('page-convert-csv-to-json.index',[
        'pageCSS' => 'assets/page-convert-csv-to-json/style.css',
        'title' => 'Convert CSV to JSON',
        ]);
});

Route::get('/tracking-request-website', function () {
    return view('page-tracking-request-website.index',[
        'pageCSS' => 'assets/page-tracking-request-website/style.css',
        'title' => 'Tracking Request Website',
        ]);
});

Route::get('/tracking-request-website-table', function () {
    return view('page-tracking-request-website.table',[
        'pageCSS' => 'assets/page-tracking-request-website/style.css',
        'title' => 'Tracking Request Website Table',
        ]);
});

Route::get('/tracking-request-website-form', function () {
    return view('page-tracking-request-website.form',[
        'pageCSS' => 'assets/page-tracking-request-website/style.css',
        'title' => 'Tracking Request Website Form',
        ]);
});

Route::get('/kartuliburan-cloning', function () {
    return view('page-kartuliburan-ocbc.index',[
        'pageCSS' => 'assets/kartuliburan-clone/style.css',
        'title' => 'Kartu Liburan Cloning',
        'isOCBC' => true,
        ]);
});

Route::get('/kartuliburan-ocbc', function () {
    return view('page-kartuliburan-ocbc.index',[
        'pageCSS' => 'assets/kartuliburan-clone/style.css',
        'title' => 'Kartu Liburan OCBC',
        'isOCBC' => true,
        ]);
});

