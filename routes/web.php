<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{tanaka}', function () {
   $body = "<p>Laravelブログ</p>";
   $img = "<img src='https://www.google.co.jp/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'>";
   $title = "<title>$tanaka</title>";
   //""で囲むと変数展開ってのができる。
   $html = "<html><head>$title</head><body>$body $img</body></html>";
   return $html;
});
