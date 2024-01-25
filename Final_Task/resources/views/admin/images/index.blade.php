@extends("admin.layouts.master")

@section("content")
  <div class="content">
        <h2>Images</h2>
       @if(session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    <a href="@route('images.create')" class="btn btn-success">Create</a>

    @if($images->count() > 0)
     <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Images</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $img)
                    <tr>
                        <th scope="row">{{ $img->id }}</th>
                        <td>
                            <img src="{{asset($img->img)}}" alt="">
                        </td>
                        <td><a href="{{route('admin.images.edit', $img->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form onsubmit="return deleteConfirmation(event)" method="POST" action="{{route('admin.images.destroy', $img->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
            </tbody>
        </table>
        @else 
        <div>
        there is no data
        </div>
    @endif()
       
    </div>
@endsection