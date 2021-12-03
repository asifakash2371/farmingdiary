<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  .trending-img{
    height: 100px;
  }
  .trending-item{
    float: left;
    width: 25%;
  }
  .trending-wrapper{
    margin: 20px;
  }
</style>
<body>

<!-- Sliders -->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    @foreach($sliders as $slider)
      <div class="item active">
        <img src="{{ Voyager::image( $slider->image) }}" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>{{$slider->name}}</h3>
          <p>{!!$slider->description !!}</p>
        </div>
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
</div>
<!-- End sliders -->


<!-- Trending Products -->
<div class=" container custom-product">
  <div>
    <div class="trending-wrapper">
    <h1>Trending Product</h1>
    <br><br>
    <div class="">
      @foreach($products as $product)
      <div class="trending-item">
        <img class="trending-img" src="{{ Voyager::image( $product->image) }}">
        <div class="">
          <h3>{{$product->name}}</h3>
        </div>
      </div>
      @endforeach
    </div>
    </div>

    
  </div>
</div>

<br><br>

<!-- Category Wise Products -->
<div class=" container custom-product">
    <div class="trending-wrapper">
    <h1>Vegitable</h1>
    <br><br>
    <div class="">
      @foreach($products as $product)
      <div class="trending-item">
        <img class="trending-img" src="{{ Voyager::image( $product->image) }}">
        <div class="">
          <h3>{{$product->name}}</h3>
        </div>
      </div>
      @endforeach
    </div>
    </div>

    
  </div>
</div>

</body>
</html>
