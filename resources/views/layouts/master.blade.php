<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - Laravelブログ</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </head>
    <body>
    <div class="container">
        <div class="header clearfix">
            <nav>
              <ul class="nav nav-pills float-right">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        ログアウト
                    </a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="/">新規会員登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">ログイン</a>
                </li>
              </ul>
            </nav>
        <h3 class="text-muted">Laravelブログ</h3>
        </div>

        <div class="container">
             @yield('content')
        </div>
        
        <footer class="footer">
            <nav class="navbar navbar-toggleable-md navbar-light">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/list">記事一覧</a></li>
                        <li class="nav-item"><a class="nav-link" href="/blog/create">記事新規作成ページ</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ranking">アクセス数ランキング</a></li>
                    </ul>
                </div>
            </nav>
        </footer>
    </div>
    </body>
</html>