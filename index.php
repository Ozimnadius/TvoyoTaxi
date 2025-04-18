<?require("src/core/top.php");?>

<!-- main -->
<div class="page">
    <main class="main">
        <section class="main__banner">
            <div class="container">
                <? component('banner',[],'/src/data/banner.json') ?>
            </div>
        </section>
        <section class="main__advantages">
            <div class="container">
                <? component('advantages',[],'/src/data/advantages.json') ?>
            </div>
        </section>
        <section id="calculator" class="main__calculator">
            <div class="container">
                <? component('calculator') ?>
            </div>
        </section>
        <section id="cars" class="main__cars">
            <div class="container">
                <? component('cars',[],'/src/data/cars.json') ?>
            </div>
        </section>
        <section class="main__how">
            <div class="container">
                <? component('how',[],'/src/data/how.json') ?>
            </div>
        </section>
        <section class="main__conditions">
            <div class="container">
                <? component('conditions',[],'/src/data/conditions.json') ?>
            </div>
        </section>
        <section class="main__requirements">
            <div class="container">
                <? component('requirements',[],'/src/data/requirements.json') ?>
            </div>
        </section>
        <section class="main__faq">
            <div class="container">
                <? component('faq',[],'/src/data/faq.json') ?>
            </div>
        </section>
        <section id="feedback" class="main__feedback">
            <div class="container">
                <? component('feedback') ?>
            </div>
        </section>
    </main>
</div>
<!-- END main -->

<?require("src/core/bottom.php");?>
