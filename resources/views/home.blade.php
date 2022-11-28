@extends('theme.main')

@section('content')
    <div class="w-full bg-dark text-white py-3 ps-5">
        <i class="fa-solid fa-magnifying-glass"></i><span class="ms-4">{{ $contadorProductos }} products</span>
    </div>
    <div class="w-full">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-sm-6 col-md-3 my-3">
                    <div class="card">
                        <a href="#" class="text-reset text-decoration-none">
                            <img class="card-img-top" src="https://images.openfoodfacts.org/images/products/301/762/042/2003/front_en.430.200.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h6 class="card-title text-center">Nutella - Ferrero - 400 g</h6>
                            </div>
                            <div class="card-footer">
                                <img class="w-25 img-responsive" src="https://static.openfoodfacts.org/images/attributes/nutriscore-e.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection
