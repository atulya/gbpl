<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Our People</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX bannerimg-hr">
      <!-- <img src="images/human-resources.png" alt="human resources"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container caption-top">
            <div class="caption-ovelay color-black caption-box">
              <h3>
                Evolve. Empower. Excel.
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
          <?php include "weManifest.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
          <h3>Our People</h3>
          <!-- <h1>Heading One</h1>
          <h2>Heading Two</h2> -->
         
          <p>
            At the core of the GBennetti management philosophy, it’s the strongest belief that the human resource is its most valuable asset and central nervous system of its functionality. Recognizing that creative, caring and progressive workforce ensemble healthy happy corporate life, it’s our maxim to keep working environment friendly, informal and flexible. People are empowered to take decisions and ownership of their ideas in execution to perform responsibly for deliverance of results. Our various human welfare measures integrate every GBennetian family into a larger corporate family that cares responsibly and progresses continually. 
            </p>
            <p>
We are one Proud Gbennetti Family that has a unique ability to see-through vividly every audacious corporate goal and unequivocal capability to walk-through them with enormous sense of accountability and commitment. We reform, perform and transform every challenging situation into a meaningful consideration.  The result every GBennetian is a healthy happy powerful custodian of an illustrious Life serving as true bearers of GBennetti.
          </p>
<?php include "usp.php"; ?>
<a href="life-at-gbpl.php" class="pull-right">Next - Life at GBPL<i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
