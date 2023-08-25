<?php
$page_title = "Ремонт на покриви";
?>
<?php require "inc/header.php" ?>
<?php require "inc/navbars/top-navbar.php" ?>
<?php require "inc/navbars/primary-navbar.php" ?>

<main>
  <?php require "inc/sections/secondary-top-header.php" ?>

  <div class="text-center py-4">
    <h2 class="text-4xl">РЕМОНТ НА ПОКРИВИ</h2>
    <div class="header-slogan bg-primary mx-auto w-fit">Всичко За Вашия Покрив!</div>
  </div>

  <section class="mt-20">
    <div class="container-lg">
      <div class="grid md:grid-cols-2 items-center gap-10 max-sm:px-4">
        <img src="https://pokrivi-masters.com/images/pmasters/remont-pokrivi-750.jpg" alt="">
        <div>
          <h2 class="text-2xl">БЪРЗИНА И ОТЛИЧЕН РЕЗУЛТАТ</h2>
          <p>
            Покривът е завършека на всяка сграда и той трябва да е в отлично състояние защото я предпазва от вредните
            влияния
            на околната среда като влага, дъжд, сняг и студ. Добре е покрива да бъде винаги в отлично състояние, за да не се
            налага да правите допълнителни ремонти по сградата, поради лошо състояние на покрива.
          </p>
          <p>
            Добре е всяка година да се прави оглед на покрива и ако забележите и най-малкия проблем се свържете специалист,
            който може да прецени степента на увреждане на Вашия покрив.
          </p>
          <p>
            Фирма <strong>
              <?= WEBSITE_TITLE ?>
            </strong> разполага със специалисти, които могат да определят степента на увреждане на Вашия покрив.
            Те ще направят цялостна оценка на състоянието на покрива, така че да се извърши правилната ремонтна дейност,
            като
            ви предложат конкретни варианти за изпълнение.
          </p>
          <p><strong>Съвети</strong> при предприемане ремонт на покрива:</p>
          <ul>
            <li>
              Добре е да се избират <strong>качествени материали</strong>. Изборът на евтин материал впоследствие може да
              доведе до нови
              ремонти;
            </li>
            <li>
              Добре е да се избере и подходящия сезон, без валежи, мъгла и слана. Затова най-подходящия сезон е лятото;
            </li>
            <li>
              Изборът на изпълнител е също много важен. Добре е той да е специализиран в тази дейност и след направен оглед
              да
              предложи конкретни варианти за изпълнение;
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="mt-20" />

  <?php require "inc/sections/big-contents/services-list-additional.php"; ?>
  <?php require "inc/sections/small-contents/contacts-info-bar.php" ?>
  <?php require "inc/sections/small-contents/contacts-bar.php" ?>

</main>

<?php require "inc/sections/footer.php" ?>
<?php require "inc/footer.php" ?>