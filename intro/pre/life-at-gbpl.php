<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Life at GBPL</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/life-at-gbpl.png" alt="lifea t gbpl">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
               Nurturing Leaders, Nourishing Excellence
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row innerContent">
      <div class="col-md-3">
          <?php include "weManifest.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
        <h3>Life at GBennetti</h3>
          <!-- <h1>Heading One</h1>
          <h2>Heading Two</h2> -->
          <p class="text-center">
           <strong>Nurturing Leaders, Nourishing Excellence</strong>
           </p>
          <p>
            GBennetti  is a listening learning organization having an integrated internal alignment of structures, competencies, communications, tasks, processes and the vision .We understand that best of the talent when appropriately nurtured in best of the environment transpire to become the global clan of masterminds or the leaders who shape organizational growth and future. Care is taken at every stage to ensure rightful and careful nourishing of people in transparent familial and empowering environment that creates a culture of intrapreneurship, mutual respect and harmony. 
            </p>
            <p>
GBennetti fosters proactive, committed, opportunistic and optimistic leadership and focus on keeping people intellectually stimulated and environmentally competitive by promoting performance, meritocracy, excellence, ownership and equity in our value propositions. We present huge growth opportunities for skill enhancement through rigorous training and development initiatives and demand high performance standards. With the right –fit remuneration policies and inspiring industry-best practices, we strive relentless to attract and retain the best talent, create captivating synergy and realize individual potential along the journey to delivering their best. 
</p><p>
There is strong emphasis on upholding of human values and this forms an integral part of our performance management system. 
          </p>
          
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
