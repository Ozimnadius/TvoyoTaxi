<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="feedback">
    <div class="feedback__item">
        <form action="/ajax/sendForm.php"
              class="feedback__form"
              data-event="submit.sendForm"
        >
            <h3 class="feedback__title">
                Оставить заявку
            </h3>
            <div class="feedback__fields">
                <div class="feedback__field">
                    <input type="text" name="name" placeholder="ВАШЕ ИМЯ">
                </div>
                <div class="feedback__field">
                    <input type="tel" name="tel" placeholder="+7(    )___-__-__" required>
                </div>
                <div class="feedback__field">
                    <div class="feedback__tarrifs">
                        <label class="feedback__tarrif">
                            <input type="radio" name="feedbackTarrif" value="Эконом" checked>
                            <span class="feedback__tarrif-fake">
                                Эконом
                            </span>
                        </label>
                        <label class="feedback__tarrif">
                            <input type="radio" name="feedbackTarrif" value="Комфорт">
                            <span class="feedback__tarrif-fake">
                                Комфорт
                            </span>
                        </label>
                        <label class="feedback__tarrif">
                            <input type="radio" name="feedbackTarrif" value="Комфорт +">
                            <span class="feedback__tarrif-fake">
                                Комфорт +
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <label class="feedback__accept">
                <input type="checkbox" name="accept" checked>
                <span>
                    Отправляя заявку, я соглашаюсь
                c <a href="/">Политикой конфиденциальности</a>
                </span>
            </label>
            <button class="feedback__submit" type="submit">Отправить</button>
        </form>
    </div>
    <div class="feedback__item">
        <div class="feedback__img">
            <img src="/upload/images/map.webp"
                 width="575"
                 height="547"
                 loading="lazy"
                 alt="feedback">
        </div>
    </div>
</div>

