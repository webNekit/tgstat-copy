@props(['message'])
<article class="cards-list__card card">
    <div class="card__row">
        <div class="card__col-left">
            <a href="{{ route('message.show', $message->id) }}" class="card__link-more">
                <div class="card__avatar">
                    <img loading="lazy" src="{{ url('storage', $message->img) }}" alt="{{ $message->title }}" class="card__avatar-img" />
                </div>
                <div class="card__detail">
                    <h3 class="card__detail-name">️{{ $message->title }}</h3>
                    <div class="card__detail-subscribe">{{ $message->users }} <span class="card__detail-subscribeText">участников</span></div>
                    <div class="card__detail-category">{{ $message->category_title }}</div>
                </div>
            </a>
        </div>
        <div class="card__col-right">
            <ul class="card__statistics">
                <li class="card__statistics-item">
                    <div class="card__statistics-count">{{ $message->users }}</div>
                    <div class="card__statistics-text">Участники</div>
                </li>
                <li class="card__statistics-item">
                    <div class="card__statistics-count">{{ $message->amount_messages }}</div>
                    <div class="card__statistics-text">Сообщений</div>
                </li>
                <li class="card__statistics-item">
                    <div class="card__statistics-count">{{ $message->recent_subscriptions }}</div>
                    <div class="card__statistics-text">Подписчки за 24 часа</div>
                </li>
            </ul>
        </div>
    </div>
</article>