<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="feedback">
    <div class="feedback__item">
        <form action="/ajax/sendForm.php"
              class="feedback__from"
              data-event="submit.sendForm"
        >
            <h3 class="feedback__title">
                Оставить заявку
            </h3>
            <div class="feedback__fields">
                <div class="feedback__field">
                    <input type="text" name="ВАШЕ ИМЯ">
                </div>
                <div class="feedback__field">
                    <input type="tel" name="+7(    )___-__-__">
                </div>
                <div class="feedback__field">
                    <div class="feedback__tarrifs">
                        <label class="feedback__tarrif">
                            <input type="radio" name="feedbackTarrif" value="Эконом">
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
            <div class="feedback__accept">
                <input type="checkbox" name="accept">
                Отправляя заявку, я соглашаюсь
                c <a href="/">Отправляя заявку, я соглашаюсь с Политикой конфиденциальности</a>
            </div>
            <button class="feedback__submit" type="submit">Отправить</button>
        </form>
    </div>
    <div class="feedback__item"></div>
</div>

