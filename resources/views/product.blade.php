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
    <h1>Product</h1>
    <?php  //print_r($product[2]->cart);
    //echo count($product[0]->cart) ?> 
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/product/add" class="btn btn-primary">Add Product</a>
                </td>
            </tr>
            @foreach($product as $p)
            <tr>
                <td><img src={{ $p->image }} width="40" height="40" /></td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->price }}</td>
                <td>
                    <a href="/product/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                    <?php if (count($p->cart) === 0) { ?>
                        <a href="/product/delete/{{ $p->id }}" class="btn btn-danger">Delete</a>
                    <?php } ?>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </body>
</html>
