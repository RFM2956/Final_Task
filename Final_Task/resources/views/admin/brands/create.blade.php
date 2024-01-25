@extends("admin.layouts.master")

@section("content")
 <div class="content">

          <h1>Create Image</h1>

    <form enctype= 'multipart/form-data' action="{{ route('admin.brands.store') }}" method="post">
        @csrf
         <div style="margin-bottom: 15px;">
            <input type="file" id="file" name="img" accept="image/jpeg, image/png, image/jpg" required >
        </div>
          <div>
        <button class="btn btn-success" type="submit">Create</button>
        </div>

    </form>
          <div>
    <a href="@route('brands.index')" class="btn btn-success">Back</a>
        </div>

    </div>
@endsection