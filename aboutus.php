<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Overview</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
  <div class="headerAboutus">
      <?php include "header.php"; ?>
  </div>
    <div class="innerpageBanner">
      <img src="images/about-us-final.png" alt="about us">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
            Health, happiness &amp; well being for all
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
          <?php include "sidebarSlider.php"; ?>
        </div>
        <div class="col-md-9">
          <!-- <h1>Heading One</h1>
          <h2>Heading Two</h2>
          <h3>Heading Three</h3> -->
          <h3> Welcome to GBennetti group</h3>
          <p>
           Incorporated in 2012, GBennetti is inborn to bless the lives of billions around the world with our innovative cost-effective range of healthcare products and services that enliven the quality of Living and wellbeing.
            <br />
            <br />
            Giving a benevolent healing hand in burgeoning healthcare, GBennetti has evolved fundamentally as a specialized healthcare group focused on human health, animal care, herbal naturals and healthcare supplies as its primary business offerings. We are committed to deliver sustainable, affordable and reliable pedigree of innovative qualitative solutions for betterment of Life and the Living.  
            <br />
            <br />
            With global representation in Unites States -Texas, the group stands tall on its levers of cutting-edge science, operational brilliance, intellectual meritocracy, insightful technology, world-class capabilities and dynamic supply chain leveraging state-of-the art global capacities.
            <br />
            <br />
            Our cost-effective bio-comparative high quality generics help progressing human life and animal health in critical life-threatening conditions as well as Lifestyle conditions providing real value for money. Our bio-devices specialty products alleviate the pain and the sufferings by both diagnostic and treatment measures.  While herbal range offerings provide standardized nutritional value and enriched personal care in all its endeavors.
            <br />
            <br />
            Life is now a blessing-omnipotent, omnipresent and omniscient! Embrace. Expand.Enrich. 
          </p>
    </div>
    <div class="col-md-3">
      <a href="javascipt:void(0);"></a>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>

