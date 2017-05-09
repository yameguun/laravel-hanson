<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
       $body = "<p>Laravelブログ</p>";
       $img = "<img src='https://www.google.co.jp/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'>";
       $title = "<title>Laravelブログ</title>";
       //""で囲むと変数展開ってのができる。
       $html = "<html><head>$title</head><body>$body $img</body></html>";
       return $html;
   }
}
