@extends('user.layout')

@section('main')
	
	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>detail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">

							    <li data-thumb="{{asset($detail['gallery'])}}">
							    	<img src="{{asset($detail['gallery'])}}" alt="product thumbnail" />
							    </li>
							  </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">{{$detail['name']}}</h2>
                            <div class="short-desc">
                                <ul>
                                    <li>{{$detail['description']}}</li>
                                </ul>
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">${{$detail['price']}}</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>In Stock</b></p>
                            </div>
                            <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<form action="/add_to_cart" method="POST">
									@csrf
									<input type="hidden" name="product_id" value="{{$detail['id']}}">
									<button class="btn add-to-cart">Add to Cart</button>
								</form>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{$detail['description']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
	@endsection
