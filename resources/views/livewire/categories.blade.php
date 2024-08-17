<ul class="sidebar__categories">
    <li class="sidebar__categories-item">
        <button wire:click.prevent="setCategory(null)" class="sidebar__categories-target">Все категории</button>
    </li>
    @foreach ($categories as $category)
    <li class="sidebar__categories-item">
        <button wire:click.prevent="setCategory({{ $category->id }})" class="sidebar__categories-target">{{ $category->title }}</button>
    </li>
    @endforeach
</ul>