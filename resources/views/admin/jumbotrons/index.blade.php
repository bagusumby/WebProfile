@extends('layouts.admin.app')
@section('title', 'Web Profile - Jumbotron')

@section('content')
  <div class="card" style="min-height: 80vh">
    <div class="row mx-0 justify-content-between">
      <div class="col-2">
        <h5 class="card-header">Jumbotron List</h5>
      </div>
      <div class="col-2 align-self-center">
        <div class="d-flex justify-content-end">
          <a href="{{ route('jumbotron.create') }}">
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
              <th>Background Image</th>
              <th>Name</th>
              <th>Pekerjaan</th>
              <th>Social Media</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jumbotrons as $jumbotron)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <div class="d-flex w-100 justify-content-center">

                    <img style="object-fit: cover" src="{{ asset('storage/' . $jumbotron->background_image) }}"
                      alt="image" width="200" height="100">
                  </div>
                </td>
                <td>
                  {{ $jumbotron->name }}
                </td>
                <td>{{ $jumbotron->work }}</td>
                <td>
                  <div>
                    <p>
                      Instagram :
                      <a href="{{ $jumbotron->instagram }}" target="_blank">{{ $jumbotron->instagram }}</a>
                    </p>
                  </div>
                  <div>
                    <p>
                      Github :
                      <a href="{{ $jumbotron->github }}" target="_blank">{{ $jumbotron->github }}</a>
                    </p>
                  </div>
                  <div>
                    <div>
                      <p>
                        Facebook :
                        <a href="{{ $jumbotron->facebook }}" target="_blank">{{ $jumbotron->facebook }}</a>
                      </p>
                    </div>
                    <div>
                      <p>
                        Linkedin :
                        <a href="{{ $jumbotron->linkedin }}" target="_blank">{{ $jumbotron->linkedin }}</a>
                      </p>
                    </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('jumbotron.show', $jumbotron->id) }}">
                        <i class="bx bx-show-alt me-1"></i> Detail
                      </a>
                      <a class="dropdown-item" href="{{ route('jumbotron.edit', $jumbotron->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                      </a>
                      <form action="{{ route('jumbotron.destroy', $jumbotron->id) }}" method="POST"
                        style="display:inline;">
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
