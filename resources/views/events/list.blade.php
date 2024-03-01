<html>
<body>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<container>
    <h1 class="text-center">События</h1>
    <div class="container mt-5 mb-3">
        <form method="GET" action="/events/list" class="d-flex justify-content-center">
            <button class="btn btn-secondary">Вернуться назад</button>
        </form>
        <div class="row">
            @foreach($events as $event)
                <div class="col col-lg-4 mb-3 d-flex align-content-stretch ">
                    <div class="card flex-grow-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">{{$event->name}}</h5>
                                </div>
                                <div class="col">
                                    <h7 class="card-title"> Осталось мест: {{$event->available_count_of_person}}</h7>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="p-2 flex-grow-1">Начало:</div>
                                <div class="p-2 col-md-8 text-center">{{$event->start}}</div>
                            </div>
                            <div class="d-flex">
                                <div class="p-2 flex-grow-1">Конец:</div>
                                <div class="p-2 col-md-8 text-center">{{$event->finish}}</div>
                            </div>
                            <div class="d-flex">
                                <div class="p-2 flex-grow-1">Статус:</div>
                                <div class="p-2 col-md-6 text-center">
                                    @if($event->status === 'inactive')
                                        Не активно
                                    @else
                                        Активно
                                    @endif
                                </div>
                            </div>
                        </div>
                        <ul class="mt-3 list-group list-group-flush">
                            @foreach($event->resources()->orderByDesc('is_emploee')->get() as $resource)
                                <li class="list-group-item">{{$resource->name}}</li>
                            @endforeach
                        </ul>
                        <div class="card-body d-flex flex-wrap align-content-end mt-2 justify-content-between">
{{--                            <form method="GET" action="/api/events/{{$event->id}}/edit" class="d-flex justify-content-center">--}}
                            <form method="GET" action="/events/{{$event->id}}/edit?" class="d-flex justify-content-center">
                                <button class="btn btn-primary" name="type" value="{{$type}}">Изменить</button>
                            </form>
{{--                            <form method="POST" action="/api/events/{{$event->id}}" class="d-flex justify-content-center">--}}
                            <form method="POST" action="/events/{{$event->id}}" class="d-flex justify-content-center">
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Удалить событие {{$event->name}}?')" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach
            <div class="col col-lg-4 mb-3 d-flex flex-wrap align-content-center justify-content-center">
{{--                <form method="GET" action="/api/events/create" class="d-flex justify-content-center">--}}
                <form method="GET" action="/events/create?" class="d-flex justify-content-center">
                    <button class="btn btn-success" name="type" value="{{$type}}">Добавить новое событие</button>
                </form>
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


