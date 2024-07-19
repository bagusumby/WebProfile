@extends('layouts.admin.app')
@section('title', 'Web Profile - Edit Contact')

@section('content')
  <div class="card p-4">
    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row mx-0">
        <div class="col-md-12 mb-4">
          <h3>Edit Contact</h3>
        </div>
        <div class="mb-3 col-md-6">
          <label for="location" class="form-label">Location</label>
          <input class="form-control" type="text" id="location" name="location"
            value="{{ old('location', $contact->location) }}" />
          @if ($errors->has('location'))
            <span class="text-danger">{{ $errors->first('location') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="text" id="email" name="email"
            value="{{ old('email', $contact->email) }}" />
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="whatsapp" class="form-label">Whatsapp</label>
          <input class="form-control" type="text" id="whatsapp" name="whatsapp"
            value="{{ old('whatsapp', $contact->whatsapp) }}" />
          @if ($errors->has('whatsapp'))
            <span class="text-danger">{{ $errors->first('whatsapp') }}</span>
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>

  </div>
@endsection
