<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ellipse-box.png" alt="Logo" class="main-logo">
    </div>

    <div class="burger-icon" onclick="toggleTheNav()">☰</div>

    <nav class="main-nav" id="mainMenu">
      <ul>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/online casino.png" alt="Home" class="nav-icon">Home</a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slot machine.png" alt="Best Brands" class="nav-icon">Best Brands</a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/money bag.png" alt="Games" class="nav-icon">Best Games</a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/exchange.png" alt="New Stuff" class="nav-icon">New Games</a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.png" alt="Search" class="nav-icon search-toggle"></a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="header-deco">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Frame-header.svg" alt="" class="header-banner">
</div>

<section class="author-toc container">
  <div class="author-card">
    <div class="author-meta">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle.png" alt="Profil" class="avatar">
      <span><strong>Author:</strong> Vanesa Karacali</span>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail-line.png" alt="Contact" class="icon contact-icon">
    </div>
    <p class="publish-time">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.png" alt="Date" class="icon calendar-icon">
      <strong>Published:</strong> <time datetime="2022-11-11T16:23">November 11, 2022, 4:23 PM</time>
    </p>
    <p>This is the author text, I think so :D .</p>
  </div>

  <div class="toc">
    <div class="toc-toggle" onclick="document.getElementById('toc-content').classList.toggle('open')">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Menu1.png" alt="Menu" class="icon toc-icon">
      <span>Table of Content</span>
      <span class="arrow">▼</span>
    </div>
    <ul id="toc-content" class="toc-list">
      <li>Best Brands of 2024</li>
      <li>Best Brands of 2024</li>
      <li>Best Brands of 2024</li>
      <li>Best Brands of 2024</li>
      <li>Best Brands of 2024</li>
      <li>Best Brands of 2024</li>
    </ul>
  </div>
</section>

<section class="sort-by-section container">
  <div class="sort-by-wrapper">
    <div class="sort-by-toggle" onclick="toggleSortOptions()">Sort by <span class="arrow-down">▼</span></div>
    <div id="theSortyThing" class="sort-options">
      <button class="filter-btn" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-image.png" alt="Top Rated">Top Rated</button>
      <button class="filter-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recently-image.png" alt="Recently Added">Recently Added</button>
      <button class="filter-btn active"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/best-image.png" alt="Best Free Spins">Best Free Spins</button>
      <button class="filter-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bonus-image.png" alt="Best Bonus">Best Bonus</button>
    </div>
  </div>
</section>

<section class="listing-cards container">
  <?php
    $counter = 1;
    for ($counter = 1; $counter <= 4; $counter++) :
  ?>
    <div class="listing-card">
      <div class="listing-left">
        <div class="rank">#<?= $counter ?></div>
        <div class="logo-column">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo-samuray.png" alt="Samuray Casino" class="casino-logo">
          <div class="tag">
            <?php
              $geciciEtiket = null;
              if ($counter == 1) {
                $geciciEtiket = "Hot";
              } elseif ($counter == 2) {
                $geciciEtiket = 'Recommended';
              } elseif ($counter == 3) {
                $geciciEtiket = 'New';
              } else {
                $geciciEtiket = 'Popular';
              }
              echo $geciciEtiket;
            ?>
          </div>
        </div>
      </div>
      <div class="listing-center">
        <div class="bonus">100% Up to <strong>€500</strong> Bonus</div>
        <div class="spins">100 Free Spins</div>
      </div>
      <div class="star-column">
        <strong>Star Rating</strong>
        <div class="stars">⭐⭐⭐⭐⭐ 4.5</div>
      </div>
      <div class="listing-right">
        <div class="actions">
          <a href="#" class="btn-offer">Claim Offer</a>
          <a href="#" class="review-link">Read Review</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</section>

<div class="show-more">
  <button class="btn-offer">Show More</button>
</div>

<script>
  function toggleTheNav() {
    const theMainThing = document.getElementById('mainMenu');
    if (theMainThing) {
      theMainThing.classList.toggle('open');
    }
  }

  function toggleSortOptions() {
    let listForSorting = document.getElementById('theSortyThing');
    if (listForSorting) {
      listForSorting.classList.toggle('open');
      const sortButtonItself = document.querySelector('.sort-by-toggle');
      if (sortButtonItself) {
        sortButtonItself.classList.toggle('active');
        console.log("Click it for sort!");
      }
    }
  }

  document.addEventListener('click', function(evt) {
    const tocClicky = document.querySelector('.toc-toggle');
    const tocBox = document.getElementById('toc-content');
    const sortBtnParent = document.querySelector('.sort-by-toggle');
    const sortBoxList = document.getElementById('theSortyThing');

    if (tocBox && tocClicky && !tocClicky.contains(evt.target) && !tocBox.contains(evt.target)) {
      tocBox.classList.remove('open');
    }

    if (sortBoxList && sortBtnParent && !sortBtnParent.contains(evt.target) && !sortBoxList.contains(evt.target)) {
      sortBoxList.classList.remove('open');
      sortBtnParent.classList.remove('active');
    }

    var navForMobile = document.getElementById('mainMenu');
    const burgerToggleBtn = document.querySelector('.burger-icon');
    if (navForMobile && burgerToggleBtn && !burgerToggleBtn.contains(evt.target) && !navForMobile.contains(evt.target)) {
        navForMobile.classList.remove('open');
    }
  });

</script>

<?php wp_footer(); ?>
</body>
</html>