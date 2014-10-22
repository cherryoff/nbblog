@section('title')
    Список постов
@stop

@section('content')
    <h2>Список постов</h2>
    <small>Количество постов: {{$count}}</small>
    <ul class="posts-list">
    @forelse($posts as $post)
        @include(Config::get('nbblog::preview_view'), array('post'=>$post))
    @empty
        <li><h3>Нет записей</h3></li>
    @endforelse
    </ul>
@stop