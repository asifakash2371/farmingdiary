<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
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

<!-- Category Wise Blogs -->
<div class=" container custom-product">
    <div class="trending-wrapper">
    <a href="{{route('blog.create')}}">Create Blog</a>
    <h1>Latest Blogs</h1>
    <br><br>
    <div class="">
      @foreach($blogs as $blog)
      <div class="trending-item">
        <img class="trending-img" src="{{ Voyager::image( $blog->image) }}">
        <div class="">
          <h3>{{$blog->name}}</h3>
          <p>{!!$blog->description !!}</p>
        </div>
      </div>
      @endforeach
    </div>
    </div>

    
  </div>
</div>
</body>
</html>