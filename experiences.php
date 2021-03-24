  <head>
    <meta charset="UTF-8">
    <title>CodePen - Swiper custom pagination</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel="stylesheet" href="assets/experiences_style.css">

  </head>
  <section class ="experience_body">
    <h1 class="title_experiences">Experiences</h1>
    <!-- partial:index.partial.html -->
    <!-- NOT HAVE DUPLICATE PAGINATION -->
    <div class="swiper-container">
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" year="1988">
          <img class="slide-image" src="assets/img/experiences_1.jpg" alt="Image de John MccLane">
          <div class="swiper-slide-content">
              <span class="timeline-year">1988</span>
              <h4 class="timeline-title">Nakatomi Plaza</h4>
              <p class="timeline-text">Die Hard 1</p>
            </div>
        </div>
        <div class="swiper-slide" year="1990">
          <img class="slide-image" src="assets/img/experiences_2.jpg" alt="Image de John MccLane">
        </div>
        <div class="swiper-slide" year="1990">
          <img class="slide-image" src="assets/img/experiences_3.jpg" alt="Image de John MccLane">
        </div>
			  <div class="swiper-slide" year="2007">
          <img class="slide-image" src="assets/img/experiences_4.jpg" alt="Image de John MccLane">
        </div>
			  <div class="swiper-slide" year="2007">
          <img class="slide-image" src="assets/img/experiences_5.jpg" alt="Image de John MccLane">
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
      <!-- If we need navigation buttons -->
      <div class="btn2">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
</div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'>
    </script><script  src="assets/experiences_javascript.js"></script>

  </section>