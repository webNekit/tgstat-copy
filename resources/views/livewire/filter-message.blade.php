<ul class="intro__head-filter">
    <li class="intro__head-filterItem">
        <button
            class="intro__head-filterTarget {{ $filter === 'all' ? 'intro__head-filterTarget--active' : '' }}"
            wire:click="setFilterType('all')">
            {{ __('messageIntro.topFilter.all_chat') }}
        </button>
    </li>
    <li class="intro__head-filterItem">
        <button
            class="intro__head-filterTarget {{ $filter === 'public' ? 'intro__head-filterTarget--active' : '' }}"
            wire:click="setFilterType('public')">
            {{ __('messageIntro.topFilter.public_chat') }}
        </button>
    </li>
    <li class="intro__head-filterItem">
        <button
            class="intro__head-filterTarget {{ $filter === 'private' ? 'intro__head-filterTarget--active' : '' }}"
            wire:click="setFilterType('private')">
            {{ __('messageIntro.topFilter.private_chat') }}
        </button>
    </li>
</ul>
