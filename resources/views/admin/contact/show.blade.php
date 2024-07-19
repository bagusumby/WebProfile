@extends('layouts.admin.app')
@section('title', 'Web Profile - Contact Details')

@section('content')
  <div class="card p-4">
    <div class="row mx-0">
      <div class="col-md-12 mb-4">
        <h3>Contact Detail</h3>
      </div>
      <div class="mb-3 col-md-12">
        <label class="form-label fw-bolder">Location</label>
        <p>{{ $contact->location }}</p>
      </div>
      <div class="mb-3 col-md-12">
        <label class="form-label fw-bolder">Email</label>
        <p>{{ $contact->email }}</p>
      </div>
      <div class="mb-3 col-md-12">
        <label class="form-label fw-bolder">Whatsapp</label>
        <p>{{ $contact->whatsapp }}</p>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary me-2">Back</a>
      <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
    </div>
  </div>
@endsection
