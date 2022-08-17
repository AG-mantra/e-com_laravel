@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="row">
            <div class="col-sm-4 m-auto bg-dark">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        @foreach ($products as $product)
                            <div class="carousel-item {{ $product['id'] == '1' ? 'active' : '' }}">
                                <a href="detail/{{$product['id']}}">
                                    <img src="{{ $product['gallery'] }}" class="d-block w-100" alt="product">
                                </a>
                            </div>
                        @endforeach

                        {{-- <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div> --}}
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
