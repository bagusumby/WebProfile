@extends('layouts.admin.app')
@section('title', 'Web Profile - Edit About')

@section('content')
  <div class="card p-4">
    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row mx-0">
        <div class="col-md-12 mb-4">
          <h3>Edit About</h3>
        </div>
        <div class="mb-3 col-md-6">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" type="text" id="description" name="description" autofocus>{{ old('description', $about->description) }}</textarea>
          @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="title" class="form-label">Title</label>
          <input class="form-control" type="text" id="title" name="title"
            value="{{ old('title', $about->title) }}" />
          @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="subTitle" class="form-label">Sub Title</label>
          <textarea class="form-control" type="text" id="subTitle" name="subTitle">{{ old('subTitle', $about->subTitle) }}</textarea>
          @if ($errors->has('subTitle'))
            <span class="text-danger">{{ $errors->first('subTitle') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="birthday" class="form-label">Birthday</label>
          <input class="form-control" type="date" id="birthday" name="birthday"
            value="{{ old('birthday', $about->birthday) }}" />
          @if ($errors->has('birthday'))
            <span class="text-danger">{{ $errors->first('birthday') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="website" class="form-label">Website Url</label>
          <input class="form-control" type="text" id="website" name="website"
            value="{{ old('website', $about->website) }}" />
          @if ($errors->has('website'))
            <span class="text-danger">{{ $errors->first('website') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="phone" class="form-label">Phone Number</label>
          <input class="form-control" type="number" id="phone" name="phone"
            value="{{ old('phone', $about->phone) }}" />
          @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="degree" class="form-label">Degree</label>
          <input class="form-control" type="text" id="degree" name="degree"
            value="{{ old('degree', $about->degree) }}" />
          @if ($errors->has('degree'))
            <span class="text-danger">{{ $errors->first('degree') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="text" id="email" name="email"
            value="{{ old('email', $about->email) }}" />
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="city" class="form-label">City</label>
          <input class="form-control" type="text" id="city" name="city"
            value="{{ old('city', $about->city) }}" />
          @if ($errors->has('city'))
            <span class="text-danger">{{ $errors->first('city') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="myPersonalInfo" class="form-label">My Personal Info</label>
          <textarea class="form-control" type="text" id="myPersonalInfo" name="myPersonalInfo">{{ old('myPersonalInfo', $about->myPersonalInfo) }}</textarea>
          @if ($errors->has('myPersonalInfo'))
            <span class="text-danger">{{ $errors->first('myPersonalInfo') }}</span>
          @endif
        </div>
        <div class="mb-3 col-md-6">
          <label for="image" class="form-label">Image</label>
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage(event)" />
          @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
          @endif
          <br>
          @if ($about->image)
            <img id="preview" src="{{ asset('storage/' . $about->image) }}" alt="image" width="100">
          @else
            <img id="preview" src="" alt="image" width="100" style="display:none;">
          @endif
        </div>

      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('abouts.index') }}" class="btn btn-outline-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>

  </div>
  <script>
    function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('preview');
        output.src = reader.result;
        output.style.display = 'block';
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>

@endsection
