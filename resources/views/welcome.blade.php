<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test - Rifang</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .table {
            margin-top: 100px;
            margin-left: 100px;
        }

        .information {
            background-color: antiquewhite;
            width: 400px;
            text-align: center;
            height: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .title {
            background-color: aqua;
            justify-content: center;
        }

        .content {
            background-color: aquamarine;
        }
    </style>
</head>

<body>
    <div class="table">
        <div class="information">
            <p>Rifang Pri Asmara - rifang.asmara12@gmail.com</p>
        </div>
        <table>
            <tr class="title">
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            @foreach($products as $product)
            <tr class="content">
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_category}}</td>
                <td>{{$product->product_description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>