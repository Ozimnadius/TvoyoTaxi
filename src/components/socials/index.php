<?
/** @var array $arParams */
/** @var array $arResult */
?>
<ul class="socials">
    <? foreach ($arResult as $i): ?>
    <li class="socials__item">
        <a href="<?=$i['url'] ?>" class="socials__link">
            <img src="<?=$i['icon'] ?>" alt="<?=$i['name'] ?>">
            <span><?=$i['name'] ?></span>
        </a>
    </li>
    <? endforeach; ?>
</ul>

