@extends('layouts.website.main')

@section('content')
    <div class="jumbotron text-center">

        <h1>{{$title}}</h1>
        <p>This is the laravel application from the "Laravel from Scratch" series.</p>

        @guest
        @if (Route::has('register'))
            <a class="btn btn-primary" href="{{ route('register') }}" style="font-size: 20px;">{{ __('Get Started') }}</a>
        @endif
        @else
            <a href="/posts/create" class="btn btn-primary" style="font-size: 20px;">Create New Post</a>
        @endguest

    </div>
@endsection
