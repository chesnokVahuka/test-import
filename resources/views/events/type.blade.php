<html>
<body>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<container>
    <h1 class="text-center">События</h1>
    <div class="container mt-5 mb-3">
            <form method="GET" action="/events/list?" class="d-flex justify-content-center">
                <div class="m-2">
                    <button class="btn btn-primary" name="type" value="squash">Сквош</button>
                </div>
                <div class="m-2">
                    <button class="btn btn-primary" name="type" value="bath_complex">Банный комплекс</button>
                </div>
            </form>
    </div>
    <div class="container mt-5 mb-3">
        <div class="row">
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


