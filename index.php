<?php get_header();?>

<h1><?php /* bloginfo('name') */?> </h1>
<h2><?php /*bloginfo('description') */?></h2>

<?php/*
    while((have_posts())){
        the_post(); */ ?>
        <h2><a href="<?php /* the_permalink(); */?>"><?php /* the_title(); */ ?></a></h2>
        <?php /* the_content(); */ ?>
    <?php /* } */ ?> 



<header role="banner">

<!-- Top navigation -->
<section id="navTop">
  <nav class="nav-top" role="navigation" aria-label="Top navigation">
    <p id="mainmenulabel" class="visuallyhidden">Main Navigation bar</p>
    <a href="<?php the_permalink();?>" class="nav-top__logo" rel="home" aria-label="stanford logo"><?php bloginfo('name')?></a>
    <div class="nav-top__items" role="menubar">
      <ul class="nav-top__list">
        <li class="nav-top__item has-submenu" role="menuitem" aria-haspopup="true" aria-expanded="false" tabindex="0">
          <a class="nav-top__item__student" href="https://www.stanford.edu/student-gateway/" aria-owns="student-sub">Students</a>
          <ul id="student-sub" class="nav-top__item--content" aria-labelledby="nav-top__item__student">
            <li class="submenu-item" role="menuitemradio" tabindex="0"><a href="#">Email &#038; Calendar</a>
            </li>
            <li class="submenu-item" role="menuitemradio" tabindex="1"><a href="#">Student Portal</a>
            </li>
            <li class="submenu-item" role="menuitemradio" tabindex="1"><a href="#">Course Management</a>
            </li>
          </ul>
        </li>
        <li class="nav-top__item has-submenu" role="menuitem" aria-haspopup="true" aria-expanded="false" tabindex="0">
          <a lass="nav-top__item__faculty" href="ttps://www.stanford.edu/faculty-gateway/" aria-owns="faculty-sub">Faculty &#038; Staff</a>
          <ul id="faculty-sub" class="nav-top__item--content" role="menu" aria-hidden="true" aria-labelledby="nav-top__item__faculty">
            <li class="submenu-item" role="menuitemradio" tabindex="-1"><a href="#">Email &#038; Calendar</a>
            </li>
            <li class="submenu-item" role="menuitemradio" tabindex="-1"><a href="#">Employee Portal</a>
            </li>
            <li class="submenu-item" role="menuitemradio" tabindex="-1"><a href="#">Human Resources</a>
            </li>
          </ul>
        </li>
        <li class="nav-top__item" role="menuitem" tabindex="0"><a href="https://parents.stanford.edu/">Parents</a>
        </li>
        <li class="nav-top__item" role="menuitem" tabindex="0"><a href="https://alumni.stanford.edu/">Alumni</a>
        </li>
        <li class="nav-top__item has-submenu" role="menuitem" aria-haspopup="true" aria-expanded="false" tabindex="0">
          <a class="nav-top__item__student__new" href="#" aria-owns="student-new-sub">Prospective Students</a>
          <ul id="student-new-sub" class="nav-top__item--content" aria-labelledby="nav-top__item__student__new">
            <li class="submenu-item" role="menuitemradio" tabindex="0"><a href="#">Undergraduates</a>
            </li>
            <li class="submenu-item" role="menuitemradio" tabindex="1"><a href="#">Graduates</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav-top__btns">
        <li>
          <button id="search" class="nav-top__search-btn submit-btn" aria-controls="site-search" aria-expanded="false" action="Search website" tabindex="0"><i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </li>
        <li>
          <div id="menu_icon" class="nav-top__menu-btn__icon" aria-controls="primary-menu" aria-expanded="false" action="Toggle menu" tabindex="0">
            <div class="bar1" aria-hidden="true"></div>
            <div class="bar2" aria-hidden="true"></div>
            <div class="bar3" aria-hidden="true"></div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</section>

  <!-- Side navigation -->
<section id="navSide" role="navigation" aria-label="Side menu content">
  <nav class="nav-side" id="siteNav" role="sidenavigation">
    <p id="mainmenulabel" class="visuallyhidden">Main Menu</p>
    <div class="nav-side__container">
      <ul class="nav-side__items" id="sideNav">
                    <li class="nav-side__item"><a href="https://www.stanford.edu/news/">News</a>
                    </li>
                    <li class="nav-side__item"><a href="https://www.stanford.edu/events/">Events</a>
        </li>
        <li class="nav-side__item"><a href="https://www.stanford.edu/academics/">Academics</a>
        </li>
        <li class="nav-side__item"><a href="https://www.stanford.edu/research/">Research</a>
        </li>
        <li class="nav-side__item"><a href="https://www.stanford.edu/health-care/">Health Care</a>
        </li>
        <li class="nav-side__item"><a href="https://www.stanford.edu/campus-life/">Campus Life</a>
        </li>
        <li class="nav-side__item"><a href="https://www.stanford.edu/admission/">Admission</a>
        </li>
        <li class="nav-side__item"><a href="https://www.stanford.edu/about/">About</a>
        </li>
        <li class="nav-side__item"><a href="https://giving.stanford.edu/">Support Us</a>
        </li>
      </ul>
    </div>
  </nav>
</section>
</header>

<!-- Full screen background video -->
<section class="fullscreen-bg" id="overlay" data-type="section">
<video id="hero-vid" class="fullscreen-bg__video" loop="" muted="" autoplay="" poster="https://www-media.stanford.edu/wp-content/uploads/2017/06/11203727/white-plaza-splash-3x2-1499x843.jpg">
  <source src="https://payam.ca/stanford/video/stanford.mp4" type="video/mp4">
    <source src="video/stanford.ogv" type="video/ogv">
      <source src="video/stanford.webm" type="video/webm">
</video>
<div class="fullscreen-bg__title">
  <h1 class="fullscreen-bg__title--wordmark"><span class="fullscreen-bg__title--sub">Welcome to </span><?php bloginfo('name')?></h1>
</div>
<button class="fullscreen-bg__playPause"><i class="fa fa-pause" aria-hidden="true"></i><span class="visuallyhidden">Pause background video</span>
</button>
</section>

<!-- News section -->
<section class="news-section panel panel--vanilla">
<header>
  <h2 class="center"><?php bloginfo('name')?> Today</h2>
  <p>The latest news from <?php bloginfo('name')?></p>
</header>
<div class="news-section__spotlight">
  <img class="news-section__img" role="presentation" alt="dancing couple" src="<?php echo get_theme_file_uri('img/ht_water_boyslaughing-1023x409.jpg');?>">
  <div class="news-section__description">
    <div class="post-meta">
          <a href="https://news.stanford.edu/section/spotlight/" class="post-category">In the Spotlight</a>
    </div>
    <h3><a href="https://news.stanford.edu/2017/10/06/fall-quarter-guest-artists/">Water Solutions</a></h3>
    <p>As the world's population grows, so does the demand for – and threat to – the planet's freshwater supply. Stanford researchers are developing a range of promising solutions to freshwater challenges around the globe.</p>
    <a class="submit-btn" href="https://news.stanford.edu/features/2015/water/index.html">Read more</a>
  </div>
</div>
<div class="news-section__other">
  <div class="news-section__other__col--6">
    <div class="news-section__other__each">
      <img class="news-section__other__img" role="presentation" alt="Hillary Clinton speaking at podium" src="<?php echo get_theme_file_uri('img/HRC_5504.jpg');?>">
      <div class="news-section__other__description">
        <div class="post-meta">
          <a href="https://news.stanford.edu/section/campus-life/" class="post-category">Campus life</a>
        </div>
        <h3><a href="https://news.stanford.edu/2017/10/07/clinton-discusses-perils-technology/">At <?php bloginfo('name')?>, Hillary Clinton discusses the perils of technology</a></h3>
      </div>
    </div>
    <div class="news-section__other__each">
      <img class="news-section__other__img" role="presentation" alt="humanoid robot at a touchscreen" src="<?php echo get_theme_file_uri('img/mental_life.jpg')?>;">
      <div class="news-section__other__description">
        <div class="post-meta">
          <a href="https://news.stanford.edu/section/social-sciences/">Social Science</a>
        </div>
        <h3><a href="https://news.stanford.edu/2017/10/20/probing-americans-think-mental-life/">Probing how Americans think about mental life</a></h3>
      </div>
    </div>
  </div>
  <div class="news-section__other__col--6">
    <div class="news-section__other__each">
      <img class="news-section__other__img" role="presentation" alt="Emmanuel Candès" src="<?php echo get_theme_file_uri('img/Candes.jpg');?>">
      <div class="news-section__other__description">
        <div class="post-meta">
          <a href="https://news.stanford.edu/section/awards/" class="post-category">Awards</a>
        </div>
        <h3><a href="https://news.stanford.edu/2017/10/11/emmanuel-candes-wins-genius-award/">Emmanuel Candès named a MacArthur Fellow</a></h3>
      </div>
    </div>
    <div class="news-section__other__each">
      <img class="news-section__other__img" role="presentation" alt="Sodium" src="<?php echo get_theme_file_uri('img/salt.jpg');?>">
      <div class="news-section__other__description">
        <div class="post-meta">
          <a href="https://news.stanford.edu/section/science-technology/" class="post-category">Science &amp; Technology</a>
        </div>
        <h3><a href="https://news.stanford.edu/2017/10/09/sodium-based-batteries-cost-effective-lithium/">Sodium-based batteries more cost-effective than lithium</a></h3>
      </div>
    </div>
  </div>
</div>
<div class="news-section__readMore" data-type="call-to-action">
  <a class="submit-btn" href="https://news.stanford.edu">More <?php bloginfo('name')?> News</a>
</div>
</section>

<!-- Events section -->
<section class="events-section panel panel--choco">
<header>
  <h2 class="center"><?php bloginfo('name')?> Events</h2>
  <p>What’s happening&nbsp;on campus</p>
</header>
<div class="events-section__spotlight">
  <img class="events-section__img" role="presentation" alt="Maryam Mirzakhani" src="<?php echo get_theme_file_uri('img/71761-2.jpg');?>">
  <div class="events-section__description">
    <div class="events-section__date flip-container" itemprop="startDate">
      <div class="events-section__date--interactive card">
        <div class="front">
          <span class="month">Oct</span>
          <span class="day">21</span>
        </div>
        <div class="back">
          <span class="time">3:00</span>
          <span class="meridiem">PM</span>
        </div>
      </div>
    </div>
    <div class="post-meta">
          <h4 class="post-category">Memorial</h4>
    </div>
    <h3><a href="https://events.stanford.edu/events/718/71889/">In Memory of Professor Maryam Mirzakhani</a></h3>
    <p>A memorial service will be held at 3:00 pm, Saturday, October 21st at CEMEX Auditorium on the Stanford campus. I</p>
    <p>Seating is <i>very</i> limited.</p>
    <a class="submit-btn" href="https://events.stanford.edu/events/718/71889/">Read more</a>
  </div>
</div>
<div class="events-section__other">
  <div class="events-section__other__col--6">
    <div class="events-section__other__each">
      <img class="events-section__other__img" role="presentation" alt="SFJAZZ Collective band" src="<?php echo get_theme_file_uri('img/69215-1.jpg');?>">
      <div class="events-section__other__description">
        <div class="events-section__date flip-container" itemprop="startDate">
          <div class="events-section__date--interactive card">
            <div class="front">
              <span class="month">Oct</span>
              <span class="day">21</span>
            </div>
            <div class="back">
              <span class="time">7:30</span>
              <span class="meridiem">PM</span>
            </div>
          </div>
        </div>
        <div class="post-meta">
          <h4 class="post-category">Performance</h4>
        </div>
        <h3><a href="https://events.stanford.edu/events/692/69215/">SFJAZZ Collective</a></h3>
        <p>Bing Concert Hall - Configuration: End Stage </p>
      </div>
    </div>
    <div class="events-section__other__each">
      <img class="events-section__other__img" role="presentation" alt="Joyce Maynard" src="<?php echo get_theme_file_uri('img/70545-1.jpg');?>">
      <div class="events-section__other__description">
        <div class="events-section__date flip-container" itemprop="startDate">
          <div class="events-section__date--interactive card">
            <div class="front">
              <span class="month">Oct</span>
              <span class="day">24</span>
            </div>
            <div class="back">
              <span class="time">6:00</span>
              <span class="meridiem">PM</span>
            </div>
          </div>
        </div>
        <div class="post-meta">
          <h4 class="post-category">Lecture</h4>
        </div>
        <h3><a href="https://events.stanford.edu/events/705/70545">Joyce Maynard: Reading and Conversation with Paul Costello</a></h3>
        <p> Join us for an evening with author Joyce Maynard.</p>
      </div>
    </div>
  </div>
  <div class="events-section__other__col--6">
    <div class="events-section__other__each">
      <img class="events-section__other__img" role="presentation" alt="Mariza band" src="<?php echo get_theme_file_uri('img/70769-1.jpg');?>">
      <div class="events-section__other__description">
        <div class="events-section__date flip-container" itemprop="startDate">
          <div class="events-section__date--interactive card">
            <div class="front">
              <span class="month">Oct</span>
              <span class="day">25</span>
            </div>
            <div class="back">
              <span class="time">8:00</span>
              <span class="meridiem">PM</span>
            </div>
          </div>
        </div>
        <div class="post-meta">
          <h4 class="post-category">Performance</h4>
        </div>
        <h3><a href="https://events.stanford.edu/events/707/70769/">Mariza</a></h3>
        <p> Mariza returns to the Bing with friends Jorge Fernando and Custódio Castelo.</p>
      </div>
    </div>
    <div class="events-section__other__each">
      <img class="events-section__other__img" role="presentation" alt="Daniel Pearl" src="<?php echo get_theme_file_uri('img/69217-1.jpg');?>">
      <div class="events-section__other__description">
        <div class="events-section__date flip-container" itemprop="startDate">
          <div class="events-section__date--interactive card">
            <div class="front">
              <span class="month">Oct</span>
              <span class="day">26</span>
            </div>
            <div class="back">
              <span class="time">7:30</span>
              <span class="meridiem">PM</span>
            </div>
          </div>
        </div>
        <div class="post-meta">
          <h4 class="post-category">Performance</h4>
        </div>
        <h3><a href="https://events.stanford.edu/events/692/69217">Daniel Pearl World Music Days Concert</a></h3>
        <p> The Annual free concert honoring the memory of alumnus Daniel Pearl</p>
      </div>
    </div>
  </div>
</div>
<div class="events-section__readMore" data-type="call-to-action">
  <a class="submit-btn" href="https://events.stanford.edu/">More <?php bloginfo('name')?> Events</a>
</div>
</section>

<?php get_footer();?>