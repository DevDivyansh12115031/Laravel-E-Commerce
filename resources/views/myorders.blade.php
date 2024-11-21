@extends('master')
@section("content")

<div class="custom-product" style="max-width: 1200px; padding: 30px;">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <!-- Page Heading Styling -->
            <h4 style="font-size: 28px; font-weight: bold; color: #333; margin-bottom: 30px;">My Orders</h4>
            
            @foreach($orders as $item)
            <div class="row searched-item cart-list-devider" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; margin-bottom: 20px; background-color: #f9f9f9;">
                <!-- Product Image Styling -->
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    </a>
                </div>

                <!-- Order Details Styling -->
                <div class="col-sm-4">
                    <div style="padding-left: 20px;">
                        <h2 style="font-size: 24px; font-weight: bold; color: #333;">Name: {{$item->name}}</h2>
                        <h5 style="font-size: 18px; color: #555;">Delivery Status: {{$item->status}}</h5>
                        <h5 style="font-size: 18px; color: #555;">Address: {{$item->address}}</h5>
                        <h5 style="font-size: 18px; color: #555;">Payment Status: {{$item->payment_status}}</h5>
                        <h5 style="font-size: 18px; color: #555;">Payment Method: {{$item->payment_method}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
