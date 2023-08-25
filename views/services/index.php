<?php
$page_title = "Услуги";
?>
<?php require "inc/header.php" ?>
<header>
  <?php require "inc/navbars/top-navbar.php" ?>
  <?php require "inc/navbars/primary-navbar.php" ?>
</header>

<main>
  <?php require "inc/sections/secondary-top-header.php" ?>
  <div class="text-center mt-4">
    <h2 class="text-4xl">НАШИТЕ УСЛУГИ</h2>
    <div class="header-slogan mx-auto w-fit bg-primary rounded">Всичко За Вашия Покрив!</div>
  </div>

  <section>
    <div class="container-lg">
      <div class="grid md:grid-cols-2 gap-10 mt-20 max-sm:mx-4 items-center">
        <img src="https://pokrivi-masters.com/images/pmasters/uslugi.jpg" alt="">
        <div>
          <h2 class="text-xl">КАЧЕСТВО И КОРЕКТНОСТ</h2>
          <p>
            Фирма <strong><?= WEBSITE_TITLE ?></strong> е специализирана в <strong>ремонта и изграждането на нови покриви</strong> и покривни конструкции.
            Екип от специалисти с дългогодишен опит в бранша ще извършат всички необходими ремонтни дейности за постигане на
            максимални резултати, съобразени с конкретната задача за Вашия покрив.
          </p>
          <p>
            <strong>Качествените материали</strong> с които се извършват строително-ремонтните дейности са гаранция за дълготрайността на
            извършените услуги.
          </p>
          <p>
            <strong>Бързината и коректното отношение</strong> са едни от нещата, които карат нашите клиенти да останат доволни от свършената
            работа и да препоръчат фирмата на свои близки и приятели.
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="mt-20" />

  <?php require "inc/sections/services-list.php"; ?>

  <div class="mt-10" />

  <?php require "inc/sections/small-contents/contacts-info-bar.php" ?>

  <?php require "inc/sections/small-contents/contacts-bar.php" ?>

</main>

<?php require "inc/sections/footer.php" ?>
<?php require "inc/footer.php" ?>