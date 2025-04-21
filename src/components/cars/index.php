<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="cars"
     data-cars
>
    <div class="cars__top">
        <h4 class="cars__title">Наш парк автомобилей</h4>
        <div class="cars__btns">
            <button class="cars__btn"
                    type="button"
                    data-cars-btn="econom">
                Эконом
            </button>
            <button class="cars__btn"
                    type="button"
                    data-cars-btn="comfort">
                Комфорт
            </button>
            <button class="cars__btn"
                    type="button"
                    data-cars-btn="comfort-plus">
                Комфорт+
            </button>
            <button class="cars__btn active"
                    type="button"
                    data-cars-btn="all">
                Все
            </button>
        </div>
    </div>
    <div class="cars__list">
        <? foreach ($arResult as $i): ?>
            <div class="cars__item active" data-cars-item="<?= $i['type'] ?>">
                <div class="car">
                    <div class="car__top">
                        <div class="car__type"><?= $i['typeName'] ?></div>
                        <div class="car__price">1 400 ₽ / сутки</div>
                    </div>
                    <div class="car__middle">
                        <div class="car__name">Volkswagen Polo</div>
                        <div class="car__year">Год выпуска: 2020</div>
                        <div class="car__img">
                            <img src="/upload/images/cars/car.webp"
                                 width="251"
                                 height="204"
                                 loading="lazy"
                                 alt="Volkswagen Polo">
                            <div class="car__stick">
                                Это авто можно выкупить
                            </div>
                        </div>
                    </div>
                    <div class="car__bottom">
                        <div class="car__info">
                            <div class="car__rent">
                                Аренда: 1 сутки
                            </div>
                            <div class="car__driver-type">
                                Новым водителям
                            </div>
                        </div>
                        <div class="car__tarrifs">
                            <div class="car__tarrif">2 000₽</div>
                            <div class="car__tarrif">2 000₽</div>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
        <div class="cars__item cars__item--full active" data-cars-item="banner">
            <div class="car-banner">
                <picture>
                    <source srcset="/upload/images/cars/banner-mobile.webp" media="(max-width: 767.98px)"/>
                    <img src="/upload/images/cars/banner.webp"
                         width="1174"
                         height="264"
                         loading="lazy"
                         alt="АКЦИЯ">
                </picture>
            </div>
        </div>
    </div>
</div>

