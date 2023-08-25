<?php
$page_title = "Ремонт на покриви с дървена конструкция";
?>
<?php require "inc/header.php" ?>
<header>
  <?php require "inc/navbars/top-navbar.php" ?>
  <?php require "inc/navbars/primary-navbar.php" ?>
</header>

<main>
  <?php require "inc/sections/secondary-top-header.php" ?>

  <div class="text-center py-4">
    <h2 class="text-4xl">РЕМОНТ НА ПОКРИВИ С ДЪРВЕНА КОНСТРУКЦИЯ</h2>
    <div class="header-slogan bg-primary mx-auto w-fit">Всичко За Ремонта На Вашия Покрив!</div>
  </div>

  <section class="mt-20">
    <div class="container-lg">
      <div class="grid grid-cols-2 gap-10">
        <img src="https://pokrivi-masters.com/images/pmasters/remont-pokriv-darvena-konstrukcia-750.jpg" alt="">
        <div>
          <h2 class="text-xl">ЗДРАВИНА И СИГУРНОСТ</h2>
          <p>
            <strong>Дървените покривни конструкции</strong> се правят предимно от иглолистен дървен материал. Като
            съставна част на
            дървените конструкции са: <strong>дъски, талпи, летви, греди, бичмета</strong>.
          </p>
          <p>
            Важни елементи на дървената конструкция са <strong>обшивка и ребра</strong>. Обшивката се прави от елементи
            с фиксирана
            ширина, а дължината може да е различна. Ребрата трябва да бъдат разположени на еднакво разстояние едно от
            друго. Дървената конструкция не трябва да бъде излишно тежка, а в същото време трябва да понася товара на
            покривното покритие.
          </p>
          <p>
            Възможни <strong>ремонтни дейности по дървената конструкция на покрива</strong>:
          </p>
          <ul class="grid gap-4 mb-4 pl-10">
            <li>
              Подмяна на ребра от покривната конструкция;
            </li>
            <li>
              Подмяна на изгнили дъски от дъсчената обшивка;
            </li>
            <li>
              Подмяна на обшивката;
            </li>
            <li>
              Наковаване на хоризонтални и вертикални летви.
            </li>
          </ul>
          <p>
            Фирма <strong><?= WEBSITE_TITLE ?></strong> извършва всички ремонтни дейности по подмяна на основни и допълнителни елементи от
            дървената конструкция на Вашия покрив.
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="mt-20"></div>

  <div class="text-white bg-slate-900 py-10 text-center">
    <h2 class="text-4xl">УСЛУГИ ПО РЕМОНТ НА ПОКРИВИ</h2>
  </div>

  <?php require "inc/sections/big-contents/services-list-additional.php" ?>
  <div class="mt-20"></div>
  <?php require "inc/sections/small-contents/contacts-info-bar.php" ?>
  <?php require "inc/sections/small-contents/contacts-bar.php" ?>

</main>

<?php require "inc/sections/footer.php" ?>
<?php require "inc/footer.php" ?>