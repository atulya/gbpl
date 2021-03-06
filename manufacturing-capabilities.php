<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>  | Production Competencies</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX bannerimg-capabilities">
      <!-- <img src="images/manufacturing-capabilities.png" alt="manufacturing capabilities"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container caption-bottom">
            <div class="caption-ovelay color-blue caption-box">
              <h3>
               From Life Sciences to Biotechnology 
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
        <h3>Manufacturing Capabilities</h3>
          <p>
            State-of-the-art infrastructure and well equipped facilities for production of human health, animal care and herbal formulations
          </p>
          <ul>
          <li>
            Highest standard International accreditations for facilities

          </li></ul>
            <table class="table table-bordered table-striped">
              <tr class="table-heading">
                <td>Pharmaceutical certifications</td>
                <td>Herbal facilities certifications</td>
              </tr>
                <tr>
                  <td>WHO GMP</td>
                  <td>USFD</td>
                </tr>
                <tr>
                  <td>USFDA</td>
                  <td>NSF</td>
                </tr>
                <tr>
                  <td>PIC/S</td>
                  <td>Kosher</td>
                </tr>
                <tr>
                  <td>EuGMP</td>
                  <td>Halaal</td>
                </tr>
                <tr>
                  <td>MCC</td>
                  <td>ISO 22000:2005</td>
                </tr>
                <tr>
                  <td>WHO GENEVA</td>
                  <td>IS0 9000:2008</td>
                </tr>
                <tr>
                  <td>TGA</td>
                  <td>TGA</td>
                </tr>
                <tr>
                  <td>etc</td>
                  <td>etc</td>
                </tr>
              </table>
          </p>
          <ul>
          <li>
            Advanced analytical facilities to ensure end-to-end quality satisfaction at all locations 
          </li>
          </ul>
          
          <ul>
          <li>
            Large production capacities in wide range of dosage formulations catering to each of business areas
          </li>
          </ul>
          <table class="table table-bordered table-striped">
              <tr class="table-heading">
                <td>
                  Pharmaceutical facilities
                </td>
                <td>
                  Veterinary facilities
                </td>
                <td>
                  Herbal facilities
                </td>
              </tr>
              <tr>
                <td>Uncoated Tablets</td>
                <td>Chewable tablets</td>
                <td>Tablets</td>
              </tr>
              <tr>
                <td>Coated tablets</td>
                <td>Uncoated Tablets</td>
                <td>Capsules</td>
              </tr>
              <tr>
                <td>Capsules</td>
                <td>Coated Tablets</td>
                <td>Sofgels</td>
                </tr>
                <tr>
                <td>Ointments/creams</td>
                <td>Capsules HGC</td>
                <td>Liquid orals</td>
                </tr>
                <tr>
                <td>Syrup/suspension</td>
                <td>Soft gels</td>
                <td>Ointment/cream/gel</td>
                </tr>
                <tr>
                <td>Sachets</td>
                <td>Ointments/Creams</td>
                <td>Topical solutions</td>
                </tr>
                <tr>
                <td>Vials</td>
                <td>Liquid orals </td>
                <td>External shampoos</td>
                </tr>
                <tr>
                <td>Ampoules</td>
                <td>Sachets</td>
                <td>Powders</td>
                </tr>
                <tr>
                <td>PFS</td>
                <td>Spot on</td>
                <td>Packs</td>
                </tr>
                <tr>
                <td>Cartridges</td>
                <td>Vials</td>
                <td></td>
                </tr>
                <tr>
                <td>Nasal spray/drops</td>
                <td>Ampoules</td>
                <td></td>
                </tr>
                <tr>
                <td>DPI</td>
                <td>Topical liquids</td>
                <td></td>
                </tr>
                <tr>
                <td>MDI</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Propellants</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>MDFs</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Orodispersible tabs</td>
                <td></td>
                <td></td>
                </tr>
          </table>
          <ul>
          <li>
            Global manufacturing locations to meet regional market demands cost–effectively 
          </li></ul>
          <img src="images/mfg-capabilities.jpg" alt="mfg capabilities">
<?php include "usp.php"; ?>
<a href="quality-control-assurance.php" class="pull-right">Next - Quality Control Assurance <i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
