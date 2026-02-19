<?php include("includes/header.php"); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = urlencode($_POST['fullname']);
    $email = urlencode($_POST['email']);
    $phone = urlencode($_POST['phone']);
    $class = urlencode($_POST['class']);
    $message = urlencode($_POST['message']);

    if (!empty($fullname) && !empty($email) && !empty($phone) && !empty($class)) {

        $whatsapp_number = "+231886126154"; // Replace with school WhatsApp (no +)

        $text = "New Admission Application:%0A";
        $text .= "Name: $fullname%0A";
        $text .= "Email: $email%0A";
        $text .= "Phone: $phone%0A";
        $text .= "Class: $class%0A";
        $text .= "Message: $message";

        $whatsapp_url = "https://wa.me/$whatsapp_number?text=$text";

        header("Location: $whatsapp_url");
        exit();

    } else {
        $error = "Please fill all required fields.";
    }
}

$to = "info@nbcdejhs.org"; // Replace with school email
$subject = "New Admission Application";

$body = "
New Admission Application:

Full Name: $fullname
Email: $email
Phone: $phone
Class: $class
Message: $message
";

$headers = "From: no-reply@nbcdejhs.org";

mail($to, $subject, $body, $headers);

?>


<!-- ================= PAGE BANNER ================= -->
<section class="page-banner d-flex align-items-center text-center text-light">
  <div class="container">
    <h1 class="display-4 fw-bold">Admissions</h1>
    <p class="lead">Join NBCDEJHS Today</p>
  </div>
</section>

<!-- ================= ADMISSION INFO ================= -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="section-title mb-4">Admission Requirements</h2>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Completed Application Form</li>
      <li class="list-group-item">Birth Certificate</li>
      <li class="list-group-item">Previous Academic Records</li>
      <li class="list-group-item">Two Passport Photos</li>
    </ul>
  </div>
</section>

<!-- ================= ADMISSION PROCESS ================= -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title mb-4">Admission Process</h2>

    <div class="row g-4">
      <div class="col-md-3">
        <div class="process-card">1️⃣ Submit Application</div>
      </div>
      <div class="col-md-3">
        <div class="process-card">2️⃣ Interview & Screening</div>
      </div>
      <div class="col-md-3">
        <div class="process-card">3️⃣ Admission Approval</div>
      </div>
      <div class="col-md-3">
        <div class="process-card">4️⃣ Enrollment Confirmation</div>
      </div>
    </div>
  </div>
</section>

<!-- ================= APPLICATION FORM ================= -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center mb-4">Online Application Form</h2>

    <?php if ($success): ?>
      <div class="alert alert-success text-center"><?php echo $success; ?></div>
    <?php endif; ?>

    <?php if ($error): ?>
      <div class="alert alert-danger text-center"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="">

      <div class="row g-3">

        <div class="col-md-6">
          <input type="text" name="fullname" class="form-control"
                 placeholder="Full Name *" required>
        </div>

        <div class="col-md-6">
          <input type="email" name="email" class="form-control"
                 placeholder="Email Address *" required>
        </div>

        <div class="col-md-6">
          <input type="text" name="phone" class="form-control"
                 placeholder="Phone Number *" required>
        </div>

        <div class="col-md-6">
          <select name="class" class="form-select" required>
            <option value="">Select Class Applying For *</option>
            <option>Daycare</option>
            <option>Elementary</option>
            <option>Junior High School</option>
          </select>
        </div>

        <div class="col-12">
          <textarea name="message" rows="4"
                    class="form-control"
                    placeholder="Additional Information (Optional)"></textarea>
        </div>

        <div class="col-12 text-center">
          <button type="submit" class="btn btn-school btn-lg">
            Submit Application
          </button>
        </div>

      </div>

    </form>

  </div>
</section>

<?php include("includes/footer.php"); ?>
