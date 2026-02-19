<?php include("includes/header.php"); ?>

<?php
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {

        $to = "info@nbcdejhs.org"; // 🔁 Replace with school email
        $email_subject = "Contact Form: $subject";

        $body = "
        Name: $name
        Email: $email
        Subject: $subject

        Message:
        $message
        ";

        $headers = "From: $email";

        mail($to, $email_subject, $body, $headers);

        $success = "Your message has been sent successfully!";
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<!-- ================= PAGE BANNER ================= -->
<section class="page-banner d-flex align-items-center text-center text-light">
  <div class="container">
    <h1 class="display-4 fw-bold">Contact Us</h1>
    <p class="lead">We Would Love to Hear From You</p>
  </div>
</section>

<!-- ================= CONTACT SECTION ================= -->
<section class="py-5">
  <div class="container">

    <div class="row">

      <!-- CONTACT INFO -->
      <div class="col-md-5 mb-4">
        <h3 class="section-title mb-4">Get in Touch</h3>

        <p><strong>📍 Address:</strong><br>
        Old Iron Gate Community,<br>
        Gbarnga City, Bong County, Liberia</p>

        <p><strong>📞 Phone:</strong><br>
        (+231)886-126-154</p>

        <p><strong>✉ Email:</strong><br>
        info@nbcdejhs.org</p>

        <p><strong>🕒 Office Hours:</strong><br>
        Monday – Friday: 8:00 AM – 4:00 PM</p>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/+231888284875?text=Hello%20NBCDEJHS,%20I%20would%20like%20more%20information." 
           class="btn btn-success mt-3" target="_blank">
           💬 Chat on WhatsApp
        </a>
      </div>

      <!-- CONTACT FORM -->
      <div class="col-md-7">

        <?php if ($success): ?>
          <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">

          <div class="mb-3">
            <input type="text" name="name" class="form-control"
                   placeholder="Full Name *" required>
          </div>

          <div class="mb-3">
            <input type="email" name="email" class="form-control"
                   placeholder="Email Address *" required>
          </div>

          <div class="mb-3">
            <input type="text" name="subject" class="form-control"
                   placeholder="Subject *" required>
          </div>

          <div class="mb-3">
            <textarea name="message" rows="5"
                      class="form-control"
                      placeholder="Your Message *" required></textarea>
          </div>

          <button type="submit" class="btn btn-school btn-lg">
            Send Message
          </button>

        </form>

      </div>

    </div>

  </div>
</section>

<!-- ================= GOOGLE MAP ================= -->
<section class="pb-5">
  <div class="container">
    <div class="ratio ratio-16x9 shadow">
      <iframe 
        src="https://www.google.com/maps?q=Gbarnga,BongCounty,Liberia&output=embed"
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>

<?php include("includes/footer.php"); ?>
