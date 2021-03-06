<form action="controller.php" method="POST" class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select name="department" class="form-control">
                        <option value="">Choose option</option>
                        <option value="India Business">India Business</option>
                        <option value="International Business">International Business</option>
                        <option value="Manufacturing">Manufacturing</option>
                      <option>R &amp; D</option>
                      <option>Contract Research</option>
                      <option>Co-Development</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject:
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select name="subject" class="form-control" required='true'>
                      <option>Choose option</option>
                      <option>Marketing</option>
                      <option>Distribution</option>
                      <option>Trade Supply</option>
                      <option>Project Management</option>
                      <option>Contract Research</option>
                      <option>Products</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Titile:
                    <!-- <span class="required">*</span> -->
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select name="title" class="form-control" required='true'>
                      <option>Mr.</option>
                      <option>Mrs.</option>
                      <option>Miss.</option>
                      <option>Ms.</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="name" required="required" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Email
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="email" required="required" type="Email" class="form-control" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="phone" required="required" type="text" class="form-control" placeholder="" maxlength="10">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Cell No
                    <!-- <span class="required">*</span> -->
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="cellno" type="text" class="form-control" placeholder="" maxlength="10">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Address
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="address" type="text" class="form-control" placeholder=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select name="country" class="select2_single form-control" tabindex="-1">
                      <option></option>
                      <option>Afghanistan</option>
                      <option>Aland Islands</option>
                      <option>Albania</option>
                      <option>Algeria</option>
                      <option>American Samoa</option>
                      <option>Andorra</option>
                      <option>Angola</option>
                      <option>Anguilla</option>
                      <option>Antarctica</option>
                      <option>Antigua and Barbuda</option>
                      <option>Argentina</option>
                      <option>Armenia</option>
                      <option>Aruba</option>
                      <option>Australia</option>
                      <option>Austria</option>
                      <option>Azerbaijan</option>
                      <option>Bahamas</option>
                      <option>Bahrain</option>
                      <option>Bangladesh</option>
                      <option>Barbados</option>
                      <option>Belarus</option>
                      <option>Belgium</option>
                      <option>Belize</option>
                      <option>Benin</option>
                      <option>Bermuda</option>
                      <option>Bhutan</option>
                      <option>Bolivia</option>
                      <option>Bosnia and Herzegovina</option>
                      <option>Botswana</option>
                      <option>Brazil</option>
                      <option>British Indian Ocean Territory</option>
                      <option>Brunei Darussalam</option>
                      <option>Bulgaria</option>
                      <option>Burkina Faso</option>
                      <option>Burundi</option>
                      <option>Cambodia</option>
                      <option>Cameroon</option>
                      <option>Canada</option>
                      <option>Cape Verde</option>
                      <option>Cayman Islands</option>
                      <option>Central African Republic</option>
                      <option>Chad</option>
                      <option>Chile</option>
                      <option>China</option>
                      <option>Christmas Island</option>
                      <option>Cocos (Keeling) Islands</option>
                      <option>Colombia</option>
                      <option>Comoros</option>
                      <option>Congo</option>
                      <option>Congo, the Democratic Republic</option>
                      <option>Cook Islands</option>
                      <option>Costa Rica</option>
                      <option>Cote d'Ivoire</option>
                      <option>Croatia</option>
                      <option>Cuba</option>
                      <option>Cyprus</option>
                      <option>Czech Republic</option>
                      <option>Denmark</option>
                      <option>Djibouti</option>
                      <option>Dominica</option>
                      <option>Dominican Republic</option>
                      <option>Ecuador</option>
                      <option>Egypt</option>
                      <option>El Salvador</option>
                      <option>Equatorial Guinea</option>
                      <option>Eritrea</option>
                      <option>Estonia</option>
                      <option>Ethiopia</option>
                      <option>Falkland Islands (Malvinas)</option>
                      <option>Faroe Islands</option>
                      <option>
                      Fiji</option>
                      <option>
                      Finland</option>
                      <option>
                        France
                      </option>
                      <option>
                      French Guiana</option>
                      <option>
                        French Polynesia
                      </option>
                      <option>French </option>
                      <option>Southern Territories </option>
                      <option>Gabon </option>
                      <option>Gambia</option>
                      <option>Georgia </option>
                      <option>Germany </option>
                      
                      
                      
                      
                      
                      <option>Ghana</option>
                      <option>Gibraltar</option>
                      <option>Greece</option>
                      <option>Greenland</option>
                      <option>Grenada</option>
                      <option>Guadeloupe</option>
                      <option>Guam</option>
                      <option>Guatemala</option>
                      <option>Guernsey</option>
                      <option>Guinea</option>
                      <option>Guinea-Bissau</option>
                      <option>Guyana</option>
                      <option>Haiti</option>
                      <option>Honduras</option>
                      <option>Hong Kong</option>
                      <option>Hungary</option>
                      <option>Iceland</option>
                      <option>India</option>
                      <option>Indonesia</option>
                      <option>Iran, Islamic Republic</option>
                      <option>Iraq</option>
                      <option>Ireland</option>
                      <option>Isle of Man</option>
                      <option>Israel</option>
                      <option>Italy</option>
                      <option>Jamaica</option>
                      <option>Japan</option>
                      <option>Jersey</option>
                      <option>Jordan</option>
                      <option>Kazakhstan</option>
                      <option>Kenya</option>
                      <option>Kiribati</option>
                      <option>Korea, Democratic People's Republic</option>
                      <option>Korea, Republic</option>
                      <option>Kuwait</option>
                      <option>Kyrgyzstan</option>
                      <option>Lao People's Democratic Republic</option>
                      <option>Latvia</option>
                      <option>Lebanon</option>
                      <option>Lesotho</option>
                      <option>Liberia</option>
                      <option>Libyan Arab Jamahiriya</option>
                      <option>Liechtenstein</option>
                      <option>Lithuania</option>
                      <option>Luxembourg</option>
                      <option>Macao</option>
                      <option>Macedonia, the former Yugoslav Republic</option>
                      <option>Madagascar</option>
                      <option>Malawi</option>
                      <option>Malaysia</option>
                      <option>Maldives</option>
                      <option>Mali</option>
                      <option>Malta</option>
                      <option>Marshall Islands</option>
                      <option>Martinique</option>
                      <option>Mauritania</option>
                      <option>Mauritius</option>
                      <option>Mayotte</option>
                      <option>Mexico</option>
                      <option>Micronesia, Federated States of</option>
                      <option>Moldova, Republic</option>
                      <option>Monaco</option>
                      <option>Mongolia</option>
                      <option>Montserrat</option>
                      <option>Morocco</option>
                      <option>Mozambique</option>
                      <option>Myanmar</option>
                      <option>Namibia</option>
                      <option>Nauru</option>
                      <option>Nepal</option>
                      <option>Netherlands</option>
                      <option>New Caledonia</option>
                      <option>New Zealand</option>
                      <option>Nicaragua</option>
                      <option>Niger</option>
                      <option>Nigeria</option>
                      <option>Niue</option>
                      <option>Norfolk Island</option>
                      <option>Northern Mariana Islands</option>
                      <option>Norway</option>
                      <option>Oman</option>
                      <option>Pakistan</option>
                      <option>Palau</option>
                      <option>Palestinian Territory, Occupied</option>
                      <option>Panama</option>
                      <option>Papua New Guinea</option>
                      <option>Paraguay</option>
                      <option>Peru</option>
                      <option>Philippines</option>
                      <option>Poland</option>
                      <option>Portugal</option>
                      <option>Puerto Rico</option>
                      <option>Qatar</option>
                      <option>Réunion</option>
                      <option>Romania</option>
                      <option>Russian Federation</option>
                      <option>Rwanda</option>
                      <option>Saint Helena</option>
                      <option>Saint Kitts and Nevis</option>
                      <option>Saint Lucia</option>
                      <option>Saint Pierre and Miquelon</option>
                      <option>Saint Vincent and the Grenadines</option>
                      <option>Samoa</option>
                      <option>San Marino</option>
                      <option>Sao Tome and Principe</option>
                      <option>Saudi Arabia</option>
                      <option>Senegal</option>
                      <option>Seychelles</option>
                      <option>Sierra Leone</option>
                      <option>Singapore</option>
                      <option>Slovakia</option>
                      <option>Slovenia</option>
                      <option>Solomon Islands</option>
                      <option>Somalia</option>
                      <option>South Africa</option>
                      <option>South Georgia and the South Sandwich</option>
                      <option>Islands</option>
                       <option>Spain</option>
                      <option>Sri Lanka</option>
                      <option>Sudan</option>
                      <option>Suriname</option>
                      <option>Svalbard and Jan Mayen</option>
                      <option>Swaziland</option>
                      <option>Sweden</option>
                      <option>Switzerland</option>
                      <option>Syrian Arab Republic</option>
                      <option>Taiwan, Province of China</option>
                      <option>Tajikistan</option>
                      <option>Tanzania, United Republic</option>
                      <option>Thailand</option>
                      <option>Timor-Leste</option>
                      <option>Togo</option>
                      <option>Tokelau</option>
                      <option>Tonga</option>
                      <option>Trinidad and Tobago</option>
                       <option>Tunisia</option>
                      <option>Turkey</option>
                      <option>Turkmenistan</option>
                      <option>Turks and Caicos Islands</option>
                      <option>Tuvalu</option>
                      <option>Uganda</option>
                      <option>Ukraine</option>
                      <option>United Arab Emirates</option>
                      <option>United Kingdom</option>
                       <option>United States</option>
                      <option>United States Minor Outlying Islands</option>
                      <option>Uruguay</option>
                      <option>Uzbekistan</option>
                      <option>Vanuatu</option>
                      <option>Venezuela</option>
                      <option>Viet Nam</option>
                      <option>Virgin Islands, British</option>
                      <option>Virgin Islands, U.S.</option>
                       <option>Wallis and Futuna</option>
                      <option>Western Sahara</option>
                      <option>Yemen</option>
                      <option>Zambia</option>
                      <option>Zimbabwe</option>              
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">City
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="city" required="required" type="text" class="form-control" placeholder="">
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pincode
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="pincode" required="required" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">State
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="state" required="required" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Company Name
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="company_name" required="required" type="text" class="form-control" placeholder="">
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Business Area
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="area" type="text" class="form-control" placeholder="">
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Products of Interest
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input name="interest" required="required" type="text" class="form-control" placeholder="">
                  </div>
                </div>
				
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Requirement:
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="requirement" type="text" class="form-control" placeholder=""></textarea>
                  </div>
                </div>
				<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Enquiry Comments:
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="enquiry_comments" type="text" class="form-control" placeholder=""></textarea>
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>