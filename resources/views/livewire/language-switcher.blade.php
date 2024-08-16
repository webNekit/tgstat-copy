<li class="header__actions-item header-lang">
    <button class="header-lang__button">
        @if($currentLanguage == 'ru')
            <span class="header-lang__flag">🇷🇺</span>
            <span class="header-lang__text">Русский</span>
        @elseif($currentLanguage == 'en')
            <span class="header-lang__flag">🇺🇸</span>
            <span class="header-lang__text">English</span>
        @elseif($currentLanguage == 'uz')
            <span class="header-lang__flag">🇺🇿</span>
            <span class="header-lang__text">O‘zbekcha</span>
        @elseif($currentLanguage == 'tt')
            <span class="header-lang__flag">🇭🇺</span>
            <span class="header-lang__text">Tatarça</span>
        @endif
        <i class="ri-arrow-down-s-line"></i>
    </button>
    <div class="header-lang__dropdown">
        <div class="header-lang__dropdown-title">Язык сайта</div>
        <ul class="header-lang__dropdown-list">
            <li class="header-lang__dropdown-item">
                <button class="header-lang__dropdown-button" wire:click="switchLanguage('ru')">
                    <span class="header-lang__dropdown-flag">🇷🇺</span>
                    <span class="header-lang__dropdown-text">Русский</span>
                </button>
            </li>
            <li class="header-lang__dropdown-item">
                <button class="header-lang__dropdown-button" wire:click="switchLanguage('en')">
                    <span class="header-lang__dropdown-flag">🇺🇸</span>
                    <span class="header-lang__dropdown-text">English</span>
                </button>
            </li>
            <li class="header-lang__dropdown-item">
                <button class="header-lang__dropdown-button" wire:click="switchLanguage('uz')">
                    <span class="header-lang__dropdown-flag">🇺🇿</span>
                    <span class="header-lang__dropdown-text">O‘zbekcha</span>
                </button>
            </li>
            <li class="header-lang__dropdown-item">
                <button class="header-lang__dropdown-button" wire:click="switchLanguage('tt')">
                    <span class="header-lang__dropdown-flag">🇭🇺</span>
                    <span class="header-lang__dropdown-text">Tatarça</span>
                </button>
            </li>
        </ul>
    </div>
</li>