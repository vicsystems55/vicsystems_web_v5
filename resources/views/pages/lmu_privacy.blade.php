<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Privacy Policy & Terms - Lift Me Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .header {
      background: linear-gradient(90deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      padding: 2rem 1rem;
      text-align: center;
      border-bottom-left-radius: 1rem;
      border-bottom-right-radius: 1rem;
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-bottom: 1.5rem;
    }
  </style>
</head>
<body>

  <header class="header">
    <h1 class="h3 fw-bold">Lift Me Up</h1>
    <p class="mb-0">By Vicsystems Technologies Ltd.</p>
  </header>

  <main class="container my-5">
    <div class="card p-4">
      <h2 class="h5 fw-bold mb-3">Privacy Policy</h2>
      <p>
        Lift Me Up is a simple motivational quotes app created by
        <strong>Vicsystems Technologies Ltd.</strong>.
        We respect your privacy and are committed to protecting it.
      </p>
      <ul>
        <li><strong>No personal data</strong> is collected or stored by this app.</li>
        <li>The app works fully offline; quotes are preloaded from our content library.</li>
        <li>We do not track user activity or share information with third parties.</li>
      </ul>
      <p>
        If you contact us directly, we may collect your name, email address, or phone number to respond to your inquiry.
        This information will not be shared outside our company.
      </p>
    </div>

    <div class="card p-4">
      <h2 class="h5 fw-bold mb-3">Terms of Use</h2>
      <p>
        By using <strong>Lift Me Up</strong>, you agree to the following terms:
      </p>
      <ul>
        <li>The app is provided “as is” without warranties of any kind.</li>
        <li>Content is for personal inspiration and motivational purposes only.</li>
        <li>You may not copy, redistribute, or modify the content without permission.</li>
        <li>Vicsystems Technologies Ltd. shall not be held liable for any damages arising from use of the app.</li>
      </ul>
    </div>

    <div class="card p-4">
      <h2 class="h5 fw-bold mb-3">Contact Us</h2>
      <p>
        If you have any questions about this Privacy Policy or Terms of Use, please contact us:
      </p>
      <p class="mb-0">
        <strong>Vicsystems Technologies Ltd.</strong><br>
        Email: support@vicsystems.com.ng
      </p>
    </div>
  </main>

  <footer class="text-center text-muted py-3">
    &copy; <span id="year"></span> Vicsystems Technologies Ltd. All rights reserved.
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
