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
            <livewire:order-by />
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