@extends('layout/data-layout')

@section('page-title')
Show
@endsection

@section('page-main')
<a class="p-3" href="{{ route('comics.index') }}"><i class="fa-solid fa-circle-arrow-left fs-3"></i></a>
<div class="container">
    <ul class="list-unstyled">
        <li><img src="{{$comic->thumb}}" alt=""></li>
        <li><span>{{$comic->series}}</span></span>
        <li><h3>{{$comic->title}}</h3></li>
        <li><p>{{$comic->description}}</p></li>
        <li>Price: <span>{{$comic->price}}$</span></li>
        <li>Sale date: <span>{{$comic->sale_date}}</span></li>
    </ul>
</div>
@endsection
