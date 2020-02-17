<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <ul>
            <li>
                <a href="/home/store-user">Store User</a>
            </li>
            <li>
                <a href="/home/store-user-factory">Store User Factory</a>
            </li>
            <li>
                <a href="/home/store-role">Store Role</a>
            </li>
            <li>
                <a href="/blog">Store Blog</a>
            </li>
            <li>
                <a href="/customers/store">Store Customer</a>
            </li>
            <li>
                <a href="/customers/list">Customer Scope</a>
            </li>
            <li>
                <a href="/article/onetomany">One-to-Many - Article</a>
                <ul>
                    <li>
                        <a href="/article/store">Store Article</a>
                    </li>
                    <li>
                        <a href="/article/show">Show Article</a>
                    </li>
                    <li>
                        <a href="/article/show-by-user/7">Show By User</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/home/pivot">Many-to-many (Pivot) - User_Role</a>
                <ul>
                    <li>
                        <a href="/user/ana">User Ana</a>
                    </li>
                    <li>
                        <a href="/user-all">User All</a>
                    </li>
                    <li>
                        <a href="/user-attach">User Attach Role</a>
                    </li>
                    <li>
                        <a href="/user-detach">User Detach Role</a>
                    </li>
                    <li>
                        <a href="/user-sync">User Sync Role</a>
                    </li>
                    <li>
                        <a href="/user-sync-wo-detach">User SyncWithOutDetaching Role</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/user-address"> One-To-One UserAddress</a>
            </li>
            <li>
                <a href="/user-articles"> One-To-Many UserArticles</a>
            </li>
        </ul>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
            <div class="content">
                <div class="title m-b-md">
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
