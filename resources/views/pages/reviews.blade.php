@extends('layouts.website.main')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <p>We provied following services</p>
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
