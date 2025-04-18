<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="faq">
    <h2 class="faq__title">Вопросы и ответы</h2>
    <div class="accordion faq__items">
        <? foreach ($arResult as $arItem): ?>
            <div class="faq__item">
                <details class="accordion__details faq__details"
                         name="faq">
                    <summary class="accordion__summary faq__summary">
                        <?= $arItem['question'] ?>
                        <div class="faq__summary-btn">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.08622 8.71097C3.1733 8.62367 3.27676 8.5544 3.39065 8.50714C3.50455 8.45987 3.62665 8.43555 3.74997 8.43555C3.87328 8.43555 3.99538 8.45987 4.10928 8.50714C4.22318 8.5544 4.32663 8.62367 4.41372 8.71097L15 19.2991L25.5862 8.71097C25.6734 8.62381 25.7769 8.55466 25.8907 8.50749C26.0046 8.46032 26.1267 8.43604 26.25 8.43604C26.3732 8.43604 26.4953 8.46032 26.6092 8.50749C26.7231 8.55466 26.8265 8.62381 26.9137 8.71097C27.0009 8.79814 27.07 8.90162 27.1172 9.0155C27.1644 9.12939 27.1886 9.25145 27.1886 9.37472C27.1886 9.49799 27.1644 9.62006 27.1172 9.73394C27.07 9.84783 27.0009 9.95131 26.9137 10.0385L15.6637 21.2885C15.5766 21.3758 15.4732 21.445 15.3593 21.4923C15.2454 21.5396 15.1233 21.5639 15 21.5639C14.8767 21.5639 14.7546 21.5396 14.6407 21.4923C14.5268 21.445 14.4233 21.3758 14.3362 21.2885L3.08622 10.0385C2.99891 9.95139 2.92964 9.84793 2.88238 9.73404C2.83512 9.62014 2.81079 9.49804 2.81079 9.37472C2.81079 9.25141 2.83512 9.12931 2.88238 9.01541C2.92964 8.90151 2.99891 8.79806 3.08622 8.71097Z"
                                      fill="#212529"/>
                            </svg>
                        </div>
                    </summary>
                </details>
                <div class="accordion__content faq__item-content">
                    <div class="accordion__content-body faq__body">
                        <div class="faq__body-inner">
                            <?= $arItem['answer'] ?>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>

