<div class="header-search__form">
    <div class="header-search__field">
        <input
            wire:model.live.debounce.300ms="search"
            type="search" class="header-search__input" placeholder="{{ __('searchPlaceholder.placeholder') }}" />
        <button
            wire:click="update" 
            type="submit" class="header-search__button"><i class="ri-search-line"></i></button>
    </div>
</div>