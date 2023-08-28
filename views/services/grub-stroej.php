<?php
$page_title = "Ремонт на покриви";
?>
<?php require "inc/header.php" ?>
<header>
  <?php require "inc/navbars/top-navbar.php" ?>
  <?php require "inc/navbars/primary-navbar.php" ?>
</header>

<main>
  <div class="text-center py-4">
    <h2 class="text-4xl">ГРУБ СТРОЕЖ</h2>
    <div class="header-slogan bg-primary mx-auto w-fit">Всичко За Вашата Къща!</div>
  </div>

  <section class="mt-20">
    <div class="container-lg">
      <div class="grid md:grid-cols-2 items-center gap-10 max-sm:px-4">
        <img src="/assets/services/4_10_b.jpg" alt="">
        <div>
          <h2>ЗДРАВИНА И ЯКОСТ</h2>
          <p>
            Какво представлява груб строеж? Грубият строеж включва изкоп и всички необходими мероприятия около
            започването
            строежа на сградата, като отводняване на изкопа, ограждане и обезопасяване на обекта, построяване на
            временните поддържащи строежа сгради и складове за съхранение на материала. Под груб строеж се разбира и
            изграждането на фундаментите и над основните стени, стоманобетонните подове и стени (противоземетръсни
            шайби),
            колоните, зидариите, комините, шахтите, стълбищните клетки и др. Етапи на грубия строеж:
          </p>
          <ul class="grid gap-4 mb-4 pl-10">
            <li><strong>Изкопна</strong> дейност;</li>
            <li><strong>Хидроизолация</strong> на основи;</li>
            <li>Направа на <strong>дренажна система</strong>;</li>
            <li>Доставка и връзване на <strong>арматура</strong>;</li>
            <li>Доставка и наливане на <strong>бетон за основи и плочи</strong>;</li>
            <li>Изграждане на <strong>колони, шайби, стълбища</strong>;</li>
            <li>Иззиждане на <strong>стени, комини</strong>;</li>
            <li>Направа на <strong>кофраж</strong> и отливане на следващи
              <strong>плочи</strong>;
            </li>
            <li>Доставка, обработка и импрегниране на <strong>дървен материал</strong> и
              направа на <strong>покривна конструкция</strong> и полагане на <strong>покривно покритие</strong> по
              желание
              на клиента;</li>
            <li>Направа на <strong>вертикална планировка, огради, пътеки</strong>;</li>
          </ul>
          <p>
            Фирма
            <?= WEBSITE_TITLE ?> разполага с необходимите специалисти за да се изгради нова къща от началото до края.
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