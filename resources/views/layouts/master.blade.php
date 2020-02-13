<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
  </head>
  <body>
    <header>      
      <nav>
        <a href="/">Home</a>
        <a href="/blog">Blog</a>
      </nav>    
    </header>
    <br>
    @yield('content')
    <br>

    <footer>
      <p>
        &copy; dhiarlaravel 2019
      </p>
    </footer>

  </body>
</html>