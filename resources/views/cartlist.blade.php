@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider">
               <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                    <div class="">
                       
                    </div>
                </a>
             </div>
             <div class="col-sm-4">
                <a href="detail/{{$item->id}}"> 
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                    </div>
                </a>
             </div>
             <div class="col-sm-3">
               <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
             </div>
             
            </div>
            @endforeach 
        </div>
    </div>
</div>
@endsection