@extends('layouts.admin.app')
@section('title', 'Web Profile - Edit Portofolio')

@section('content')
  <div class="card p-4">
    <h3 class="mb-4">Edit Portofolio</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row mx-0">
        <div class="mb-3 col-md-6">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title"
            value="{{ old('title', $portofolio->title) }}" required>
          @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" type="text" id="description" name="description" autofocus>{{ old('description', $portofolio->description) }}</textarea>
          @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="category" class="form-label">Category</label>
          <input type="text" class="form-control" id="category" name="category"
            value="{{ old('category', $portofolio->category) }}">
          @if ($errors->has('category'))
            <span class="text-danger">{{ $errors->first('category') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="url" class="form-label">Url</label>
          <input type="text" class="form-control" id="url" name="url"
            value="{{ old('url', $portofolio->url) }}">
          @if ($errors->has('url'))
            <span class="text-danger">{{ $errors->first('url') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="image" class="form-label">Image</label>
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage(event)" />
          @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
          @endif
          <br>
          @if ($portofolio->image)
            <img id="preview" src="{{ asset('storage/' . $portofolio->image) }}" alt="image" width="100">
          @else
            <img id="preview" src="" alt="image" width="100" style="display:none;">
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('portofolio.index') }}" class="btn btn-outline-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
  <script>
    function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('preview');
        output.src = reader.result;
        output.style.display = 'block';
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>

@endsection
