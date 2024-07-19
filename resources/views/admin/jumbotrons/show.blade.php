@extends('layouts.admin.app')
@section('title', 'Web Profile - Jumbotron Details')

@section('content')
  <div class="card p-4">
    <div class="row mx-0">
      <div class="col-md-12 mb-4">
        <h3>Jumbotron Detail</h3>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Name</label>
        <p>{{ $jumbotron->name }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Pekerjaan</label>
        <p>{{ $jumbotron->work }}</p>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Instagram</label>
        <br>
        <a href="{{ $jumbotron->instagram }}" target="_blank">{{ $jumbotron->instagram }}</a>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Github</label>
        <br>
        <a href="{{ $jumbotron->github }}" target="_blank">{{ $jumbotron->github }}</a>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Facebook</label>
        <br>
        <a href="{{ $jumbotron->facebook }}" target="_blank">{{ $jumbotron->facebook }}</a>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label fw-bolder">Linkedin</label>
        <br>
        <a href="{{ $jumbotron->linkedin }}" target="_blank">{{ $jumbotron->linkedin }}</a>
      </div>
      <div class="mb-3 col-md-12">
        <label class="form-label fw-bolder">Background Image</label>
        <br>
        <img src="{{ asset('storage/' . $jumbotron->background_image) }}" alt="image" width="300">
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="{{ route('jumbotron.index') }}" class="btn btn-outline-secondary me-2">Back</a>
      <a href="{{ route('jumbotron.edit', $jumbotron->id) }}" class="btn btn-primary">Edit</a>
    </div>
  </div>
@endsection
