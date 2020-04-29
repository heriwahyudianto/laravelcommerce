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
    <h1>Cart</h1><?php //print_r($cart[0]->product['name']) 
       // print_r($cart[0]->discount['discount_percentage']) 
       $grandTotal = 0;
    ?>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Sub Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/cart/add" class="btn btn-primary">Add</a></td>
            </tr>
            @foreach($cart as $p)
            <tr>
                <td>{{ $p->product['name'] }}</td>
                <td>{{ $p->qty }}</td>
                <td>{{ $p->price }}</td>
                <td>{{ $p->discount['discount_percentage'] }} %</td>
                <td>
                    {{ ($p->price - ($p->price * ($p->discount['discount_percentage'] / 100))) * $p->qty }}</td>
                    <?php $grandTotal = $grandTotal + (($p->price - ($p->price * ($p->discount['discount_percentage'] / 100))) * $p->qty); ?>
                <td>
                    <a href="/cart/delete/{{ $p->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfooter>
            <tr>
                <td>Grand Total</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $grandTotal }}</td>
                <td></td>
            </tr>
        </tfooter>
    </table>
    </body>
</html>
