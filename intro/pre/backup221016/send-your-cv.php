<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Send your cv</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/corporate-overview1.png" alt="about us">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
              Career
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row innerContent">
        <div class="col-md-3">
          <?php include "carrermenu.php"; ?>
        </div>
        <div class="col-md-8">
          <!-- <h1>Heading One</h1>
          <h2>Heading Two</h2>-->
          
          <p>
           GBennetti is on global hunt for talent. We know we grow with people. People with Knowledge, Aptitude, Skills, Attitude and Motivation(KASAM) match our profile. Those with determination and a strong sense of commitment to conquer the world are our torch bears. If you believe you can race against time, keep the resilience and balance the work with fun and deliverance, please send us your CV. We will get back to you if you have what it takes and match our requirements. 
          <br />
            </p>
            <p class="text-center">
              <strong>
                Send your CV
              </strong>
            </p>
          </div>
  </div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>

