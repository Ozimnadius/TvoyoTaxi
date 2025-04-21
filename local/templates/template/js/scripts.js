window.addEventListener('DOMContentLoaded', function () {
    new Events();
    new Calculator();
    new Steps();
    new Cars();

    initSliders();
    initValidators();
    initLibs();
});

function initLibs() {

}

function initSliders() {
    document.querySelectorAll('.banner').forEach(e => {
        const swiper = new Swiper(e.querySelector('.swiper'), {
            slidesPerView: 1.2,
            centeredSlides: true,
            spaceBetween: 0,
            initialSlide: 1,
            loop: true,
            speed: 700,
            pagination: {
                el: e.querySelector('.banner__pag'),
                bulletActiveClass: 'active',
                bulletClass: 'banner__bullet',
            },
            navigation: {
                nextEl: e.querySelector('.banner__prev'),
                prevEl: e.querySelector('.banner__next'),
            },
            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 1.5,
                    spaceBetween: 20
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 1.7,
                    spaceBetween: 20
                }
            }
        });
    });
}

function initValidators() {

}

class Events {
    /**
     * Constructor for Events class.
     */
    constructor() {

        this.events = new Set();

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(`[data-event]`).forEach(i => {
                i.dataset.event.split(',').forEach((event) => {
                    let [eventType, eventName] = event.split('.');

                    if (!this[eventName]) return;

                    this.events.add(eventType);
                });
            });
            this.init();
        });
    }

    /**
     * Initializes event listeners based on event types.
     */
    init() {

        const body = document.querySelector("body");

        this.events.forEach((type) => {

            body.addEventListener(type, (e) => {
                const target = e.target.closest(`[data-event]`);
                if (!target) return;

                target.dataset.event.split(',').forEach((event) => {
                    let [eventType, eventName] = event.split('.');

                    if (type !== eventType || !this[eventName]) return;

                    this[eventName].call(this, e, target);
                });
            });
        });

    }

    /**
     * Sends a form using fetch API and handles the response.
     *
     * @param {Event} e - the event object
     * @param {Element} elem - the form element to be submitted
     */
    sendForm(e, elem) {
        e.preventDefault();

        fetch(elem.action, {
            method: 'POST',
            body: new FormData(elem)
        }).then(response => response.json()).then(function (data) {

            if (data.status) {
                elem.reset();
                alert("Мы скоро свяжемся с вами.", "Спасибо!");
            } else {
                alert("Произошла ошибка.", data.error);
            }

        }).catch(function (err) {
            alert('Fetch Error :-S', err);
        });
    }

}

class Calculator {

    selectors = {
        root: '[data-calculator]',
        mark: '[data-calculator-mark]',
        model: '[data-calculator-model]',
        resultItems: '[data-calculator-result]',
    }

    constructor() {
        this.root = document.querySelector(this.selectors.root);
        this.data = JSON.parse(this.root.dataset.calculator);

        this.markSelect = this.root.querySelector(this.selectors.mark);
        this.modelSelect = this.root.querySelector(this.selectors.model);

        this.resultItems = this.root.querySelectorAll(this.selectors.resultItems);

        console.log(this.data);
        this.bindEvents();

        this.init();

    }

    init() {
        this.renderMarks();
    }

    bindEvents() {
        this.root.addEventListener('change', e => {
            this.clearResult();

            if (this.price) {
                this.showResult();
            }
        });

        this.markSelect.addEventListener('change', this.renderModels);
    }

    get formData() {
        return new FormData(this.root);
    }

    get mark() {
        return this.formData.get('mark');
    }

    get model() {
        return this.formData.get('model');
    }

    get day() {
        return Number(this.formData.get('day'));
    }

    get hour() {
        return Number(this.formData.get('hour'));
    }

    get carType() {
        return this.data.cars[this.mark]?.[this.model];
    }

    get price() {
        return Number(this.data.tarrifs[this.carType]);
    }

    get total() {
        let total = this.hour * this.day * this.price;
        total = total.toLocaleString('ru-RU');
        return total + '₽';
    }

    renderMarks() {
        Object.keys(this.data.cars).forEach(car => {
            this.markSelect.insertAdjacentHTML('beforeend', `<option>${car}</option>`);
        });
    }

    renderModels = (e) => {
        this.modelSelect.innerHTML = '<option value="">Выбрать модель авто</option>';
        if (this.mark) {
            Object.keys(this.data.cars[this.mark]).forEach(car => {
                this.modelSelect.insertAdjacentHTML('beforeend', `<option>${car}</option>`);
            });
        }
    }

    clearResult() {
        this.resultItems.forEach(e => {
            e.value = '';
        });
    }

    showResult() {
        this.clearResult();

        const resultInput = Array.from(this.resultItems).find(e => {
            return e.name == this.carType;

        });
        resultInput.value = this.total;
    }

}

class Steps {
    selectors = {
        root: '[data-steps]',
        steps: '[data-step]',
    };

    constructor() {
        this.root = document.querySelector(this.selectors.root);
        this.stepElems = this.root.querySelectorAll(this.selectors.steps);

        this.bindEvents();
    }

    bindEvents() {
        this.stepElems.forEach((step) => {
            step.addEventListener('click', e => {
                this.nextStep(e.currentTarget.dataset.stepsNext);
            });
        });
    }

    nextStep(id) {
        this.stepElems.forEach((step) => {
            step.classList.remove('active');
        });
        this.root.querySelector(`[data-step="${id}"]`).classList.add('active');
    }
}

class Cars {
    selectors = {
        root: '[data-cars]',
        btn: '[data-cars-btn]',
        item: '[data-cars-item]',
        banner: '[data-cars-item="banner"]',
    }

    constructor() {
        this.root = document.querySelector(this.selectors.root);
        this.btnElems = this.root.querySelectorAll(this.selectors.btn);
        this.itemElems = this.root.querySelectorAll(this.selectors.item);
        this.bannerElem = this.root.querySelector(this.selectors.banner);

        this.bindEvents();
    }

    bindEvents() {
        this.btnElems.forEach((btn) => {
            btn.addEventListener('click', e => {
                const btn = e.currentTarget;
                const type = btn.dataset.carsBtn;
                this.switchBtns(e.currentTarget);
                this.switchCars(type);
            });
        });
    }

    switchBtns(btn) {
        this.btnElems.forEach((btn) => {
            btn.classList.remove('active');
        })
        btn.classList.add('active');
    }

    switchCars(type) {
        if (type === 'all') {
            this.itemElems.forEach((item) => {
                item.classList.add('active');
            });
            return;
        }

        this.itemElems.forEach((item) => {
            item.classList.remove('active');
        });
        this.root.querySelectorAll(`[data-cars-item="${type}"]`).forEach((item) => {
            item.classList.add('active')
        });
    }
}

