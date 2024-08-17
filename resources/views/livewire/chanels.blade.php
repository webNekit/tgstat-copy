<ul class="website__main-cards cards-list">
        @foreach ($this->chanels as $chanel)
            <li class="cards-list__item">
                <x-card :chanel="$chanel" />
            </li>
        @endforeach
</ul>