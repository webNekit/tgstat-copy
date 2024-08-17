@extends('layout.app')
@section('title', 'Главная')
@section('content')
<section class="intro" id="intro">
    <div class="container intro__container">
        <div class="intro__head-row">
            <h1 class="intro__head-title">{{ __('intro.title') }}</h1>
            <livewire:sort-type />
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
                <livewire:chanels />
            </div>
        </div>
    </div>
</div>
@endsection