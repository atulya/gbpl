<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  |  Supply Chain </title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX bannerimg-supplychain">
      <!-- <img src="images/SupplyChain.png" alt="Supply Chain"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container">
            <div class="caption-ovelay blue caption-box">
              <h3>
               First Class On Site-On Time Delivery, Always
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
          <?php include "operation.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
        <h3>Supply Chain</h3>
          <!--           <h1>Heading One</h1>
          <h2>Heading Two</h2> -->
          <!-- <h3>GLOBAL QUALITY </h3> -->
            <p align="center" class="brandGreenText">
            <strong>“First Class On Site-On Time Delivery, Always”.</strong></p>
          <p>
           
            This is the global mandate on which GBennetti global distribution and supply chain operates. Whole network is built around flexibility, responsiveness and reliability and oscillates between the supply paradigm of stock-based model and Just- in- Time model depending upon the business dynamics. 
            <br />
            <br />
          </p>
          <p>
            Engineering from the best of the supply chain practices, GBennetti has designed Regional Distribution strategy and has partnered with best logistic supply partners establishing regional warehousing channels as its nodal points of inventory and delivery to meet global demands. As per the demand and supply chain statistics, products after packaging are stored under secure conditions in our automated, computer-controlled, high-rise warehouse centers. Each warehouse is temperature and humidity controlled. 
            <br/>
            <br/>
          </p>
          <p>
            All shipments are individually monitored at departure from the Regional Distribution Center until final proof-of-delivery at the destination with web-based tracking. The transport solutions are partnered with the most highly regarded first class logistic goods and service carriers who hold the same high-quality standards and provide end-to-end logistics solutions such as shipping, clearing and forwarding and so also stocking at environmentally monitored controlled conditions of storage as per defined guidelines. 
            <br/>
            <br/>
          </p>
          <div class="table table-bordered brandborder">
          <p>
            GBennetti is committed to GDP in its distribution model and a thorough incumbent of rigorous globally regulated supply chain standards including 
            <ul>
              <li>Consignment monitoring</li>
              <li>Controlled ambience transit < 25°C </li>
              <li>Cold storage conditions < 2 - 8°C</li>
              <li>Private label packaging and labeling under secure conditions</li>
              <li>Cost effective warehousing at diverse temperature conditions </li>

            </ul>
          </p>
          </div>
<?php include "usp.php"; ?>
<a href="regulatory-compliance.php" class="pull-right">Next - Regulatory Compliance <i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
