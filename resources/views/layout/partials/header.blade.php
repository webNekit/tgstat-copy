<header class="header" id="header">
    <div class="container header__container">
        <div class="header__top-row">
            <div class="header__col-left">
                <div class="header__logo logo">
                    <a href="{{ route('home') }}" class="logo__link">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Логотип сайта" class="logo__brand" />
                        <span class="logo__text">{{ config('app.name') }}</span>
                    </a>
                </div>
                <div class="header__search-form header-search">
                    <livewire:search-box />
                </div>
            </div>
            <div class="header__col-right">
                <ul class="header__actions">
                    <li class="header__actions-item">
                        <button class="header__actions-buttonSearch button-search" id="button-search">
                            <i class="ri-search-line"></i>
                        </button>
                    </li>
                    <li class="header__actions-item">
                        <button class="header__actions-buttonTheme button-theme" id="button-theme">
                            <i class="ri-moon-line"></i>
                        </button>
                    </li>
                    <livewire:language-switcher />
                </ul>
            </div>
        </div>
    </div>
</header>