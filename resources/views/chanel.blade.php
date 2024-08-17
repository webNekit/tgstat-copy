@extends('layout.app')
@section('title', 'Сводка о канале')
@section('content')
<section class="preview" id="preview">
    <div class="container preview__container">
        <div class="preview__row-content">
            <div class="preview__chanel-info">
                <div class="preview__chanel-infoAvatar">
                    <img loading="lazy" src="{{ url('storage', $chanel->img) }}" alt="Канал {{ $chanel->title }}" class="preview__chanel-infoImg" />
                </div>
                <div class="preview__chanel-infoDetail">
                    <div class="preview__chanel-infoTop">
                        <h2 class="preview__chanel-infoName">{{ $chanel->title }}</h2>
                        <a href="{{ $chanel->link }}" target="_blank" class="preview__chanel-infoLink">Перейти к каналу</a>
                    </div>
                    <div class="preview__chanel-infoBottom">
                        <div class="preview__chanel-infoText">{!! $chanel->description !!}</div>
                    </div>
                </div>
            </div>
            <div class="preview__chanel-specifications">
                <div class="preview__chanel-country">
                    <div class="preview__chanel-countryHeadline">{{ __('card.language') }}</div>
                    <div class="preview__chanel-countryText">{{ $chanel->language }}</div>
                </div>
                <div class="preview__chanel-category">
                    <div class="preview__chanel-categoryHeadline">{{ __('card.category') }}</div>
                    <a href="#!" class="preview__chanel-categoryText">{{ $chanel->category_title }}</a>
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
                        <h3 class="statistics__data-cardValue">{{ $chanel->subscribers }}</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->subscribers_day }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->subscribers_week }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->subscribers_month }}</span>
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
                        <h3 class="statistics__data-cardValue">{{ $chanel->citation_index }}</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->citation_index_day }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->citation_index_week }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->citation_index_month }}</span>
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
                        <h3 class="statistics__data-cardValue">{{ $chanel->average_reach }}</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->average_reach_day }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->average_reach_week }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->average_reach_month }}</span>
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
                        <h3 class="statistics__data-cardValue">{{ $chanel->average_advertising_reach }}</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->average_advertising_reach_day }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->average_advertising_reach_week }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $chanel->average_advertising_reach_month }}</span>
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
                        <h3 class="statistics__data-cardValue">{{ $chanel->age_channel }} лет.</h3>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.age_channel') }}</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">{{ $chanel->publications }} {{ __('card.total') }}</h3>
                    </div>
                    <div class="statistics__data-cardLabel">{{ __('card.publications') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection