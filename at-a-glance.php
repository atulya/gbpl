<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Snap Shot</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX bannerimg-snapshot">
      <!-- <img src="images/snap-shot.png" alt="snap shot"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container">
            <div class="caption-ovelay blue caption-box">
              <h3>Multi-faceted, Research oriented &amp; global healthcare organization</h3> 
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
          <h3>At a glance</h3>
          <p>
            <ul><li>
            An integrated global healthcare organization focused on biotechnology, information technology and life sciences.</li>
            <!-- <li>
            Headquartered in the Heart of India-Mumbai and having representation globally in USA, Singapore, Dubai and China.</li> -->
            <li>
            Fast growing company with presence in 5+ continents, 20+ countries, and 400+ products</li>
            <li>
              One of widest therapeutic segments coverage catering to the consumer healthcare (the Mass) as well as Super specialty care (the Class)
            </li>
            <li>
              One of the largest dosage form bandwidth serving topical, oral, invasive as well intensive care products in diagnostic, curative as well as palliative healthcare.
            </li>
            <li>
              High quality, safe, cost-effective and reliable products and services for both acute and chronic customer segments
            </li>
            <li>
              World class research and manufacturing alliances across the globe
            </li>
            <li>
              Global supply partnerships ensuring value chain optimization and new generation innovation
            </li>
            <li>
              Excellent regulatory track record with multiple renowned accreditations such as WHO GMP, WHO Geneva, USFDA, EuGMP, TGA, PPB, TFDA etc
            </li>
            <li>Unbiased high performance culture -
              <ul>
                <li>Innovation in research,</li>
                <li>Excellence in operations,</li>
                <li>Promptness in delivery </li>
              </ul>
            </li>
          </ul>
        <?php include 'usp.php'; ?>
          <a href="corporate-philosophy.php" class="pull-right">Next - Vision &amp; Mission <i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
