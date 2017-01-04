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
    <div class="innerpageBanner">
      <img src="images/quality-control-assurance.png" alt="Quality Assurance">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
            State -of–the-art -quality infrastructure 
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row innerContent">
      <div class="col-md-3">
          <?php include "operation.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
        <h3>Quality Capabilities Assurance</h3>
            <span>Capabilities:</span>
            <table class="table table-striped table-bordered dt-responsive nowrap bulk_action" cellspacing="0" width="100%">
              <thead>
                
              </thead>
              <tbody>
                <tr>
                  <td>
                  GMP Analytical chemistry-QC release
                  </td>
                  <td>Technologies
                  </td>
                </tr>
                <tr>
                  <td> Microbiological evaluation </td>
                  <td> HPLC-MS/MS </td>
                  </tr>
                  <tr>
                  <td> Extractables and leachables –Container testing </td>
                  <td>HPTLC, TLC  </td>
                </tr>
                <tr>
                  <td>Stability studies (ICH)& storage</td>
                  <td>FTIR, FTIP</td>
                  </tr>
                  <tr>
                  <td>Environmental monitoring (including utilities analysis-Air, Gas & water)</td>
                  <td>UV/VIS</td>                 
                </tr>
                <tr>
                  <td>Biologics safety testing-Endotoxin, Virus, Mycoplasma</td>
                  <td>GC, GC-MS</td>
                </tr>
                <tr>
                  <td>Electron microscopy studies</td>
                  <td>AAS</td>
                </tr>
                <tr>
                <td>qPCR assays & cell-based assays</td>
                <td>ASE</td>
                </tr>
                <tr>
                <td>Host cell impurity testing & identification</td>
                <td>X-ray fluorescence, TGA, DSC</td>
                </tr>
                <tr>
                <td>Plant/equipment validation</td>
                <td>Soxhlet</td>
                </tr>
              </tbody>
            </table>
          </p>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <?php include "assetJs.php"; ?>
