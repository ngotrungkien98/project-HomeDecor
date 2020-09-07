<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product pdf</title>
  <style>
    html {
      font-family: DejaVu Sans;
    }

    body {
      max-width: 100%;
      width: 960px;
      margin: 0 auto;
      font-family: DejaVu Sans;
      font-style: 14px;
    }

    h3,
    h4 {
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
    }

    table,
    th,
    td {
      border: 1px solid #fff;
      font-style: 9px !important;
    }

    span {
      font-weight: 500;
    }

    th {
      text-align: left;
    }

    table>tr>th {}
  </style>
  <?php

  use App\Product;

  $products = Product::all();

  ?>

</head>

<body>
  <h3>List of products</h3><br>
  <h4 style="text-align: left;">all Product: {{ $products->count() }}</h4>
  <table>
    <tr>
      <th>Product</th>
      <th>imaget</th>
      <th>price</th>
    </tr>
    @foreach($products as $pro)
    <tr>
      <td>{{ $pro->title }}</td>
      <td><img src="{{ Voyager::image($pro -> image) }}" class="img-fluid thumbnail" width="75px" height="75px"></td>
      <td>${{$pro->price}}</td>
    </tr>
    @endforeach

  </table>
</body>

</html>