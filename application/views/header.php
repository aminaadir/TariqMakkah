<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--header-->

<!--- //loading animation -->

<header class="header-main container-fluid no-padding">
        <!-- SidePanel -->
        <div id="slidepanel">
            <!-- Top Header -->
            <div class="header-top container-fluid no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <span>Bienvenue aux Agence Voyage TARIQ MAKKAH</span>
                        </div>
                        <!--<div class="col-md-6 col-sm-6 col-xs-6">-->
                        <!--    <ul>-->
                        <!--        <li><a href="https://fr-fr.facebook.com/ponctuelvoyages/" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                        <!--        <li><a href="https://twitter.com/ponctuelvoyages" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                        <!--        <li><a href="https://www.instagram.com/ponctuel.voyages/#" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
                        <!--        <li><a href="https://wa.me/212634718387" title="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <!-- Top Header /- -->
            <!-- Middle Header /- -->
            <div class="container header-middle">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo-block">
                            <a href="<?= base_url()?>/"><img src="<?= base_url()?>assets/frontend/images/tariq makkah logo.png" style="margin-top: -45px;" alt="logo" height="52" width="70" />
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12" style="display: flex;
    left: 40%;">
                        <div class="header-contactinfo-block">
                            <div class="contactinfo-box">
                                <span class="icon icon-Pointer"></span>
                                <p>Guéliz<span>Marrakech, Maroc</span></p>
                            </div>
                            <div class="contactinfo-box">
                                <span class="icon icon-Time"></span>
                                <p>lundi-vendredi : 9:00 AM to 7:00 PM<span>Dimanche : fermé</span></p>
                            </div>
                            <div class="contactinfo-box">
                                <span class="icon icon-Phone2"></span>
                                <p>
                                    <a href="tel:+212693939311" title="+212693939311">+212 6 93 93 93 11</a>
                                    <!--<a href="mailto:info@ponctuel-voyages.com" title="info@ponctuel-voyages.com">info@ponctuel-voyages.com</a>-->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Middle Header /- -->
        </div>
        <!-- SidePanel /- -->

        <div class="menu-block">
            <div class="container">
                <div class="row">
                    <!-- Navigation -->
                    <nav class="navbar ow-navigation" style="margin-bottom: 0;">
                        <div class="col-md-9" style="width:100%;">
                            <div class="navbar-header">
                                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                                <div class="logo-block" style="display:none;">
                            <a href="<?= base_url()?>/"><img src="<?= base_url()?>assets/frontend/images/tariq makkah logo.png" style="margin-top: -15px;" alt="logo" height="52" width="70" />
                        </div>
                            </div>
                            <nav class="navbar navbar-expand-md" style="    margin-bottom: -7px;
                             margin-top: -10px;
    padding-bottom: 0px;"> 
                            <div class="collapse navbar-collapse" id="navbar">
                                <ul class="nav navbar-nav " style="    display: flex;
    flex-direction: row;
    justify-content: space-evenly;gap: 50px;
    padding: 0px;">
    
                                    <li  class="nav-item ">
                                    <a <?php if($page_name == "Accueil"){ ?> class="active" <?php } ?>><a href="<?= base_url()?>/" class="nav-link" href="">Accueil</a>
                                    </li>
                                   <li  class="nav-item">
                                  
                                    
    <a <?php if($page_name == "Deals Hotels"){ ?> class="active" <?php } ?> href="<?= base_url()?>hotels.html"  class="nav-link" >Hajj</a>

  
</li>
                                    <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">Omra</a>
                                    <ul class="dropdown-menu" >
<li><a class="dropdown-item" <?php if($page_name == "Deals Hotels"){ ?> class="active" <?php } ?> href="<?= base_url()?>voyages-organises.html"  aria-labelledby="dropdownMenuLink"href="#">Omra Ramadan</a></li>
<li><a class="dropdown-item"  <?php if($page_name == "Activités"){ ?> class="active" <?php } ?> href="<?= base_url()?>allservices.html" href="#">Omra 2023-2024</a></li>

</ul>
                                </li>
                                   
                                    
                                    <li class="dropdown">
                                        <a <?php if($page_name == "about"){ ?> class="active" <?php } ?>><a href="<?= base_url()?>about.html" href="">à-propos</a>
                                    </li>
                                    <li class="dropdown">
                                    <a  <?php if($page_name == "Contact"){ ?> class="active" <?php } ?>><a href="<?= base_url()?>contact.html" href="">Contact</a>
                                    </li>      
                                </ul>
                            </div>
                            </nav>
                        </div>
                        <form method="post" action="<?=base_url()?>chercher">
                        <div class="input-group menusearch">
                            <input type="text" name="destination"placeholder="Rechercher" class="form-control">
                            <span class="input-group-btn">
							<button type="submit" title="Search" class="btn"><span class="icon_search" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </form>
                    </nav>
                    <!-- Navigation /- -->
                </div>
            </div>
        </div>
    </header>
