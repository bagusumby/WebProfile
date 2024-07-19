@extends('layouts.admin.app')
@section('title', 'Web Profile - Create Footer')

@section('content')
  <div class="card p-4">
    <h3 class="mb-4">Create Footer</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('footer.store') }}" method="POST">
      @csrf
      <div class="row mx-0">
        <div class="mb-3 col-md-6">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3 col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
        </div>
        <div class="mb-3 col-md-6">
          <label for="github" class="form-label">Github</label>
          <input type="url" class="form-control" id="github" name="github" value="{{ old('github') }}">
        </div>
        <div class="mb-3 col-md-6">
          <label for="instagram" class="form-label">Instagram</label>
          <input type="url" class="form-control" id="instagram" name="instagram" value="{{ old('instagram') }}">
        </div>
        <div class="mb-3 col-md-6">
          <label for="facebook" class="form-label">Facebook</label>
          <input type="url" class="form-control" id="facebook" name="facebook" value="{{ old('facebook') }}">
        </div>
        <div class="mb-3 col-md-6">
          <label for="linkedin" class="form-label">LinkedIn</label>
          <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin') }}">
        </div>
        <div class="mb-3 col-md-6">
          <label for="copyright" class="form-label">Copyright</label>
          <input type="text" class="form-control" id="copyright" name="copyright" value="{{ old('copyright') }}"
            required>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('footer.index') }}" class="btn btn-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary ">Save</button>
      </div>
    </form>
  </div>
@endsection
