<!-- <html>
  <head>
    <title>Exit Intent</title>
  </head>
  <body>
    <iframe src="http://platform.test/c/jny6jp83" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
    <button>Link Campaign</button>
  </body>
</html>
 -->

 @extends('layouts.master')

@section('title','Title DhiarLaravel')

@section('content')
<h1>Selamat Datang di Home</h1>

<br>
{{ $blog }}
<br> <br>
@foreach($users as $user)
    Name {{ $user->name }} __ id :  {{ $user->id }}
@endforeach
@endsection
