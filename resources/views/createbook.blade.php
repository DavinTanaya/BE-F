@extends('layout')
@section('title', 'CreateBook')
@section('content')
    <form action="/post-create-book" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Book Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harry Potter" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Book Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection