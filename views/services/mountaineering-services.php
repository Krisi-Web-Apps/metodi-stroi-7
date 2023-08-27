<?php
$page_title = "Алпинистки услуги";
?>
<?php require "inc/header.php" ?>
<header>
  <?php require "inc/navbars/top-navbar.php" ?>
  <?php require "inc/navbars/primary-navbar.php" ?>
</header>

<main>
  <?php require "inc/sections/secondary-top-header.php" ?>

  <div class="text-center py-4">
    <h2 class="text-4xl">АЛПИНИСТКИ УСЛУГИ</h2>
    <div class="header-slogan bg-primary mx-auto w-fit">Всичко За Вашия Покрив!</div>
  </div>

  <section class="mt-20">
    <div class="container-lg">
      <div class="grid md:grid-cols-2 gap-10 max-sm:px-4">
        <img src="https://pokrivi-masters.com/images/pmasters/nov-pokriv-800.jpg" alt="">
        <div>
          <h3 class="text-xl">ЛЕКОТА И ПРЕЦИЗНОСТ</h3>
          <p>
            Когато се налагат ремонти на високи и труднодостъпни места, единственото решение е използването на въже по
            алпийски способ. Фирма <strong><?= WEBSITE_TITLE ?></strong> разполага с опитни алпинисти, които могат до извършват следните
            услуги: топло и хидроизолация, подмяна, монтаж или демонтаж на водосточни тръби и улуци, запълване на фуги,
            монтаж на ламаринени покриви и всякакви други ремонтни дейности, които изискват използването на въжен
            достъп. Работи се бързо, прецизно и само с висококачествени материали, на достъпни цени. За всеки подписан
            договор се дава точно определен срок за изпълнение на проекта и гаранция за качеството на извършената
            работа.
          </p>
          <p>
            <strong>Предлагани алпинистки услуги:</strong>
          </p>
          <ul class="grid gap-4 mb-4 pl-10">
            <li>
              поставяне на топлоизолация;
            </li>
            <li>
              полагане на хидроизолация;
            </li>
            <li>
              монтаж и демонтаж на улуци и водосточни тръби;
            </li>
            <li>
              запълване на фуги;
            </li>
            <li>
              монтаж на ламаринени покриви;
            </li>
          </ul>
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