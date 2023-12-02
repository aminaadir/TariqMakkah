<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="fr">
<?php $this->load->view("headscript"); ?>
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
<body>
<!--header-->
<?php $this->load->view("header"); ?>
<!--//header-->
	
	<!--main-->
	<main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner"style="background-image:url('<?= base_url()?>assets/frontend/images/illuminated-minaret-symbolizes-spirituality-famous-blue-mosque-generated-by-ai.jpg');">
            <div class="container">
                <h3>Omra Ramadan</h3>
            </div>
        </div>
        <!-- PageBanner /- -->

        <div class=" no-padding popular-destination2-section" style="
        background-color: white;">
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header">
                    <h3 >Nos offers pour Omra ramadan</h3>
                </div>
                <div  style="padding: 0px;">
       <!-- <center><b><h3  style="color: #6d071a;font-size: 35px;
    font-weight: 700;
    line-height: 36px;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    margin: 0 0 20px;">Omra RAMADAN 2024</h3></b></center>  -->
                    <!-- <center><p><b>Profitez-vous Omra Ramadan</b></p></center> -->
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
                    <img style=" !important; height: 232px;"src="<?= base_url()?>assets/backend/services/<?= $first_image ?>" alt="<?= $voyage->titre; ?>" class="img-fluid rounded-start" alt="..." />                 
                     </div>
                    <div class="col-md-5 col-12" style="padding-top: 20px;">
                        <div class="card-body">
                       <h3 class="card-title" style="margin-top: 0px;" title="<?= $voyage->titre; ?>"><a href="#" style="color: black;
    text-decoration: none;
    background-color: white;
    font-size: initial;
    font-weight: bolder;
    padding-top: 0px;"><?= $voyage->titre; ?></a></h3>  
                      </div>
                        <div class="card-body" style="font-size: medium;
    font-family: cursive; font-weight: normal;">
                        <p><i class="fa-regular fa-calendar fa-lg"></i> Disponibilité: <?php echo $disponibilite= $voyage->disponibilite; ?></p>
                         <div>
                            <p><i class="fa-solid fa-plane-departure fa-lg"></i>  Depart: <?php echo $lieu= $voyage->lieu; ?></p>
                            <p><i class="fa-solid fa-plane-arrival fa-lg" ></i>  arrivee: <?php echo $lieu2= $voyage->lieu2; ?></p>
                            </div>
                             </div>
                    </div>
                    <div class="col-md-1 col-12  d-none d-md-block" style="display: flex;
    flex-direction: row;
    padding-top: 50px;">
                        <div class="vertical-line"></div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="card-body" style="padding-top: 20px; text-align: center;">
                            <h3 class="card-title  d-none d-md-block" style="font-weight:bolder;"> <?php if ($voyage->categorie_id != 1){ ?>
                                            <span class="price"><em class="text-14px prix"><?php if ($offre != null) echo "<del>".$voyage->prix."Dh</del>  ".$offre->new_prix; else echo $voyage->prix;  ?> Dh</em></span>
                                            <?php }else{ ?>
                                            <span class="price"><em class="text-14px prix"><?php if ($offre != null) echo "<del>".$chambres_min_prix."Dh</del>  ".$offre->new_prix; else echo $chambres_min_prix;  ?> Dh</em></span>
                                            <?php } ?></h3>
                            <br>
                           <a  class="btn btn-danger" role="button" href="<?= base_url()?>details/<?= str_replace(array(" ","*"),"-",$voyage->titre ).'-'.$voyage->id ?>.html" title="more"> Voir les Détails</a>
                                         
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