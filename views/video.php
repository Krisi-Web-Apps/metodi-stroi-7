<?php
$page_title = "Видеа";
?>
<?php require "inc/header.php" ?>
<?php require "inc/navbars/top-navbar.php" ?>
<?php require "inc/navbars/primary-navbar.php" ?>

<main class="home">
  <?php require "inc/sections/secondary-top-header.php" ?>

  <section class="mt-10">
    <h2 class="text-4xl text-center">ВИДЕО ГАЛЕРИЯ НАШИ ПРОЕКТИ</h2>
    <div class="mt-4 header-slogan bg-primary mx-auto w-fit">Изпълнение Качествено И В Срок</div>
  </section>

  <div class="container-md mt-20">
    <div class="grid grid-cols-1 gap-10">
      <div class="w-full">
        <iframe width="100%" height="600" src="https://www.youtube.com/embed/MYqoCgblQxA" frameborder="0"
          allowfullscreen></iframe>
        </div>
      </div>
      <div class="w-full flex justify-center my-10">
        <video controls>
          <source src="/assets/video/0-02-05-97ad7fd906e99c909ad772633385c13b323fd9dadb9cf57ac25fc3369b442169_b42370c6496be7f9.mp4">
        </video>
      </div>
      <div class="w-full flex justify-center">
        <video>
          <source src="/assets/video/0-02-05-ba26ae94dccce7ccfa3b457d4e15051490bf3b7d1e93a08d92e6d084fd855ec7_d5d1183113c6aec8.mp4">
        </video>
      </div>

    </div>

  <?php require "inc/sections/small-contents/contacts-bar.php" ?>

</main>

<?php require "inc/sections/footer.php" ?>
<?php require "inc/footer.php" ?>
