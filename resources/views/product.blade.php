<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h3  class="text-center"> Товары </h3>
<div class="table-responsive-md">
    <table class="table table-bordered mb-5">
        <thead>
        <tr class="thead-dark">
            <th scope="col">#</th>
            <th scope="col">Название </th>
            <th scope="col">Уровень1</th>
            <th scope="col">Уровень2</th>
            <th scope="col">Уровень3</th>
            <th scope="col">Цена</th>
            <th scope="col">Цена СП </th>
            <th scope="col">Количество</th>
            <th scope="col">Поля свойств</th>
            <th scope="col">Совместные покупки</th>
            <th scope="col">Единица измерения</th>
            <th scope="col">Картинка</th>
            <th scope="col">Выводить на главной</th>
            <th scope="col"> Описание</th>
        </tr>
        </thead>

        <tbody>
        @foreach($products->items() as $product)
            <tr class="fs-6">
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->title }}</td>
                <td>{{ $product->level1 }}</td>
                <td>{{ $product->level2 }}</td>
                <td>{{ $product->level3 }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->price_sp }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->properties }}</td>
                <td>{{ $product->similar_products }}</td>
                <td>{{ $product->measure }}</td>
                <td>{{ $product->picture }}</td>
                <td>{{ $product->show_on_main }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
</div>

</body>
</html>
