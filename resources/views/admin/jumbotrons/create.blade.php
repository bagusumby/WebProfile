@extends('layouts.admin.app')
@section('title', 'Web Profile - Create Jumbotron')

@section('content')
  <div class="card p-4">
    <h3 class="mb-4">Create Jumbotron</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('jumbotron.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row mx-0">
        <div class="mb-3 col-md-6">
          <label for="background_image" class="form-label">Background Image</label>
          <input class="form-control" type="file" id="background_image" name="background_image" />
          @if ($errors->has('background_image'))
            <span class="text-danger">{{ $errors->first('background_image') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
          @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="work" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" id="work" name="work" value="{{ old('work') }}" required>
          @if ($errors->has('work'))
            <span class="text-danger">{{ $errors->first('work') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="github" class="form-label">Github</label>
          <input type="url" class="form-control" id="github" name="github" value="{{ old('github') }}">
          @if ($errors->has('github'))
            <span class="text-danger">{{ $errors->first('github') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="instagram" class="form-label">Instagram</label>
          <input type="url" class="form-control" id="instagram" name="instagram" value="{{ old('instagram') }}">
          @if ($errors->has('instagram'))
            <span class="text-danger">{{ $errors->first('instagram') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="facebook" class="form-label">Facebook</label>
          <input type="url" class="form-control" id="facebook" name="facebook" value="{{ old('facebook') }}">
          @if ($errors->has('facebook'))
            <span class="text-danger">{{ $errors->first('facebook') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="linkedin" class="form-label">LinkedIn</label>
          <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin') }}">
          @if ($errors->has('linkedin'))
            <span class="text-danger">{{ $errors->first('linkedin') }}</span>
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('jumbotron.index') }}" class="btn btn-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary ">Save</button>
      </div>
    </form>
  </div>
@endsection
