<html>
<body>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<container>
    <h1 class="text-center">Редактировать</h1>
    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
{{--                <form method="POST" action="/api/events/{{$event->id}}">--}}
                <form method="POST" action="/events/{{$event->id}}">
                    @method('PUT')
                    <div class="mb-3">
                        <label for="eventName" class="form-label">Название события</label>
                        <input type="text" name="name" class="form-control" id="eventName" aria-describedby="eventName" value="{{$event->name}}">
                        <div id="eventName" class="form-text">Укажите названия события</div>
                    </div>
                    <div class="mb-3">
                        <label for="totalCountOfPerson" class="form-label">Общее кол-во мест</label>
                        <input type="number" name="total_count_of_person" class="form-control" id="totalCountOfPerson" aria-describedby="totalCountOfPerson" value="{{$event->total_count_of_person}}">
                        <div id="totalCountOfPerson" class="form-text">Укажите кол-во мест</div>
                    </div>
                    <div class="mb-3">
                        <label for="availableCountOfPerson" class="form-label">Осталось мест</label>
                        <input type="number" name="available_count_of_person" class="form-control" id="availableCountOfPerson" aria-describedby="availableCountOfPerson" value="{{$event->available_count_of_person}}">
                        <div id="availableCountOfPerson" class="form-text">Укажите оставшееся кол-во мест</div>
                    </div>
                    <div class="mb-3">
                        <label for="eventStart" class="form-label">Начало события</label>
                        <input type="datetime-local" name="start" class="form-control" id="eventStart" aria-describedby="eventStart" value="{{$event->start}}">
                        <div id="eventStart" class="form-text">Укажите начало события</div>
                    </div>
                    <div class="mb-3">
                        <label for="eventFinish" class="form-label">Окончание события</label>
                        <input type="datetime-local" name="finish" class="form-control" id="eventFinish" aria-describedby="eventFinish" value="{{$event->finish}}">
                        <div id="eventFinish" class="form-text">Укажите окончание события</div>
                    </div>
                    <div class="mb-3">
                        <select id="eventStatus" name="status" class="form-select" aria-label="Выберите значение из списка">
                            @foreach (['inactive','active'] as $status)
                                <option value="{{ $status }}"
                                @if ($event->status === $status) selected="selected"@endif>
                                @if($status === 'inactive')
                                    Не активно
                                @else
                                    Активно
                                @endif
                                </option>
                            @endforeach
                        </select>
                        <div id="eventStatus" class="form-text">Укажите статус события</div>
                    </div>
                        <div class="mb-3">
                        <select id="eventResources" multiple name="resources[]" class="form-select" aria-label="Выберите значение из списка">
                            @foreach($resources as $resource)
                                <option value="{{$resource->id}}"
                                @if($event->resources()->get()->contains($resource)) selected="selected" @endif>
                                    {{$resource->name}}
                                </option>
                            @endforeach
                        </select>
                        <div id="eventResources" class="form-text">Укажите занятые ресурсы на событии</div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
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



