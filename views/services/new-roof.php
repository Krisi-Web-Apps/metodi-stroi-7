<?php
$page_title = "Изграждане на нов покрив";
?>
<?php require "inc/header.php" ?>
<header>
  <?php require "inc/navbars/top-navbar.php" ?>
  <?php require "inc/navbars/primary-navbar.php" ?>
</header>

<main>
  <?php require "inc/sections/secondary-top-header.php" ?>

  <div class="text-center py-4">
    <h2 class="text-4xl">ИЗГРАЖДАНЕ НА НОВ ПОКРИВ</h2>
    <div class="header-slogan bg-primary mx-auto w-fit">Всичко За Вашия Покрив!</div>
  </div>

  <section class="mt-20">
    <div class="container-lg">
      <div class="grid md:grid-cols-2 items-center gap-10 max-sm:px-4">
        <img src="https://pokrivi-masters.com/images/pmasters/nov-pokriv-800.jpg" alt="">
        <div>
          <h2 class="text-2xl">ТОЧНОСТ И ПРЕЦИЗНОСТ</h2>
          <p>
            Какво представлява дървената покривна конструкция? Най-общо казано това е скелетът или още кофражът на
            покрива. В повечето случаи, се изработва от дърво, макар и да го има и в метален вариант. Сега разглеждаме
            дървената, която се състои от:
          </p>
          <p>
            Съществена част от изграждането на дървена конструкция за покрив е коректното предварително изчисляване.
          </p>
          <ul class="grid gap-4 mb-4 pl-10">
            <li>
              <strong>Стълбове</strong> - известни също като “попове”. Стандартната им големина е 12/12 или 14/14;
            </li>
            <li>
              <strong>Ферми</strong> - наричат се още основни биндерни греди. Поставят се перпендикулярно на зидовете, които са носещи,
              при по-скъсената страна на съответната постройка;
            </li>
            <li>
              <strong>Столици</strong> - които са подразделени на билна, средна и подложна;
            </li>
            <li>
              <strong>Мекази</strong> - така наречените наклонени подпори;
            </li>
            <li>
              <strong>Дебели дъски</strong> - чието предназначение е да обхващат двустранно други елементи от конструкцията. Наричат се
              клещи и свързват стълбовете и ребрата на покривния кофраж;
            </li>
          </ul>
          <p>
            Изграждането на нов покрив включва:
          </p>
          <ul class="grid gap-4 mb-4 pl-10">
            <li>
              изграждане на нова дървена конструкция;
            </li>
            <li>
              полагане на паропропусклива мембрана;
            </li>
            <li>
              изработка на двойна скара;
            </li>
            <li>
              редене на керемиди;
            </li>
            <li>
              полагане и подмазване на керемиди;
            </li>
          </ul>
          <p>
            Фирма <strong><?= WEBSITE_TITLE ?></strong> разполага с необходимите специалисти за да се изгради нов покрив от началото до края.
          </p>
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