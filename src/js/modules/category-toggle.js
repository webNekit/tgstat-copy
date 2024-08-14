function categoryToggle() {
    const sidebar = document.querySelector('.website__main-wrapperSidebar');
    const body = document.body;
    const toggleButton = document.querySelector('.sidebar-toggle');

    // Функция для обновления иконки
    function updateIcon() {
        if (sidebar.classList.contains('is-active')) {
            toggleButton.innerHTML = '<i class="ri-arrow-left-s-line"></i>';
        } else {
            toggleButton.innerHTML = '<i class="ri-arrow-right-s-line"></i>';
        }
    }

    // Обработчик клика по кнопке для открытия/закрытия сайдбара
    toggleButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Останавливаем всплытие события

        sidebar.classList.toggle('is-active');
        body.classList.toggle('no-scroll');
        updateIcon(); // Обновляем иконку после изменения состояния
    });

    // Обработчик клика по документу
    document.addEventListener('click', function (event) {
        // Если клик был вне сайдбара и вне кнопки
        if (!sidebar.contains(event.target) && event.target !== toggleButton) {
            if (sidebar.classList.contains('is-active')) {
                sidebar.classList.remove('is-active');
                body.classList.remove('no-scroll');
                updateIcon(); // Обновляем иконку после закрытия сайдбара
            }
        }
    });

    // Инициализируем иконку при загрузке страницы
    updateIcon();
}
export default categoryToggle;