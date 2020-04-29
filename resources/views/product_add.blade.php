<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <h1>Add Product</h1>
    <form method="post" action="/product/store">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" maxlength="256" placeholder="Product Name" required>

            @if($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name')}}
                </div>
            @endif

        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" min="0" maxlength="10" class="form-control" placeholder="Price" required>
                @if($errors->has('price'))
                <div class="text-danger">
                    {{ $errors->first('price')}}
                </div>
            @endif

        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="url" name="image" min="0"  class="form-control" placeholder="Image Url">
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
    </body>
</html>
