@extends('welcome')
@section('content')
<div class="features_items">
    <h2 class="title text-center">Category Pets</h2>
    @foreach($category_by_id as $key => $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                        <h2>{{$product->product_name}}</h2>
                        <h2>{{number_format($product->product_price).'$'}}</h2>
                        
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
            </div>
        </div>
    </div>
    @endforeach		
</div><!--features_items-->	
@endsection