<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>GEST +</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="GEST+" name="keywords">
    <meta content="GEST+" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0" style="color: white;">GEST +</h1>
                     {{--  <img src="{{ asset('img/logo.png') }}" alt="Logo">  --}}
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Accueil</a>
                        <a href="#about" class="nav-item nav-link">A propos</a>
                        <a href="#features" class="nav-item nav-link">Système</a>
                        <a href="#pricing" class="nav-item nav-link">Plan tarifaire</a>
                        <!-- <a href="#testimonial" class="nav-item nav-link">Testimonial</a> -->
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="https://www.youtube.com/watch?v=Wc_7erEGHKM" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Démo</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    @if(session()->has('success'))

                    <div class="col-md-6 offset-md-3">
                        <div class="alert alert-success text-center">
                            <h5 style="color: white">{{ session('success') }}</h5>
                        </div>
                    </div>
                    @endif
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown"></h1>
                            <p class="text-white pb-3 animated slideInDown">Vous cherchez une solution complète pour la gestion de stock, les commandes, la facturation, la livraison, et les dépenses? Ne cherchez plus! GEST +  est là pour simplifier la gestion de votre entreprise.</p>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="" style="height: 58px;">
                                <button type="button" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Envoyer</button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn"   src="{{ asset('img/B.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->

        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-0" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Gérez votre business commercial avec Gest+ en toute simplicité.</h1>
                        <!-- <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p> -->
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Gestion de Stock Simplifiée:</h5>
                                <p class="mb-0">
                                    GEST+  assure une gestion sécurisée de votre inventaire avec des fonctionnalités clés : <br>
                                     <span style="color: black;">• Enregistrement facile des produits </span>
                                    <br>
                                       <span > • Rapports détaillés sur les produits les plus vendus par jour, mois, etc </span> <br>
                                       <span>• Calcul du bénéfice sur chaque produit vendu</span> <br>
                                      <span>• Entrée et sortie de stock simplifiées </span>  <br>
                                      <span>• Alerte de seuil pour les produits en rupture </span>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5> Commandes Intuitives</h5>
                                <p class="mb-0">
                                GEST +  facilite la gestion des commandes avec des fonctionnalités telles que : <br>
                                 <span>• Annulation rapide des commandes</span>  <br>
                                 <span>• Commandes privées et publiques</span> <br>
                                 <span>• Validation simple et rapide des commandes</span> <br>
                                 <span>• Relancez des commandes en un clic</span> <br>
                                 <span>
                                • Détails complets de chaque commande, y compris la possibilité d'imprimer les factures

                                 </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/C.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Overview Start -->
        <div class="container-xxl bg-light my-6 py-5" id="overview">
            <div class="container" i>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('img/about.jpeg') }}">
                        {{--  <iframe   width="570" height="430" src="https://www.youtube.com/embed/Wc_7erEGHKM?si=wFOT9iMNMcq5exHo&amp;start=8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  --}}
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Fonctionnalités Additionnelles:</h5>
                        </div>
                        <p style="color: black;"><i class="fa fa-check-circle text-primary me-3"></i>Gestion des partenaires d'affaires</p>
                        <p style="color: black;"><i class="fa fa-check-circle text-primary me-3"></i>Suivi des livreurs </p>
                        <p style="color: black;"><i class="fa fa-check-circle text-primary me-3"></i>Gestion des caisses</p>
                        <p style="color: black;" class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i>Analyse des ventes</p>
                        <p style="color: black;" class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i>Suivi complet de la clientèle</p>
                        <p style="color: black;"><i class="fa fa-check-circle text-primary me-3"></i>Administration des membres de l'entreprise</p>
                        <p style="color: black;" class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i>Notifications en Temps Réel: GEST +  vous tient informé grâce à un système de notification par e-mail en temps réel</p>
                        <p style="color: black;" class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i>Suivi de Livraison en Direct: Restez informé à chaque étape avec un suivi de livraison en temps réel pour satisfaire vos clients.</p>
                        <p style="color: black;" class="mb-1"><i class="fa fa-check-circle text-primary me-3"></i> Facturation Automatique: Créez des factures professionnelles en quelques clics et suivez les paiements en temps réel.</p>
                        <p style="color: black;" class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Gestion des Dépenses Transparente: Suivez vos dépenses quotidiennes, annuelles, mensuelles et périodiques avec GEST +. Obtenez des rapports détaillés pour une vision claire de vos finances.</p>
                    </div>
                </div>
                <!-- <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Notifications en Temps Réel:</h5>
                        </div>
                        <p class="mb-4"> .</p>

                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-2.jpg">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-3.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Modification</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Overview End -->


        <!-- Advanced Feature Start -->
        <div class="container-xxl py-0" id="features">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-4">Les acteurs du système</h1>
                    <!-- <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Le Directeur Général (DG)</h5>
                            <p class="m-0">est le responsable principal du système et détient l'ensemble des droits.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Le gestionnaire</h5>
                            <p class="m-0">attribué par le DG détient une partie des droits du système.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Sécrétaire</h5>
                            <p class="m-0">chargé(e) de coordonner les activités du système</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Agent caissier</h5>
                            <p class="m-0">chargé de la validation des commandes, de l'émission des factures et de l'encaissement.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-2">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Agent vendeur</h5>
                            <p class="m-0">chargé de l'édition des commandes à livrer.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Agent livreur</h5>
                            <p class="m-0">chargé de la livraison des commandes aux clients de l'entreprise.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Les partenaire</h5>
                            <p class="m-0">chargé de proposer les produits de l'entreprise à d'autres clients en émettant des commandes privées.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Client</h5>
                            <p class="m-0">chargé de recevoir les commandes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advanced Feature End -->


        <!-- Facts Start -->
        <!-- <div class="container-xxl bg-primary my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-cogs fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">7264</h1>
                        <p class="text-white mb-0">Active Install</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">6521</h1>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">729</h1>
                        <p class="text-white mb-0">Award Wins</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-quote-left fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">5917</h1>
                        <p class="text-white mb-0">Clients Reviews</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Facts End -->


        <!-- Process Start -->
        <!-- <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/process.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="mb-4">Three Simple Steps To Start Working With</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <ul class="process mb-0">
                            <li>
                                <span><i class="fa fa-cog"></i></span>
                                <div>
                                    <h5>Install the Software</h5>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-address-card"></i></span>
                                <div>
                                    <h5>Setup Your Profile</h5>
                                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i></span>
                                <div>
                                    <h5>Enjoy The Features</h5>
                                    <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Process End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="pricing">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Plan tarifaire</h1>
                    <!-- <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-dark p-4">
                                <h4 class="text-white mt-2">Standard</h4>
                                <div class="text-white">
                                    <span style="color: white;" class="align-top fs-4 fw-bold">€</span>
                                    <h1 style="color: white;" class="d-inline display-6  mb-0">00.00</h1>
                                    <span style="color: white;" class="align-baseline">/ 1 Mois</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3"><span>Accès à toutes les fonctionnalités.</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application web livreur</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application mobile livreur</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Accès aux mises à jour.</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application Free pay</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <a href="#contact" class="btn btn-dark rounded-pill py-2 px-4 mt-3">S'abonner</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-primary p-4">
                                <h4 class="text-white mt-2">Professionnel</h4>
                                <div class="text-white">
                                    <span style="color: white;" class="align-top fs-4 fw-bold">€</span>
                                    <h1 style="color: white;" class="d-inline display-6  mb-0"> 20.99</h1>
                                    <span style="color: white;" class="align-baseline">/ Mois</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3"><span>Accès à toutes les fonctionnalités.</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application web livreur</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application mobile livreur</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Accès aux mises à jour.</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application Free pay</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <a href="#contact" class="btn btn-primary rounded-pill py-2 px-4 mt-3">S'abonner</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-dark p-4">
                                <h4 class="text-white mt-2">Ultime</h4>
                                <div class="text-white">
                                    <span style="color: white;" class="align-top fs-4 fw-bold">€</span>
                                    <h1  style="color: white;" class="d-inline display-6  mb-0">30.99</h1>
                                    <span style="color: white;" class="align-baseline">/ Mois</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3"><span>Accès à toutes les fonctionnalités.</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application web livreur</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application mobile livreur</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Accès aux mises à jour.</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Application Free pay</span><i class="fa fa-check text-success pt-1"></i></div>
                                <a href="#contact" class="btn btn-dark rounded-pill py-2 px-4 mt-3">S'abonner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <!-- <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">What Our Clients Say</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Entrer en contact</h1>
                        <p class="mb-4"> Pour souscrire à notre service, merci de bien vouloir remplir le formulaire et cliquer sur Envoyer .</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Téléphone</p>
                                <h5 class="mb-0">+228 99 51 48 13</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Mail</p>
                                <h5 class="mb-0">contact@gest-plus.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Bureaux</p>
                                <h5 class="mb-0">Lomé-Togo / France Bordeaux</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                        <form method="POST" action="{{ route('contact-post') }}">
                             @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" required  name="name"  {{ old('name') }} class="form-control" id="name" placeholder="Nom">
                                        <label for="name">Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" required name="email" {{ old('email') }} class="form-control" id="email" placeholder="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="tel">Téléphone</label>
                                    <div class="form-floating">
                                        <input type="tel" name="phone"  {{ old('phone') }} required class="form-control" id="tel" placeholder="Téléphone">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="Plan">Plan tarifaire</label>
                                    <div class="form-floating">

                                      <select name="tarif" {{ old('tarif') }} id="" class="form-control">
                                         <option value="Standard">Standard (€ 00.00 / 1 Mois)</option>
                                         <option value="Professionnel">Professionnel (€ 20.99 / Mois)</option>
                                         <option value="Ultime">Ultime (€ 30.99 / Mois)</option>
                                         <option value="Autre">Autre</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea  required name="msg" class="form-control" placeholder="Leave a message here" id="message" style="height: 150px">

                                            {{ old('msg') }}
                                        </textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <!-- <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Adresse<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Lomé-Togo</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+228 99 51 48 13</p>
                        <p><i class="fa fa-envelope me-3"></i>contact@gest-plus.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="">About</a>
                        <a class="btn btn-link" href="">Contact</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Conditions</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Community<span></span></p>
                        <a class="btn btn-link" href="">Career</a>
                        <a class="btn btn-link" href="">Leadership</a>
                        <a class="btn btn-link" href="">Strategy</a>
                        <a class="btn btn-link" href="">History</a>
                        <a class="btn btn-link" href="">Components</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://digital-services-home.com/">Digital Services</a>,Tous droits réservés.

                        </div>
                        <!-- <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
