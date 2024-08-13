function themeMode() {
    const themeToggleButton = document.getElementById('button-theme');
    const themeIcon = themeToggleButton.querySelector('i');
    const currentTheme = localStorage.getItem('theme');

    // Функция для установки иконки
    function setThemeIcon(isDark) {
        if (isDark) {
            themeIcon.classList.remove('ri-moon-line');
            themeIcon.classList.add('ri-sun-line');
        } else {
            themeIcon.classList.remove('ri-sun-line');
            themeIcon.classList.add('ri-moon-line');
        }
    }

    // Проверяем текущую тему в локальном хранилище и устанавливаем иконку
    if (currentTheme === 'dark') {
        document.documentElement.classList.add('dark');
        setThemeIcon(true);
    } else {
        setThemeIcon(false);
    }

    // Обработчик для переключения темы
    themeToggleButton.addEventListener('click', function () {
        const isDark = document.documentElement.classList.contains('dark');
        if (isDark) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', '');
            setThemeIcon(false);
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            setThemeIcon(true);
        }
    });
}

export default themeMode;