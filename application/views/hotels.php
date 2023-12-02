<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="fr">
<?php $this->load->view("headscript"); ?>

<body>
<!--header-->
<?php $this->load->view("header"); ?>
<!--//header-->
    
    <style>
    /* Style for category buttons */
    .category-buttons {
        text-align: center;
        margin-bottom: 20px;
    }

    .category-button {
        padding: 10px 20px;
        margin: 5px;
        background-color: #6d071a; /* Change to your preferred background color */
        color: #fff; /* Change to your preferred text color */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .category-button:hover {
        background-color: #fff; /* Change to your preferred hover color */
        color:#000;
        border:1px solid #000;
    }
</style>

    <!--main-->
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner" style="background-image:url('<?= base_url()?>assets/frontend/images/illuminated-minaret-symbolizes-spirituality-famous-blue-mosque-generated-by-ai.jpg');">
            <div class="container">
                <h3>Hajj</h3>
            </div>
        </div>
        <!-- PageBanner /- -->

        <div class=" no-padding popular-destination2-section" style ="background-color: white;">
            <div class="section-padding"></div>
            <div class="container"><div class="section-header">
                    <h3>Nos offres pour Hajj</h3>
                </div>
                <div  style="padding: 0px;">
     
                   
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
        <div class="col-md-12" style="padding-left: 0px;
    padding-right: 0px;">
            <div class="card mb-3 shadow-lg mb-5 bg-body rounded" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4 col-12">
                        <!-- <img src="<?= base_url()?>assets/frontend/images/Sheraton-Makkah.jpg" class="img-fluid rounded-start" alt="..."> -->
                        <img style=" !important;"src="<?= base_url()?>assets/backend/services/<?= $first_image ?>" alt="<?= $hotel->titre; ?>" class="img-fluid rounded-start" alt="..." />                 
                      </div>
                    <div class="col-md-5 col-12" >
                        <div class="card-body">
                            <!-- <h3 class="card-title"><a href="#" style="color:unset;text-decoration: none;">Hajj 2023 – 5* – Face au Haram</a></h3> -->
                            <h3 class="card-title" title="<?= $hotel->titre; ?>"><a href="#" style="color: black;
    text-decoration: none;
    background-color: white;font-size: large;"><?= $hotel->titre; ?></a></h3>
                        </div>
                        <!-- <div class="card-body">
                            <p><i class="fa-solid fa-clock fa-sm"></i> 15 nuits</p>
                            <p><i class="fa-regular fa-calendar fa-sm"></i> Disponibilité : 12 au 27 Avril 2023</p>
                        </div> -->
                    </div>
                    <div class="col-md-1 col-12  d-none d-md-block" style="display: flex;
    flex-direction: row;
    padding-top: 50px;">
                        <div class="vertical-line"></div>
                    </div>
                    <div class="col-md-2 col-12" style="padding-right: 15%;">
                        <div class="card-body" style="    padding-top: 60px;
    display: flex;
    text-align: center;
    padding-left: 50px;
    flex-wrap: nowrap;
    justify-content: space-around;
">
                        <a class="btn btn-danger" style="background-color: #6d071a;"  role="button" href="<?= base_url()?>details/<?= str_replace(array(" ","*"),"-",$hotel->titre ).'-'.$hotel->id ?>.html" title="more">Voir les Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ;?>
    <?php } ;?>
  </div> 
            </div>
            <div class="section-padding"></div>
        </div>
    </main>
    <!--//main-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/frontend/<?= base_url()?>assets/frontend/js/search.js"></script>

<script>
    $(document).ready(function() {
        // Initially, show all categories
        $('.category').show();

        // Button click handlers
        $('.category-button').click(function() {
            var categoryId = $(this).data('category');
            if (categoryId === 'all') {
                // Show all categories when "Afficher Tous" is clicked
                $('.category').show();
            } else {
                $('.category').hide();
                $('.category[data-category="' + categoryId + '"]').show();
            }
        });
    });
</script>

<!--footer-->
<?php $this->load->view("footer"); ?>
<!---footer-->

<!--script-->
<?php $this->load->view("footerscript"); ?>
<!---//script-->

<script type="text/javascript" src="<?= base_url()?>assets/frontend/<?= base_url()?>assets/frontend/js/search.js"></script>

</body>

</html>
