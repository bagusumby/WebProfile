@extends('layouts.admin.app')
@section('title', 'Web Profile - Edit Footer')

@section('content')
  <div class="card p-4">
    <form action="{{ route('footer.update', $footer->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row mx-0">
        <div class="col-md-12 mb-4">
          <h3>Edit Footer</h3>
        </div>
        <div class="mb-3 col-md-6">
          <label for="title" class="form-label">Title</label>
          <input class="form-control" type="text" id="title" name="title"
            value="{{ old('title', $footer->title) }}" />
          @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" type="text" id="description" name="description" autofocus>{{ old('description', $footer->description) }}</textarea>
          @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="github" class="form-label">Github</label>
          <textarea class="form-control" type="text" id="github" name="github">{{ old('github', $footer->github) }}</textarea>
          @if ($errors->has('github'))
            <span class="text-danger">{{ $errors->first('github') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="instagram" class="form-label">Instagram</label>
          <input class="form-control" type="text" id="instagram" name="instagram"
            value="{{ old('instagram', $footer->instagram) }}" />
          @if ($errors->has('instagram'))
            <span class="text-danger">{{ $errors->first('instagram') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="facebook" class="form-label">Facebook</label>
          <input class="form-control" type="text" id="facebook" name="facebook"
            value="{{ old('facebook', $footer->facebook) }}" />
          @if ($errors->has('facebook'))
            <span class="text-danger">{{ $errors->first('facebook') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="linkedin" class="form-label">linkedin</label>
          <input class="form-control" type="text" id="linkedin" name="linkedin"
            value="{{ old('linkedin', $footer->linkedin) }}" />
          @if ($errors->has('linkedin'))
            <span class="text-danger">{{ $errors->first('linkedin') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="copyright" class="form-label">Copyright</label>
          <input class="form-control" type="text" id="copyright" name="copyright"
            value="{{ old('copyright', $footer->copyright) }}" />
          @if ($errors->has('copyright'))
            <span class="text-danger">{{ $errors->first('copyright') }}</span>
          @endif
        </div>

      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('footer.index') }}" class="btn btn-outline-secondary me-2">Cancel</a>
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
