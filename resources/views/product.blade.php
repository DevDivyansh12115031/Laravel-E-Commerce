@extends('master')
@section("content")
<div class="custom-product">
    <!-- Carousel Section -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 30px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
          <div class="item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
              <div class="carousel-caption slider-text">
                <h3>{{$item['name']}}</h3>
                <p>{{$item['description']}}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Trending Products Section -->
    <div class="trending-wrapper" style="margin-top: 40px;">
        <h3 style="font-size: 28px; font-weight: bold; color: #333;">Trending Products</h3>
        <div class="row">
          @foreach($products as $item)
          <div class="col-sm-4" style="margin-bottom: 20px;">
            <div class="trending-item" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; background-color: #f9f9f9; padding: 15px;">
              <a href="detail/{{$item['id']}}" style="text-decoration: none;">
                <img class="trending-image" src="{{$item['gallery']}}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                <div class="text-center" style="padding-top: 10px;">
                  <h3 style="font-size: 20px; color: #333;">{{$item['name']}}</h3>
                </div>
              </a>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
