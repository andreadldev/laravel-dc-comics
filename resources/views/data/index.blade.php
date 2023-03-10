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
            <th scope="col">details</th>
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
            <td> 
                <a href="{{ route('comics.show', $comic->id) }}"><i class="btn text-primary fa-solid fa-eye"></i></a>
                <a href="{{ route('comics.edit', $comic->id) }}"><i class="btn text-primary fa-solid fa-pencil"></i></a>
                <button type="button" class="btn text-danger border-none fw-bold" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="fa-solid fa-trash-can"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="w-100 d-flex">
    <a href="{{ route('comics.create') }}" class="btn btn-primary ms-auto me-4">+</a>
</div>
@include('partials.modal')
@endsection


