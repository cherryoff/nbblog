@section('title')
    {{$header}}
@stop

@section('content')
    <a href="{{$uri}}/">Назад</a>
    <h2>{{$header}}</h2>
    <small>{{$created_at}}</small>
    <p>
        {{$article}}
    </p>
@stop