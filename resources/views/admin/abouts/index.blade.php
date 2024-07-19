@extends('layouts.admin.app')
@section('title', 'Web Profile - About')

@section('content')
  <div class="card" style="min-height: 80vh">
    <div class="row mx-0 justify-content-between">
      <div class="col-2">
        <h5 class="card-header">About List</h5>
      </div>
      <div class="col-2 align-self-center">
        <div class="d-flex justify-content-end">
          <a href="{{ route('abouts.create') }}">
            <button class="btn btn-primary">
              Create
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div style="overflow: visible" class="table-responsive text-nowrap">
        <table class="table table-bordered table-striped">
          <thead class="table-light">
            <tr>
              <th style="width: 62px">No</th>
              <th>Image</th>
              <th>Title</th>
              <th>Email</th>
              <th>Terakhir Update</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($abouts as $about)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <img style="object-fit: cover" src="{{ asset('storage/' . $about->image) }}" alt="image"
                    width="50" height="50">
                </td>
                <td>{{ $about->title }}</td>
                <td>{{ $about->email }}</td>
                <td>{{ $about->updated_at }}</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('abouts.show', $about->id) }}">
                        <i class="bx bx-show-alt me-1"></i> Detail
                      </a>
                      <a class="dropdown-item" href="{{ route('abouts.edit', $about->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                      </a>
                      <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item"
                          onclick="return confirm('Are you sure you want to delete this item?');">
                          <i class="bx bx-trash me-1"></i> Delete
                        </button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
