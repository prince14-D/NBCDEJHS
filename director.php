<?php include("includes/header.php"); ?>

<!-- PAGE BANNER -->
<section class="page-banner d-flex align-items-center text-center text-light">
  <div class="container">
    <h1 class="display-4 fw-bold">Director’s Message</h1>
    <p class="lead">Leadership with Vision & Faith</p>
  </div>
</section>

<!-- DIRECTOR PROFILE -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-4 text-center mb-4">
        <img src="assets/images/Director’s .jpeg"
             class="img-fluid rounded shadow"
             alt="T. Edward Korkollie">
        <h4 class="mt-3 fw-bold">T. Edward Korkollie</h4>
        <p class="text-muted">School Director</p>
      </div>

      <div class="col-md-8">
        <p>
          The New Born Christian Daycare, Elementary and Junior High School 
          (NBCDEJHS), located in the Old Iron Gate Community of Gbarnga City, 
          Bong County, was established on March 2, 2015.
        </p>

        <p>
          The school was founded to provide quality, meaningful, and value-based 
          education to all students. Our approach emphasizes the complete development 
          of every learner—mentally, physically, socially, and spiritually.
        </p>

        <p>
          Guided by Christ-centered principles and biblical teachings, we strive 
          to restore character, promote academic excellence, and prepare students 
          for responsible citizenship in this world and the world to come.
        </p>

        <p>
          We remain committed to nurturing future leaders through discipline, 
          faith, and hard work.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Floating Contact Button -->
<div class="contact-float">
  
  <div class="contact-options">
    <a href="tel:+231886126154" class="contact-item">
      <i class="bi bi-telephone-fill"></i>
      <span>Call</span>
    </a>

    <a href="mailto:info@nbcdejhs.org" class="contact-item">
      <i class="bi bi-envelope-fill"></i>
      <span>Email</span>
    </a>

    <a href="https://wa.me/+231888284875?text=Hello%20NBCDEJHS,%20I%20would%20like%20more%20information%20about%20admission." 
       target="_blank" 
       class="contact-item whatsapp">
      <i class="bi bi-whatsapp"></i>
      <span>WhatsApp</span>
    </a>
  </div>

  <button class="contact-toggle" onclick="toggleContact()">
    <i class="bi bi-chat-dots-fill"></i>
  </button>

</div>



<script>
function toggleContact() {
    document.querySelector('.contact-options').classList.toggle('show');
}
</script>


<?php include("includes/footer.php"); ?>
