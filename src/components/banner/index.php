<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="banner">
    <div class="banner__swiper swiper">
        <div class="swiper-wrapper">
            <? foreach ($arResult as $i): ?>
                <div class="swiper-slide banner__slide">
                    <div class="banner__info">
                        <b>Chery Tiggo 7 Pro Max</b>
                        <br>
                        Аренда: <b>3000 ₽/день</b>
                    </div>
                    <div class="banner__img">
                        <img src="/upload/images/banner/img.webp"
                             width="654"
                             height="327"
                             loading="lazy"
                             alt=""
                        >
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <div class="banner__nav">
        <button class="banner__btn banner__prev" type="button">
            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.9167 18.5002C33.9167 22.5889 32.2925 26.5102 29.4013 29.4014C26.5101 32.2926 22.5888 33.9168 18.5 33.9168C16.4755 33.9168 14.4708 33.5181 12.6003 32.7433C10.7299 31.9685 9.03038 30.833 7.59881 29.4014C4.70763 26.5102 3.08337 22.5889 3.08337 18.5002C3.08337 14.4114 4.70763 10.4901 7.59881 7.59893C10.49 4.70775 14.4113 3.0835 18.5 3.0835C20.5246 3.0835 22.5293 3.48226 24.3997 4.25702C26.2702 5.03178 27.9697 6.16736 29.4013 7.59893C30.8328 9.0305 31.9684 10.73 32.7432 12.6005C33.5179 14.4709 33.9167 16.4756 33.9167 18.5002ZM23.7417 25.5918L16.65 18.5002L23.7417 11.4085L21.5834 9.25016L12.3334 18.5002L21.5834 27.7502L23.7417 25.5918Z"
                      fill="#DCDCDC"/>
            </svg>
        </button>
        <button class="banner__btn banner__next" type="button">
            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.9167 18.5002C33.9167 22.5889 32.2925 26.5102 29.4013 29.4014C26.5101 32.2926 22.5888 33.9168 18.5 33.9168C16.4755 33.9168 14.4708 33.5181 12.6003 32.7433C10.7299 31.9685 9.03038 30.833 7.59881 29.4014C4.70763 26.5102 3.08337 22.5889 3.08337 18.5002C3.08337 14.4114 4.70763 10.4901 7.59881 7.59893C10.49 4.70775 14.4113 3.0835 18.5 3.0835C20.5246 3.0835 22.5293 3.48226 24.3997 4.25702C26.2702 5.03178 27.9697 6.16736 29.4013 7.59893C30.8328 9.0305 31.9684 10.73 32.7432 12.6005C33.5179 14.4709 33.9167 16.4756 33.9167 18.5002ZM15.4167 27.7502L24.6667 18.5002L15.4167 9.25016L13.2584 11.4085L20.35 18.5002L13.2584 25.5918L15.4167 27.7502Z"
                      fill="#DCDCDC"/>
            </svg>
        </button>
    </div>
    <div class="banner__title">
        АРЕНДА АВТО ДЛЯ РАБОТЫ В ТАКСИ
    </div>
    <a href="#feedback" class="banner__link">Отправить заявку</a>
    <div class="banner__pag"></div>
</div>

