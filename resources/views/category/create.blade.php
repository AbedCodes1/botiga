@extends('layouts.layout')

@section('body')


<form action="{{route('categories.show')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" placeholder="category name" name="cat_name">
    </div>
    <div>
        <input type="file" placeholder="" name="cat_image" >
    </div>
    <div>
        <input type="submit" value="Save">
    </div>
</form>

@endsection

