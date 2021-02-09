<header class="header">
  <div class="container">
    <div class="header__top">
      <div class="header__top-wrap">
        <div class="header__top-left">
          <a href="#">
            @include('icon::search')
          </a>
        </div>
        <div class="header__top-central">
          {!! bem_menu('header_top_1','top-menu') !!}
        </div>
        <div class="header__top-right">
          {!! bem_menu('header_top_2','top-menu') !!}
        </div>
      </div>
    </div>
    <div class="header__central">
      <div class="header__central-wrap">
        <a href="/" class="header__central-logo">
          @include('icon::logo')
        </a>
        <div class="header__central-content">
          <div class="header__central-phone">
            <a href="#">+7 (777) 777-77-77</a>
            <a href="#">8 (800) 777-77-77</a>
          </div>
          <div class="header__central-opening-hours">
            <span>с 7:00 до 23:00 МСК</span>
            <span>Звонок бесплатный</span>
          </div>
          <a href="#" class="button button-white">Зарегистрироваться</a>
          <a href="#" class="button">Войти</a>
        </div>
      </div>
    </div>
  </div>

  <div class="header__menu">
    <div class="container">
      {!! bem_menu('primary_navigation') !!}
    </div>
  </div>
</header>
