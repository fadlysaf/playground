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

