<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="how">
    <? foreach ($arResult as $key => $i): ?>
        <div class="how__step <? if($key==0): ?>active<? endif; ?>" data-steps-next="<?= $i['next'] ?>">
            <div class="how__left">
                <div class="how__num">
                    <?= $key + 1 ?>
                </div>
                <? if (isset($i['step'])): ?>
                    <div class="how__next">
                        Шаг <?= $i['step'] ?>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.82016 12H20.8202M20.8202 12L14.8202 18M20.8202 12L14.8202 6" stroke="#232323"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                <? endif; ?>
            </div>
            <div class="how__right">
                <div class="how__title">
                    <?= $i['title'] ?>
                </div>
                <div class="how__desc">
                    <?= $i['desc'] ?>
                </div>
                <? if (isset($i['step'])): ?>
                    <div class="how__arrow">
                        <svg width="52" height="146" viewBox="0 0 52 146" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0C28.7188 0 52 23.2812 52 52V94C52 122.719 28.7188 146 0 146V0Z" fill="#FFEE00"/>
                            <path d="M18 89L34 73L18 57" stroke="#232323" stroke-width="3" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>
                <? endif; ?>
            </div>
        </div>
    <? endforeach; ?>
</div>

