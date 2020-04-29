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
            <li class="nav-item active">
                <a class="nav-link" href="#">Cart <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="discount">Discount</a>
            </li>
        </div>
    </nav>
    <?php $grandTotal = 0; ?>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-right">Qty</th>
                <th class="text-right">Price</th>
                <th class="text-right">Discount</th>
                <th class="text-right">Sub Total</th>
                <th class="text-right">Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-right"><a href="/cart/add" class="btn btn-primary">Add</a></td>
            </tr>
            @foreach($cart as $p)
            <tr>
                <td>{{ $p->product['name'] }}</td>
                <td class="text-right">{{ $p->qty }}</td>
                <td class="text-right">{{ $p->price }}</td>
                <td class="text-right">{{ $p->discount['discount_percentage'] }} %</td>
                <td class="text-right">
                    {{ ($p->price - ($p->price * ($p->discount['discount_percentage'] / 100))) * $p->qty }}</td>
                    <?php $grandTotal = $grandTotal + (($p->price - ($p->price * ($p->discount['discount_percentage'] / 100))) * $p->qty); ?>
                <td class="text-right">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
