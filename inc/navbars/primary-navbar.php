<header>
  <nav class="navbar py-2">
    <div class="container-md">
      <div class="navbar-container">
        <div class="logo">
          <a href="/">
            <img src="/assets/logo.png" alt="<?= WEBSITE_TITLE ?>">
          </a>
        </div>
        <div class="right-items">
          <ul class="navbar-items">
            <li>
              <a class="text-primary hover:bg-primary <?= url_match("/") ? "text-white bg-primary" : null ?>"
                href="/">Начало</a>
            </li>
            <li>
              <a class="text-primary hover:bg-primary <?= url_match("/za-nas") ? "text-white bg-primary" : null ?>"
                href="/za-nas">За нас</a>
            </li>
            <li>
              <a class="text-primary hover:bg-primary <?= url_match("/uslugi") ? "text-white bg-primary" : null ?>"
                href="/uslugi">Услуги</a>
              <ul>
                <li>
                  <a class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi") ? "text-white bg-primary" : null ?>"
                    href="/uslugi/remont-pokrivi">Ремонт на покриви</a>
                </li>
                <li>
                  <a class="text-primary hover:bg-primary <?= url_match("/uslugi/nov-pokriv") ? "text-white bg-primary" : null ?>"
                    href="/uslugi/nov-pokriv">Изграждане на нов покрив</a>
                </li>
                <li>
                  <a class="text-primary hover:bg-primary" href="#">Хидроизолация</a>
                </li>
                <li>
                  <a class="text-primary hover:bg-primary" href="#">Алпинистки услуги</a>
                </li>
                <li>
                  <a class="text-primary hover:bg-primary" href="#">Груб строеж</a>
                </li>
                <li>
                  <a class="text-primary hover:bg-primary" href="#">Вътрешни ремонти</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="text-primary hover:bg-primary" href="#">Цени</a>
            </li>
            <li>
              <a class="text-primary hover:bg-primary" href="#">Галерия</a>
            </li>
            <li>
              <a class="text-primary hover:bg-primary" href="#">Видео</a>
            </li>
            <li>
              <a class="text-primary hover:bg-primary" href="#">Контакти</a>
            </li>
          </ul>
          <i class="fa-solid fa-bars menu"></i>
        </div>
      </div>
    </div>
  </nav>
</header>