@extends('layout.app')
@section('title', 'Главная')
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
                        <x-card />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection