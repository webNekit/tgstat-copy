function dropDownLang(){
    const langButton = document.querySelector('.header-lang__button');
    const dropdownMenu = document.querySelector('.header-lang__dropdown');

    // Функция для закрытия меню
    function closeDropdown() {
        dropdownMenu.classList.remove('is-active');
    }

    // Открытие/закрытие меню по клику на кнопку
    langButton.addEventListener('click', function(event) {
        event.stopPropagation(); // Предотвращаем всплытие события
        dropdownMenu.classList.toggle('is-active');
    });

    // Закрытие меню при клике вне его
    document.addEventListener('click', function(event) {
        if (!dropdownMenu.contains(event.target) && !langButton.contains(event.target)) {
            closeDropdown();
        }
    });

    // Закрытие меню при нажатии клавиши Esc
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeDropdown();
        }
    });
}
export default dropDownLang;