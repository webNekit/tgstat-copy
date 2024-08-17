<article class="cards-list__card card">
    <div class="card__row">
        <div class="card__col-left">
            <a href="{{ route('chanel') }}" class="card__link-more">
                <div class="card__avatar">
                    <img loading="lazy" src="https://static10.tgstat.ru/channels/_100/8c/8cac2c72e16b14071b24b79fec7aa6e1.jpg" alt="" class="card__avatar-img" />
                </div>
                <div class="card__detail">
                    <h3 class="card__detail-name">️Seep Pahuja Biology</h3>
                    <div class="card__detail-subscribe">141 470 <span class="card__detail-subscribeText">{{ __('card.subscribers') }}</span></div>
                    <div class="card__detail-category">Искусство</div>
                </div>
            </a>
        </div>
        <div class="card__col-right">
            <ul class="card__statistics">
                <li class="card__statistics-item">
                    <div class="card__statistics-count">585 623</div>
                    <div class="card__statistics-text">{{  __('card.subscribers') }}</div>
                </li>
                <li class="card__statistics-item">
                    <div class="card__statistics-count">30.1&#160;m</div>
                    <div class="card__statistics-text">{{ __('card.average_reach') }}</div>
                </li>
                <li class="card__statistics-item">
                    <div class="card__statistics-count">430</div>
                    <div class="card__statistics-text">{{  __('card.citation_index') }}</div>
                </li>
            </ul>
        </div>
    </div>
</article>