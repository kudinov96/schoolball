
<ul class="metismenu left-sidenav-menu" id="side-nav">

    <li class="menu-title">Меню</li>

    <li><a href="{{ route('kinshipList') }}"><i class="mdi mdi-account-multiple"></i>Мои дети</a></li>
    <li><a href="javascript: void(0);"><i class="mdi mdi-calendar-blank"></i>Расписание занятий</a></li>
    @if (auth()->check() && auth()->user()->hasRole('admin'))
      <li class="menu-title">Администрирование</li>
        <li><a href="{{ route('blogList') }}"><i class="mdi mdi-buffer"></i>Блог</a></li>

      <li>
          <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Сущности</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
          <ul class="nav-second-level" aria-expanded="false">

              <li><a href="{{ route('coachList') }}">Тренеры</a></li>
              <li><a href="{{ route('areaList') }}">Площадки</a></li>
              <li><a href="{{ route('clubList') }}">Клубы</a></li>
              <li><a href="/mainindex/1/edit">Настройки главной</a></li>
              <li><a href="/camp/1/edit">Настройки зимнего лагеря</a></li>
              <li><a href="/wekeends/1/edit">Настройки футбольных выходных</a></li>
              <li><a href="/wekeends/2/edit">Настройки летний лагерь ЦАО</a></li>
              <li><a href="/wekeends/3/edit">Настройки летний лагерь УВАО</a></li>
              <li><a href="/wekeends/4/edit">Настройки Парк-отель Горизонт</a></li>
              <li><a href="/wekeends/5/edit">Настройки Дмитров Гольф Резорт</a></li>
              <li><a href="/wekeends/8/edit">Настройки Хотьково</a></li>

              <li><a href="/champion">Соревнования</a></li>

              <li><a href="{{ route('reviewsList') }}">Отзывы</a></li>
              <li><a href="{{ route('reviewsVideoList') }}">Видео отзывы</a></li>
              <li><a href="{{ route('catcampList') }}">Каталог лагерей</a></li>
              <li><a href="{{ route('programList') }}">Программы лагеря</a></li>

          </ul>
      </li>

        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Магазин</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('categoryList') }}">Категории</a></li>
                <li><a href="{{ route('productList') }}">Товары</a></li>



            </ul>
        </li>

      <li>
          <a href="javascript: void(0);"><i class="mdi mdi-calendar-multiple-check"></i><span>Расписание и абонементы</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
          <ul class="nav-second-level" aria-expanded="false">

              <li><a>Учебный план</a></li>
              <li><a href="{{ route('schedule') }}">Расписание занятий</a></li>
              <li><a href="{{ route('scheduleweekend') }}">Расписание выходных</a></li>
              <li><a href="{{ route('abonement') }}">Абонементы</a></li>
              <li><a href="{{ route('tariff') }}">Тарифы</a></li>
              <li><a href="{{ route('tarifflist') }}">Тарифы на главной</a></li>

          </ul>
      </li>
      <li>
          <a href="javascript: void(0);"><i class="mdi mdi-account-multiple-outline"></i><span>Клиентская база</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
          <ul class="nav-second-level" aria-expanded="false">
              <li><a href="{{ route('clients') }}">Таблица клиентов</a></li>
              <li><a href="{{ route('clients_camp') }}">Таблица клиентов лагеря</a></li>
              <li><a href="{{ route('request') }}">Заявки с сайта</a></li>

              <li><a href="{{ route('query') }}">Заявки в работе</a></li>
          </ul>
      </li>
      <li><a href="{{ route('newsList') }}"><i class="mdi mdi-bookmark"></i>Новости</a></li>
      <li><a href="{{ route('upstudentList') }}"><i class="mdi mdi-trophy-variant"></i>Успехи учеников</a></li>
    @endif

</ul>
