<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>| Promethus</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/promethusBanner.png" alt="promethus">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
              Critical care to chronic care therapy areas  
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row innerContent">
      <div class="col-md-3">
          <?php include "weOffer.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
        <div>
</div>
          <?php include "promethus-augustus.php"; ?>
