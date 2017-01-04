<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Quality Assurance</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX">
      <img src="images/quality-policy.png" alt="Quality Policy">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
             Quality benchmarks exacted with integrity    
            </h3>
          </div>
        </div>
      </div>
    </div>
    <?php include "news.php"; ?>
    <div class="container">
      <div class="row innerContent">
      <div class="col-md-3">
      <?php include "overview.php"; ?>
          <?php include "operation.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <h3 style="font-weight:bold;">Quality Policy</h3> 
        <div class="col-md-9">
          <img src="images/QualityPolicy.jpg" alt="QualityPolicy">
          <!-- <p>
            <ul>
              <li>  We shall remain unequivocally persistent in implementing our Global Quality philosophy at all levels.</li>
              <li>  We shall deliver products, which are real Value For Money (VFM)- Unmatched Quality at Reasonable Economy.  </li>
              <li>  We shall strive persuasively to ensure end-to-end quality in all our products and services around the world.   </li>
              <li>  We shall remain adhered to best-in-class global quality standards across the value chain at all locations (good manufacturing practices (GMP), good laboratory practices (GLP), good distribution practices (GDP), good clinical practice (GCP)). </li>
              <li>  AWe shall always excel in meeting and surpassing the expectations of our stakeholders (patient, customer and regulatory body) in Quality adherence. For this we partner to deliver:
                  <ul>
                    <li>Qualified responsible and trained staff </li>
                    <li>Efficient quality control systems compliance at every step</li>
                    <li>Integrity in actions and documentation </li>
                    <li>Continuous improvement in policy, procedures and quality indicator parameters that keep pace with the changing dynamics of the global environment.</li>
                  </ul>
              </li>
              <li>    We shall inculcate culture of unparalleled operational excellence that is marveled with world class Quality infrastructure led by information technology. </li>
              <li>  We shall provide necessary resources and tools uncompromisingly to ensure safety, reliability and efficacy of all our products wherever available worldwide. </li>

            </ul>
          </p> -->
<?php include "usp.php"; ?>
<a href="supply-chain.php" class="pull-right">Next - Supply Chain <i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
