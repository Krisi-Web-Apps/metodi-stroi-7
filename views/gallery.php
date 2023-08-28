<?php
$page_title = "Галерия";
?>
<?php require "inc/header.php" ?>
<?php require "inc/navbars/top-navbar.php" ?>
<?php require "inc/navbars/primary-navbar.php" ?>

<main class="home">
  <?php require "inc/sections/secondary-top-header.php" ?>

  <section class="mt-10">
    <h2 class="text-4xl text-center">ГАЛЕРИЯ НАШИ ПРОЕКТИ</h2>
    <div class="mt-4 header-slogan bg-primary mx-auto w-fit">Изпълнение Качествено И В Срок</div>
  </section>

  <?php $files = scandir("assets/gallery"); ?>

  <section class="container-lg max-lg:px-4 mt-20">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
      <?php for ($i = 2; $i < count($files); $i++): ?>
        <img class="border rounded" src="/assets/gallery/<?= $files[$i] ?>" alt="">
      <?php endfor; ?>
    </div>
  </section>

  <?php require "inc/sections/small-contents/contacts-bar.php" ?>

</main>

<?php require "inc/sections/footer.php" ?>
<?php require "inc/footer.php" ?>
