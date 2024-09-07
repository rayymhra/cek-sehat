@extends('Frontend.layout')
@section('content')
{{-- hero section --}}
<div class="container-fluid hero-container" style="background-color: #1aa6b7; padding: 100px 0;">
    <div class="row hero-section align-items-center text-center">
        <div class="col-md-12 hero-text">
            <h1 class="hero-title" style="color: white; font-size: 48px; font-weight: bold;">Ragam Penyakit</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h1 class="title text-center mb-5">Nama Penyakit A-Z</h1>

    <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Search articles..." aria-label="Search articles"
            aria-describedby="button-search">
        <button class="btn btn-primary" type="button" id="button-search">Search</button>
    </div>

    <!-- {{-- <div class="alphabet-filter">
            <a href="?prefix=a" class="active">A</a>
            <a href="?prefix=b">B</a>
            <a href="?prefix=c">C</a>
            <a href="?prefix=d">D</a>
           Add links for other letters
            <a href="?prefix=z">Z</a>
        </div> --}} -->

    {{-- <div class="illness-list">
            <!-- Example illness items (repeat as needed) -->
            <div class="illness-list-item">
                <h4>Asthma</h4> 
                <p>A chronic disease that affects the airways in the lungs.</p>
            </div>
            <div class="illness-list-item">
                <h4>Arthritis</h4>
                <p>Inflammation of one or more joints, causing pain and stiffness.</p>
            </div>
            <!-- Add more illness items as needed -->
        </div> --}}

    <div class="row">
        @foreach ($diases as $diase)
        <div class="col-4 mb-5" class="illness-item">
            <a href="{{ route('penyakit.show', $diase->id) }}" class="illness-name">{{ $diase->nama }}</a>
        </div>
        @endforeach
    </div>
</div>
@stop