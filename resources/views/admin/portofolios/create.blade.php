@extends('layouts.admin.app')
@section('title', 'Web Profile - Create Portofolio')

@section('content')
  <div class="card p-4">
    <h3 class="mb-4">Create Portofolio</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row mx-0">
        <div class="mb-3 col-md-6">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
          @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
          @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="category" class="form-label">Category</label>
          <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
          @if ($errors->has('category'))
            <span class="text-danger">{{ $errors->first('category') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="url" class="form-label">Url</label>
          <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
          @if ($errors->has('url'))
            <span class="text-danger">{{ $errors->first('url') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="image" class="form-label">Image</label>
          <input class="form-control" type="file" id="image" name="image" />
          @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
          @endif
        </div>

      </div>
      <div class="d-flex justify-content-center">
        <a href="{{ route('portofolio.index') }}" class="btn btn-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary ">Save</button>
      </div>
    </form>
  </div>
@endsection
