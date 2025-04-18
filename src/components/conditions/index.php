<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="conditions">
    <h2 class="conditions__title">
        Условия работы водителей
    </h2>
    <div class="conditions__list">
        <? foreach ($arResult as $i): ?>
            <div class="conditions__item">
                <div class="condition">
                    <div class="condition__img">
                        <img src="<?=$i['img'] ?>"
                             loading="lazy"
                             alt=""
                        >
                    </div>
                    <div class="condition__wrapper">
                        <div class="condition__icon">
                            <img src="<?=$i['icon'] ?>"
                                 width="71"
                                 height="70"
                                 loading="lazy"
                                 alt="<?=$i['name'] ?>">
                        </div>
                        <div class="condition__name"><?=$i['name'] ?></div>
                        <div class="condition__desc"><?=$i['desc'] ?></div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>

