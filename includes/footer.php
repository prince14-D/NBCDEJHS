<footer class="py-4 mt-5">
    <div class="container text-center">
        <p>&copy; <?php echo date("Y"); ?> NBCDEJHS</p>
        <p>Old Iron Gate, Gbarnga City, Bong County - Liberia</p>
        <p><strong>Motto:</strong> Quality Education, Discipline & Hard Work</p>
        <hr>
        <p>
            Developed by 
            <a href="https://tecliberia.com" target="_blank" style="text-decoration:none; font-weight:bold;">
                Tec Liberia Group
            </a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('service-worker.js')
    .then(function() {
      console.log("Service Worker Registered");
    });
}
</script>

<script>
window.addEventListener("load", function() {
    setTimeout(function() {
    const splash = document.getElementById("splash-screen");
    if (splash) {
      splash.style.display = "none";
    }
    }, 1500);
});
</script>

<script>
let deferredPrompt;
const installBtn = document.getElementById('installBtn');

window.addEventListener('beforeinstallprompt', (e) => {
  e.preventDefault();
  deferredPrompt = e;
  if (installBtn) installBtn.style.display = 'inline-block';
});

if (installBtn) {
  installBtn.addEventListener('click', async () => {
    if (deferredPrompt) {
      deferredPrompt.prompt();
      const { outcome } = await deferredPrompt.userChoice;
      console.log(outcome);
      deferredPrompt = null;
      installBtn.style.display = 'none';
    }
  });
}
</script>



</body>
</html>
