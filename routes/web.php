<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LeadController;


Route::get('/', function () {
    return view('home');
});

Route::post('/lead', [LeadController::class, 'send'])->name('lead.send');

Route::get('/sitemap.xml', function (Request $request) {
    $siteUrl = rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), '/');

    return response()
        ->view('sitemap', compact('siteUrl'))
        ->header('Content-Type', 'application/xml');
});
