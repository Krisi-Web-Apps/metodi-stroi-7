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