@extends('layout.app')
@section('title', 'Сводка о канале')
@section('content')
<section class="preview" id="preview">
    <div class="container preview__container">
        <div class="preview__row-content">
            <div class="preview__chanel-info">
                <div class="preview__chanel-infoAvatar">
                    <img loading="lazy" src="{{ url('storage', $message->img) }}" alt="Канал {{ $message->title }}" class="preview__chanel-infoImg" />
                </div>
                <div class="preview__chanel-infoDetail">
                    <div class="preview__chanel-infoTop">
                        <h2 class="preview__chanel-infoName">{{ $message->title }}</h2>
                        <a href="{{ $message->link }}" target="_blank" class="preview__chanel-infoLink">Перейти к чату</a>
                    </div>
                    <div class="preview__chanel-infoBottom">
                        <div class="preview__chanel-infoText">{!! $message->description !!}</div>
                    </div>
                </div>
            </div>
            <div class="preview__chanel-specifications">
                <div class="preview__chanel-country">
                    <div class="preview__chanel-countryHeadline">{{ __('card.language') }}</div>
                    <div class="preview__chanel-countryText">{{ $message->language }}</div>
                </div>
                <div class="preview__chanel-category">
                    <div class="preview__chanel-categoryHeadline">{{ __('card.category') }}</div>
                    <a href="#!" class="preview__chanel-categoryText">{{ $message->category_title }}</a>
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
                        <h3 class="statistics__data-cardValue">{{ $message->users }}</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $message->users_day }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.today') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $message->users_week }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.week') }}</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">+{{ $message->users_month }}</span>
                                <span class="statistics__data-cardList-secondaryText">{{ __('card.month') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="statistics__data-cardLabel">Участники</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">{{ $message->online_users_day + $message->online_users_night }}</h3>
                        <ul class="statistics__data-cardList">
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">{{ $message->online_users_day }}</span>
                                <span class="statistics__data-cardList-secondaryText">Днем</span>
                            </li>
                            <li class="statistics__data-cardList-item">
                                <span class="statistics__data-cardList-primaryText">{{ $message->online_users_night }}</span>
                                <span class="statistics__data-cardList-secondaryText">Ночью</span>
                            </li>
                        </ul>
                    </div>
                    <div class="statistics__data-cardLabel">Участники онлайн</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">{{ $message->recent_subscriptions }}</h3>
                    </div>
                    <div class="statistics__data-cardLabel">Подписчики за 24 часа</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">{{ $message->active_subscriptions }}</h3>
                    </div>
                    <div class="statistics__data-cardLabel">Активные подписчики</div>
                </div>
            </div>
            <div class="statistics__data-card">
                <div class="statistics__data-cardContent">
                    <div class="statistics__data-cardInfo">
                        <h3 class="statistics__data-cardValue">{{ $message->amount_messages }} {{ __('card.total') }}</h3>
                    </div>
                    <div class="statistics__data-cardLabel">Кол-во сообщений</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="{{ asset('assets/js/year.js') }}"></script>
@endsection