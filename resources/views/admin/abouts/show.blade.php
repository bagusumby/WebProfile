@extends('layouts.admin.app')
@section('title', 'Web Profile - About Details')

@section('content')
  <div class="card p-4">
    <div class="row mx-0">
      <div class="col-md-12 mb-4">
        <h3>About Details</h3>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Description</label>
        <p>{{ $about->description }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Title</label>
        <p>{{ $about->title }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Sub Title</label>
        <p>{{ $about->subTitle }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Birthday</label>
        <p>{{ $about->birthday }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Website Url</label>
        <p>{{ $about->website }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Phone Number</label>
        <p>{{ $about->phone }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Degree</label>
        <p>{{ $about->degree }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Email</label>
        <p>{{ $about->email }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">City</label>
        <p>{{ $about->city }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">My Personal Info</label>
        <p>{{ $about->myPersonalInfo }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Image</label>
        <br>
        <img src="{{ asset('storage/' . $about->image) }}" alt="image" width="100">
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="{{ route('abouts.index') }}" class="btn btn-outline-secondary me-2">Back</a>
      <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-primary">Edit</a>
    </div>
  </div>
@endsection
