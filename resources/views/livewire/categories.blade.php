<ul class="sidebar__categories">
    <li class="sidebar__categories-item">
        <button wire:click.prevent="setCategory(null)" class="sidebar__categories-target {{ is_null($selectedCategory) ? 'sidebar__categories-target--active' : '' }}">Все категории</button>
    </li>
    @foreach ($categories as $category)
    <li class="sidebar__categories-item">
        <button wire:click.prevent="setCategory({{ $category->id }})" class="sidebar__categories-target {{ $selectedCategory == $category->id ? 'sidebar__categories-target--active' : '' }}">{{ $category->title }}</button>
    </li>
    @endforeach
</ul>