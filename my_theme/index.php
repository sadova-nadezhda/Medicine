<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Главная</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/nice-select.css" />
  <link rel="stylesheet" href="css/style.css" />

	<?php wp_head(); ?>
</head>


<body>
<?php get_header(); ?>


  <main>
    <section class="hero">
      <div class="hero__back">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/back-1.png" alt="">
      </div>
      <div class="container">
        <div class="hero__container">
          <h1 class="hero__title">
            Welcome to Astan <span>Health Point of Central Asia</span>
          </h1>
        </div>
      </div>
    </section>
    <section class="services">
      <div class="services__back">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/back-2.png" alt="">
      </div>
      <div class="container">
        <div class="services__container">
          <div class="services__wrap">
            <h2 class="services__title">Основные направления <span>в Астане</span></h2>
            <div class="services__icons">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image.png" alt="">
            </div>
            <div class="services__logos">
              <div class="services__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/services-logo-1.png" alt=""></div>
              <div class="services__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/services-logo-2.png" alt=""></div>
              <div class="services__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/services-logo-3.png" alt=""></div>
            </div>
          </div>
          <div class="services__images">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image-2.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="clinics">
      <div class="container">
        <div class="clinics__container">
          <a href="" class="clinics__btn">
            <h2 class="clinics__title">Клиники</h2>
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M30.0625 12.3542L42.7083 25L30.0625 37.6459M7.29166 25H42.3542" stroke="#0C97CD"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div>
      <div class="clinics__slider">
        <div class="swiper clinicsSwiper">
          <div class="swiper-wrapper">
            <a class="clinics__slide swiper-slide" href="#">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/clinics-1.png" alt="">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.43 5.92999L20.5 12L14.43 18.07M3.5 12H20.33" stroke="white" stroke-width="1.5"
                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <h4>Национальный центр кардиохирургии</h4>
            </a>
            <a class="clinics__slide swiper-slide" href="#">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/clinics-2.png" alt="">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.43 5.92999L20.5 12L14.43 18.07M3.5 12H20.33" stroke="white" stroke-width="1.5"
                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <h4>Национальный научный медицинский центр</h4>
            </a>
            <a class="clinics__slide swiper-slide" href="#">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/clinics-3.png" alt="">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.43 5.92999L20.5 12L14.43 18.07M3.5 12H20.33" stroke="white" stroke-width="1.5"
                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <h4>Республиканский диагностический центр</h4>
            </a>
            <a class="clinics__slide swiper-slide" href="#">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/clinics-1.png" alt="">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.43 5.92999L20.5 12L14.43 18.07M3.5 12H20.33" stroke="white" stroke-width="1.5"
                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <h4>Национальный центр кардиохирургии</h4>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="camt">
      <div class="container">
        <div class="camt__container">
          <div class="camt__wrap">
            <h2 class="camt__title">Вступи в камт</h2>
            <h3 class="camt__desc">Оставьте свою заявку для вступление в КАМТ. Мы с вами свяжемся.</h3>
            <form action="" class="camt__form form" id="camt-form">
              <fieldset class="form__group">
                <input type="text" name="name" class="form__input form__name" placeholder="Введите ваше имя">
                <input type="tel" name="phone" class="form__input form__tel" placeholder="Введите ваш телефон">
              </fieldset>
              <fieldset class="form__group">
                <label for="" class="form__check">
                  <input type="checkbox" name="data" id="data">
                  <span>Я согласен на обработку моих персональных данных</span>
                </label>
                <label for="" class="form__check">
                  <input type="checkbox" name="rules" id="rules">
                  <span>Я ознакомлен с <a href="#" target="_blank">правилами</a> внутреннего распорядка</span>
                </label>
              </fieldset>
              <button class="form__button button">
                <span>Оставить</span>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.43 6.42999L20.5 12.5L14.43 18.57M3.5 12.5H20.33" stroke="white" stroke-width="1.5"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </form>
          </div>
          <div class="camt__img">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/person-1.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="container">
        <div class="news__container">
          <a href="" class="news__btn">
            <h2 class="news__title">Новости</h2>
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M30.0625 12.3542L42.7083 25L30.0625 37.6459M7.29166 25H42.3542" stroke="#0C97CD"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
          <div class="news__cards">
            <a class="news__card" href="#">
              <div class="news__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/news-1.png" alt=""></div>
              <div class="news__desc">
                <div class="news__date">26 июля</div>
                <h4 class="news__caption">Какие медуслуги наиболее популярны у иностранцев в Казахстане</h4>
                <div class="news__txt">В департаменте организации медицинской помощи Министерства здравоохранения РК
                  назвали популярные среди иностранных пациентов медицинские услуги, передает корреспондент МИА
                  «Казинформ».</div>
                <div class="news__link">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.43 5.93005L20.5 12.0001L14.43 18.0701M3.5 12.0001H20.33" stroke="#0C97CD"
                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </div>
              </div>
            </a>
            <a class="news__card" href="#">
              <div class="news__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/news-2.png" alt=""></div>
              <div class="news__desc">
                <div class="news__date">26 июля</div>
                <h4 class="news__caption">Около 4 тысяч иностранцев вылечились в Казахстане в прошлом году</h4>
                <div class="news__txt">В департаменте организации медицинской помощи Министерства здравоохранения РК
                  сообщили, что в прошлом году казахстанцы лечились за счет средств бюджета в Турции, России, Германии.
                  В Казахстане лечились около 4 тысяч иностранцев.</div>
                <div class="news__link">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.43 5.93005L20.5 12.0001L14.43 18.0701M3.5 12.0001H20.33" stroke="#0C97CD"
                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </div>
              </div>
            </a>
            <a class="news__card" href="#">
              <div class="news__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/news-3.png" alt=""></div>
              <div class="news__desc">
                <div class="news__date">26 июля</div>
                <h4 class="news__caption">Какие медуслуги наиболее популярны у иностранцев в Казахстане</h4>
                <div class="news__txt">Рынок медицинского туризма в РК растет – избавляться от недугов в Казахстан
                  приезжают пациенты со всего мира. Развитие этого сегмента идет независимо от основной части
                  турбизнеса, и сейчас бизнес и государство хотят наладить взаимодействие двух отраслей: медицинской и
                  туристической.</div>
                <div class="news__link">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.43 5.93005L20.5 12.0001L14.43 18.0701M3.5 12.0001H20.33" stroke="#0C97CD"
                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="map">
      <div class="container">
        <div class="map__container">
          <h2 class="map__title">Медицинские учреждения</h2>
        </div>
      </div>
      <div class="map__wrap">
        <!-- здесь может быть iframe -->
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/map.png" alt="">
      </div>
    </section>
  </main>

  <?php get_footer(); ?>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>
