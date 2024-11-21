@extends('master')
@section("content")
<div class="custom-product" style="max-width: 1200px; padding: 30px;">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <!-- Page Heading Styling -->
            <h4 style="font-size: 28px; font-weight: bold; color: #333; margin-bottom: 30px;">Result for Products</h4>
            
            <!-- Order Now Button Styling -->
            <a class="btn btn-success" href="ordernow" style="background-color: #28a745; color: white; padding: 12px 25px; border-radius: 5px; font-size: 16px; font-weight: bold; text-decoration: none; transition: background-color 0.3s;">Order Now</a> <br> <br>
            
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; margin-bottom: 20px; background-color: #f9f9f9;">
                <!-- Product Image Styling -->
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    </a>
                </div>

                <!-- Product Details Styling -->
                <div class="col-sm-4">
                    <div style="padding-left: 20px;">
                        <h2 style="font-size: 24px; font-weight: bold; color: #333;">{{$item->name}}</h2>
                        <h5 style="font-size: 18px; color: #555;">{{$item->description}}</h5>
                    </div>
                </div>

                <!-- Remove from Cart Button Styling -->
                <div class="col-sm-3" style="display: flex; align-items: center; justify-content: center;">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" style="background-color: #f0ad4e; color: white; padding: 10px 20px; border-radius: 5px; font-size: 14px; font-weight: bold; text-decoration: none; transition: background-color 0.3s;">Remove from Cart</a>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Order Now Button Styling -->
        <a class="btn btn-success" href="ordernow" style="background-color: #28a745; color: white; padding: 12px 25px; border-radius: 5px; font-size: 16px; font-weight: bold; text-decoration: none; transition: background-color 0.3s;">Order Now</a> <br> <br>
     </div>
</div>
@endsection
