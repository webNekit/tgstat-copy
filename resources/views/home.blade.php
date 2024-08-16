@extends('layout.app')
@section('content')
<section class="intro" id="intro">
    <div class="container intro__container">
        <div class="intro__head-row">
            <h1 class="intro__head-title">{{ __('intro.title') }}</h1>
            <ul class="intro__head-filter">
                <li class="intro__head-filterItem">
                    <button class="intro__head-filterTarget intro__head-filterTarget--active">{{ __('intro.topButtons.all_channels') }}</button>
                </li>
                <li class="intro__head-filterItem">
                    <button class="intro__head-filterTarget">{{ __('intro.topButtons.public_channels') }}</button>
                </li>
                <li class="intro__head-filterItem">
                    <button class="intro__head-filterTarget">{{ __('intro.topButtons.private_channels') }}</button>
                </li>
            </ul>
        </div>
        <div class="intro__bottom-row">
            <ul class="intro__bottom-filter">
                <li class="intro__bottom-filterItem">
                    <button class="intro__bottom-filterTarget">{{ __('intro.bottomButtons.by_subscribers') }} <i class="ri-arrow-down-line"></i></button>
                </li>
                <li class="intro__bottom-filterItem">
                    <button class="intro__bottom-filterTarget">{{ __('intro.bottomButtons.by_coverage') }} <i class="ri-arrow-down-line"></i></button>
                </li>
                <li class="intro__bottom-filterItem">
                    <button class="intro__bottom-filterTarget">{{ __('intro.bottomButtons.by_citation') }} <i class="ri-arrow-down-line"></i></button>
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="website__main-wrapper">
    <div class="container website__main-wrapperContainer">
        <div class="website__main-wrapperBody">
            @include('layout.partials.sidebar')
            <div class="website__main-wrapperContent">
                <ul class="website__main-cards cards-list">
                    <li class="cards-list__item">
                        <article class="cards-list__card card">
                            <div class="card__row">
                                <div class="card__col-left">
                                    <a href="chanel.html" class="card__link-more">
                                        <div class="card__avatar">
                                            <img loading="lazy" src="https://static10.tgstat.ru/channels/_100/8c/8cac2c72e16b14071b24b79fec7aa6e1.jpg" alt="" class="card__avatar-img" />
                                        </div>
                                        <div class="card__detail">
                                            <h3 class="card__detail-name">️Seep Pahuja Biology</h3>
                                            <div class="card__detail-subscribe">141 470 <span class="card__detail-subscribeText">участников</span></div>
                                            <div class="card__detail-category">Искусство</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card__col-right">
                                    <ul class="card__statistics">
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">585 623</div>
                                            <div class="card__statistics-text">участников</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">30.1&#160;m</div>
                                            <div class="card__statistics-text">охват 1 поста</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">440</div>
                                            <div class="card__statistics-text">индекс цитирования</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards-list__item">
                        <article class="cards-list__card card">
                            <div class="card__row">
                                <div class="card__col-left">
                                    <a href="chanel.html" class="card__link-more">
                                        <div class="card__avatar">
                                            <img loading="lazy" src="https://static10.tgstat.ru/channels/_100/8c/8cac2c72e16b14071b24b79fec7aa6e1.jpg" alt="" class="card__avatar-img" />
                                        </div>
                                        <div class="card__detail">
                                            <h3 class="card__detail-name">️Seep Pahuja Biology</h3>
                                            <div class="card__detail-subscribe">141 470 <span class="card__detail-subscribeText">участников</span></div>
                                            <div class="card__detail-category">Искусство</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card__col-right">
                                    <ul class="card__statistics">
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">585 623</div>
                                            <div class="card__statistics-text">участников</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">30.1&#160;m</div>
                                            <div class="card__statistics-text">охват 1 поста</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">440</div>
                                            <div class="card__statistics-text">индекс цитирования</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards-list__item">
                        <article class="cards-list__card card">
                            <div class="card__row">
                                <div class="card__col-left">
                                    <a href="chanel.html" class="card__link-more">
                                        <div class="card__avatar">
                                            <img loading="lazy" src="https://static10.tgstat.ru/channels/_100/8c/8cac2c72e16b14071b24b79fec7aa6e1.jpg" alt="" class="card__avatar-img" />
                                        </div>
                                        <div class="card__detail">
                                            <h3 class="card__detail-name">️Seep Pahuja Biology</h3>
                                            <div class="card__detail-subscribe">141 470 <span class="card__detail-subscribeText">участников</span></div>
                                            <div class="card__detail-category">Искусство</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card__col-right">
                                    <ul class="card__statistics">
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">585 623</div>
                                            <div class="card__statistics-text">участников</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">30.1&#160;m</div>
                                            <div class="card__statistics-text">охват 1 поста</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">440</div>
                                            <div class="card__statistics-text">индекс цитирования</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards-list__item">
                        <article class="cards-list__card card">
                            <div class="card__row">
                                <div class="card__col-left">
                                    <a href="chanel.html" class="card__link-more">
                                        <div class="card__avatar">
                                            <img loading="lazy" src="https://static10.tgstat.ru/channels/_100/8c/8cac2c72e16b14071b24b79fec7aa6e1.jpg" alt="" class="card__avatar-img" />
                                        </div>
                                        <div class="card__detail">
                                            <h3 class="card__detail-name">️Seep Pahuja Biology</h3>
                                            <div class="card__detail-subscribe">141 470 <span class="card__detail-subscribeText">участников</span></div>
                                            <div class="card__detail-category">Искусство</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card__col-right">
                                    <ul class="card__statistics">
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">585 623</div>
                                            <div class="card__statistics-text">участников</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">30.1&#160;m</div>
                                            <div class="card__statistics-text">охват 1 поста</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">440</div>
                                            <div class="card__statistics-text">индекс цитирования</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="cards-list__item">
                        <article class="cards-list__card card">
                            <div class="card__row">
                                <div class="card__col-left">
                                    <a href="chanel.html" class="card__link-more">
                                        <div class="card__avatar">
                                            <img loading="lazy" src="https://static10.tgstat.ru/channels/_100/8c/8cac2c72e16b14071b24b79fec7aa6e1.jpg" alt="" class="card__avatar-img" />
                                        </div>
                                        <div class="card__detail">
                                            <h3 class="card__detail-name">️Seep Pahuja Biology</h3>
                                            <div class="card__detail-subscribe">141 470 <span class="card__detail-subscribeText">участников</span></div>
                                            <div class="card__detail-category">Искусство</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card__col-right">
                                    <ul class="card__statistics">
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">585 623</div>
                                            <div class="card__statistics-text">участников</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">30.1&#160;m</div>
                                            <div class="card__statistics-text">охват 1 поста</div>
                                        </li>
                                        <li class="card__statistics-item">
                                            <div class="card__statistics-count">440</div>
                                            <div class="card__statistics-text">индекс цитирования</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection