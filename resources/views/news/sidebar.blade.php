<div class="blog-widget mb-4">
<h6 class="mb-3">{{ __('menu.EditNews')}}</h6>
    <div class="list-group list-group-right-arrow">
        <a href="{{ route('news.show') }}" class="list-group-item bg-light">Все посты блога</a>
        <a href="{{ route('news.cat.show')}}" class="list-group-item bg-light">Список Категорий</a>
        <a href="#" class="list-group-item bg-light">Список Тегов</a>
    </div>
    <div class="list-group list-group-right-arrow mt-3">
            <a href="#" class="list-group-item bg-light">Добавить Автора</a>
            <a href="#" class="list-group-item bg-light">Добавить Тег</a>
            <a href="{{ route('news.add') }}" class="list-group-item bg-light">Добавить Статью</a>
            <a href="#" class="list-group-item bg-light">Добавить Категорию</a>
    </div>
</div>
