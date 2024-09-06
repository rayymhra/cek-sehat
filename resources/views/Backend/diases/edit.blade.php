@extends('backend.dashboard')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>Diases</h4>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Diases</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('diases.update', $diases->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-floating">
                        <input
                            type="text"
                            class="form-control"
                            id="nama"
                            name="nama"
                            aria-describedby="floatingInputHelp" value="{{ $diases->nama }}" />
                        <label for="nama">Nama Gejala</label>
                    </div>
            </div>
            <h5 class="card-header">Description</h5>
            <div class="card-body">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control"
                        id="description"
                        name="description"
                        aria-describedby="floatingInputHelp" value="{{ $diases->description }}" />
                    <label for="description">Description Gejala</label>
                </div>
            </div>
            <h5 class="card-header">Treatment</h5>
            <div class="card-body">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control"
                        id="treatment"
                        name="treatment"
                        aria-describedby="floatingInputHelp" value="{{ $diases->treatment }}" />
                    <label for="description">Description Gejala</label>
                </div>
            </div>
            <h5 class="card-header">Symtomps</h5>
            <div class="card-body">
                <div class="mt-2 mb-3">
                    <select id="" class="form-select form-select-lg" name="symtomp_id">
                        @foreach($symtomps as $symtom)
                        <option value="{{ $symtom->id}}">{{ $symtom->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="demo-inline-spacing ms-auto mb-4 me-4">
                <button type="button" class="btn rounded-pill btn-primary" onclick="window.history.back()">Kembali</button>
                <button href="" type="submit    " class="btn rounded-pill btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop