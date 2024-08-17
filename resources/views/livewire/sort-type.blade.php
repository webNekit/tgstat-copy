<ul class="intro__head-filter">
    <li class="intro__head-filterItem">
        <button class="intro__head-filterTarget {{ $filter === 'all' ? 'intro__head-filterTarget--active' : '' }}"
                wire:click="setFilterType('all')">
            {{ __('intro.topButtons.all_channels') }}
        </button>
    </li>
    <li class="intro__head-filterItem">
        <button class="intro__head-filterTarget {{ $filter === 'public' ? 'intro__head-filterTarget--active' : '' }}"
                wire:click="setFilterType('public')">
            {{ __('intro.topButtons.public_channels') }}
        </button>
    </li>
    <li class="intro__head-filterItem">
        <button class="intro__head-filterTarget {{ $filter === 'private' ? 'intro__head-filterTarget--active' : '' }}"
                wire:click="setFilterType('private')">
            {{ __('intro.topButtons.private_channels') }}
        </button>
    </li>
</ul>