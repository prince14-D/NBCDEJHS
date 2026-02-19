<?php include("includes/header.php"); ?>

<!-- ================= PAGE BANNER ================= -->
<section class="page-banner d-flex align-items-center text-center text-light">
  <div class="container">
    <h1 class="display-4 fw-bold">Photo Gallery</h1>
    <p class="lead">Moments from NBCDEJHS</p>
  </div>
</section>

<!-- ================= GALLERY SECTION ================= -->
<section class="py-5">
  <div class="container">

    <!-- FILTER BUTTONS -->
    <div class="text-center mb-4">
      <button class="btn btn-outline-primary filter-btn" data-filter="all">All</button>
      <button class="btn btn-outline-primary filter-btn" data-filter="events">Events</button>
      <button class="btn btn-outline-primary filter-btn" data-filter="classroom">Classroom</button>
      <button class="btn btn-outline-primary filter-btn" data-filter="activities">Activities</button>
    </div>

    <!-- IMAGE GRID -->
    <div class="row g-4 gallery-container">

      <div class="col-md-4 gallery-item events">
        <img src="assets/images/Activity1.jpeg" class="img-fluid rounded shadow gallery-img">
      </div>

      <div class="col-md-4 gallery-item classroom">
        <img src="assets/images/Activity2.jpeg" class="img-fluid rounded shadow gallery-img">
      </div>

      <div class="col-md-4 gallery-item activities">
        <img src="assets/images/Activity3.jpeg" class="img-fluid rounded shadow gallery-img">
      </div>

      <div class="col-md-4 gallery-item events">
        <img src="assets/images/Activity4.jpeg" class="img-fluid rounded shadow gallery-img">
      </div>

      <div class="col-md-4 gallery-item classroom">
        <img src="assets/images/Activity1.jpeg" class="img-fluid rounded shadow gallery-img">
      </div>

      <div class="col-md-4 gallery-item activities">
        <img src="assets/images/Activity2.jpeg" class="img-fluid rounded shadow gallery-img">
      </div>

    </div>

  </div>
</section>

<!-- LIGHTBOX MODAL -->
<div class="modal fade" id="lightboxModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body text-center">
        <img src="" id="lightboxImage" class="img-fluid rounded">
      </div>
    </div>
  </div>
</div>


<!-- ================= SCHOOL VIDEO SECTION ================= -->
<section class="video-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title">Watch NBCDEJHS in Action</h2>
      <p class="lead video-subtitle">
        Discover our learning environment, activities, and achievements
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="ratio ratio-16x9 shadow rounded">
          <iframe 
            src="https://www.youtube.com/embed/YOUR_VIDEO_ID"
            title="NBCDEJHS School Video"
            allowfullscreen>
          </iframe>
        </div>

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
// FILTER FUNCTION
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', function() {
        let filter = this.getAttribute('data-filter');

        document.querySelectorAll('.gallery-item').forEach(item => {
            if (filter === "all" || item.classList.contains(filter)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
});

// LIGHTBOX FUNCTION
const images = document.querySelectorAll('.gallery-img');
const modal = new bootstrap.Modal(document.getElementById('lightboxModal'));
const modalImg = document.getElementById('lightboxImage');

images.forEach(img => {
    img.addEventListener('click', function() {
        modalImg.src = this.src;
        modal.show();
    });
});
</script>


<?php include("includes/footer.php"); ?>
