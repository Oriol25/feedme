@extends('theme.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endpush

@section('content')
    <div class="w-full">
        <div class="container">
            <div class="row mx-auto">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-3 my-3">
                        <div class="card card-size">
                            <a href="{{ route('show.product', ['name' => $product->title, 'code' => $product->EAN, 'product' => $product->id]) }}"
                                class="text-reset text-decoration-none">
                                <div class="d-flex flex-column justify-content-between">
                                    <div class="list_product_img_div">
                                        <img class="card-img-top img-front list_product_img_div" src="{{ $product->image }}"
                                            alt="{{ $product->title }}">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-center">{{ $product->title }} - {{ $product->quantity }}
                                        </h6>
                                    </div>
                                    <div class="card-footer">
                                        <img class="w-25 img-responsive" src="{{ $product->nutriscoreGrade->img }}"
                                            alt="Nutriscore Grade: {{ $product->nutriscoreGrade->name }}">
                                        <img class="img-responsive" width="16px" src="{{ $product->novaGroup->img }}"
                                            alt="{{ $product->novaGroup->name }}">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
