<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | CULTURE</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX bannerimg-culture">
      <!-- <img src="images/culture.png" alt="culture"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container caption-center">
            <div class="caption-ovelay color-pomegranate caption-box">
            <h3>
                 Bliss, Brilliance &amp; Benevolence
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
        <h3>Career</h3>
          <!-- <h1>Heading One</h1>
          <h2>Heading Two</h2>-->
          <p class="text-center">          
          </p>
          <p>
           At GBennetti, we have a deep-rooted strong valued perpetuation of global culture that is embedded in our working philosophy, which every GBennetian follows as a guide and enacts. At the center stage of this culture, are 3Bs that govern all our corporate functions and drive our organizational performance:
            <br />
            </p>
            <p class="text-center">
           <strong class="brandGreenText"> 
                ‘Bliss, Brilliance &amp; Benevolence’
              </strong>
            </p>
            <p>
            This is reinstated as ‘People in their Bliss working together with Brilliance to achieve Benevolence reflected in deeds &amp; virtues of Living magnificence.”
            <br />
            <br />
            </p>
            <strong>The strategic corporate enactments that are governed by these values include:</strong>
            <p>
            <img src="images/strategic-corporate-enactments.png" alt="strategic-corporate-enactments">
              <!-- <ul>
                <li>  Be a Boon to Life. Dream your Vision. Drive your Progress.</li>
                <li>  Stay Blessed.  Innovate and Improve with Integrity. Remain Agile.</li>
                <li>  Be Benedicts. Collaborate opportunistic. Grow together</li>
                <li>  Accomplish Bliss. Embrace technology. Worship customer well being in warriorship.</li>
                <li>  Attain Brilliance. Encourage Intellectual property. Institute Intrapreneurship.</li>
                <li>  Achieve Benevolence. Every Life is precious.Be responsible guardians</li>
              </ul> -->
            </p>
            <p>
              GBennetti is on global hunt for talent. We know we grow with people. People with Knowledge, Aptitude, Skills, Attitude and Motivation(KASAM) match our profile. Those with determination and a strong sense of commitment to conquer the world are our torch bears. If you believe you can race against time, keep the resilience and balance the work with fun and deliverance, please send us your CV. We will get back to you if you have what it takes and match our requirements.
            </p>
            <br />
    
    
    <iframe src="uploadEmailForm/contactform.php" frameborder='0' width='100%' height='650' ></iframe>
      
      
<?php include "usp.php"; ?>
<a href="/" class="pull-right">Back to home Page<i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>

