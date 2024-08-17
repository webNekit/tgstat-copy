function formatYears(number) {
    // Преобразуем число в строку и проверяем, содержит ли оно точку
    if (number.toString().includes('.')) {
        // Разделяем на целую и дробную части
        const parts = number.toString().split('.');
        const years = parseInt(parts[0]);
        const months = parseInt(parts[1]);

        // Определяем правильную форму для "месяц(а)/месяцев"
        let monthText = (months > 1 && months < 5) ? 'месяца' : 'месяцев';

        // Если целая часть равна 0, выводим только месяцы
        if (years === 0) {
            return `${months} ${monthText}`;
        }

        // Определяем правильную форму для "год(а)/лет"
        let yearText;
        if (years === 1) {
            yearText = 'год';
        } else if (years > 1 && years < 5) {
            yearText = 'года';
        } else {
            yearText = 'лет';
        }

        return `${years} ${yearText} ${months} ${monthText}`;
    } else {
        // Если число целое, определяем форму для "год(а)/лет"
        let yearText;
        if (number === 1) {
            yearText = 'год';
        } else if (number > 1 && number < 5) {
            yearText = 'года';
        } else {
            yearText = 'лет';
        }

        return `${number} ${yearText}`;
    }
}

// Получаем элемент с id="year"
const yearElement = document.getElementById('year');

// Получаем число из содержимого элемента и форматируем его
const formattedYear = formatYears(parseFloat(yearElement.textContent));

// Заменяем содержимое элемента на отформатированное значение
yearElement.textContent = formattedYear;