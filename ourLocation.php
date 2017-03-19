<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?> | OUR LOCATION</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/ourLocation.jpg" alt="Our Location">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
            Our Locations
            </h3>
          </div>
        </div>
      </div>
    </div>
    <?php include "news.php"; ?>
    <div class="container">
      <div class="row innerContent">
      <div class="col-md-3">
          <?php include "location.php"; ?>
          <?php include "sidebarSlider.php"; ?>

        </div>
        <div class="col-md-9">
         <!-- <h1>Heading One</h1><h2>Heading Two</h2> -->
        <h3>GLOBAL-OFFICES</h3>
        <p>At GBennetti, we care to reach out to the world. We go the extra miles, because we believe our blessings for life have to reach everyone around the world and be attainable anytime and anywhere. After all, GBennetti is a boon for Life that is omnipotent, omnipresent and omniscient.</p>
        <br/>
        <div class='row'>
        <div class='col-md-6 col-xs-12'>
          <span style="font-weight:bold;"> GBENNETTI BIOLABS (P) LIMITED</span>
          <br/>
          <h3>Office </h3>
          <p>101,1st Floor, Poornima Darshan, 90 Feet Road, Mulund ( E ), Mumbai - 400 081.</p>
          <p><span style="font-weight:bold;">Phone: </span>022 - 25637573</p>
          <p><span style="font-weight:bold;">Email: </span><a href='mailto: indiasales@gbennettilife.com'>indiasales@gbennettilife.com</a></p>
           <!-- info@gbennettilife.com or sales@gbennettilife.com -->
        </div>

        <div class='col-md-6 col-xs-12' ></div>
        </div>
</div>
</div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>
