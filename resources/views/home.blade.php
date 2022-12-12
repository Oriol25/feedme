@extends('theme.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endpush

@section('content')
    <div class="w-full bg-dark text-white py-3 ps-5">
        <i class="fa-solid fa-magnifying-glass"></i><span class="ms-4">{{ $contadorProductos }} products</span>
    </div>
    <div class="w-full">
        <div class="container">
            <div class="row mx-auto">
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-3 my-3">
                        <div class="card">
                            <a href="{{ route('show.product', $product) }}" class="text-reset text-decoration-none">
                                <img class="card-img-top img-front" src="{{ $product->image }}" alt="Card image cap">
                                <div class="card-body">
                                <h6 class="card-title text-center">{{ $product->title }} - {{ $product->quantity }}</h6>
                                </div>
                                <div class="card-footer">
                                    <img class="w-25 img-responsive" src="https://static.openfoodfacts.org/images/attributes/nutriscore-e.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
    
@endsection
