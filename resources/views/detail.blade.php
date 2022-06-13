@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img img class="detail-img" src="{{$product['gallery']}}" alt="" />
        </div>
        <div class="col-sm-6"; class="mb-3">
                <a href="/"><span class="glyphicon glyphicon-menu-left"></span>Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Category: {{$product['category']}}</h4>
            <h4>Details: {{$product['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            
            <!-- Buy Now Function 
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class = "btn btn-success" href="/cartlist">Buy Now</button> <br><br>
            <br><br>
            -->
            
        </div>
    </div>
</div> 
@endsection