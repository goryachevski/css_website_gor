<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Использование контейнеров для разработки Web-приложений - Страница 1</title>
    <link rel="stylesheet" href="../dist/chota.css" />
    <style>
      body.dark {
        --bg-color: #000;
        --bg-secondary-color: #131316;
        --font-color: #f5f5f5;
        --color-grey: #ccc;
        --color-darkGrey: #777;
      }
    </style>
  </head>
  <body>
    <div id="top" class="container" role="document">
      <header role="banner">
        <h1 class="pull-right" style="margin: 0;">
          <a href="javascript:void(0)" onclick="switchMode(this)">☀️</a>
        </h1>
        <h1>Chota CSS</h1>
        <div class="clearfix"></div>
        <p>A small CSS framework.</p>
        <section>

<!-- Постраничная навигация - меняй активные страницы -->
            <h1>Навигация по страницам</h1>
            <div class="tabs">
              <a class="active" href="http://.html">Страница 1</a>
              <a href="#!2.html">Страница 2</a>
              <a href="#!3.html">Страница 3</a>
              <a href="#!3.html">Страница 4</a>
              <a href="#!3.html">Страница 5</a>
              <a href="#!3.html">Страница 6</a>
            </div>
        </section>
      </header>
<!-- Ниже навигация по странице и тексту (абзацам). Добавляй артикль_ид -->
      <nav role="navigation">
        <ul>
          <li>
            <a href="#vvedenie_v_kontejnerizaciyu">Введение в контейнеризацию</a>
            <ul>
              <li><a href="#text__headings">Определение контейнеров</a></li>
              <li><a href="#kratkaya_istoriya_i_razvitie_kontejnerizacii">Краткая история и развитие контейнеризации</a></li>
              <li><a href="#preimushchestva_kontejnerov_pered_tradicionnymi_virtualnymi_mashinami">Преимущества контейнеров перед традиционными виртуальными машинами</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <main role="main">
        
<!-- Здесь название темы -->
        <article id="text__tema">
            <header>
                <h1>Использование контейнеров для разработки Web-приложений</h1>
            </header>
            <div>
            <hr />
            </div>
        </article>
        
<!-- Начинай делать текстовку -->

<article id="vvedenie_v_kontejnerizaciyu">
  <header>
    <h2>Введение в контейнеризацию</h2>
  </header>
  <div>
    <center>
      <img src="https://habrastorage.org/files/373/bfd/4db/373bfd4dbf3d43e8a91adf5fdb99c727.png" alt="Image alt text" />
    </center>
  </div>
</article>
  <div>
    <header>
    <article id="opredelenie_kontejnerov">
      <h3>Определение контейнеров</h3>
      </header>
      <div>
        <blockquote>
          <p>
            Контейнеры – это стандартизованные единицы программного обеспечения, 
            которые упаковывают код и все его зависимости таким образом, чтобы приложение 
            могло быстро и надежно запускаться в любом окружении.
          </p>
          <p>
            Контейнеры обеспечивают изоляцию приложений от операционной системы, 
            что позволяет избежать конфликтов и гарантировать консистентное поведение.
          </p>
          <cite><a href="https://www.docker.com/resources/what-container/">Docker.com</a></cite>
        </blockquote>
      </div>
    </article>
    <article id="kratkaya_istoriya_i_razvitie_kontejnerizacii">
      <h3>Краткая история и развитие контейнеризации</h3>
      <p>
        Идея контейнеризации появилась в начале 2000-х годов. Одной из первых технологий 
        в этой области была LXC (Linux Containers). Но настоящую революцию в контейнеризации 
        совершил проект Docker, который был запущен в 2013 году. Docker упростил создание и 
        управление контейнерами, предоставив удобный интерфейс и множество инструментов для 
        работы с контейнерами.
      </p>
    </article>
    <article id="preimushchestva_kontejnerov_pered_tradicionnymi_virtualnymi_mashinami">
      <h3>Преимущества контейнеров перед традиционными виртуальными машинами</h3>
      <p>
        Контейнеры предлагают множество преимуществ по сравнению с виртуальными машинами:
      </p>
      <div>
        <dl>
          <dt>Легковесность</dt>
          <dd>Контейнеры занимают меньше места, так как используют общую операционную 
            систему хоста.</dd>
        </dl>
        <dl>
          <dt>Быстрый запуск</dt>
          <dd>Контейнеры запускаются практически мгновенно, в отличие от виртуальных машин, 
            которые требуют времени на загрузку операционной системы.</dd>
        </dl>
        <dl>
          <dt>Портативность</dt>
          <dd>Контейнеры можно запускать на любой системе, поддерживающей Docker или другой 
            контейнерный движок.</dd>
        </dl>
        <dl>
          <dt>Изоляция</dt>
          <dd>Контейнеры обеспечивают изоляцию приложений, что снижает риски конфликтов 
            между зависимостями и улучшает безопасность.</dd>
        </dl>
    </article>
    </div>

<div>
  <hr />
  </div>

<!-- Кнопка возврата наверх-->
          <footer>
            <center><p></p><a href="#top">[Кнопка вверх ⚡️]</a></p></center>
          </footer>

      </main>
    </div>
    <script src="../docs/main.js"></script>
    
  </body>
</html>
