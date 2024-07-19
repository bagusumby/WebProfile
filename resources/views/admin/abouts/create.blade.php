@extends('layouts.admin.app')
@section('title', 'Web Profile - Create About')

@section('content')
  <div class="card p-4">
    <h3 class="mb-4">Create About</h3>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row mx-0">
        <div class="mb-3 col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" type="text" id="description" name="description" autofocus>{{ old('description') }}</textarea>
          @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="title" class="form-label">Title</label>
          <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}" />
          @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="subTitle" class="form-label">Sub Title</label>
          <textarea class="form-control" type="text" id="subTitle" name="subTitle">{{ old('subTitle') }}</textarea>
          @if ($errors->has('subTitle'))
            <span class="text-danger">{{ $errors->first('subTitle') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="image" class="form-label">Image</label>
          <input class="form-control" type="file" id="image" name="image" />
          @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="birthday" class="form-label">Birthday</label>
          <input class="form-control" type="date" id="birthday" name="birthday" value="{{ old('birthday') }}" />
          @if ($errors->has('birthday'))
            <span class="text-danger">{{ $errors->first('birthday') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="website" class="form-label">Website Url</label>
          <input class="form-control" type="text" id="website" name="website" value="{{ old('website') }}" />
          @if ($errors->has('website'))
            <span class="text-danger">{{ $errors->first('website') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="phone" class="form-label">Phone Number</label>
          <input class="form-control" type="number" id="phone" name="phone" value="{{ old('phone') }}" />
          @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="degree" class="form-label">Degree</label>
          <input class="form-control" type="text" id="degree" name="degree" value="{{ old('degree') }}" />
          @if ($errors->has('degree'))
            <span class="text-danger">{{ $errors->first('degree') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" />
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="city" class="form-label">City</label>
          <input class="form-control" type="text" id="city" name="city" value="{{ old('city') }}" />
          @if ($errors->has('city'))
            <span class="text-danger">{{ $errors->first('city') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="myPersonalInfo" class="form-label">My Personal Info</label>
          <textarea class="form-control" type="text" id="myPersonalInfo" name="myPersonalInfo">{{ old('myPersonalInfo') }}</textarea>
          @if ($errors->has('myPersonalInfo'))
            <span class="text-danger">{{ $errors->first('myPersonalInfo') }}</span>
          @endif
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="{{ route('footer.index') }}" class="btn btn-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
@endsection
