@extends('layout.app')
@section('title', 'Рейтинг Telegram-чатов')
@section('content')
<section class="intro" id="intro">
    <div class="container intro__container">
        <div class="intro__head-row">
            <h1 class="intro__head-title">{{ __('messageIntro.title') }}</h1>
            <livewire:filter-message />
        </div>
        <div class="intro__bottom-row">
            <livewire:order-message />
        </div>
    </div>
</section>
<div class="website__main-wrapper">
    <div class="container website__main-wrapperContainer">
        <div class="website__main-wrapperBody">
            @include('layout.partials.sidebar')
            <div class="website__main-wrapperContent">
                <livewire:messages-list />
            </div>
        </div>
    </div>
</div>
@endsection