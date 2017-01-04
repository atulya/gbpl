<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?> | Carreer</title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/3.jpg" alt="about us">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
            Be a living Bennett in true global sense 
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row innerContent">
        <div class="col-md-3">
          <?php include "carrermenu.php"; ?>
          <?php include "sidebarSlider.php"; ?>
        </div>
        <div class="col-md-9">
          <!--            <h1>Heading One</h1>
          <h2>Heading Two</h2> -->
          <!-- <h3>GLOBAL-OFFICES</h3> -->
          <p>
            GBennetti ison global hunt for talent. We know we grow with people. People with Knowledge, Aptitude, Skills, Attitude and Motivation(KASAM) match our profile. Those with determination and a strong sense of commitment to conquer the world are our torch bears. If you believe you can race against time, keep the resilience and balance the work with fun and deliverance, please send us your CV. We will get back to you if you have what it takes and match our requirements.
          </p>
          <p>
            <br/>
            <br/>
            <h3>Send your CV</h3>
            <div class="col-md-12 col-xs-12" style='margin-left: -80px;'>
              <div class="x_panel">
                <div class="x_title">
                  <!-- <h2>BUSINESS INQUIRY</h2> -->
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-3 col-xs-12">Full Name
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-3 col-xs-12">Qualification </label>
                      <div class="col-md-8 col-sm-9 col-xs-12">
                        <select class="form-control">
                          <option>Select Qualification</option>
                          <option>S.S.C</option>
                          <option>Intern</option>
                          <option>Diploma</option>
                          <option>ITI</option>
                          <option>Graduation</option>
                          <option>Post Graduation</option>
                          <option>Any Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-3 col-xs-12">Functional Area<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-9 col-xs-12">
                      <select class="form-control" required='true'>
                        <option>Choose option</option>
                        <option>Administration</option>
                        <option>Analytical Research& Development </option>
                        <option>Bulk Drug Production</option>
                        <option> Corporate Affairs </option>
                        <option>Engineering Services</option>
                        <option>ETP</option>
                        <option>Finance & Accounts</option>
                        <option>HR</option>
                        <option>Information Technology</option>
                        <option>Marketing</option>
                        <option>Pharma Production</option>
                        <option> Pharma R&D</option>
                        <option> Pilot Plant</option>
                        <option>Projects </option>
                        <option>Quality Assurance</option>
                        <option>Quality Control</option>
                        <option>Regulatory Affairs</option>
                        <option>Supply Chain Management</option>
                        <option>Ware House</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12">Experience
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12">Email
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-9 col-xs-12">
                      <input type="Email" class="form-control" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12">Contact No
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" placeholder="" maxlength="10">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">
                      Upload Resume
                      <span class="required">*
                      </span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      <label>*(Only .pdf / .doc files and size below 2M.B.)
                      </label>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Verification Code
                      <span class="required">*
                      </span>
                    </label>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <button type="button" class="btn  btn-primary btn-md">
                      <a href='' style='color:#fff;'>Reset Code
                      </a>
                      </button>
                    </div>
                  </div>
                  <br/>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">Cancel</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </p>
        
        
        
      </div>
      <div class="col-md-3">
        <a href="javascipt:void(0);"></a>
      </div>
    </div>
  </div>
  <?php include "footer.php"; ?>
  <?php include "assetJs.php"; ?>
