<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?> | CONTACT US</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/contactus.png" alt="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
            REACH US
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row innerContent">
        <div class="col-md-3">
          <?php include "location.php"; ?>
          <?php include "sidebarSlider.php"; ?>
        </div>
        <div class="col-md-9">
          
          <!--            <h1>Heading One</h1>
          <h2>Heading Two</h2> -->
          <!-- <h3>CONTACT US</h3> -->
          <div class='row'>
            <div class='col-md-6' >
              <h3 style="font-weight:bold;">Corporate Office</h3>
              <h4>GBennettiBiolabs Pvt. Ltd.</h4>
              <p>15<sup>th</sup> Floor, Dev Corpora, Pokhran Road No.1, Eastern Express Highway, Thane - 400601, Maharashtra
              </p>
              <p><span style="font-weight:bold;">Tel no:</span> 6700 4909</p>
              <p><span style="font-weight:bold;">Fax no:</span> 6700 4950</p>
              <p><span style="font-weight:bold;">Email:</span><a href='mailto:sales@gbennettilife.com'> sales@gbennettilife.com </a></p>
            </div>
            <div class='clearfix'></div>
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
              
              <thead>
                <tr class="table-heading">
                  <td colspan="2" clas>Emails</td>
                </tr>
              </thead>
              
              
              <tbody>
                <tr>
                  <td>International Business:</td>
                  <td><a href="mailto:ibd@gbennettilife.com">ibd@gbennettilife.com</a></td>
                </tr>
                <tr>
                  <td>India Marketing:</td>
                  <td><a href="mailto:indiasales@gbennettilife.com">indiasales@gbennettilife.com</a></td>
                </tr>
                <tr>
                  <td>Operations (R&D, Mfg, QAQC):</td>
                  <td><a href="mailto:operations@gbennettilife.com">operations@gbennettilife.com</a></td>
                </tr>
                <tr>
                  <td>Distribution: </td>
                  <td><a href="mailto:logistics@gbennettilife.com">logistics@gbennettilife.com</a></td>
                </tr>
                <tr>
                  <td>Projects:</td>
                  <td><a href="mailto:projects@gbennettilife.com">projects@gbennettilife.com</a></td>
                </tr>
                <tr>
                  <td>Human resource:</td>
                  <td><a href="mailto:projects@gbennettilife.com">projects@gbennettilife.com</a></td>
                </tr>
              </tbody>
            </table>
            
          </div>
          <br/>
          <br/>
          
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
