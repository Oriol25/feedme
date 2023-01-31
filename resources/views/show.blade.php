@extends('theme.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endpush

@section('content')
    <div id="nombre">
        <div>
            <h2>{{ $product->title }} - {{ $product->quantity }}</h2>
        </div>
    </div>
    <div id="articulo">
        <div class="img-layout d-flex justify-content-center">
            <img src="{{ $product->image }}" alt="{{ $product->title }}">
        </div>
        <div id="contentProduct">
            <h2>{{ $product->title }} - {{ $product->quantity }}</h2>
            <p><strong>EAN:</strong> {{ $product->EAN }}</p>
            <p><strong>Quantitat:</strong> {{ $product->quantity }}</p>
            <p><strong>Al·lèrgens:</strong> {{ $alergenos }}</p>
            <p><strong>Nutriscore Grade:</strong> {{ $product->nutriscoreGrade->name }}</p>
            <p><strong>Nova Group:</strong> {{ $product->novaGroup->name }}</p>
        </div>
    </div>
    <div id="matching">
        <h2>Etiquetes</h2>
        <div class="box"><img src="{{ $product->nutriscoreGrade->img }}"
                alt="Nutriscore Grade: {{ $product->nutriscoreGrade->name }}"></div>
        <div class="box"><img src="{{ $product->novaGroup->img }}" alt="{{ $product->novaGroup->name }}"></div>
    </div>
@endsection
