<?php
$title = $title ?? "Phildamm Integrated Solutions Limited | Training, Safety, Logistics";
$pageTitle = 'Home';
$menu = [
  ["title" => "Home", "link" => ""],
  ["title" => "About Us", "link" => "about"],
  // ["title" => "Services", "link" => "services"],
  // ["title" => "Training Courses", "link" => "courses"],
  // ["title" => "Projects/Clients", "link" => "clients"],
  // ["title" => "Contact", "link" => "contact"],
]
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <!-- Primary Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <meta name="description" content="Phildamm offers certified training, safety equipment supply, lifting equipment inspection, car leasing, and vessel chartering to oil and industrial sectors. Trusted since 2013.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Phildamm Integrated Solutions Limited">
  <meta property="og:description" content="Certified training & consultancy, safety gear supply, inspections, leasing & vessel services. Trusted industry experts since 2013.">
  <meta property="og:image" content="https://phildammsolutions.com/images/og-hero.jpg"> <!-- replace with your hosted hero image -->
  <meta property="og:url" content="https://phildammsolutions.com">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Phildamm Integrated Solutions Limited">
  <meta name="twitter:description" content="Training, inspection, and offshore logistics for Nigeria's industrial sector.">
  <meta name="twitter:image" content="https://phildammsolutions.com/images/og-hero.jpg"> <!-- replace with correct image -->

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://phildammsolutions.com">

  <!-- Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css"> <!-- Your main CSS file -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@600;800&display=swap" rel="stylesheet">

  <!-- SEO Keywords -->
  <meta name="keywords" content="Phildamm, safety training Nigeria, drilling courses, lifting equipment inspection, PPE supply Nigeria, car leasing, vessel chartering, oilfield training, industrial consultancy Nigeria">

  <!-- Robots -->
  <!-- <meta name="robots" content="index, follow"> -->

  <!-- Schema Markup for Organization (Optional but SEO-friendly) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Phildamm Integrated Solutions Limited",
    "url": "https://phildammsolutions.com",
    "logo": "https://phildammsolutions.com/logo.png",
    "description": "Phildamm delivers certified industrial training, equipment inspection, and logistics solutions since 2013.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Nigeria",
      "addressCountry": "NG"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+2347031500112",
      "contactType": "Customer Support"
    }
  }
  </script>

  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Analytics (e.g. Google Analytics or Plausible) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-XXXXXXXXX-X');
  </script> -->

</head>

<body>

  <header>
    <div class="container d-flex justify-content-between">
      <a href="/" style="display: flex; align-items: center; gap: 0.5rem; text-decoration: none; color: inherit;">
        <img src="/logo.png" alt="Phildamm Logo" style="height: 60px;">
        <span style="font-weight: bold;">Phildamm Integrated <br> Solutions Limited</span>
      </a>

      <nav class="d-flex align-items-center">
        <ul id="navMenu">
          <?php foreach ($menu as $key => $menuItems) : ?>
            <li><a href="/<?=$menuItems['link']?>" class="<?= $pageTitle == $menuItems['title'] ? 'active' : ''?>"><?=$menuItems['title']?></a></li>
          <?php endforeach ?>
        </ul>
      </nav>
      <div class="menu-icon" id="menuIcon">☰</div>
      <!-- <button id="themeToggle" class="theme-toggle"><i data-lucide="camera"></i>Toggle Theme</button> -->
    </div>
  </header>