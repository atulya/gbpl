<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>| Zooker</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/animal-care-zooker.png" alt="animal care zooker">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
                Caressing companion to farm animals from head to toe
            </h3>
          </div>
        </div>
      </div>
    </div>
    <?php include "news.php"; ?>
    <?php include "Requestaquote.php"; ?>
    <div class="container">
      <div class="row innerContent">
      <div class="col-md-3">
      <?php include "overview.php"; ?>
        <?php include "weOffer.php"; ?>
        <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
          <?php include "zooker-list.php"; ?>
</div>
</div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>
