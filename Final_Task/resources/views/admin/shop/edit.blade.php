@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <h1>Edit Product</h1>

        <form method="POST" action="{{ route('admin.shop.update', $img->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Author:</label>
                <input type="text" name="author" id="head" value="{{ old('author', $img->author) }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $img->title) }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" value="{{ old('price', $img->price) }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="title">Percent:</label>
                <input type="text" name="percent" id="title" value="{{ old('percent', $img->percent) }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="file">Image:</label>
                <img src="{{asset($img->img)}}" alt="">
                <input type="file" id="file" name="img"  required style="width: 50%; padding: 8px;">
            </div>

            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
