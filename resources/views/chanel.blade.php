@extends('layout.app')
@section('title', 'Сводка о канале')
@section('content')
<section class="preview" id="preview">
    <div class="container preview__container">
        <div class="preview__row-content">
            <div class="preview__chanel-info">
                <div class="preview__chanel-infoAvatar">
                    <img loading="lazy" src="https://static10.tgstat.ru/channels/_100/8c/8cac2c72e16b14071b24b79fec7aa6e1.jpg" alt="ТГ канал" class="preview__chanel-infoImg" />
                </div>
                <div class="preview__chanel-infoDetail">
                    <div class="preview__chanel-infoTop">
                        <h2 class="preview__chanel-infoName">Seep Pahuja Biology</h2>
                        <a href="#!" class="preview__chanel-infoLink">@seep_pa_b</a>
                    </div>
                    <div class="preview__chanel-infoBottom">
                        <p class="preview__chanel-infoText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate beatae perspiciatis magnam modi non vel!</p>
                    </div>
                </div>
            </div>
            <div class="preview__chanel-specifications">
                <div class="preview__chanel-country">
                    <div class="preview__chanel-countryHeadline">{{ __('card.language') }}</div>
                    <div class="preview__chanel-countryText">Россия, Русский</div>
                </div>
                <div class="preview__chanel-category">
                    <div class="preview__chanel-categoryHeadline">{{ __('card.category') }}</div>
                    <a href="#!" class="preview__chanel-categoryText">Новости и&#160;СМИ</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="statistics">
    <div class="container statistics__container">
        <div class="statistics__data-wrapper">
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">3 299 167</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+323</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+38 621</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+63 736</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.month') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.subscribers') }}</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">15 699</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+323</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+38 621</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+63 736</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.month') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.citation_index') }}</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">3 299 167</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+323</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+38 621</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+63 736</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.month') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.average_reach') }}</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">299 167</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+323</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+38 621</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+63 736</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.month') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.average_advertising_reach') }}</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">5 лет 7 месяцев</h3>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.age_channel') }}</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">255 819 {{ __('card.total') }}</h3>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.publications') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection