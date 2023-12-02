<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <style>
    /* Style par défaut pour l'icône */
    .fa-calendar-minus {
      color: black;
    }

    
    .status-div {
        background-color: #6d071a; /* Couleur de fond personnalisée */
        padding: 10px; /* Marge intérieure pour l'apparence */
        text-align: center; /* Pour centrer le texte */
    }

    .status-available {
        color: white; /* Couleur du texte si des places sont disponibles */
        font-weight: bold;
    }

    .status-full {
        color: white; /* Couleur du texte si le forfait est complet */
        font-weight: bold;
    }


  </style>


    </head>

<?php $this->load->view("headscript"); ?>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

<!--header-->
<?php $this->load->view("header"); ?>
<!--//header-->
<!--main-->
<main class="site-main page-spacing">
    
           
        <!-- PhotoSlider2 -->
        <div class="container-fluid no-padding photoslider2">
            <!-- PhotoSlider2 Carousel-->
            <div class="container-fluid no-padding photoslider2-carousel">
                <!-- Booking Form -->
             
                <!-- Booking Form /- -->
                <div id="photoslider2-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                           <img src="<?= base_url()?>assets/frontend/images/slider-5.jpg" alt="photoslider-1"  style="width:100% ;opacity: 0.99;filter: brightness(0.80);height:650px" />
                       
                         
                           <div class="container photoslider2-content">
                           <div class="container">
    <!-- <div class="row" style="margin-top: -250px;"> -->
        <!-- <div class="col-md-4">
            <ul>
                <li><a href="#">imageLogo</a></li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        </div> -->
        
        <!-- <div class="col-md-8">
            <nav class="navbar navbar-expand-md ">
          

               
                <div  class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                        <li class="nav-item dropdown">
                        <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  Hajj
  </a>
  <ul class="dropdown-menu"  style="background-color: transparent;" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Hajj 2022 – Forfait 5*</a></li>
    <li><a class="dropdown-item" href="#">Avis et Témoignages Hajj</a></li>
    <li><a class="dropdown-item" href="#">Comment réussir son Hajj ?</a></li>
  </ul>
                        </li>
                        <li class="nav-item dropdown">
  <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  Omra
  </a>
  <ul class="dropdown-menu"  style="background-color: transparent;" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
                        </li>
                                            <li><a href="">about</a></li>
                                            <li><a href="">contact</a></li>
                                    </ul>
                                    
                                 
                                    
                </div>
            </nav>
           
        </div> -->
    <!-- </div>
    <br><br><br> -->
    <!-- <div class="row">
<div class="col-md-12 ">
<form method="post" action="<?=base_url()?>chercher">
                        <div class="input-group menusearch"> -->
                            <!-- <input type="text" name="destination"placeholder="Rechercher" class="form-control" style="background-color: transparent;
    border-radius: 20px;"> -->
                            <!-- <span class="input-group-btn">
							<button style="    color: white;
    font-size: large;" type="submit" title="Search" class="btn"><span class="icon_search" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </form>
</div>
</div> -->
</div>

                                    <div class="row">
                                        <div class="col-md-9">
                                        <h3>Votre Agence Hajj & Omra</h3>
                                        <p>Vous garantit les meilleures prestations aux meilleurs  prix  </p>
                                        <a href="#section1" type="button" class="btn btn-danger">Nos Forfait Omra</a>
                                        </div>
                                        </div>
                            </div>
                        </div>
                        <script>
                            
                        $(document).ready(function() {
    $('#search-icon').click(function() {
        // Basculez la classe 'search-active' sur la barre de navigation
        $('.navbar').toggleClass('search-active');

        // Masquez ou affichez les éléments du menu
        $('.navbar-nav').toggleClass('hidden');

        // Si la barre de recherche est active, donnez-lui la largeur de la barre de navigation
        if ($('.navbar').hasClass('search-active')) {
            $('.form-control').css('width', '100%');
        } else {
            // Sinon, rétablissez la largeur par défaut de l'input de recherche
            $('.form-control').css('width', 'auto');
        }
    });
});
                        </script>
                        <!-- hadihiyaslide2**************************** -->
                        <div class="item">
                        <img src="<?= base_url()?>assets/frontend/images/slide3.jpg" alt="photoslider-1"  style="width:100% ;opacity: 0.99;filter: brightness(0.80);height:650px" />
                       
                         
                       <div class="container photoslider2-content">
                       <div class="container">
<!-- <div class="row" style="margin-top: -250px;">
    <div class="col-md-4">
        <ul>
            <li><a href="#">imageLogo</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <nav class="navbar navbar-expand-md"> 
      


            <div  class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Hajj
</a>
<ul class="dropdown-menu"  style="background-color: transparent;" aria-labelledby="dropdownMenuLink">
<li><a class="dropdown-item" href="#">Hajj 2022 – Forfait 5*</a></li>
    <li><a class="dropdown-item" href="#">Avis et Témoignages Hajj</a></li>
    <li><a class="dropdown-item" href="#">Comment réussir son Hajj ?</a></li>
</ul>
                    </li>
                    <li class="nav-item dropdown">
<a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Omra
</a>
<ul class="dropdown-menu"  style="background-color: transparent;" aria-labelledby="dropdownMenuLink">
<li><a class="dropdown-item" href="#">Action</a></li>
<li><a class="dropdown-item" href="#">Another action</a></li>
<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
                    </li>
                                        <li><a href="">about</a></li>
                                        <li><a href="">contact</a></li>
                                      <li><form method="post" action="<?=base_url()?>chercher">
                        <div class="input-group menusearch">
                            <input type="text" name="destination"placeholder="Rechercher" class="form-control" style="background-color: transparent;
    border-radius: 20px;">
                            <span class="input-group-btn">
							<button style="    color: white;
    font-size: large;" type="submit" title="Search" class="btn"><span class="icon_search" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </form></li> -->
                                <!-- </ul>
            </div>
        </nav>
    </div>
</div>
<br><br><br>  -->

</div>

                                <div class="row">
                                    <div class="col-md-9">
                                    <h3>Notre agence <span>TarikMakka</span></h3>
                                   <p>« Bien plus qu’une agence…, Une Famille »</p>
                                   <a href="#section2" type="button" class="btn btn-danger">Qui Somme nous?</a>
                                        
                                   <!-- <button type="button" class="btn btn-danger">Nos Forfait Omra</button> -->
                                    </div>
                                    </div>
                        </div>
                        </div>   
<!-- findesilde2 -->
                        <!--<div class="item">-->
                        <!--    <img src="<?= base_url()?>assets/frontend/images/slider3.jpg" alt="slider3" width="1920" style="height:840px !important" />-->
                        <!--    <div class="container photoslider2-content">-->
                        <!--        <div class="row">-->
                        <!--            <div class="col-md-7 col-sm-12 col-xs-12 photoslider1-content">-->
                        <!--                <h3>La plus grande récompense, le voyage de luxe</h3>-->
                        <!--                <p>Travailler, voyager, économiser, répéter</p>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <!-- PhotoSlider2 Carousel /- -->
        </div>
        <!-- PhotoSlider2 /- -->
        <br>
        <br>
        <br>
<div  style="padding: 30px;">

    <div class="row" >
    <div class="col-md-6 ">
<div class="slider-content" id="section2">
<h3>Agence Hajj & Omra</h3>
<p>Partiralamecque.com / Ariane Voyages est une agence Hajj et Omra agréée par le ministère saoudien du Hajj (numéro d’agrément 2386)
Partez au Hajj, Omra et Omra Ramadan en découvrant nos forfaits pour l’année 2023 !</p>

                                    </div>
                                </div>
<div class="col-md-6">
<img src="<?= base_url()?>assets/frontend/images/partirmeque.jpg" alt="bestdestination-ic1" width="100%" height="100%" />
                                      
</div>
    </div>
</div>
        <!--ForfiatOmra -->

        
        <div class=" no-padding popular-destination2-section">
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header" id="section1">
                    <h3  style="color: #6d071a;">Forfait Omra</h3>
                    <center><p>Découvrez nos meilleures forfaits pour  Omra </p></center>
                    <br>
                    <?php if (empty($activities)) { ?>
    <div class="row">
        <div class="col-12">
            <h1 style="text-align:center; width: 90%; margin: 0 auto;">Aucune Offre Omra disponible pour le moment.</h1>
        </div>
    </div>
<?php } else { 
  ?>

<div class="row">
    <div class="container" style="margin: 0px; padding: 0px;">
        <div class="best-destination-block">
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                    <div class="card-wrapper container">
    <div class="row">
    <?php foreach ($activities as $key => $activity) {
        $first_image = get_one_image_byServiceId($activity->id);
        ?>
       <div class="col-lg-4 col-md-6 col-12 <?php if ($key >= 1) echo 'd-none d-md-block'; ?>">
            <div class="card" style="width: 100%;">
                <img style="height: 280px;" src="<?= base_url() ?>assets/backend/services/<?= $first_image ?>" alt="<?= $activity->titre; ?>" class="img-fluid rounded-start" alt="..." />
                <div class="card-body">
                    <div class="status-div">
                        <?php
                        if ($activity->statusDeForfait == "1") {
                            echo '<span style="color:white;" class="status-available">Places disponibles</span>';
                        } else {
                            echo '<span style="color:white;" class="status-full">Complet</span>';
                        }
                        ?>
                    </div>
                    <h5 style="font-size: large;" class="card-title" title="<?= $activity->titre; ?>"><b><?= $activity->titre; ?></b></h5>
                    <div class="card-body" style="font-size: medium; font-family: Poppins, sans-serif;">
                        <table class="table table-responsive" style="border-bottom: white;">
                            <tbody style="font-family: sans-serif;">
                                <tr>
                                    <th style="color: #727272; font-size: medium;"><i style="color: black;" class="fa-regular fa-calendar fa-lg"></i>&nbsp;&nbsp;Disponibilité: <?php echo $disponibilite = $activity->disponibilite; ?></th>
                                </tr>
                                <tr>
                                    <th style="color: #727272; font-size: medium;"> <i style="color: black;" class="fa-solid fa-plane-departure fa-lg"></i>&nbsp;&nbsp;<?php echo $lieu = $activity->lieu; ?></th>
                                </tr>
                                <tr>
                                    <th style="color: #727272; font-size: medium;"> <i style="color: black;" class="fa-solid fa-plane-arrival fa-lg"></i>&nbsp;&nbsp;<?php echo $lieu2 = $activity->lieu2; ?></th>
                                </tr>
                                <tr>
                                    <td style="font-size: large; font-weight: bolder; color: #6d071a; display: flex; flex-direction: row-reverse; border-top: none;"> <?php echo $prix = $activity->prix; ?>DH</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary" href="<?= base_url() ?>details/<?= str_replace(array(" ", "*"), "-", $activity->titre) . '-' . $activity->id ?>.html" title="more">VOIR LES DÉTAILS</a>
                </div>
            </div>
        </div>
        <?php } } // Fin de la boucle foreach ?>
    </div>
</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



 
                </ul>
            </div>
            <div class="section-padding" style="    display: flex;
    justify-content: center;"><a <?php if($page_name == "Activités"){ ?> class="active" <?php } ?>><a href="<?= base_url()?>allservices.html" style="color: #6d071a;font-weight: 600;text-decoration: none;">Savoir Plus  <i class="fa-solid fa-arrow-right fa-lg" style="color: #b53030;"></i></a>
    </div>
        </div></div>



        <!-- ForfiatOmra/--->
        
         <!-- omraRamadan -->
        <div  style="padding: 30px;">
       <center><b><h3  style="color: #6d071a;font-size: 35px;
    font-weight: 700;
    line-height: 36px;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    margin: 0 0 20px;">Omra RAMADAN 2024</h3></b></center> 
                    <center><p><b>Profitez-vous Omra Ramadan</b></p></center>
                    <br>
      <!-- <div class="container">              -->
      <?php if (empty($voyages)) { ?>
                    <div class="row">
                        <div class="col-12">
                            <h1 style="text-align:center; width: 90%;
    margin: 0 auto;">Aucune Forfiat Omra Ramadan  disponible pour le moment.</h1>
                        </div>
                    </div>
                <?php } else { 
               foreach ($voyages as $voyage){
                $offre = get_min_offre_byServiceId($voyage->id);
                $chambres_min_prix = get_min_priceofchambres_byServiceId($voyage->id);

                $first_image = get_one_image_byServiceId($voyage->id);
                ?>
                   
                   <div class="row">
    <div class="col-md-12">
        <div class="card mb-3 shadow-lg mb-5 bg-body rounded" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4 col-12">
                    <img src="<?= base_url() ?>assets/backend/services/<?= $first_image ?>" alt="<?= $voyage->titre; ?>" class="img-fluid rounded-start" height="100%"/>
                </div>
                <div class="col-md-5 col-12" style="padding-top: 20px;">
                    <div class="card-body">
                        <h3 class="card-title" title="<?= $voyage->titre; ?>"><a href="#" style="color: #6d071a; text-decoration: none;"><?= $voyage->titre; ?></a></h3>
                    </div>
                    <div class="card-body" style="font-size: medium; font-family: cursive; font-weight: normal;">
                        <p><i class="fa-regular fa-calendar fa-lg"></i> Disponibilité: <?php echo $disponibilite = $voyage->disponibilite; ?></p>
                        <div>
                            <p><i class="fa-solid fa-plane-departure fa-lg"></i> Depart: <?php echo $lieu = $voyage->lieu; ?></p>
                            <p><i class="fa-solid fa-plane-arrival fa-lg"></i> Arrivée: <?php echo $lieu2 = $voyage->lieu2; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-12  d-none d-lg-block" style="display: flex;
    flex-direction: row;
    padding-top: 50px;">
                        <div class="vertical-line"></div>
                    </div>
                <div class="col-md-2 col-12">
                    <div class="card-body" style="padding-top: 20px; text-align: center;">
                        <h3 class="card-title"> <?php if ($voyage->categorie_id != 1) { ?>
                            <span class="price"><em class="text-14px prix"><?php if ($offre != null) echo "<del>" . $voyage->prix . " Dh</del>  " . $offre->new_prix; else echo $voyage->prix; ?> Dh</em></span>
                        <?php } else { ?>
                            <span class="price"><em class="text-14px prix"><?php if ($offre != null) echo "<del>" . $chambres_min_prix . " Dh</del>  " . $offre->new_prix; else echo $chambres_min_prix; ?> Dh</em></span>
                        <?php } ?></h3>
                        <br>
                        <a class="btn btn-danger" role="button" href="<?= base_url() ?>details/<?= str_replace(array(" ", "*"), "-", $voyage->titre) . '-' . $voyage->id ?>.html" title="more"> Voir les Détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php } ;?>
    <?php } ;?>
    </div>  
     <!--fin de OmraRamadan  -->
<!-- hajj -->
<div  style="padding: 30px;">
       <center><b><h3  style="color: #6d071a;font-size: 35px;
    font-weight: 700;
    line-height: 36px;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    margin: 0 0 20px;">Hajj 2024</h3></b></center> 
                   
      <!-- <div class="container">              -->
   
      <?php if (empty($hotels)) { ?>
                    <div class="row">
                        <div class="col-12">
                            <h1 style="text-align:center; width: 90%;
    margin: 0 auto;">Aucune Offre Hajj disponible pour le moment.</h1>
                        </div>
                    </div>
                <?php } else { 
                foreach ($hotels as $hotel){
                  $offre = get_min_offre_byServiceId($hotel->id);
                  $chambres_min_prix = get_min_priceofchambres_byServiceId($hotel->id);

                    $first_image = get_one_image_byServiceId($hotel->id);
                 
                            ?>
                   
                    <style>
                    .lSSlideOuter .lSPager.lSGallery img{
                        height:163px !important;
                    }
                    </style>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3 shadow-lg mb-5 bg-body rounded" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url() ?>assets/backend/services/<?= $first_image ?>" alt="<?= $hotel->titre; ?>" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-5" style="padding-top: 50px;">
                    <div class="card-body">
                        <h3 class="card-title" title="<?= $hotel->titre; ?>"><a href="#" style="color: unset; text-decoration: none;"><?= $hotel->titre; ?></a></h3>
                    </div>
                </div>
                <div class="col-md-1 col-12 d-none d-lg-block" style="display: flex;
    flex-direction: row;
    padding-top: 50px;">
                    <div class="vertical-line"></div>
                </div>
                <div class="col-md-2" style="padding-top: 50px; padding-right: 15%;">
                    <div class="card-body" style="text-align: center;">
                        <a class="btn btn-danger" role="button" href="<?= base_url() ?>details/<?= str_replace(array(" ", "*"), "-", $hotel->titre) . '-' . $hotel->id ?>.html" title="more">Voir les Détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php } ;?>
    <?php } ;?>
  </div>  
<!-- finHajj -->
<div class="container">
    <div class="row"><div class="col-md-12"> <h2 style="text-align: center;color: #6d071a;">Pourquoi choisir Notre Agence<img  src="<?= base_url()?>assets/frontend/images/tariq makkah logo.png" style="height: 110px;" alt="">? </h2></div></div>
    <br>
    <br>
<div class="row">
<div class="col-md-4">
    
   <center><img  src="<?= base_url()?>assets/frontend/images/percent-150x150-1.png" style="height: 110px;" alt=""></center> 
<h4 style="text-align: center;"><b>Nos Formules</b></h4>
<p style="text-align: center;font-weight: 600;">Excellent service d'accompagnement, prix raisonnables, hôtel de qualité proche de la Terre Sainte.</p>
</div>
<div class="col-md-4">
    
   <center><img  src="<?= base_url()?>assets/frontend/images/group-150x150-1.png" style="height: 110px;" alt=""></center> 
<h4 style="text-align: center;"><b>Notre Équipe</b></h4>
<p style="text-align: center;font-weight: 600;">Tous nos circuits disposent d'une équipe permanente pour garantir un hébergement de qualité. Des guides touristiques locaux parlant français et arabe vous aident à rendre votre voyage inoubliable.</p>
</div>
<div class="col-md-4">
    
   <center><img  src="<?= base_url()?>assets/frontend/images/travel-150x150-1.png" style="height: 110px;" alt=""></center> 
<h4 style="text-align: center;"><b>Notre Expérience </b></h4>
<p style="text-align: center;font-weight: 600;">Bénéficiez de l'expérience de nos guides et managers locaux dans tout ce qui concerne le voyage (visites, offres, etc.)</p>
</div>
</div>
</div>
     <!-- info -->
     <div  style="padding: 30px;">

<div class="row">

  <div class="col-sm-7">
    <div class="card shadow-lg mb-5 bg-body rounded">
      <div class="card-body">
        <h3 class="card-title"><b>DATES IMPORTANTES (PRÉVISIONNELLES)</b></h3>
        <p class="card-text" style="font-family: Poppins, sans-serif;font-size:16px;color:gray">pour le HAJJ 2023 (1444)</p>
        <div class="card-body">
                            <p  onmouseover="changeIcon()" onmouseout="restoreIcon()"><i class="fa-solid fa-calendar-minus fa-lg"></i>&nbsp;<b style="color:grey;"> Jour d'Arafah</b> : 28 juin 2023 (09 Dhu Al Hijjah 1444)</p>
                           <br>
                           <p onmouseover="changeIcon2()" onmouseout="restoreIcon2()">
  <i class="fa-solid fa-calendar-minus fa-lg fa-calendar-minus2"></i>&nbsp;<b style="color:grey;"> Fête d'Aïd Al-Adha</b> : 29 juin 2023 (10 Dhu Al Hijjah 1444)
</p>
                        </div>
      </div>
    </div>
  </div>

<div class="col-md-5">
<!-- Version mobile -->
<div class="card shadow-lg mb-5 bg-body rounded">
  <div class="card-body" style="background-color: #e1e1e1;">
    <h3 class="card-title"><b>COMMENT RÉUSSIR SON HAJJ ?</b></h3>
    <!-- <p class="card-text">pour le HAJJ 2023 (1444)</p> -->
    <br>
    <div class="card-body">
      <p><i class="fa-solid fa-check-to-slot fa-lg"></i>&nbsp;Se préparer sereinement pour le Hajj</p>
      <br>
      <p><i class="fa-solid fa-check-to-slot fa-lg"></i>&nbsp;Se préparer mentalement et physiquement pour le Hajj</p>
      <br>
      <p><i class="fa-solid fa-check-to-slot fa-lg"></i>&nbsp;Se préparer matériellement pour le Hajj</p>
      <br>
      <!-- <p><button style="width: 100%;" type="button" class="btn btn-danger">Découvrir comment se préparer</button></p> -->
    </div>
  </div>
</div>

<!-- Version desktop -->
<div class="card shadow-lg mb-5 bg-body rounded d-none ">
  <div class="card-body" style="height: 300px; background-color: #e1e1e1;">
    <h3 class="card-title"><b>COMMENT RÉUSSIR SON HAJJ ?</b></h3>
    <!-- <p class="card-text">pour le HAJJ 2023 (1444)</p> -->
    <div class="card-body">
      <p><i class="fa-solid fa-check-to-slot fa-lg"></i>&nbsp;Se préparer sereinement pour le Hajj</p>
      <p><i class="fa-solid fa-check-to-slot fa-lg"></i>&nbsp;Se préparer mentalement et physiquement pour le Hajj</p>
      <p><i class="fa-solid fa-check-to-slot fa-lg"></i>&nbsp;Se préparer matériellement pour le Hajj</p>
      <!-- <p><button style="width: 100%;" type="button" class="btn btn-danger">Découvrir comment se préparer</button></p> -->
    </div>
  </div>
</div>
                                
</div>
</div>
</div>
<!--vidoethique-->
<!-- <div class="container"> -->
  <div class="row">
    <div class="col-md-12">
    <div class="map" style="margin-bottom: 0px;">
                        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.8342307044963!2d-8.008955184458474!3d31.63838884846965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee88970d88b9%3A0x3a668719565a78d7!2s2eme%20%C3%A9tage%2C%20App%20N%2C%202%20Av.%20Yacoub%20El%20Mansour%2C%20Marrakech%2040000!5e0!3m2!1sfr!2sma!4v1643040966721!5m2!1sfr!2sma" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    </div>
    </div>
  </div>
<!-- </div> -->






<!--/vidoethique-->
<script>
  // Fonction pour changer l'icône lors du survol du premier paragraphe
  function changeIcon() {
    const iconElement = document.querySelector('.fa-calendar-minus');
    if (iconElement) {
      iconElement.classList.remove('fa-calendar-minus');
      iconElement.classList.add('fa-calendar-check');
    }
  }

  // Fonction pour restaurer l'icône lorsqu'on quitte le survol du premier paragraphe
  function restoreIcon() {
    const iconElement = document.querySelector('.fa-calendar-check');
    if (iconElement) {
      iconElement.classList.remove('fa-calendar-check');
      iconElement.classList.add('fa-calendar-minus');
    }
  }
</script>

<script>
  // Fonction pour changer l'icône lors du survol du deuxième paragraphe
  function changeIcon2() {
    const iconElement2 = document.querySelector('.fa-calendar-minus2'); // Utilisez une classe différente pour le deuxième paragraphe
    if (iconElement2) {
      iconElement2.classList.remove('fa-calendar-minus2');
      iconElement2.classList.add('fa-calendar-check');
    }
  }

  // Fonction pour restaurer l'icône lorsqu'on quitte le survol du deuxième paragraphe
  function restoreIcon2() {
    const iconElement2 = document.querySelector('.fa-calendar-check2'); // Utilisez une classe différente pour le deuxième paragraphe
    if (iconElement2) {
      iconElement2.classList.remove('fa-calendar-check2');
      iconElement2.classList.add('fa-calendar-minus2');
    }
  }
</script>



     <!-- finInfo -->
</main>
<!--//main-->

<!--footer-->
<?php $this->load->view("footer"); ?>
<!---footer-->

<!--script-->
<?php $this->load->view("footerscript"); ?>
<!---//script-->

<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            $('.form').hide();
            $('#form1').show();
            $('.f-item:nth-child(1)').addClass('active');
            $('.f-item:nth-child(1) span').addClass('checked');

            $('#hero-gallery').lightSlider({
                gallery: true,
                item: 1,
                pager: false,
                gallery: false,
                slideMargin: 0,
                speed: 2000,
                pause: 1000,
                mode: 'fade',
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    $('#hero-gallery').removeClass('cS-hidden');
                }
            });
        });
    })(jQuery);
</script>
<script>
    $(document).ready(function() {
        // Initialisation du carrousel
        $('#carouselExampleControls').carousel();
    });
</script>

</body>

</html>