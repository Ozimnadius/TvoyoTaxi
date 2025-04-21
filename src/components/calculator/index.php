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
    <form action="#"
          class="calculator__form"
          data-calculator='<?=json_encode([
              'tarrifs' => [
                  'econom' => '800',
                  'comfort' => '1000',
                  'comfort-plus' => '1300'
              ],
              'cars' => [
                  'Kia' => [
                      'Rio' => 'econom',
                      'Ceed' => 'comfort',
                      'K5' => 'comfort-plus'
                  ],
                  'Toyota' => [
                      'Camry' => 'comfort-plus'
                  ]
              ]
          ]);?>'
    >
        <div class="calculator__cars">
            <div class="calculator__select-wrapper">
                <select class="calculator__select"
                        name="mark"
                        autocomplete="off"
                        data-calculator-mark
                >
                    <option value="">Выбрать марку</option>
                </select>
            </div>
            <div class="calculator__select-wrapper">
                <select class="calculator__select"
                        name="model"
                        autocomplete="off"
                        data-calculator-model
                >
                    <option value="">Выбрать модель авто</option>
                </select>
            </div>
        </div>
        <div class="calculator__counts">
            <div class="calculator__count">
                <div class="calculator__count-name">Рабочих дней в неделю</div>
                <div class="calculator__count-items">
                    <? foreach ([1, 2, 3, 4, 5, 6, 7] as $key => $i): ?>
                        <label class="calculator__count-item">
                            <input type="radio" name="day" value="<?= $i ?>" <? if ($key == 0): ?>checked<? endif; ?>>
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
                    <? foreach ([8, 9, 10, 11, 12] as $key => $i): ?>
                        <label class="calculator__count-item">
                            <input type="radio" name="hour" value="<?= $i ?>" <? if ($key == 0): ?>checked<? endif; ?>>
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
                               name="econom"
                               type="text"
                               value=""
                               required
                               data-calculator-result
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
                               name="comfort"
                               value=""
                               required
                               data-calculator-result
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
                               name="comfort-plus"
                               value=""
                               required
                               data-calculator-result
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
