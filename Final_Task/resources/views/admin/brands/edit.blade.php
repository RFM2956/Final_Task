@extends("admin.layouts.master")

@section("content")
    <div class="content">
        <h1>Edit Image</h1>

        <form enctype='multipart/form-data' action="{{ route('admin.brands.update', $brand->id) }}" method="post">
            @csrf
            @method('PUT')
            
            <div>
                <img src="{{ asset($brand->img) }}" alt="">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="title" style="width: 100%;">Title:</label>
                <input type="file" id="file" name="img" required style="width: 50%; padding: 8px;">
            </div>

            <button class="btn btn-success" type="submit">Refresh</button>
        </form>
    </div>
@endsection
