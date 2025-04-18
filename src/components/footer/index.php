<footer class="footer">
    <div class="footer__top">
        <div class="footer__logo">
            <img src="/upload/images/logo.webp"
                 width="118"
                 height="61"
                 loading="lazy"
                 alt="logo">
        </div>
        <div class="footer__menu">
            <? component('menu', [], 'src/data/menu.json'); ?>
        </div>
        <div class="footer__socials">
            <? component('socials', [], 'src/data/socials.json'); ?>
        </div>
        <div class="header__phone footer__phone">
            <a href="tel:+7(495)123-45-67">
                + 7 (495) 123-45-67
            </a>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__item"><span>© 2024 Все права защищены</span></div>
        <div class="footer__item"><a href="/">Политика конфиденциальности</a></div>
        <div class="footer__item"><a href="/">Реквизиты</a></div>
        <div class="footer__item"><a href="">Использование cookies</a></div>
    </div>
</footer>
