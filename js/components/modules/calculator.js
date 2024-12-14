const parametersContainer = document.getElementById('parameters');
const resultPrice = document.getElementById('result-price');
const resultDetails = document.getElementById('result-details');

// Масив з параметрами та їхніми початковими значеннями
const parameters = [
    { name: 'Площа', unit: 'м2', value: 17 },
    { name: 'Количество углов', value: 4 },
    { name: 'Светильники', value: 0 },
    { name: 'Люстры', value: 0 },
    { name: 'Трубы', value: 0 },
];

// Функція для створення елементів управління для параметра
function createParameterElement(parameter) {
    const div = document.createElement('div');
    div.classList.add('input-group');
    div.innerHTML = `
    <label for="${parameter.name}">${parameter.name} ${parameter.unit || ''}</label>
    <input type="number" id="${parameter.name}" value="${parameter.value}">
    <div class="calc__buttons">
    <button class="decrement">-</button>
    <button class="increment">+</button>
    </div>
  `;

    // Обробники подій для кнопок
    const decrementButton = div.querySelector('.decrement');
    decrementButton.addEventListener('click', () => {
        parameter.value = Math.max(0, parameter.value - 1);
        updateResult();
    });

    const incrementButton = div.querySelector('.increment');
    incrementButton.addEventListener('click', () => {
        parameter.value++;
        updateResult();
    });

    return div;
}

// Функція для оновлення результату
function updateResult() {
    // Розрахунок вартості на основі значень параметрів
    const totalPrice = calculatePrice(parameters);
    resultPrice.textContent = totalPrice;

    // Оновлення списку деталей
    resultDetails.innerHTML = '';
    // ... тут логіка для формування списку деталей
}

// Функція для розрахунку ціни (замініть на вашу логіку розрахунку)
function calculatePrice(parameters) {
    // Ваш алгоритм розрахунку ціни на основі введених даних
    // ...
    return 0; // Повернути розраховану ціну
}

// Створення елементів управління для кожного параметра
parameters.forEach(parameter => {
    parametersContainer.appendChild(createParameterElement(parameter));
});

// Перший розрахунок
updateResult();