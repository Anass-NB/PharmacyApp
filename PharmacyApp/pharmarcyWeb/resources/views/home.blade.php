<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="keywords"
    content="Pharmacy Finder , pharmacies de garde maroc ,  premanent pharmacies morocco,pharmacies maroc" />
  <meta name="description"
    content=" Discover the closest pharmacies , permanent pharmacies based on your current location in just a few clicks." />
  <meta property="og:site_name" content="Pharmacy Finder" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Pharmacy Finder" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Pharmacy Finder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="shortcut icon" type="image/x-icon" href="assets/home/assets/img/favicon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/home/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/home/assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/home/assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/home/assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/home/assets/css/mb.YTPlayer.min.css" />
  <link rel="stylesheet" href="assets/home/assets/css/slick.css" />
  <link rel="stylesheet" href="assets/home/assets/css/default.css" />
  <link rel="stylesheet" href="assets/home/assets/css/style.css" />
  <link rel="stylesheet" href="assets/home/assets/css/responsive.css" />
  <style>
    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #03C988;
      border-radius: 15px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #84C1BE;
    }
  </style>
</head>

<body>
  <!-- preloader -->
  <div id="preloader" class="home-svn-loader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
      </div>
    </div>
  </div>
  <!-- preloader-end -->

  <!-- Scroll-top -->
  <button class="scroll-top scroll-to-target btn-style-three" data-target="html">
    <i class="fas fa-angle-up"></i>
  </button>
  <!-- Scroll-top-end-->

  <!-- header -->
  <header id="sticky-header" class="transparent-menu menu-style-two home-svn-header">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="main-menu">
            <nav class="navbar navbar-expand-lg">
              <a href="index.html" class="navbar-brand">
                <img src="assets/home/assets/img/logo/logo.png" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-icon"></span>
                <span class="navbar-icon"></span>
                <span class="navbar-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#home">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#features">Fonctionnalités</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#download_app">Télécharger
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#footer">Contactez-nous</a>
                  </li>
                </ul>
              </div>
              <div class="header-btn d-none d-lg-block">
                <a href="{{ route('login') }}" class="btn btn-style-two">Connexion</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header-end -->

  <!-- main-area -->
  <main>
    <!-- banner-area -->
    <section id="home" class="home-svn-banner">
      <div class="svn-banner-bg"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-7 col-lg-6">
            <div class="svn-banner-content">
              <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s">
                <span>Nouveau</span> Disponible sur PlayStore
              </h6>
              <h2 class="title wow fadeInUp" data-wow-delay=".4s">
                Découvrez les pharmacies à proximité
              </h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                Découvrez les pharmacies les plus proches, les pharmacies permanentes en fonction de votre localisation
                actuelle en quelques clics seulement. Restez informé de l'état de fonctionnement des pharmacies près de
                chez vous.
              </p>
              <div class="banner-btn" id="download_app">
                <a href="#" class="playstore wow fadeInLeft" data-wow-delay=".8s">
                  <img src="assets/home/assets/img/icons/googleplay.png" alt="googleplay" />
                </a>
                <a href="#" class="appstore wow fadeInRight" data-wow-delay=".8s">
                  <img src="assets/home/assets/img/icons/appstore.png" alt="playstore" />
                </a>
              </div>

            </div>
          </div>
          <div class="col-xl-5 col-lg-6">
            <div class="svn-slider-wrap svn-slider-active">
              <div class="svn-slide-img">
                <img src="assets/home/assets/img/banner/shot3.png" alt="screenshot" />
              </div>
              <div class="svn-slide-img">
                <img src="assets/home/assets/img/banner/shot2.png" alt="screenshot" />
              </div>
              <div class="svn-slide-img">
                <img src="assets/home/assets/img/banner/shot1.png" alt="screenshot" />
              </div>
              <div class="svn-slide-img">
                <img src="assets/home/assets/img/banner/shot4.png" alt="screenshot" />
              </div>
              <div class="svn-slide-img">
                <img src="assets/home/assets/img/banner/shot5.png" alt="screenshot" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="svn-border-circle"></div>
      <div class="svn-banner-shape"></div>
    </section>
    <!-- banner-area-end -->

    <!-- about-area -->
    <section class="home-six-about home-svn-about pt-90">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-5 col-lg-6">
            <div class="home-six-about-img wow fadeInLeft" data-wow-delay=".2s">
              <img src="assets/home/assets/img/images/about_img02.png" alt="img" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="section-title mb-40">
              <h2 class="title">À propos de l'application</h2>
            </div>
            <div class="about-content">
              <p>
                Pharmacy Finder Est un outil qui permet aux utilisateurs de découvrir et de localiser sans
                effort les pharmacies de garde en fonction de leur emplacement actuel.Les
                utilisateurs peuvent accéder à la liste des pharmacies en permanence, avec des informations détaillées
                telles que les adresses, les coordonnées , la disponibilité pour La Livraison des médicaments . Les
                utilisateurs peuvent rester informés sur les pharmacies
                ouvertes et fermées, en s'assurant qu'ils disposent des informations les plus récentes.
                L'application propose également un affichage cartographique interactif, permettant aux utilisateurs de
                visualiser la proximité des pharmacies par rapport à leur emplacement et de naviguer facilement sur la
                carte. Avec son interface conviviale et ses fonctionnalités pratiques, l'application
                est une ressource précieuse pour les personnes qui recherchent un accès facile aux pharmacies.
              </p>
              <a href="#features" class="btn btn-style-three">En Savoir Plus</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about-area-end -->

    <!-- app-features-area -->
    <section id="features" class="app-features-area home-four-features home-six-features pt-110">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-md-10">
            <div class="section-title text-center mb-60">
              <h2 class="title">Fonctionnalités de l'application </h2>
              <p>
                Fonctionnalités de Pharmacy Finder
              </p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6 order-2 order-lg-0">
            <div class="add-features-item mb-50 wow fadeInUp" data-wow-delay=".2s">
              <div class="add-features-icon">
                <img src="assets/home/assets/img/icons/app_features01.png" alt="feature" />
              </div>
              <div class="add-features-content">
                <h4 class="title">Détection D'emplacement</h4>
                <p>
                  L'application utilise les services de localisation de l'appareil pour détecter automatiquement la
                  position actuelle de l'utilisateur. Cela permet des résultats de recherche précis basés sur la
                  proximité.
                </p>
              </div>
            </div>
            <div class="add-features-item mb-50 wow fadeInUp" data-wow-delay=".4s">
              <div class="add-features-icon">
                <img src="assets/home/assets/img/icons/app_features02.png" alt="" />
              </div>
              <div class="add-features-content">
                <h4 class="title">Explorez Les Pharmacies de garde</h4>
                <p>
                  PharmaFinder, offre une fonctionnalité conviviale qui permet aux utilisateurs d'accéder aux
                  informations sur les pharmacies permanentes et de les trouver facilement.
                </p>
              </div>
            </div>
            <div class="add-features-item mb-50 wow fadeInUp" data-wow-delay=".6s">
              <div class="add-features-icon">
                <img src="assets/home/assets/img/icons/app_features03.png" alt="" />
              </div>
              <div class="add-features-content">
                <h4 class="title">Carte Interactive
                </h4>
                <p>
                  L'application utilise une carte interactive pour afficher visuellement les emplacements des
                  pharmacies. Les utilisateurs peuvent appuyer sur un marqueur de pharmacie pour afficher plus
                  d'informations à son sujet, telles que l'adresse, les coordonnées.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-0 order-lg-2">
            <div class="add-features-img text-center">
              <img src="assets/home/assets/img/images/work_app02.png" alt="" />
            </div>
          </div>
          <div class="col-lg-4 col-md-6 order-2 order-lg-3">
            <div class="add-features-item mb-50 wow fadeInUp" data-wow-delay=".2s">
              <div class="add-features-icon">
                <img src="assets/home/assets/img/icons/app_features04.png" alt="" />
              </div>
              <div class="add-features-content">
                <h4 class="title">Rapports Des Utilisateurs</h4>
                <p>
                  En appuyant simplement sur un bouton, les utilisateurs peuvent signaler si une pharmacie est ouverte
                  ou fermée à un moment donné.
                </p>
              </div>
            </div>
            <div class="add-features-item mb-50 wow fadeInUp" data-wow-delay=".4s">
              <div class="add-features-icon">
                <img src="assets/home/assets/img/icons/app_features05.png" alt="" />
              </div>
              <div class="add-features-content">
                <h4 class="title">Contacter Une Pharmacie</h4>
                <p>
                  Les utilisateurs peuvent lancer en toute transparence une conversation WhatsApp directement avec la
                  pharmacie sélectionnée et également passer un appel téléphonique.
                </p>
              </div>
            </div>
            <div class="add-features-item mb-50 wow fadeInUp" data-wow-delay=".6s">
              <div class="add-features-icon">
                <img src="assets/home/assets/img/icons/app_features06.png" alt="" />
              </div>
              <div class="add-features-content">
                <h4 class="title"> Multi langues </h4>
                <p>
                  Avec la prise en charge de plusieurs langues, les utilisateurs peuvent choisir leur langue préférée
                  parmi un large éventail d'options.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- app-features-area -->





  </main>
  <!-- main-area-end -->

  <!-- footer-area -->
  <footer id="footer">
    <section class="footer-area home-svn-footer pt-100">
      <div class="container">
        <div class="footer-top mb-70">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="footer-widget mb-30">
                <div class="footer-logo">
                  <a href="index-2.html"><img src="assets/home/assets/img/logo/logo.png" alt="" /></a>
                </div>
                <div class="footer-content">
                  <p>
                    Découvrez les pharmacies les plus proches, les pharmacies permanentes en fonction de votre
                    localisation actuelle en quelques clics seulement. Restez informé de l'état de fonctionnement des
                    pharmacies près de chez vous.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-2 offset-xl-1 col-lg-4 col-md-6">
              <div class="footer-widget mb-30">
                <div class="fw-title">
                  <h4 class="title">Liens </h4>
                </div>
                <div class="fw-link">
                  <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#download_app">L'application</a></li>
                    <li><a href="/login">Espace Admin</a></li>

                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="footer-widget mb-30">
                <div class="fw-title">
                  <h4 class="title">Contactez-nous
                  </h4>
                </div>
                <div class="contact-address mb-20">
                  <ul>
                    <li>
                      <i class="fas fa-home"></i>
                      <p>Maroc</p>
                    </li>
                    <li>
                      <i class="far fa-envelope-open"></i>
                      <p>Anassnabil067@gmail.com</p>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-headphones"></i>hi@sht.ma</a>
                    </li>
                  </ul>
                </div>
                <div class="footer-social">
                  <h6 class="title">Suivez-nous</h6>
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="copyright-text">
                <p>All Rights Reserved ©2023 SOFT HIGH TECH.</p>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="footer-bottom-menu">
                <ul>
                  <li><a href="#footer">BY ANASS NABIL</a></li>
                  {{-- <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#footer">Contact Us</a></li> --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- footer-area-end -->

  <!-- JS here -->
  <script src="assets/home/assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="assets/home/assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/home/assets/js/bootstrap.min.js"></script>
  <script src="assets/home/assets/js/one-page-nav-min.js"></script>
  <script src="assets/home/assets/js/slick.min.js"></script>
  <script src="assets/home/assets/js/validator.js"></script>
  <script src="assets/home/assets/js/wow.min.js"></script>
  <script src="assets/home/assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/home/assets/js/jquery.counterup.min.js"></script>
  <script src="assets/home/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/home/assets/js/jquery.countdown.min.js"></script>
  <script src="assets/home/assets/js/jquery.mb.YT.js"></script>
  <script src="assets/home/assets/js/ajax-form.js"></script>
  <script src="assets/home/assets/js/main.js"></script>
</body>

</html>
