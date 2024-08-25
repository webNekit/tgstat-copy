<ul class="website__main-cards cards-list">
    @if ($this->chanels->isEmpty())
        Записей не найдено!
    @else
        @foreach ($this->chanels as $chanel)
            <li class="cards-list__item">
                <x-card :chanel="$chanel" />
            </li>
        @endforeach
    @endif
</ul>