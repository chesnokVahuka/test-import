<html>
<body>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<container>
    <h1 class="text-center">Авторизация</h1>
    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="/login">
                    <div class="mb-3">
                        <label for="eventName" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control" id="eventName" aria-describedby="eventName" required>
                    </div>
                    <div class="mb-3">
                        <label for="totalCountOfPerson" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="totalCountOfPerson" aria-describedby="totalCountOfPerson" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </form>
                <div class="col-6 text-center">
                    @if (!empty($error))
                        <span>{{$error}}</span>
                        <a href="/login">Вернуться к авторизации</a>
                    @endif
                </div>
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



