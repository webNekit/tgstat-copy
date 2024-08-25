<ul class="website__main-cards cards-list" style="gap: 24px;">
    @if ($this->messages->isEmpty())
        Записей не найдено!
    @else
        @foreach ($this->messages as $message)
            <li class="cards-list__item">
                <x-message--card :message="$message" />
            </li>
        @endforeach
    @endif
</ul>