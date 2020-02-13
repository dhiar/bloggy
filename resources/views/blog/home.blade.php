@extends('layouts.master')

@section('title','Title DhiarLaravel')

@section('content')
<h1>Selamat Datang di Home</h1>

<br>

@foreach($blogs as $blog)
    <li> <a href="/blog/{{ $blog->id }}"> {{ $blog->title }} </a> </li>
@endforeach

@endsection
