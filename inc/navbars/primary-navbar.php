<nav class="navbar py-2 max-sm:px-4 bg-white w-full top-0 shadow-lg z-40" data-primary-navbar>
  <div class="container-md">
    <div class="navbar-container">
      <div class="logo">
        <a href="/">
          <img src="/assets/logo.png" alt="<?= WEBSITE_TITLE ?>">
        </a>
      </div>
      <div class="right-items" data-right-items>
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
              href="/uslugi">
              Услуги
              <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul>
              <li>
                <a class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi") ? "text-white bg-primary" : null ?>"
                  href="/uslugi/remont-pokrivi">
                  Ремонт на покриви
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
                <ul>
                  <li>
                    <a href="/uslugi/remont-pokrivi/pemont-pokrivi-keremidi"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/pemont-pokrivi-keremidi") ? "text-white bg-primary" : null ?>">
                      Ремонт на покриви с керемиди
                    </a>
                  </li>
                  <li>
                    <a href="/uslugi/remont-pokrivi/remont-pokrivi-bitumni-keremidi"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/remont-pokrivi-bitumni-keremidi") ? "text-white bg-primary" : null ?>">
                      Ремонт на покрив с битумни керемиди
                    </a>
                  </li>
                  <li>
                    <a href="/uslugi/remont-pokrivi/remont-pokrivi-lamarina"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/remont-pokrivi-lamarina") ? "text-white bg-primary" : null ?>">
                      Ремонт на покриви с ламарина
                    </a>
                  </li>
                  <li>
                    <a href="/uslugi/remont-pokrivi/remont-pokrivi-polycarbonat"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/remont-pokrivi-polycarbonat") ? "text-white bg-primary" : null ?>">
                      Ремонт на покриви с поликарбонат
                    </a>
                  </li>
                  <li>
                    <a href="/uslugi/remont-pokrivi/remont-pokrivi-darvena-konstrukcia"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/remont-pokrivi-darvena-konstrukcia") ? "text-white bg-primary" : null ?>">
                      Ремонт на покриви с дървена конструкция
                    </a>
                  </li>
                  <li>
                    <a href="/uslugi/remont-pokrivi/suh-montage-kapaci"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/suh-montage-kapaci") ? "text-white bg-primary" : null ?>">
                      Сух монтаж на капаци
                    </a>
                  </li>
                  <li>
                    <a href="/uslugi/remont-pokrivi/izmazvane-komini"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/izmazvane-komini") ? "text-white bg-primary" : null ?>">
                      Измазване на комини
                    </a>
                  </li>
                  <li>
                    <a href="/uslugi/remont-pokrivi/ukuci-obshivki"
                      class="text-primary hover:bg-primary <?= url_match("/uslugi/remont-pokrivi/ukuci-obshivki") ? "text-white bg-primary" : null ?>">
                      Улуци и обшивки
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="text-primary hover:bg-primary <?= url_match("/uslugi/nov-pokriv") ? "text-white bg-primary" : null ?>"
                  href="/uslugi/nov-pokriv">Изграждане на нов покрив</a>
              </li>
              <li>
                <a class="text-primary hover:bg-primary" href="/uslugi/hydroizolacia">Хидроизолация</a>
              </li>
              <li>
                <a class="text-primary hover:bg-primary" href="/uslugi/alpinistki-uslugi">Алпинистки услуги</a>
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
            <a class="text-primary hover:bg-primary <?= url_match("/ceni") ? "text-white bg-primary" : null ?>" href="/ceni">Цени</a>
          </li>
          <li>
            <a class="text-primary hover:bg-primary <?= url_match("/gallery") ? "text-white bg-primary" : null ?>" href="/gallery">Галерия</a>
          </li>
          <li>
            <a class="text-primary hover:bg-primary <?= url_match("/video") ? "text-white bg-primary" : null ?>" href="/video">Видео</a>
          </li>
          <li>
            <a class="text-primary hover:bg-primary <?= url_match("/contacts") ? "text-white bg-primary" : null ?>" href="/contacts">Контакти</a>
          </li>
        </ul>
      </div>
      <i class="fa-solid fa-bars menu text-2xl cursor-pointer" data-menu-button></i>
    </div>
  </div>
</nav>
