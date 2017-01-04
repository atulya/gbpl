<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>| Hemera - Bona Dias</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/hemera.png" alt="hemera">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
            Diagnostics to consumables
            </h3>
          </div>
        </div>
      </div>
    </div>
    <?php include "news.php"; ?>
    <?php include "Requestaquote.php"; ?>
    <div class="container">
      <div class="row innerContent">
        <div class="col-md-3">
        <?php include "overview.php"; ?>
          <?php include "weOffer.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
          <h3>
            Hemera - Bona Dias
          </h3>
          <div class="table-responsive">
            <ul id="nav_bar" class="nav nav-pills floatingnav" role="tablist" >
              <li role="presentation" class="active"><a href="#contrast-media-agents" aria-controls="medical-aids" role="tab" data-toggle="tab">Contrast media agents</a></li>
              <li role="presentation"><a href="#diagnostic-kits" aria-controls="diagnostic-kits" role="tab" data-toggle="tab">Diagnostic kits</a></li>
            </ul>
            <br>
            <div class="tab-content">
              
            <div role="tabpanel" class="tab-pane active" id="contrast-media-agents">
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr class="table-heading">
                      <td colspan="4">Contrast media agents</td>
                    </tr>
                    <tr>
                      <td data-sheets-value="{'1':3,'3':1}">1</td>
                      <td data-sheets-value="{'1':2,'2':'Diatrizoic acid and Meglumine'}">Diatrizoic acid and Meglumine</td>
                      <td data-sheets-value="{'1':2,'2':'60%,76%,65%'}">60%,76%,65%</td>
                      <td data-sheets-value="{'1':2,'2':'Injection'}">Injection</td>
                    </tr>
                    <tr>
                      <td data-sheets-value="{'1':3,'3':2}">2</td>
                      <td data-sheets-value="{'1':2,'2':'Gadopantatate Meglumine'}">Gadopantatate Meglumine</td>
                      <td data-sheets-value="{'1':2,'2':'469.01 mg/ mL'}">469.01 mg/ mL</td>
                      <td data-sheets-value="{'1':2,'2':'Injection'}">Injection</td>
                    </tr>
                    <tr>
                      <td data-sheets-value="{'1':3,'3':3}">3</td>
                      <td data-sheets-value="{'1':2,'2':'Diatrizoic acid and Meglumine'}">Diatrizoic acid and Meglumine</td>
                      <td data-sheets-value="{'1':2,'2':'370mg/ml'}">370mg/ml</td>
                      <td data-sheets-value="{'1':2,'2':'Oral solution'}">Oral solution</td>
                    </tr>
                    <tr>
                      <td data-sheets-value="{'1':3,'3':4}">4</td>
                      <td data-sheets-value="{'1':2,'2':'Iohexol'}">Iohexol</td>
                      <td data-sheets-value="{'1':2,'2':'300mg/350mg'}">300mg/350mg</td>
                      <td data-sheets-value="{'1':2,'2':'Injection'}">Injection</td>
                    </tr>
                    <tr>
                      <td data-sheets-value="{'1':3,'3':5}">5</td>
                      <td data-sheets-value="{'1':2,'2':'Iopamidol'}">Iopamidol</td>
                      <td data-sheets-value="{'1':2,'2':'300mg/370mg'}">300mg/370mg</td>
                      <td data-sheets-value="{'1':2,'2':'Injection'}">Injection</td>
                    </tr>
                    <tr>
                      <td data-sheets-value="{'1':3,'3':6}">6</td>
                      <td data-sheets-value="{'1':2,'2':'Regadenoson'}">Regadenoson</td>
                      <td data-sheets-value="{'1':2,'2':'0.4mg/5mL Vial'}">0.4mg/5mL Vial</td>
                      <td data-sheets-value="{'1':2,'2':'Injection'}">Injection</td>
                    </tr>
                  </tbody>
                </table>
  </div>

            <div role="tabpanel" class="tab-pane" id="diagnostic-kits">
              <table class="table table-bordered table-striped">
                <tbody>
                  <tr class="table-heading">
                    <td colspan="4">Diagnostic Kits</td>
                  </tr>
                  <tr class="table-heading">
                    <td>Sr.no.</td> 
                    <td width="288" data-sheets-value="{'1':2,'2':'Product'}">Product</td>
                    <td width="473" data-sheets-value="{'1':2,'2':'Specimen/Sensitivity'}">Specimen/Sensitivity</td>
                    <td width="164" data-sheets-value="{'1':2,'2':'Presentation'}">Presentation</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':1}">1</td>
                    <td data-sheets-value="{'1':2,'2':'Dengue IgG-IgM(HFRS) Rapid test'}">Dengue IgG-IgM(HFRS) Rapid test</td>
                    <td data-sheets-value="{'1':2,'2':'Whole blood, serum,plasma'}">Whole blood, serum,plasma</td>
                    <td data-sheets-value="{'1':2,'2':'Casette'}">Casette</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':2}">2</td>
                    <td data-sheets-value="{'1':2,'2':'HCV Hepatitis C Rapid test'}">HCV Hepatitis C Rapid test</td>
                    <td data-sheets-value="{'1':2,'2':'Whole blood, serum,plasma'}">Whole blood, serum,plasma</td>
                    <td data-sheets-value="{'1':2,'2':'Casette, strip'}">Casette, strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':3}">3</td>
                    <td data-sheets-value="{'1':2,'2':'HIV 1+2 Rapid test'}">HIV 1+2 Rapid test</td>
                    <td data-sheets-value="{'1':2,'2':'Whole blood, serum,plasma'}">Whole blood, serum,plasma</td>
                    <td data-sheets-value="{'1':2,'2':'Casette'}">Casette</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':4}">4</td>
                    <td data-sheets-value="{'1':2,'2':'Tuberculosis Test (TB test)'}">Tuberculosis Test (TB test)</td>
                    <td data-sheets-value="{'1':2,'2':'(Mycoplasma)Whole blood, serum,plasma'}">(Mycoplasma)Whole blood, serum,plasma</td>
                    <td data-sheets-value="{'1':2,'2':'Casette'}">Casette</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':5}">5</td>
                    <td data-sheets-value="{'1':2,'2':'Malaria Pf Antigen Rapid Test'}">Malaria Pf Antigen Rapid Test</td>
                    <td data-sheets-value="{'1':2,'2':'(Plasmodium falciparum)  human whole\u00a0blood, serum plasma.'}">(Plasmodium falciparum)  human whole blood, serum plasma.</td>
                    <td data-sheets-value="{'1':2,'2':'Casette, strip'}">Casette, strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':6}">6</td>
                    <td data-sheets-value="{'1':2,'2':'Malaria Pf &Pv Antibody Rapid Test'}">Malaria Pf &amp;Pv Antibody Rapid Test</td>
                    <td data-sheets-value="{'1':2,'2':'(IgG,IgM,IgA-Plasmodium falciparum, Plasmodium vivax)  human whole\u00a0blood, serum plasma.'}">(IgG,IgM,IgA-Plasmodium falciparum, Plasmodium vivax)  human whole blood, serum plasma.</td>
                    <td data-sheets-value="{'1':2,'2':'Casette, strip'}">Casette, strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':7}">7</td>
                    <td data-sheets-value="{'1':2,'2':'Malaria Pf &Pv Antigen Rapid Test'}">Malaria Pf &amp;Pv Antigen Rapid Test</td>
                    <td data-sheets-value="{'1':2,'2':'(Plasmodium falciparum, Plasmodium vivax)  human whole\u00a0blood, serum plasma.'}">(Plasmodium falciparum, Plasmodium vivax)  human whole blood, serum plasma.</td>
                    <td data-sheets-value="{'1':2,'2':'Casette, strip'}">Casette, strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':8}">8</td>
                    <td data-sheets-value="{'1':2,'2':'Narcotics test kit'}">Narcotics test kit</td>
                    <td data-sheets-value="{'1':2,'2':'Narcotics:   Amphetamine,Barbiturate ,Buprenorphine,Benzodiazepine,Cocaine,Ketamine,MDMA Ecstasy,Methamphetamine,\nMorphine,Methadone,\nPhencyclidine, THC Marijuana                  Sensitivity :                 1000ng/ml, 500mg/ml, 300ng/ml, 50ng/ml, 25ng/ml, 10ng/ml                               '}">Narcotics:   Amphetamine, Barbiturate, Buprenorphine, Benzodiazepine, Cocaine, Ketamine, MDMA Ecstasy, Methamphetamine,<br/>
                      Morphine, Methadone,<br/>
                      Phencyclidine, THC Marijuana                  Sensitivity :                 1000ng/ml, 500mg/ml, 300ng/ml, 50ng/ml, 25ng/ml, 10ng/ml </td>
                    <td data-sheets-value="{'1':2,'2':'Casette, strip'}">Casette, strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':9}">9</td>
                    <td data-sheets-value="{'1':2,'2':'Infectious diseases test kit'}">Infectious diseases test kit</td>
                    <td data-sheets-value="{'1':2,'2':'Infectious Diseases: \nAnti-Syphilis Test\nDengue IgG/IgM Rapid Test\nHepatitis A Virus- IgM Test \nHBsAb Hepatitis B Surface Antibody Test (Cassette only) \nHBsAg Ultra Hepatitis B Surface Antibody Test\nHepatitis C Virus Test\nHepatitis E Virus IgM Test\nHIV 1 and 2 Test (Cassette only) \nMalaria Pf Antigen Rapid Test \nMalaria Pf/Pv Antibody Rapid Test \nMalaria Pf/Pv Antigen Rapid Test \nTuberculosis Test'}">Infectious Diseases: <br/>
                      Anti-Syphilis Test<br/>
                      Dengue IgG/IgM Rapid Test<br/>
                      Hepatitis A Virus- IgM Test <br/>
                      HBsAb Hepatitis B Surface Antibody Test (Cassette only) <br/>
                      HBsAg Ultra Hepatitis B Surface Antibody Test<br/>
                      Hepatitis C Virus Test<br/>
                      Hepatitis E Virus IgM Test<br/>
                      HIV 1 and 2 Test (Cassette only) <br/>
                      Malaria Pf Antigen Rapid Test <br/>
                      Malaria Pf/Pv Antibody Rapid Test <br/>
                      Malaria Pf/Pv Antigen Rapid Test <br/>
                      Tuberculosis Test</td>
                    <td data-sheets-value="{'1':2,'2':'Complete set, Casette, Strip'}">Complete set, Casette, Strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':10}">10</td>
                    <td data-sheets-value="{'1':2,'2':'HBV Hepatitis B rapid test kit'}">HBV Hepatitis B rapid test kit</td>
                    <td data-sheets-value="{'1':2,'2':'(for both Antigen and Antibody)                      Whole blood, serum,plasma'}">(for both Antigen and Antibody)                      Whole blood, serum,plasma</td>
                    <td data-sheets-value="{'1':2,'2':'Casette,Strip'}">Casette,Strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':11}">11</td>
                    <td data-sheets-value="{'1':2,'2':'Syphilis rapid test kit'}">Syphilis rapid test kit</td>
                    <td data-sheets-value="{'1':2,'2':'Whole blood, serum,plasma'}">Whole blood, serum,plasma</td>
                    <td data-sheets-value="{'1':2,'2':'Casette,Strip'}">Casette,Strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':12}">12</td>
                    <td data-sheets-value="{'1':2,'2':'Prostate-Specific-Antigen'}">Prostate-Specific-Antigen</td>
                    <td data-sheets-value="{'1':2,'2':'Serum,plasma       Sensitivity-4ng/ml'}">Serum,plasma       Sensitivity-4ng/ml</td>
                    <td data-sheets-value="{'1':2,'2':'Casette,Strip'}">Casette,Strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':13}">13</td>
                    <td data-sheets-value="{'1':2,'2':'TCAs test'}">TCAs test</td>
                    <td data-sheets-value="{'1':2,'2':'Urine.                     Sensitivity-1000ng/ml'}">Urine.                     Sensitivity-1000ng/ml</td>
                    <td data-sheets-value="{'1':2,'2':'Casette,Strip'}">Casette,Strip</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':14}">14</td>
                    <td data-sheets-value="{'1':2,'2':'Pregnancy detection kits'}">Pregnancy detection kits</td>
                    <td data-sheets-value="{'1':2,'2':'(HCG test for pregnancy and LH test for ovulation) Urine,Serum'}">(HCG test for pregnancy and LH test for ovulation) Urine,Serum</td>
                    <td data-sheets-value="{'1':2,'2':'Casette,Strip,midstream'}">Casette,Strip,midstream</td>
                  </tr>
                </tbody>
              </table>
              </div>
              
            
</div></div>
            </div>
          </div>
        </div>
      </div>
      
      <?php include "footer.php"; ?>
      <?php include "assetJs.php"; ?>
<script type="text/javascript" src="js/custom.js"></script>
