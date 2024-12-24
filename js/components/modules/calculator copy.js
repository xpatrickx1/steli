const parametersContainer = document.getElementById('parameters');
const resultPriceFrom = document.getElementById('resultPriceFrom');
const resultPriceTo = document.getElementById('resultPriceTo');
const wrongPrice = document.getElementById('wrongPrice');
const resultDetails = document.getElementById('result-details');

const parameters = [
    { name: 'square', unit: 'м2', value: 17 },
    { name: 'angles', value: 4 },
    { name: 'lightingPoints', value: 0 },
    { name: 'chandeliers', value: 0 },
    { name: 'rod', value: 0 },
];

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

    const decrementButton = div.querySelector('.decrement');
    decrementButton.addEventListener('click', () => {
        parameter.value = Math.max(0, parameter.value - 1);
        document.getElementById(parameter.name).value = parameter.value;
        updateResult();
    });

    const incrementButton = div.querySelector('.increment');
    incrementButton.addEventListener('click', () => {
        parameter.value++;
        document.getElementById(parameter.name).value = parameter.value;
        updateResult();
    });

    return div;
}

function updateResult() {
    // Розрахунок вартості на основі значень параметрів
    const totalPrice = calculatePrice(parameters);
    console.log(totalPrice);
    wrongPrice.textContent = totalPrice / 100 * 70;
    resultPriceFrom.textContent = totalPrice;
    resultPriceTo.textContent = totalPrice / 100 * 120;
}

function getValueByName(name) {
    for (let i = 0; i < parameters.length; i++) {
        if (parameters[i].name === name) {
            return parameters[i].value;
        }
    }
    return null; 
}

function calculatePrice(parameters) {
    const basePrice = 1000;
    const areaPrice = getValueByName('square') * 50;
    const cornersPrice = getValueByName('angles') * 20;
    const lightingPointsPrice = getValueByName('lightingPoints') * 20;
    const chandeliersPrice = getValueByName('chandeliers') * 20;
    const rodPrice = getValueByName('rod') * 20;
    return basePrice + areaPrice + cornersPrice + lightingPointsPrice + chandeliersPrice + rodPrice; // Повернути розраховану ціну
}

parameters.forEach(parameter => {
    parametersContainer.appendChild(createParameterElement(parameter));
});

updateResult();