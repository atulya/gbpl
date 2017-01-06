<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Corporate identity</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX bannerimg-brand-logography">
      <!-- <img src="images/brand-logography.png" alt="corporate-identity"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container">
            <div class="caption-ovelay blue caption-box">
              <h3>
              For lustrous and illustrious Life
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "news.php"; ?>
    <div class="container">
      <div class="row innerContent">
      <div class="col-md-3">
          <?php include "overview.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
            <h3>Brand Logography</h3>
          <div style="border: 1px solid #005995;">
            <img src="images/Poem_Brand_Logography.jpg" alt="">
          </div>
           <?php include "usp.php"; ?>
    <a href="social-responsiblity.php" class="pull-right">Next - Social Responsiblity<i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
