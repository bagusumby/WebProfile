@extends('layouts.admin.app')
@section('title', 'Web Profile - Portofolio Details')

@section('content')
  <div class="card p-4">
    <div class="row mx-0">
      <div class="col-md-12 mb-4">
        <h3>Portofolio Detail</h3>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Title</label>
        <p>{{ $portofolio->title }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Description</label>
        <p>{{ $portofolio->description }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Category</label>
        <p>{{ $portofolio->category }}</p>
      </div>
      <div class="mb-3 col-md-12">
        <label class="form-label fw-bolder">Image</label>
        <br>
        <img src="{{ asset('storage/' . $portofolio->image) }}" alt="image" width="300">
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="{{ route('portofolio.index') }}" class="btn btn-outline-secondary me-2">Back</a>
      <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="btn btn-primary">Edit</a>
    </div>
  </div>
@endsection
