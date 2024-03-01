<html>
<body>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<container>
    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-6 text-center">
                @if (!empty($error))
                    <span>{{$error}}</span>
{{--                    <a href="/events">Вернуться к списку событий</a>--}}
                    <a href="/events/list">Вернуться к списку событий</a>
                @endif
            </div>
        </div>
    </div>
</container>
</body>

<style>
    .text-center{
        text-align: center;
    }
</style>
</html>



