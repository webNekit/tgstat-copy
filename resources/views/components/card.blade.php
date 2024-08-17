@props(['chanel'])
<article class="cards-list__card card">
    <div class="card__row">
        <div class="card__col-left">
            <a href="{{ route('chanel', $chanel->id) }}" class="card__link-more">
                <div class="card__avatar">
                    <img loading="lazy" src="{{ url('storage', $chanel->img) }}" alt="{{ $chanel->title }}" class="card__avatar-img" />
                </div>
                <div class="card__detail">
                    <h3 class="card__detail-name">️{{ $chanel->title }}</h3>
                    <div class="card__detail-subscribe">{{ $chanel->subscribers }} <span class="card__detail-subscribeText">{{ __('card.subscribers') }}</span></div>
                    <div class="card__detail-category">{{ $chanel->category_title }}</div>
                </div>
            </a>
        </div>
        <div class="card__col-right">
            <ul class="card__statistics">
                <li class="card__statistics-item">
                    <div class="card__statistics-count">{{ $chanel->subscribers }}</div>
                    <div class="card__statistics-text">{{  __('card.subscribers') }}</div>
                </li>
                <li class="card__statistics-item">
                    <div class="card__statistics-count">{{ $chanel->average_reach }}</div>
                    <div class="card__statistics-text">{{ __('card.average_reach') }}</div>
                </li>
                <li class="card__statistics-item">
                    <div class="card__statistics-count">{{ $chanel->citation_index }}</div>
                    <div class="card__statistics-text">{{  __('card.citation_index') }}</div>
                </li>
            </ul>
        </div>
    </div>
</article>