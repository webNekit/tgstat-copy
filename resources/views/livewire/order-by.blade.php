<ul class="intro__bottom-filter">
    <li class="intro__bottom-filterItem">
        <button class="intro__bottom-filterTarget {{ $orderBy === 'subscribers' ? 'intro__bottom-filterTarget--active' : '' }}"
                wire:click="setOrderBy('subscribers')">
            {{ __('intro.bottomButtons.by_subscribers') }} <i class="ri-arrow-down-line"></i>
        </button>
    </li>
    <li class="intro__bottom-filterItem">
        <button class="intro__bottom-filterTarget {{ $orderBy === 'average_reach' ? 'intro__bottom-filterTarget--active' : '' }}"
                wire:click="setOrderBy('average_reach')">
            {{ __('intro.bottomButtons.by_coverage') }} <i class="ri-arrow-down-line"></i>
        </button>
    </li>
    <li class="intro__bottom-filterItem">
        <button class="intro__bottom-filterTarget {{ $orderBy === 'citation_index' ? 'intro__bottom-filterTarget--active' : '' }}"
                wire:click="setOrderBy('citation_index')">
            {{ __('intro.bottomButtons.by_citation') }} <i class="ri-arrow-down-line"></i>
        </button>
    </li>
</ul>