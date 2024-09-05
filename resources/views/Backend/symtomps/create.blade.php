@extends('backend.dashboard')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>Symtomps</h4>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Symtomps</h5>
            <div class="card-body">
            <form method="POST" action="{{ route('symtomps.store') }}">
                    @csrf
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control @error('nama') is-invalid @enderror"
                        id="nama"
                        name="nama"
                        placeholder="Gejala"
                        aria-describedby="floatingInputHelp"
                        value="{{ old('nama') }}" />
                    <label for="nama">Nama Symtomps</label>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <h5 class="card-header">Description</h5>
            <div class="card-body">
                <div class="form-floating">
                    <textarea
                        class="form-control @error('description') is-invalid @enderror"
                        id="description"
                        name="description"
                        placeholder="Description Gejala"
                        aria-describedby="floatingInputHelp" style="height: 200px;">{{ old('description') }}</textarea>
                    <label for="description">Description Symtomps</label>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="demo-inline-spacing ms-auto mb-4 me-4">
                    <button type="button" class="btn rounded-pill btn-primary" onclick="window.history.back()">Kembali</button>
                    <button href="" type="submit" class="btn rounded-pill btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop