<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Healthcare Corporation</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
  <div class="headerAboutus">
      <?php include "header.php"; ?>
  </div>
    <div class="innerpageBanner animated flipInX bannerimg-family">
<!--       <img src="images/Family.jpg" alt="about us"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container caption-bottom">
            <div class="caption-ovelay color-blue caption-box">
              <h3>
              Health, happiness &amp; well being for all
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
          <!-- <h1>Heading One</h1>
          <h2>Heading Two</h2>
          <h3>Heading Three</h3> -->
          <h3> Welcome to GBennetti group</h3>
          <p>
           GBennetti  is a global healthcare incorporation of a leading logistics corporation First Maritime Pvt Ltd(FMPL), India. Gbennetti Biolabs (P) Ltd (GBPL) is inborn to bless the lives of billions around the world with its innovative cost-effective range of healthcare products and services that enliven the quality of Living and wellbeing.
            <br />
            <br />
            Giving a benevolent healing hand in burgeoning healthcare, GBennetti has evolved fundamentally as a specialized healthcare group focused on human health, animal care, herbal naturals and healthcare or hospital supplies as its primary business offerings. We are committed to deliver sustainable affordable and reliable pedigree of innovative qualitative solutions for betterment of Life and the Living. Ourendeavor is to make healthcare experience affordable, accessible and all-inclusive for the global population. Health, Happiness and Wellbeing for all is our motto.  
            <br />
            <br />
            The group stands tall on its levers of cutting-edge science, operational brilliance, intellectual meritocracy, insightful technology, world-class capabilities and dynamic supply chain leveraging state-of-the art global capacities
            <br />
            <br />
            Our cost-effective bio-comparative high quality generics (Pharma generics to Bio generics range) help progressing human life and animal health in critical life-threatening conditions as well as Lifestyle conditions providing real value for money. Our healthcare supplies range, which includes bio-devices, alleviate the pain and the sufferings by both diagnostic and treatment measures.  While herbal range offerings provide standardized nutritional value and enriched personal care in all its endeavors.
            <br />
            <br />
            With the adaptation of science and technology by both qualitative and quantitativemeans, we work towards making the whole of healthcare a superior and favorable experience for everyone in the value chain- Patients/Consumers, Practioners/Doctors, Pharmacist/Retailers. 
            <br />
            <br />
            Life is now a blessing-omnipotent, omnipresent and omniscient!
            <br />
            <br />
            Embrace. Expand.Enrich. 
          </p>
          <?php include 'usp.php'; ?>
          <a href="snap-shot.php" class="pull-right">Next - Overview <i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
    <div class="col-md-3">
      <a href="javascipt:void(0);"></a>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>

