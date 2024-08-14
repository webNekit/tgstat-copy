function modalSearchToggle(){
    const searchButton = document.querySelector('.header__actions-buttonSearch');
    const searchIcon = searchButton.querySelector('i');
    const searchContainer = document.querySelector('.header-search');
    const body = document.body;

    // Функция для открытия поиска
    function openSearch() {
        searchContainer.classList.add('header-search--active');
        body.classList.add('no-scroll');
        searchIcon.classList.remove('ri-search-line');
        searchIcon.classList.add('ri-close-line');
    }

    // Функция для закрытия поиска
    function closeSearch() {
        searchContainer.classList.remove('header-search--active');
        body.classList.remove('no-scroll');
        searchIcon.classList.remove('ri-close-line');
        searchIcon.classList.add('ri-search-line');
    }

    // Переключение состояния поиска по клику на кнопку
    searchButton.addEventListener('click', function(event) {
        event.stopPropagation(); // Предотвращаем всплытие события
        if (searchContainer.classList.contains('header-search--active')) {
            closeSearch();
        } else {
            openSearch();
        }
    });

    // Закрытие поиска при клике вне области поиска или кнопки поиска
    document.addEventListener('click', function(event) {
        const isClickInsideSearch = searchContainer.contains(event.target);
        const isClickOnSearchButton = searchButton.contains(event.target);

        if (!isClickInsideSearch && !isClickOnSearchButton) {
            closeSearch();
        }
    });

    // Закрытие поиска при нажатии клавиши Esc
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeSearch();
        }
    });
}

export default modalSearchToggle;