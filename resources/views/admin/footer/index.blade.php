@extends('layouts.admin.app')
@section('title', 'Web Profile - Footer')

@section('content')
  <div class="card" style="min-height: 80vh">
    <div class="row mx-0 justify-content-between">
      <div class="col-2">
        <h5 class="card-header">Footer List</h5>
      </div>
      <div class="col-2 align-self-center">
        <div class="d-flex justify-content-end">
          <a href="{{ route('footer.create') }}">
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
              <th>Title</th>
              <th>Copyright</th>
              <th>Social Media</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($footers as $footer)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $footer->title }}</td>
                <td>{{ $footer->copyright }}</td>
                <td>
                  <div>
                    <p>
                      Instagram :
                      <a href="{{ $footer->instagram }}" target="_blank">{{ $footer->instagram }}</a>
                    </p>
                  </div>
                  <div>
                    <p>
                      Github :
                      <a href="{{ $footer->github }}" target="_blank">{{ $footer->github }}</a>
                    </p>
                  </div>
                  <div>
                    <p>
                      Facebook :
                      <a href="{{ $footer->facebook }}" target="_blank">{{ $footer->facebook }}</a>
                    </p>
                  </div>
                  <div>
                    <p>
                      Linkedin :
                      <a href="{{ $footer->linkedin }}" target="_blank">{{ $footer->linkedin }}</a>
                    </p>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('footer.show', $footer->id) }}">
                        <i class="bx bx-show-alt me-1"></i> Detail
                      </a>
                      <a class="dropdown-item" href="{{ route('footer.edit', $footer->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                      </a>
                      <form action="{{ route('footer.destroy', $footer->id) }}" method="POST" style="display:inline;">
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
