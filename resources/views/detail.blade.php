@extends('master')
@section("content")
<div class="container" style="max-width: 1200px; padding: 30px;">
   <div class="row">
       <div class="col-sm-6">
           <!-- Product Image Styling -->
           <img class="detail-img" src="{{$product['gallery']}}" alt="Product Image" style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
       </div>
       <div class="col-sm-6">
           <!-- Back Button Styling -->
           <a href="/" class="btn btn-secondary" style="font-size: 14px; padding: 8px 15px; border-radius: 5px; margin-bottom: 20px;">Go Back</a>
           
           <!-- Product Name and Details Styling -->
           <h2 style="font-size: 30px; font-weight: bold; color: #333;">{{$product['name']}}</h2>
           <h3 style="font-size: 24px; color: #28a745;">Price: ${{$product['price']}}</h3>
           <h4 style="font-size: 18px; color: #555;">Details: {{$product['description']}}</h4>
           <h4 style="font-size: 18px; color: #555;">Category: {{$product['category']}}</h4>

           <!-- Button Styling -->
           <form action="/add_to_cart" method="POST">
               @csrf
               <input type="hidden" name="product_id" value={{$product['id']}}>
               <button class="btn btn-primary" style="font-size: 18px; padding: 12px 25px; margin-top: 20px; width: 100%; border-radius: 5px; background-color: #007bff; color: white; border: none;">Add to Cart</button>
           </form>
           <br>
           <button class="btn btn-success" style="font-size: 18px; padding: 12px 25px; margin-top: 10px; width: 100%; border-radius: 5px; background-color: #28a745; color: white; border: none;">Buy Now</button>
       </div>
   </div>
</div>
@endsection
