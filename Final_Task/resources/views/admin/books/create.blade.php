@extends("admin.layouts.master")

@section("content")
 <div class="content">

          <h1>Create Book</h1>

          <form action="{{ route('admin.books.store') }}" method="post">
        @csrf

         <div style="margin-bottom: 15px;">
            <label for="title" style="width: 100%;">Book Title:</label>
            <input type="text" id="title" name="title" required style="width: 50%; padding: 8px;">
        </div>

          <div style="margin-bottom: 15px;">
        <label for="up_id" style="width: 100%;">Category:</label>
        <select id="up_id" name="up_id" style="width: 50%; padding: 8px;" required>
            <option value="0">Main Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>

        </div>

          <div>
        <button class="btn btn-success" type="submit">Create</button>
        </div>

    </form>
          <div>
    <a href="@route('books.index')" class="btn btn-success">Back</a>
        </div>

    </div>
@endsection