<ul class="sidebar__categories">
    <li class="sidebar__categories-item">
        <a href="#!" class="sidebar__categories-link">Все категории</a>
    </li>
    @foreach ($categories as $category)
    <li class="sidebar__categories-item">
        <a href="#!" class="sidebar__categories-link">{{ $category->title }}</a>
    </li>
    @endforeach
</ul>