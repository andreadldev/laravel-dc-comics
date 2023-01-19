@extends('layout/data-layout')

@section('page-title')
Index
@endsection

@section('page-main')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">thumb</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $key=>$comic)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$comic->title}}</td>
            <td>{{mb_strimwidth($comic->description, 0, 70, "...");}}</td>
            <td>{{$comic->thumb}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
