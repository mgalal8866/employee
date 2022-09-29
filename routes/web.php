<?php

use Illuminate\Support\Facades\Route;
use Goutte\Client;


//  Route::get('/mm', function () {

//         $client = new Client();
//         $crawler = $client->request('GET', 'https://www.google.com/maps/place/WESTFIELD/@31.2186007,29.9649797,15z/data=!4m9!1m2!2m1!1z2YXYt9i52YU!3m5!1s0x14f5c51f3cd2a521:0x3f42b1bc939d8ddf!8m2!3d31.2186228!4d29.9485063!15sCgjZhdi32LnZhVoKIgjZhdi32LnZhZIBCnJlc3RhdXJhbnTgAQA');

//         $crawler->filter('body>div>div>div>div>div>div')->each(function ($node) {
//             dd($node);
//             //  dd($node->text());
//            print $node->text()."\n";
//         });
//     // return'';
// });
 Route::get('{any}', function () {return view('welcome');})->where('any', '.*');
// Route::get('/{vue_capture?}', function () {return view('welcome');})->where('vue_capture', '[\/\w\.-]*');

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
