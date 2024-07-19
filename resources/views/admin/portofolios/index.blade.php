@extends('layouts.admin.app')
@section('title', 'Web Profile - Portofolio')

@section('content')
  <div class="card" style="min-height: 80vh">
    <div class="row mx-0 justify-content-between">
      <div class="col-2">
        <h5 class="card-header">Portofolio List</h5>
      </div>
      <div class="col-2 align-self-center">
        <div class="d-flex justify-content-end">
          <a href="{{ route('portofolio.create') }}">
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
              <th>Terakhir Update</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($portofolioItems as $portofolio)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <img style="object-fit: cover" src="{{ asset('storage/' . $portofolio->image) }}" alt="image"
                    width="50" height="50">
                </td>
                <td>
                  {{ $portofolio->title }}
                </td>
                <td>
                  {{ $portofolio->updated_at }}
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('portofolio.show', $portofolio->id) }}">
                        <i class="bx bx-show-alt me-1"></i> Detail
                      </a>
                      <a class="dropdown-item" href="{{ route('portofolio.edit', $portofolio->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                      </a>
                      <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="POST"
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

    {{-- @foreach ($portofolios as $portofolio)
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">portofolio Description: {{ $portofolio->description }}</h5>
          @if ($portofolio->items->isNotEmpty())
            <div class="row">
              @foreach ($portofolio->items as $item)
                <div class="col-md-4">
                  <div class="card mb-3">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->title }}</h5>
                      <p class="card-text">{{ $item->description }}</p>
                      <p class="card-text"><small class="text-muted">Category: {{ $item->category }}</small></p>
                      <a href="{{ $item->url }}" class="btn btn-primary" target="_blank">View More</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          @else
            <p>No items available.</p>
          @endif
        </div>
      </div>
    @endforeach --}}
  </div>

@endsection
