@extends('layouts.admin.app')
@section('title', 'Web Profile - Edit Jumbotron')

@section('content')
  <div class="card p-4">
    <h3 class="mb-4">Edit Jumbotron</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('jumbotron.update', $jumbotron->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row mx-0">
        <div class="mb-3 col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name"
            value="{{ old('name', $jumbotron->name) }}" required>
          @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="work" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" id="work" name="work"
            value="{{ old('work', $jumbotron->work) }}" required>
          @if ($errors->has('work'))
            <span class="text-danger">{{ $errors->first('work') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="github" class="form-label">Github</label>
          <input type="url" class="form-control" id="github" name="github"
            value="{{ old('github', $jumbotron->github) }}">
          @if ($errors->has('github'))
            <span class="text-danger">{{ $errors->first('github') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="instagram" class="form-label">Instagram</label>
          <input type="url" class="form-control" id="instagram" name="instagram"
            value="{{ old('instagram', $jumbotron->instagram) }}">
          @if ($errors->has('instagram'))
            <span class="text-danger">{{ $errors->first('instagram') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="facebook" class="form-label">Facebook</label>
          <input type="url" class="form-control" id="facebook" name="facebook"
            value="{{ old('facebook', $jumbotron->facebook) }}">
          @if ($errors->has('facebook'))
            <span class="text-danger">{{ $errors->first('facebook') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="linkedin" class="form-label">LinkedIn</label>
          <input type="url" class="form-control" id="linkedin" name="linkedin"
            value="{{ old('linkedin', $jumbotron->linkedin) }}">
          @if ($errors->has('linkedin'))
            <span class="text-danger">{{ $errors->first('linkedin') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="background_image" class="form-label">Background Image</label>
          <input class="form-control" type="file" id="background_image" name="background_image"
            onchange="previewImage(event)" />
          @if ($errors->has('background_image'))
            <span class="text-danger">{{ $errors->first('background_image') }}</span>
          @endif
          <br>
          @if ($jumbotron->background_image)
            <img id="preview" src="{{ asset('storage/' . $jumbotron->background_image) }}" alt="background_image"
              width="100">
          @else
            <img id="preview" src="" alt="background_image" width="100" style="display:none;">
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('jumbotron.index') }}" class="btn btn-outline-secondary me-2">Cancel</a>
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
