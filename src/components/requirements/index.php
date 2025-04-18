<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="requirements">
    <div class="requirements__item">
        <div class="requirements__info">
            <div class="requirements__logo">
                <img src="/upload/images/logo.webp"
                     width="118"
                     height="61"
                     alt="logo">
            </div>
            <div class="requirements__title">
                Требования к водителям
            </div>
        </div>
    </div>
    <? foreach ($arResult as $i): ?>
        <div class="requirements__item">
            <div class="requirements-item">
                <div class="requirements-item__icon">
                    <img src="<?= $i['icon'] ?>"
                         width="70"
                         height="72"
                         loading="lazy"
                         alt="<?= $i['name'] ?>">
                </div>
                <div class="requirements-item__name">
                    <?= $i['name'] ?>
                </div>
            </div>
        </div>
    <? endforeach; ?>

</div>

