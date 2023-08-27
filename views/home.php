<?php
$about_section_header = "Изграждане и ремонт на покриви в София и цялата страна!";
?>
<?php require "inc/header.php" ?>
<?php require "inc/navbars/top-navbar.php" ?>
<?php require "inc/navbars/primary-navbar.php" ?>
<?php require "inc/slider.php" ?>

<main class="home">
  <?php require "inc/sections/about.php" ?>

  <div class="container-lg">
    <ul class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
      <li class="bg-primary p-5">
        <img src="/assets/services/remont_pokriv.jpg" alt="">
        <h2 class="text-2xl">Ремонт на покриви с керемиди</h2>
        <p>Цени: от <span class="text-6xl">22</span>лв./м.</p>
      </li>
      <li class="bg-primary p-5">
        <img src="https://pokrivi-masters.com/images/pmasters/nov_pokriv.jpg" alt="">
        <h2 class="text-2xl">Изграждане на нов покрив</h2>
        <p>Цени: от <span class="text-6xl">98</span>лв./м.</p>
      </li>
      <li class="bg-primary p-5">
        <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
        <h2 class="text-2xl">Хидроизолация</h2>
        <p>Цени: от <span class="text-6xl">19.80</span>лв./м.</p>
      </li>
    </ul>
  </div>

  <?php require "inc/sections/small-contents/in-numbers.php"; ?>

  <?php require "inc/sections/small-contents/our-partners.php"; ?>

  <div class="text-white text-center bg-gray-900 py-20">
    <h2 class="text-center text-4xl">НАШИТЕ УСЛУГИ</h2>
    <div class="header-slogan mx-auto bg-primary w-fit rounded">Всичко За Вашия Покрив</div>
  </div>

  <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-10">
    <li class="p-5 text-center">
      <i class="fa-solid fa-house text-6xl text-primary"></i>
      <h2 class="text-2xl">Ремонт на покриви</h2>
      <p>Екип с дългогодишен опит в Ремонтирането на покриви, високо качество и коректност. Висококачествени материали и
        инструменти. Гарантирана дълготрайност.</p>
      <a href="/uslugi/remont-pokrivi" class="text-white bg-primary p-3 px-6">Повече</a>
    </li>
    <li class="p-5 text-center">
      <i class="fa-solid fa-building-columns text-6xl text-primary"></i>
      <h2 class="text-2xl">Изграждане на нов покрив</h2>
      <p>Изграждане на дървена конструкция от качествен дървен материал. Поставяне на керемиди, битумни и метални
        керемиди, улуци и водосточни тръби.</p>
      <a href="/uslugi/nov-pokriv" class="text-white bg-primary p-3 px-6">Повече</a>
    </li>
    <li class="p-5 text-center">
      <i class="fa-brands fa-soundcloud text-6xl text-primary"></i>
      <h2 class="text-2xl">Хидроизолация</h2>
      <p>Всички видове хидроизолация за Вашия покрив според неговите особености. Висококачествени материали с гарантиран
        резултат.</p>
      <a href="/uslugi/hydroizolacia" class="text-white bg-primary p-3 px-6">Повече</a>
    </li>
    <li class="p-5 text-center">
      <i class="fa-brands fa-twitter text-6xl text-primary"></i>
      <h2 class="text-2xl">Алпинистки услуги</h2>
      <p>Екип от опитни алпинисти извършващи строително-ремонтни дейности по алпийски способ. Ремонти на високи и трудно
        достъпни места.</p>
      <a href="/uslugi/alpinistki-uslugi" class="text-white bg-primary p-3 px-6">Повече</a>
    </li>
  </ul>

  <div class="mt-10 bg-blue-100 pt-20">
    <h2 class="text-center text-4xl">НАШИ ПРОЕКТИ</h2>
    <div class="header-slogan mx-auto bg-primary w-fit rounded">Изпълнение Качествено И В Срок</div>
    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4 mt-10 px-4">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
      <img src="https://pokrivi-masters.com/images/pmasters/hydroizolacia.jpg" alt="">
    </div>
    <div class="text-center mt-10">
      <a class="py-3 px-4 text-white bg-primary inline-block" href="/galley">Още обекти</a>
    </div>
  </div>

  <div class="bg-blue-100 py-20 px-4">
    <h2 class="text-center text-3xl">НАШИТЕ ЦЕНИ</h2>
    <div class="header-slogan mx-auto bg-primary w-fit rounded">Предлагаме Най-Добрите Цени За Нашите Клиенти</div>
    <ul class="container-lg grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 mt-10">
      <li class="border border-primary text-center pt-10">
        <h3 class="text-primary text-2xl">РЕМОНТ НА ПОКРИВИ С КЕРЕМИДИ</h3>
        <p class="text-center px-4">Тъй като всеки обект е индивидуален, цени започващи от</p>
        <p><span class="text-4xl text-primary">22</span> лв./кв.м.</p>
        <ul>
          <li class="bg-white py-4">Материали</li>
          <hr class="bg-primary" />
          <li class="bg-white py-4">Труд</li>
          <hr />
          <li class="bg-white py-4">Почистване</li>
          <hr />
          <li class="bg-white py-4">Извозване на отпадъците</li>
        </ul>
        <div class="py-4">
          <a href="/contacts" class="py-3 px-4 text-white bg-primary inline-block">За връзка с нас</a>
        </div>
      </li>
      <li class="border border-primary text-center pt-10">
        <h3 class="text-primary text-2xl">НОВ ПОКРИВ</h3>
        <p class="text-center px-4">Тъй като всеки обект е индивидуален, цени започващи от</p>
        <p><span class="text-4xl text-primary">98</span> лв./кв.м.</p>
        <ul>
          <li class="bg-white py-4">Материали</li>
          <hr class="bg-primary" />
          <li class="bg-white py-4">Труд</li>
          <hr />
          <li class="bg-white py-4">Почистване</li>
          <hr />
          <li class="bg-white py-4">Извозване на отпадъците</li>
        </ul>
        <div class="py-4">
          <a href="/contacts" class="py-3 px-4 text-white bg-primary inline-block">За връзка с нас</a>
        </div>
      </li>
      <li class="border border-primary text-center pt-10">
        <h3 class="text-primary text-2xl">ХИДРОИЗОЛАЦИЯ</h3>
        <p class="text-center px-4">Тъй като всеки обект е индивидуален, цени започващи от</p>
        <p><span class="text-4xl text-primary">19.80</span> лв./кв.м.</p>
        <ul>
          <li class="bg-white py-4">Материали</li>
          <hr class="bg-primary" />
          <li class="bg-white py-4">Труд</li>
          <hr />
          <li class="bg-white py-4">Почистване</li>
          <hr />
          <li class="bg-white py-4">Извозване на отпадъците</li>
        </ul>
        <div class="py-4">
          <a href="/contacts" class="py-3 px-4 text-white bg-primary inline-block">За връзка с нас</a>
        </div>
      </li>
      <li class="border border-primary text-center pt-10">
        <h3 class="text-primary text-2xl">АЛПИНИСТКИ УСЛУГИ</h3>
        <p class="text-center px-4">Тъй като всеки обект е индивидуален, цени започващи от</p>
        <p>Цени по <span class="text-4xl text-primary">ДОГ.</span></p>
        <ul>
          <li class="bg-white py-4">Материали</li>
          <hr class="bg-primary" />
          <li class="bg-white py-4">Труд</li>
          <hr />
          <li class="bg-white py-4">Почистване</li>
          <hr />
          <li class="bg-white py-4">Извозване на отпадъците</li>
        </ul>
        <div class="py-4">
          <a href="/contacts" class="py-3 px-4 text-white bg-primary inline-block">За връзка с нас</a>
        </div>
      </li>
    </ul>
  </div>

  <?php require "inc/sections/big-contents/reviews.php" ?>

  <?php require "inc/sections/small-contents/contacts-bar.php" ?>

</main>

<?php require "inc/sections/footer.php" ?>
<?php require "inc/footer.php" ?>