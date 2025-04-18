<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="calculator">
    <div class="calculator__top">
        <h2 class="calculator__title">
            Калькулятор
        </h2>
        <div class="calculator__desc">
            Без учета расходов на аренду и бензин. <br>
            Данные основаны на средних показателях за март 2025
        </div>
    </div>
    <form action="#" class="calculator__form">
        <div class="calculator__cars">
            <div class="calculator__select-wrapper">
                <select class="calculator__select" name="mark" autocomplete="off">
                    <option>Выбрать марку</option>
                    <option>Skoda</option>
                    <option>Kia</option>
                    <option>Volkswagen</option>
                    <option>Chery</option>
                    <option>Nissan</option>
                    <option>Москвич</option>
                    <option>Geely</option>
                    <option>Hyundai</option>
                    <option>Toyota</option>
                    <option>JAC</option>
                    <option>Haval</option>
                    <option>FAW</option>
                </select>
            </div>
            <div class="calculator__select-wrapper">
                <select class="calculator__select" name="model" autocomplete="off">
                    <option value="0">Выбрать модель авто</option>
                    <option>Rio</option>
                    <option>Cerato</option>
                    <option>Ceed 2020</option>
                    <option>Optima</option>
                    <option>K5</option>
                </select>
            </div>
        </div>
        <div class="calculator__counts">
            <div class="calculator__count">
                <div class="calculator__count-name">Рабочих дней в неделю</div>
                <div class="calculator__count-items">
                    <? foreach ([1, 2, 3, 4, 5, 6, 7] as $key=>$i): ?>
                        <label class="calculator__count-item">
                            <input type="radio" name="day" value="<?= $i ?>" <? if ($key==0): ?>checked<? endif; ?>>
                            <span class="calculator__count-fake">
                            <?= $i ?>
                        </span>
                        </label>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="calculator__count">
                <div class="calculator__count-name">Часов в день</div>
                <div class="calculator__count-items">
                    <? foreach ([8, 9, 10, 11, 12] as $key=>$i): ?>
                        <label class="calculator__count-item">
                            <input type="radio" name="hour" value="<?= $i ?>" <? if ($key==0): ?>checked<? endif; ?>>
                            <span class="calculator__count-fake">
                            <?= $i ?>
                        </span>
                        </label>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
        <div class="calculator__tarrifs">
            <div class="calculator__tarrif">
                <div class="calculator-tarrif">
                    <div class="calculator-tarrif__name">Эконом</div>
                    <div class="calculator-tarrif__stick">Ваш доход</div>
                    <div class="calculator-tarrif__bottom">
                        <div class="calculator-tarrif__text">
                            Выберите авто этого класса
                        </div>
                        <input class="calculator-tarrif__value h3"
                               type="text"
                               value="17 600₽"
                               required
                        >
                    </div>
                </div>
            </div>
            <div class="calculator__tarrif">
                <div class="calculator-tarrif">
                    <div class="calculator-tarrif__name">Комфорт</div>
                    <div class="calculator-tarrif__stick">Ваш доход</div>
                    <div class="calculator-tarrif__bottom">
                        <div class="calculator-tarrif__text">
                            Выберите авто этого класса
                        </div>
                        <input class="calculator-tarrif__value h3"
                               type="text"
                               value=""
                               required
                        >
                    </div>
                </div>
            </div>
            <div class="calculator__tarrif">
                <div class="calculator-tarrif">
                    <div class="calculator-tarrif__name">Комфорт+</div>
                    <div class="calculator-tarrif__stick">Ваш доход</div>
                    <div class="calculator-tarrif__bottom">
                        <div class="calculator-tarrif__text">
                            Выберите авто этого класса
                        </div>
                        <input class="calculator-tarrif__value h3"
                               type="text"
                               value=""
                               required
                        >
                    </div>
                </div>
            </div>

        </div>
        <button class="calculator__btn" type="button">
            Начать зарабатывать
        </button>
    </form>
</div>
