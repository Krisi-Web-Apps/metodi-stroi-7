<?php
$page_title = "Ремонт на покриви";
?>
<?php require "inc/header.php" ?>
<header>
  <?php require "inc/navbars/top-navbar.php" ?>
  <?php require "inc/navbars/primary-navbar.php" ?>
</header>

<main>
  <div class="text-center py-4">
    <h2 class="text-4xl">ВЪТРЕШНИ РЕМОНТИ</h2>
    <div class="header-slogan bg-primary mx-auto w-fit">Всичко За Вашия Нов Дом!</div>
  </div>

  <section class="mt-20">
    <div class="container-lg">
      <div class="grid md:grid-cols-2 items-center gap-10 max-sm:px-4">
        <img src="/assets/services/668da3dd12cd929e7fa78540b7401c3b.jpg" alt="">
        <div>
          <h2>УЮТ И УНИКАЛНОСТ</h2>
          <p>
            Основната цел на вътрешния ремонт е не само да създаде или подобри функционалността на дадено жилище, но и
            да му предаде уникален дух, като го превърне в дом. Основните видове вътрешни ремонти са:
          </p>
          <ul class="grid gap-4 mb-4 pl-10">
            <li><strong>Кърти, чисти, извозва</strong>;</li>
            <li><strong>Измазване</strong> на стени;</li>
            <li>Подови <strong>замазки</strong>;</li>
            <li><strong>Шпакловка</strong>;</li>
            <li><strong>Боядисване</strong>;</li>
            <li>Монтаж на <strong>гипсокартон</strong>;</li>
            <li><strong>Обръщане</strong> на врати и прозорци;</li>
            <li><strong>Окачени</strong> тавани;</li>
            <li>Поставяне на <strong>плочки</strong>;</li>
            <li>Поставяне на <strong>гранитогрес</strong>;</li>
            <li>Лепене на <strong>фаянс и теракот</strong>;</li>
            <li><strong>ВиК</strong> инсталации;</li>
            <li><strong>Електро</strong> услуги;</li>
            <li>Редене на <strong>паркет</strong>;</li>
            <li>Монтаж на <strong>ламинат</strong>;</li>
            <li>Монтаж на <strong>аксесоари и мебели</strong>;</li>
          </ul>
          <p>Фирма <?= WEBSITE_TITLE ?> разполага с необходимите специалисти за да се извърши вътрешен ремонт по ваше желание.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="mt-20" />

  <?php require "inc/sections/services-list.php"; ?>
  <?php require "inc/sections/small-contents/contacts-info-bar.php" ?>
  <?php require "inc/sections/small-contents/contacts-bar.php" ?>

</main>

<?php require "inc/sections/footer.php" ?>
<?php require "inc/footer.php" ?>