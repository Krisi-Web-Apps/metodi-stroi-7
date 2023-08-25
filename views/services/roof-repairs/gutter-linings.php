<?php
$page_title = "Улуци и обшивки";
?>
<?php require "inc/header.php" ?>
<header>
  <?php require "inc/navbars/top-navbar.php" ?>
  <?php require "inc/navbars/primary-navbar.php" ?>
</header>

<main>
  <?php require "inc/sections/secondary-top-header.php" ?>

  <div class="text-center py-4">
    <h2 class="text-4xl">УЛУЦИ, ВОДОСТОЧНИ ТРЪБИ И ОБШИВКИ</h2>
    <div class="header-slogan bg-primary mx-auto w-fit">Всичко За Ремонта На Вашия Покрив!</div>
  </div>

  <section class="mt-20">
    <div class="container-lg">
      <div class="grid grid-cols-2 gap-10">
        <img src="https://pokrivi-masters.com/images/pmasters/remont-pokriv-darvena-konstrukcia-750.jpg" alt="">
        <div>
          <h2 class="text-xl">НАДЕЖДНОСТ И ПРАКТИЧНОСТ</h2>
          <p>
            Фирма <strong><?= WEBSITE_TITLE ?></strong> извършва всички видове <strong>покривни ремонти свързани с подмяната на улуци, водосточни
            тръби и обшивки</strong>. Нужно е своеврена подмяна на увредените улуци и водосточни тръби, защото в противен случай
            сериозно може да се увреди фасадата на сградата. Фирмата осъществява ремонт, демонтаж и монтаж на всички
            видове отводнителни конструкции с различна височина чрез алпийски способ.
          </p>
          <p>
            <strong>Дейности по ремонт на улуци и водосточни тръби:</strong>
          </p>
          <ul class="grid gap-4 mb-4 pl-10">
            <li>
              демонтаж на улуци (поцинковани или безшевни, с PVC покритие);
            </li>
            <li>
              монтаж на улуци (поцинковани или безшевни, с PVC покритие);
            </li>
            <li>
              демонтаж на водосточни тръби (поцинковани или безшевни, с PVC покритие);
            </li>
            <li>
              монтаж на водосточни тръби (поцинковани или безшевни, с PVC покритие);
            </li>
            <li>
              подмяна на водосборно казанче (поцинковано или с PVC покритие);
            </li>
            <li>
              поставяне на обшивки на бордове;
            </li>
            <li>
              обшиване на комин;
            </li>
            <li>
              поставяне на надулучна пола;
            </li>
            <li>
              поставяне на капандури;
            </li>
          </ul>

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