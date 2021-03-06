<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Commerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../">Cart</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../">Product <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="discount">Discount</a>
            </li>
        </div>
    </nav>
    <h1 class="text-center">Edit Product</h1>
    <form style="max-width: 50%;margin: auto;" method="post" action="/product/update/{{ $product->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label>Name</label>
            <input value="{{ $product->name }}" type="text" name="name" class="form-control" maxlength="256" placeholder="Product Name" required>

            @if($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name')}}
                </div>
            @endif

        </div>

        <div class="form-group">
            <label>Price</label>
            <input  value="{{ $product->price }}"  type="number" name="price" min="0" maxlength="10" class="form-control" placeholder="Price" required>
                @if($errors->has('price'))
                <div class="text-danger">
                    {{ $errors->first('price')}}
                </div>
            @endif

        </div>
        <div class="form-group">
            <label>Image</label>
            <input value=" {{ $product->image }}"  type="url" name="image" min="0"  class="form-control" placeholder="Image Url">
                @if($errors->has('image'))
                <div class="text-danger">
                    {{ $errors->first('image')}}
                </div>
            @endif

        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Save">
        </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </body>
</html>
