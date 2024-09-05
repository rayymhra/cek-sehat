@extends('backend.dashboard')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span>Diases</h4>
<a href="{{ route('diases.create') }}" type="button" class="btn rounded-pill btn-primary mb-3">Tambahkan</a>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Description</th>
          <th>treatment</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($diases as $diases)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $diases->nama }}</td>
          <td>{{ $diases->description }}</td>
          <td>{{ $diases->treatment }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('diases.edit', $diases->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('diases.delete', $diases->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
  @stop