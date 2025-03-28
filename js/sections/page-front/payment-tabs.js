const tabs = document.querySelectorAll('.tab');
const contents = document.querySelectorAll('.content');
const contentWrapper = document.querySelector('.content__wrapper');
const progressBar = document.querySelector('.scroll__progress');
const topNumber = document.querySelector('.scroll__number--top');
const bottomNumber = document.querySelector('.scroll__number--bottom');
let currentIndex = 0;
const scrollThreshold = 20; 
const stopScrollOffset = 300;
let isScrolling = false;
let extraScroll = 0; 
let isPageLocked = false;

function switchTab(direction) {
    if (direction === 'down' && currentIndex < contents.length - 1) {
        currentIndex++;
    } else if (direction === 'up' && currentIndex > 0) {
        currentIndex--;
    }

    contents.forEach(content => content.classList.remove('active'));
    tabs.forEach(tab => tab.classList.remove('active'));

    contents[currentIndex].classList.add('active');
    tabs[currentIndex].classList.add('active');

    setTimeout(() => {
        isScrolling = false;
    }, 500);
}

function lockPageScroll(lock) {
    document.body.style.overflow = lock ? 'hidden' : 'auto';
}
tabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
      
        contents.forEach(content => content.classList.remove('active'));
        contents[index].classList.add('active');
      
        currentIndex = index;
        updateScrollBar();
    });
});
      
function updateScrollBar() {
    topNumber.textContent = (currentIndex + 1).toString().padStart(2, '0');

    let progressHeight = ((currentIndex + 1) / contents.length) * 100;
    progressBar.style.height = progressHeight + '%';
    
    if (currentIndex < contents.length - 1) {
        bottomNumber.textContent = (currentIndex + 2).toString().padStart(2, '0');
    } else {
        bottomNumber.textContent = topNumber.textContent;
    }
}
updateScrollBar();

// container.addEventListener('wheel', function (event) {
//     if (isScrolling) return;

//     // const secondTabPosition = contents[1].offsetTop;
//     // const currentScrollPosition = window.scrollY;

//     // isScrolling = true;
      
//     if (event.deltaY > 0 && currentIndex < contents.length - 1 && scrollOffset < 100) {
//         currentIndex++;
//     } else if (event.deltaY < 0 && currentIndex > 0) {
//         currentIndex--;
//     }
      
//     contents.forEach(content => content.classList.remove('active'));
//     contents[currentIndex].classList.add('active');
//     tabs.forEach(t => t.classList.remove('active'));
//     tabs[currentIndex].classList.add('active');
//     updateScrollBar();
      
//     setTimeout(() => {
//         isScrolling = false;
//     }, 500);
// });

function isContainerCentered() {
    const rect = contentWrapper.getBoundingClientRect();
    return rect.top <= stopScrollOffset && rect.bottom >= window.innerHeight / 2;
}

function lockPageScroll(lock) {
    if (lock && !isPageLocked) {
        document.body.style.overflow = 'hidden';
        isPageLocked = true;
    } else if (!lock && isPageLocked) {
        document.body.style.overflow = 'auto';
        isPageLocked = false;
    }
}
window.addEventListener('wheel', function (event) {
    if (isScrolling) return;

    if (isContainerCentered()) {
        lockPageScroll(true); // Зупиняємо прокрутку сторінки

        if (event.deltaY > 0) { 
            if (currentIndex < contents.length - 1) {
                switchTab('down');
                updateScrollBar();
            } else {
                extraScroll += event.deltaY;
                if (extraScroll >= scrollThreshold) {
                    lockPageScroll(false); // Дозволяємо прокрутку сторінки
                }
            }
        } else if (event.deltaY < 0) { 
            if (currentIndex > 0) {
                switchTab('up');
                extraScroll = 0;
                updateScrollBar();
            } else {
                extraScroll += event.deltaY;
                if (extraScroll <= -scrollThreshold) {
                    lockPageScroll(false);
                }
            }
        }
    }
}, { passive: false });
    
// container.addEventListener('wheel', function (event) {
//     // Якщо вже йде зміна табів, то не даємо прокручувати
//     if (isScrolling) return;
    
//     // Отримуємо поточну позицію обгортки контенту
//     const wrapperRect = contentWrapper.getBoundingClientRect();
//     const contentTop = wrapperRect.top;
    
//     // Якщо ми ще не досягли обгортки контенту, скролити сторінку за межі контейнера
//     if (contentTop > 0 && event.deltaY > 0 && scrollOffset < 100) {
//         // Збільшуємо скрол на кілька пікселів
//         scrollOffset += event.deltaY;
//         event.preventDefault(); // Блокуємо прокручування сторінки
//     }
//     // Якщо прокрутили до межі (наприклад, 100 пікселів)
//     else if (scrollOffset >= 100 && scrollOffset < 150) {
//         // Якщо прокрутили достатньо, перемикаємо таб
//         if (currentIndex < contents.length - 1) {
//             isScrolling = true;
//             currentIndex++;
//             contents.forEach(content => content.classList.remove('active'));
//             contents[currentIndex].classList.add('active');
//             updateScrollNumber();
//         }
    
//         scrollOffset += event.deltaY;
//         event.preventDefault(); // Блокуємо прокручування сторінки
    
//         if (scrollOffset >= 150) {
//         // Дозволяємо прокручувати далі сторінку після того, як досягнуто кінцевої точки
//             isScrolling = false;
//             scrollOffset = 0; // Скидаємо лічильник скролу
//         }
//     }
//     // Якщо ми прокрутили назад (від другого табу до першого), дозволяємо повернутись
//     else if (scrollOffset > 0 && event.deltaY < 0) {
//         scrollOffset -= event.deltaY;
//         event.preventDefault();
//     }
// });