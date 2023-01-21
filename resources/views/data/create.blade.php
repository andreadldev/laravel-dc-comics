@extends('layout/data-layout')

@section('page-title')
Create
@endsection

@section('page-main')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title*</label>
            <input type="text" class="form-control" id="title" name="title" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description*</label>
            <textarea rows="3" class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb*</label>
            <input type="url" class="form-control" id="thumb" name="thumb" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price*</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series*</label>
            <input type="text" class="form-control" id="series" name="series" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date*</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type*</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
