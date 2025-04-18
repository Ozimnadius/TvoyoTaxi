<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="advantages">
    <div class="advantages__top">
        <div class="advantages__img">
            <img src="/upload/images/advantages/img.webp"
                 width="249"
                 height="94"
                 loading="lazy"
                 alt="Мы являемся официальным партнером Яндекс GO Такси"
            >
        </div>
        <h5 class="advantages__title">
            Мы являемся официальным партнером Яндекс GO Такси
        </h5>
        <div class="advantages__desc">
            Партнерство с Яндекс GO Такси помогает нам выстраивать прозрачные и эффективные отношения с водителями.
        </div>
    </div>
    <div class="advantages__list">
        <? foreach ($arResult as $i): ?>
        <div class="advantages__item">
            <div class="advantages-item">
                <div class="advantages-item__icon">
                    <img src="<?=$i['icon'] ?>"
                         width="86"
                         height="86"
                         loading="lazy"
                         alt="<?=$i['name'] ?>"
                    >
                </div>
                <div class="advantages-item__name">
                    <?=$i['name'] ?>
                </div>
                <div class="advantages-item__desc">
                    <?=$i['desc'] ?>
                </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>
</div>

