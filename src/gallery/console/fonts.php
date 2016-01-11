<?php require "php/library.php"; ?>
<?php require "php/console.php"; ?>
<!doctype html>
<!-- - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- Paradise ~ centerkey.com/paradise             -->
<!-- GPLv3 ~ Copyright (c) individual contributors -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - -->
<html>
<head>
<meta charset=utf-8>
<meta name=apple-mobile-web-app-title content="Gallery">
<title>Fonts Sampler &bull; Paradise</title>
<link rel=icon             href="http://centerkey.com/paradise/graphics/bookmark.png">
<link rel=apple-touch-icon href="http://centerkey.com/paradise/graphics/mobile-home-screen.png">
<link rel=stylesheet       href="https://cdn.jsdelivr.net/fontawesome/4/css/font-awesome.min.css">
<link rel=stylesheet       href="https://cdn.jsdelivr.net/dna.js/0/dna.css">
<link rel=stylesheet       href="../css/reset.css">
<link rel=stylesheet       href="../css/style.css">
<link rel=stylesheet       href="../~data~/custom-style.css">
<style>
   <?php importFonts(); ?>
   .font-sampler { width: 100%; }
   .font-sampler tr { border-top: 1px solid silver; }
   .font-sampler td { vertical-align: middle; padding: 10px; }
</style>
</head>
<body>

<header>
   <h1>Paradise Font Sampler</h1>
</header>

<main>
   <table class=font-sampler>
      <tbody>
         <?php displayTitles(); ?>
      </tbody>
   </table>
</main>

<footer>
   <span>Paradise PHP Photo Gallery</span>
   <span data-href="https://www.google.com/fonts">www.google.com/fonts</span>
</footer>

<script src="https://cdn.jsdelivr.net/jquery/2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/dna.js/0/dna.min.js"></script>

</body>
</html>
