@extends('layouts.admin.app')
@section('title', 'Web Profile - Create Contact')

@section('content')
  <div class="card p-4">
    <h3 class="mb-4">Create Contact</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('contact.store') }}" method="POST">
      @csrf
      <div class="row mx-0">
        <div class="mb-3 col-md-6">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
          @if ($errors->has('location'))
            <span class="text-danger">{{ $errors->first('location') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="whatsapp" class="form-label">whatsapp</label>
          <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}"
            required>
          @if ($errors->has('whatsapp'))
            <span class="text-danger">{{ $errors->first('whatsapp') }}</span>
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('contact.index') }}" class="btn btn-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary ">Save</button>
      </div>
    </form>
  </div>
@endsection
