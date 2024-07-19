@extends('layouts.admin.app')
@section('title', 'Web Profile - Footer Details')

@section('content')
  <div class="card p-4">
    <div class="row mx-0">
      <div class="col-md-12 mb-4">
        <h3>Footer Detail</h3>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Title</label>
        <p>{{ $footer->title }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Description</label>
        <p>{{ $footer->description }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Github</label>
        <p>{{ $footer->github }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Instagram</label>
        <p>{{ $footer->instagram }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Facebook</label>
        <p>{{ $footer->facebook }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Linkedin</label>
        <p>{{ $footer->linkedin }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Copyright</label>
        <p>{{ $footer->copyright }}</p>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="{{ route('footer.index') }}" class="btn btn-outline-secondary me-2">Back</a>
      <a href="{{ route('footer.edit', $footer->id) }}" class="btn btn-primary">Edit</a>
    </div>
  </div>
@endsection
