<?php include("includes/header.php"); ?>

<section id="homeSlider">
    <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="assets/images/slider1.jpeg" class="d-block w-100 slider-img" alt="School Image">
                <div class="carousel-caption">
                    <h1 class="display-4 fw-bold">Welcome to NBCDEJHS</h1>
                    <p class="lead">Quality Education, Discipline & Hard Work</p>
                    <a href="admission.php" class="btn btn-school btn-lg">Apply Now</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="assets/images/logo.jpeg" class="d-block w-100 slider-img" alt="Students">
                <div class="carousel-caption">
                    <h1 class="fw-bold">Academic Excellence</h1>
                    <p>Building Future Leaders Since 2015</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="assets/images/logo.jpeg" class="d-block w-100 slider-img" alt="Learning">
                <div class="carousel-caption">
                    <h1 class="fw-bold">Christ-Centered Education</h1>
                    <p>Nurturing Mind, Body & Spirit</p>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">


    </div>
</section>

<!-- ADMISSIONS CALL TO ACTION -->
<section class="admissions-cta py-5">
  <div class="container">
    <div class="row align-items-center text-center text-md-start">

      <div class="col-md-8">
        <h2 class="cta-title">
          Admissions Now Open at NBCDEJHS
        </h2>
        <p class="cta-text">
          Enroll today and become part of a Christ-centered learning 
          community committed to Quality Education, Discipline, and Hard Work.
        </p>

        <!-- Countdown -->
        <div id="countdown" class="countdown d-flex justify-content-center justify-content-md-start mt-4 gap-3">
          <div class="time-box">
            <h3 id="days">00</h3>
            <small>Days</small>
          </div>
          <div class="time-box">
            <h3 id="hours">00</h3>
            <small>Hours</small>
          </div>
          <div class="time-box">
            <h3 id="minutes">00</h3>
            <small>Minutes</small>
          </div>
          <div class="time-box">
            <h3 id="seconds">00</h3>
            <small>Seconds</small>
          </div>
        </div>

      </div>

      <div class="col-md-4 text-center">
        <a href="admission.php" class="btn btn-school btn-lg mb-3 w-100">
          Apply for Admission
        </a>
        <a href="contact.php" class="btn btn-outline-light btn-lg w-100">
          Contact the School
        </a>
      </div>

    </div>
  </div>
</section>

<!-- DIRECTOR'S MESSAGE PREVIEW -->
<section class="director-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Director Image -->
      <div class="col-md-5 text-center mb-4 mb-md-0">
        <img src="assets/images/placeholder.jpeg" 
             class="img-fluid rounded shadow director-img" 
             alt="School Director">
      </div>

      <!-- Director Message -->
      <div class="col-md-7">
        <h2 class="section-title mb-3">Director’s Message</h2>

        <p class="director-text">
          The New Born Christian Daycare, Elementary and Junior High School 
          (NBCDEJHS), located in the Old Iron Gate Community of Gbarnga City, 
          Bong County, was established on March 2, 2015.
        </p>

        <p class="director-text">
          The school was founded to provide quality, meaningful, and value-based 
          education to all students, focusing on the total development of each child.
        </p>

        <a href="director.php" class="btn btn-school mt-3">
          Read Full Message
        </a>
      </div>

    </div>
  </div>
</section>

<!-- SCHOOL STATISTICS -->
<section class="stats-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title text-light">Our Impact in Numbers</h2>
      <p class="text-light opacity-75">
        Transforming lives through Christ-centered education since 2015
      </p>
    </div>

    <div class="row g-4 text-center">

      <!-- Year Founded -->
       

      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3>2015</h3>
          <p>Year Established</p>
        </div>
      </div>

      <!-- Years of Service (Adjust manually yearly or make dynamic later) -->
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3><?php echo date("Y") - 2015; ?>+</h3>
          <p>Years of Service</p>
        </div>
      </div>

      <!-- Students -->
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3>300+</h3>
          <p>Students Enrolled</p>
        </div>
      </div>

      <!-- Programs -->
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <h3>3</h3>
          <p>Academic Levels</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- WHY CHOOSE NBCDEJHS -->
<section class="why-choose py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Why Choose NBCDEJHS?</h2>
      <p class="lead why-subtitle">
        Building Character. Inspiring Excellence. Shaping the Future.
      </p>
    </div>

    <div class="row g-4">

      <!-- Christ-Centered Education -->
      <div class="col-md-6 col-lg-4">
        <div class="why-card h-100">
          <div class="why-icon">✝</div>
          <h5>Christ-Centered Education</h5>
          <p>
            Our foundation is built on Christian values that nurture spiritual
            growth and moral discipline in every learner.
          </p>
        </div>
      </div>

      <!-- Academic Excellence -->
      <div class="col-md-6 col-lg-4">
        <div class="why-card h-100">
          <div class="why-icon">📚</div>
          <h5>Strong Academic Standards</h5>
          <p>
            We provide quality instruction that strengthens learning skills
            and prepares students for future academic success.
          </p>
        </div>
      </div>

      <!-- Holistic Development -->
      <div class="col-md-6 col-lg-4">
        <div class="why-card h-100">
          <div class="why-icon">🌱</div>
          <h5>Holistic Development</h5>
          <p>
            We focus on the mental, physical, social, and spiritual growth
            of each child.
          </p>
        </div>
      </div>

      <!-- Discipline -->
      <div class="col-md-6 col-lg-6">
        <div class="why-card h-100">
          <div class="why-icon">⚖</div>
          <h5>Discipline & Integrity</h5>
          <p>
            We cultivate responsible citizenship through integrity,
            accountability, and structured guidance.
          </p>
        </div>
      </div>

      <!-- Supportive Environment -->
      <div class="col-md-6 col-lg-6">
        <div class="why-card h-100">
          <div class="why-icon">🤝</div>
          <h5>Supportive Learning Environment</h5>
          <p>
            Through cooperation among home, school, and church,
            we create a nurturing environment for lifelong success.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>



<!-- PHILOSOPHY & FAITH SECTION -->
<section class="philosophy-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Our Educational Philosophy</h2>
      <p class="lead philosophy-subtitle">
        Christ-Centered. Holistic. Transformational.
      </p>
    </div>

    <div class="row">

      <div class="col-lg-6 mb-4">
        <p>
          NBCDEJHS offers a unique form of education that focuses on the complete
          development of every learner. Our approach emphasizes the growth of the
          mental, physical, social, and spiritual aspects of each child.
        </p>

        <p>
          We are committed to delivering an educational experience that strengthens
          learning skills and empowers students to reach their full potential.
          Our philosophy is Christ-centered, guided by the principle that the
          love of Christ directs and inspires all that we do.
        </p>

        <p>
          Under the guidance of the Holy Spirit, we believe that God’s character
          and purpose can be understood through nature, the Bible, and the life
          of Jesus Christ.
        </p>
      </div>

      <div class="col-lg-6">
        <p>
          The distinctive foundation of NBCDEJHS education is derived from
          biblical teachings and the writings of Ellen G. White, highlighting
          the redemptive purpose of true education — restoring human beings
          into the image of their Creator.
        </p>

        <p>
          Our education extends beyond academics. It fosters balanced
          development spiritually, intellectually, and socially while
          preparing students for a life with eternal significance.
        </p>

        <p>
          Through cooperation among homes, schools, and churches, and with
          divine guidance, we strive to prepare learners to become responsible
          citizens in this world and in the world to come.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- VISION & MISSION SECTION -->
<section class="vision-mission py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Our Vision & Mission</h2>
      <p class="lead vm-subtitle">
        Guiding Our Purpose and Direction
      </p>
    </div>

    <div class="row g-4">

      <!-- Vision -->
      <div class="col-md-6">
        <div class="vm-card h-100">
          <h3 class="vm-title">Vision Statement</h3>
          <p>
            To become a leading Christian-based educational institution that
            nurtures godly character, academic excellence, and responsible
            future leaders for society.
          </p>
        </div>
      </div>

      <!-- Mission -->
      <div class="col-md-6">
        <div class="vm-card h-100">
          <h3 class="vm-title">Mission Statement</h3>
          <p>
            New Born Christian Daycare, Elementary and Junior High School
            is committed to providing quality education rooted in Christian
            values, fostering spiritual growth, intellectual development,
            and moral discipline in every child through a supportive
            learning environment.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- CORE VALUES SECTION -->
<section class="core-values py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Our Core Values</h2>
      <p class="lead values-subtitle">
        The Principles That Define Who We Are
      </p>
    </div>

    <div class="row g-4 text-center">

      <!-- Faith -->
      <div class="col-md-6 col-lg-4 col-xl">
        <div class="value-card h-100">
          <div class="value-icon">✝</div>
          <h5>Faith in God</h5>
          <p>We uphold Christian principles as the foundation of our teaching and character development.</p>
        </div>
      </div>

      <!-- Excellence -->
      <div class="col-md-6 col-lg-4 col-xl">
        <div class="value-card h-100">
          <div class="value-icon">🎓</div>
          <h5>Academic Excellence</h5>
          <p>We strive for high academic standards and continuous improvement in learning.</p>
        </div>
      </div>

      <!-- Integrity -->
      <div class="col-md-6 col-lg-4 col-xl">
        <div class="value-card h-100">
          <div class="value-icon">⚖</div>
          <h5>Integrity & Discipline</h5>
          <p>We promote honesty, accountability, and self-discipline in all areas of life.</p>
        </div>
      </div>

      <!-- Love -->
      <div class="col-md-6 col-lg-6 col-xl">
        <div class="value-card h-100">
          <div class="value-icon">❤</div>
          <h5>Love & Respect</h5>
          <p>We cultivate compassion, respect, and dignity for every individual.</p>
        </div>
      </div>

      <!-- Service -->
      <div class="col-md-12 col-lg-6 col-xl">
        <div class="value-card h-100">
          <div class="value-icon">🤝</div>
          <h5>Service</h5>
          <p>We encourage serving others and contributing positively to society.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ACADEMIC PROGRAMS -->
<section class="programs-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Academic Programs</h2>
      <p class="lead programs-subtitle">
        Structured Learning for Every Stage of Growth
      </p>
    </div>

    <div class="row g-4 text-center">

      <div class="col-md-4">
        <div class="program-card h-100">
          <div class="program-icon">🧸</div>
          <h5>Daycare</h5>
          <p>Providing a nurturing foundation for early childhood growth and development.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="program-card h-100">
          <div class="program-icon">📘</div>
          <h5>Elementary School</h5>
          <p>Building strong academic skills and Christian character in young learners.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="program-card h-100">
          <div class="program-icon">🎓</div>
          <h5>Junior High School</h5>
          <p>Preparing students for higher education and responsible citizenship.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- PHOTO GALLERY PREVIEW -->
<section class="gallery-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">School Life at NBCDEJHS</h2>
      <p class="lead gallery-subtitle">
        A Glimpse into Our Learning Environment
      </p>
    </div>

    <div class="row g-3">

      <div class="col-md-4 col-6">
        <img src="assets/images/slider1.jpeg" class="img-fluid rounded shadow-sm gallery-img">
      </div>

      <div class="col-md-4 col-6">
        <img src="assets/images/logo.jpeg" class="img-fluid rounded shadow-sm gallery-img">
      </div>

      <div class="col-md-4 col-6">
        <img src="assets/images/gallery3.jpg" class="img-fluid rounded shadow-sm gallery-img">
      </div>

      <div class="col-md-4 col-6">
        <img src="assets/images/gallery4.jpg" class="img-fluid rounded shadow-sm gallery-img">
      </div>

      <div class="col-md-4 col-6">
        <img src="assets/images/gallery5.jpg" class="img-fluid rounded shadow-sm gallery-img">
      </div>

      <div class="col-md-4 col-6">
        <img src="assets/images/gallery6.jpg" class="img-fluid rounded shadow-sm gallery-img">
      </div>

    </div>

    <div class="text-center mt-4">
      <a href="gallery.php" class="btn btn-school">View Full Gallery</a>
    </div>

  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title text-light">What Parents Say</h2>
      <p class="text-light opacity-75">
        Voices from Our School Community
      </p>
    </div>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="testimonial-card">
          <p>
            "NBCDEJHS has transformed my child academically and spiritually.
            The discipline and Christian values are outstanding."
          </p>
          <h6>- Parent</h6>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testimonial-card">
          <p>
            "The teachers are dedicated and supportive. I am proud
            to have my child in this school."
          </p>
          <h6>- Parent</h6>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testimonial-card">
          <p>
            "NBCDEJHS provides a safe and nurturing environment
            for children to grow and succeed."
          </p>
          <h6>- Parent</h6>
        </div>
      </div>

    </div>

  </div>
</section>












<script>
  // Set admission deadline (YYYY-MM-DD format)
  const deadline = new Date("2026-04-30 23:59:59").getTime();

  const timer = setInterval(function () {

    const now = new Date().getTime();
    const distance = deadline - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (distance < 0) {
      clearInterval(timer);
      document.getElementById("countdown").innerHTML = 
        "<h4>Admissions Closed</h4>";
    }

  }, 1000);
</script>


<?php include("includes/footer.php"); ?>
