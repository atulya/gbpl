<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>| Bona ventura</title>
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
    <div class="container">
      <div class="row innerContent">
        <div class="col-md-3">
          <?php include "weOffer.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
          <h3>
            Hemera - Bona Ventura
          </h3>
          <div class="table-responsive">
            <ul id="nav_bar" class="nav nav-pills floatingnav" role="tablist" >
              <li role="presentation" class="active"><a href="#medical-aids" aria-controls="medical-aids" role="tab" data-toggle="tab">Medical Aids</a></li>
              <li role="presentation"><a href="#medical-consumables-surgicals" aria-controls="medical-consumables-surgicals" role="tab" data-toggle="tab">Medical Consumables/Surgicals</a></li>
            </ul>
            <br>
            <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="medical-aids">
              <table class="table table-bordered table-striped">
                <tbody>
			            <tr class="table-heading">
                    <td>Sr.No.</td>
                    <td>Product</td>
                    <td>Specification</td>
                    <td>Presentation/Packing</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':1}">1</td>
                    <td data-sheets-value="{'1':2,'2':'Calcium sulphate hemihydrate'}">Calcium sulphate hemihydrate</td>
                    <td data-sheets-value="{'1':2,'2':'Bone graft material'}">Bone graft material</td>
                    <td data-sheets-value="{'1':2,'2':'Combikit with or without fast setting solution'}">Combikit with or without fast setting solution</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':2}">2</td>
                    <td data-sheets-value="{'1':2,'2':'Nanocrystalline calcium sulphate'}">Nanocrystalline calcium sulphate</td>
                    <td data-sheets-value="{'1':2,'2':'Bone graft material'}">Bone graft material</td>
                    <td data-sheets-value="{'1':2,'2':'Combikit with regular setting solution'}">Combikit with regular setting solution</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':3}">3</td>
                    <td data-sheets-value="{'1':2,'2':'Gentamicin  implant'}">Gentamicin  implant</td>
                    <td data-sheets-value="{'1':2,'2':'Surgical Aid'}">Surgical Aid</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':4}">4</td>
                    <td data-sheets-value="{'1':2,'2':'Bupivacaine bioresorbable implant'}">Bupivacaine bioresorbable implant</td>
                    <td data-sheets-value="{'1':2,'2':'Surgical Aid'}">Surgical Aid</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':5}">5</td>
                    <td data-sheets-value="{'1':2,'2':'Surgical adhesion barrier'}">Surgical adhesion barrier</td>
                    <td data-sheets-value="{'1':2,'2':'Suture'}">Suture</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':6}">6</td>
                    <td data-sheets-value="{'1':2,'2':'Surgical haemostat'}">Surgical haemostat</td>
                    <td data-sheets-value="{'1':2,'2':'Suture'}">Suture</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':7}">7</td>
                    <td data-sheets-value="{'1':2,'2':'Dental wound adhesion'}">Dental wound adhesion</td>
                    <td data-sheets-value="{'1':2,'2':'Suture'}">Suture</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':8}">8</td>
                    <td data-sheets-value="{'1':2,'2':'Dura repair device'}">Dura repair device</td>
                    <td data-sheets-value="{'1':2,'2':'Suture'}">Suture</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':9}">9</td>
                    <td data-sheets-value="{'1':2,'2':'Dermal wound care'}">Dermal wound care</td>
                    <td data-sheets-value="{'1':2,'2':'Surgical Aid'}">Surgical Aid</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':10}">10</td>
                    <td data-sheets-value="{'1':2,'2':'Indomethacin'}">Indomethacin</td>
                    <td data-sheets-value="{'1':2,'2':'Plaster(TDDS)'}">Plaster(TDDS)</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':11}">11</td>
                    <td data-sheets-value="{'1':2,'2':'Ketoprofen'}">Ketoprofen</td>
                    <td data-sheets-value="{'1':2,'2':'Plaster(TDDS)'}">Plaster(TDDS)</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':12}">12</td>
                    <td data-sheets-value="{'1':2,'2':'Diclofenac diethyl ammonium'}">Diclofenac diethyl ammonium</td>
                    <td data-sheets-value="{'1':2,'2':'Plaster(TDDS)'}">Plaster(TDDS)</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':13}">13</td>
                    <td data-sheets-value="{'1':2,'2':'Tolubuterol'}">Tolubuterol</td>
                    <td data-sheets-value="{'1':2,'2':'Patch(TDDS)'}">Patch(TDDS)</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':14}">14</td>
                    <td data-sheets-value="{'1':2,'2':'Fentanyl'}">Fentanyl</td>
                    <td data-sheets-value="{'1':2,'2':'Patch(TDDS)'}">Patch(TDDS)</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':15}">15</td>
                    <td data-sheets-value="{'1':2,'2':'Rivastigmine'}">Rivastigmine</td>
                    <td data-sheets-value="{'1':2,'2':'Patch(TDDS)'}">Patch(TDDS)</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              </div>

            <div role="tabpanel" class="tab-pane" id="medical-consumables-surgicals">
			       <table class="table table-bordered table-striped">
                <tbody>
				          <tr class="table-heading">
                    <td>Sr.No.</td>
                    <td>Product</td>
                    <td>Specification</td>
                    <td>Presentation/Packing</td>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':1}">1</td>
                    <td data-sheets-value="{'1':2,'2':'Needles (Hypodermic & Spinal)'}">Needles (Hypodermic &amp; Spinal)</td>
                    <td data-sheets-value="{'1':2,'2':'Hypodermic needle: 16G, 18G, 19G, 20G, 21G, 22G, 23G, 24G, 25G, 26G, 27G\n Spinal needle: 90mm\nLength : 1/2\u201d, 5/8\u201d, 3/4\u201d, 1\u201d, 1 1/4\u201d, 1 1/2\u201d                   Sterile & SS make'}">Hypodermic needle: 16G, 18G, 19G, 20G, 21G, 22G, 23G, 24G, 25G, 26G, 27G<br/>
                      Spinal needle: 90mm<br/>
                      Length : 1/2”, 5/8”, 3/4”, 1”, 1 1/4”, 1 1/2”                   Sterile &amp; SS make</td>
                    <td data-sheets-value="{'1':2,'2':'1 piece/blister pack'}">1 piece/blister pack</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':2}">2</td>
                    <td data-sheets-value="{'1':2,'2':'Adhesive bandage'}">Adhesive bandage</td>
                    <td data-sheets-value="{'1':2,'2':'Antiseptic or Antiseptic-free  Latex-free Adhesive With or without Ventilation Holes\nSterile, waterproof PU/PE/PVC/EVA/ flexible cotton\nStrip- 40x20mm, 56x19mm, 76x19mm, 70x18mm, 75x25mm, 76x25mm\nRound- 22mm, 25mm, 30mm\nSquare-38x38mm\nH-shape- 76x38mm\nColor: skin, transparent'}">Antiseptic or Antiseptic-free  Latex-free Adhesive With or without Ventilation Holes<br/>
                      Sterile, waterproof PU/PE/PVC/EVA/ flexible cotton<br/>
                      Strip- 40x20mm, 56x19mm, 76x19mm, 70x18mm, 75x25mm, 76x25mm<br/>
                      Round- 22mm, 25mm, 30mm<br/>
                      Square-38x38mm<br/>
                      H-shape- 76x38mm<br/>
                      Color: skin, transparent</td>
                    <td data-sheets-value="{'1':2,'2':'30/ 50/100 pieces/box\n'}">30/ 50/100 pieces/box<br/></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':3}">3</td>
                    <td data-sheets-value="{'1':2,'2':'Alcohol wipes/prep pads'}">Alcohol wipes/prep pads</td>
                    <td data-sheets-value="{'1':2,'2':'Thick and Soft Non-woven Spunlace, Multi-layer aluminum foil pack       Size: 30x30mm ; 30x60mm; 60x60mm; 87x45mm'}">Thick and Soft Non-woven Spunlace, Multi-layer aluminum foil pack       Size: 30x30mm ; 30x60mm; 60x60mm; 87x45mm</td>
                    <td data-sheets-value="{'1':2,'2':'1 piece/foil pack, 100/200 packs/box\n'}">1 piece/foil pack, 100/200 packs/box<br/></td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':4}">4</td>
                    <td data-sheets-value="{'1':2,'2':'Alcohol swab sticks'}">Alcohol swab sticks</td>
                    <td data-sheets-value="{'1':2,'2':'100% high absorbency cotton, 70% Isopropyl or 70% Povidone-Iodine Alcohol                          Size: 7cm, 10cm (Plastic)'}">100% high absorbency cotton, 70% Isopropyl or 70% Povidone-Iodine Alcohol                          Size: 7cm, 10cm (Plastic)</td>
                    <td data-sheets-value="{'1':2,'2':'1/2/3 piece/pouch packs, 50 pouches/box'}">1/2/3 piece/pouch packs, 50 pouches/box</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':5}">5</td>
                    <td data-sheets-value="{'1':2,'2':'Antiseptic body wipes'}">Antiseptic body wipes</td>
                    <td data-sheets-value="{'1':2,'2':'broad spectrum regulated pH (5.5) \u00a0alcohol-free antiseptic wipes \n Scent:  Mint, Lavender, Chamomile                 Additive: Aloe Vera, Vitamin E, Lanolin\nAvailable as Flowpack with Film Lid or Pop-up Lid, Tub\n'}">broad spectrum regulated pH (5.5)  alcohol-free antiseptic wipes <br/>
                      Scent:  Mint, Lavender, Chamomile                 Additive: Aloe Vera, Vitamin E, Lanolin<br/>
                      Available as Flowpack with Film Lid or Pop-up Lid, Tub<br/></td>
                    <td data-sheets-value="{'1':2,'2':'1/20/50/100 wipes/bag, 10bags/box'}">1/20/50/100 wipes/bag, 10bags/box</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':6}">6</td>
                    <td data-sheets-value="{'1':2,'2':'Adult Diaper'}">Adult Diaper</td>
                    <td data-sheets-value="{'1':2,'2':'PE backsheet for anti-leakage control            Elastic design at the waist and around the legs \nFrontal adhesive tape and side tape\nHigh quality fluff pulp & SAP\nBreathable PE film & highly absorbent polymer        High absorbency (hydrophilic) or economy (hydrophobic)\nWith or without wet indicator strip                    With or without bag handle\nSize: small (800x600mm), medium standard (800x650mm),           medium wide (800x700mm),                large standard (900x750mm),               large wide (900x800mm), large long (980x750mm),  x-large standard (980x800mm),                      x-large wide          (980x840mm)'}">PE backsheet for anti-leakage control            Elastic design at the waist and around the legs <br/>
                      Frontal adhesive tape and side tape<br/>
                      High quality fluff pulp &amp; SAP<br/>
                      Breathable PE film &amp; highly absorbent polymer        High absorbency (hydrophilic) or economy (hydrophobic)<br/>
                      With or without wet indicator strip                    With or without bag handle<br/>
                      Size: small (800x600mm), medium standard (800x650mm),           medium wide (800x700mm),                large standard (900x750mm),               large wide (900x800mm), large long (980x750mm),  x-large standard (980x800mm),                      x-large wide          (980x840mm)</td>
                    <td data-sheets-value="{'1':2,'2':'10/20/30 pieces/poly bag'}">10/20/30 pieces/poly bag</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':7}">7</td>
                    <td data-sheets-value="{'1':2,'2':'Baby diaper'}">Baby diaper</td>
                    <td data-sheets-value="{'1':2,'2':'Wetness indicator\nPE backsheet for anti-leakage control\n Elastic design at the waist and around the legs \n Frontal adhesive tape and side tape\nHigh quality fluff pulp & SAP\nBreathable PE film & highly absorbent polymer        printed or non printed design\nwith or without  handle\nSize: small standard (3\u20137kg, 380x280mm),  small long (3-4kg, 400x280mm),            medium standard (5-11kg, 450x320mm),                 large standard (8-14kg, 470x320mm),                  large long (8-14kg, 500x320mm),                     x-large standard (over 13kg, 530x320mm)\n'}">Wetness indicator<br/>
                      PE backsheet for anti-leakage control<br/>
                      Elastic design at the waist and around the legs <br/>
                      Frontal adhesive tape and side tape<br/>
                      High quality fluff pulp &amp; SAP<br/>
                      Breathable PE film &amp; highly absorbent polymer        printed or non printed design<br/>
                      with or without  handle<br/>
                      Size: small standard (3–7kg, 380x280mm),  small long (3-4kg, 400x280mm),            medium standard (5-11kg, 450x320mm),                 large standard (8-14kg, 470x320mm),                  large long (8-14kg, 500x320mm),                     x-large standard (over 13kg, 530x320mm)<br/></td>
                    <td data-sheets-value="{'1':2,'2':'20/30/40pieces/polybag'}">20/30/40pieces/polybag</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':8}">8</td>
                    <td data-sheets-value="{'1':2,'2':'Auto disable syringe'}">Auto disable syringe</td>
                    <td data-sheets-value="{'1':2,'2':'Sterile, Non-toxic, Non-pyrogenic\nAuto-break Plunger\nIndelible Ink Graduation\nWith or without needle\n2-part or 3-part        Capacity:\n Luer Slip: 0.5ml, 1ml, 2ml, 2.5ml, 3ml, 5ml, 10ml, 20ml;  \n Luer Lock: 3 ml, 5ml, 10ml, 20ml\nNeedle Specification:\n 16Gx1.5\', 18Gx1.5\', 18Gx1.25\', 18Gx2\', 19Gx1.5\', 19Gx2\',\n 20Gx1\', 20Gx1.5\', 20Gx1x0.25\', 20Gx2\', 21Gx1\', 21Gx1.5\',\n 21Gx1.25\', 21Gx2\', 22Gx1\', 22Gx1.5\', 22Gx1.25\', 23Gx1.25\',\n 23Gx1\', 23Gx1.5\', 23Gx2\', 24G x1\', 24Gx5/8\', 24Gx0.75\',\n 25Gx1\', 25Gx0.75\', 25Gx5/8\', 25Gx1.5\', 26Gx5/8\', 26Gx1/2\',\n 27Gx5/8\', 27Gx0.5\', 29Gx0.5\', 30Gx0.5\''}">Sterile, Non-toxic, Non-pyrogenic<br/>
                      Auto-break Plunger<br/>
                      Indelible Ink Graduation<br/>
                      With or without needle<br/>
                      2-part or 3-part        Capacity:<br/>
                      Luer Slip: 0.5ml, 1ml, 2ml, 2.5ml, 3ml, 5ml, 10ml, 20ml; <br/>
                      Luer Lock: 3 ml, 5ml, 10ml, 20ml<br/>
                      Needle Specification:<br/>
                      16Gx1.5&quot;, 18Gx1.5&quot;, 18Gx1.25&quot;, 18Gx2&quot;, 19Gx1.5&quot;, 19Gx2&quot;,<br/>
                      20Gx1&quot;, 20Gx1.5&quot;, 20Gx1x0.25&quot;, 20Gx2&quot;, 21Gx1&quot;, 21Gx1.5&quot;,<br/>
                      21Gx1.25&quot;, 21Gx2&quot;, 22Gx1&quot;, 22Gx1.5&quot;, 22Gx1.25&quot;, 23Gx1.25&quot;,<br/>
                      23Gx1&quot;, 23Gx1.5&quot;, 23Gx2&quot;, 24G x1&quot;, 24Gx5/8&quot;, 24Gx0.75&quot;,<br/>
                      25Gx1&quot;, 25Gx0.75&quot;, 25Gx5/8&quot;, 25Gx1.5&quot;, 26Gx5/8&quot;, 26Gx1/2&quot;,<br/>
                      27Gx5/8&quot;, 27Gx0.5&quot;, 29Gx0.5&quot;, 30Gx0.5&quot;</td>
                    <td data-sheets-value="{'1':2,'2':'1 piece/PE bag/blister pack'}">1 piece/PE bag/blister pack</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':9}">9</td>
                    <td data-sheets-value="{'1':2,'2':'Blood collection tube'}">Blood collection tube</td>
                    <td data-sheets-value="{'1':2,'2':'PET, tempered glass \nVolume: 2ml, 3ml, 4ml, 5ml, 6ml, 7ml, 8ml, 9ml, 10ml\nSize: 13x75mm, 13x100mm, 16x100mm\n Cap: plain, plain with stopper'}">PET, tempered glass <br/>
                      Volume: 2ml, 3ml, 4ml, 5ml, 6ml, 7ml, 8ml, 9ml, 10ml<br/>
                      Size: 13x75mm, 13x100mm, 16x100mm<br/>
                      Cap: plain, plain with stopper</td>
                    <td data-sheets-value="{'1':2,'2':'100 pieces/box'}">100 pieces/box</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':10}">10</td>
                    <td data-sheets-value="{'1':2,'2':'Examination gloves'}">Examination gloves</td>
                    <td data-sheets-value="{'1':2,'2':'Latex powdered durable'}">Latex powdered durable</td>
                    <td data-sheets-value="{'1':2,'2':'50/100 pairs/box'}">50/100 pairs/box</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':11}">11</td>
                    <td data-sheets-value="{'1':2,'2':'Blood transfusion bags'}">Blood transfusion bags</td>
                    <td data-sheets-value="{'1':2,'2':'Particle-free and best quality transparent medical grade PVC film ,Round shaped with peripheral hanger slits and holes,     Types: CPDA, CPDA-1, SAGM                               Sizes: 100ml, 250ml, 350ml & 450ml                          Needle: 16G                  Tube: 150-200cm'}">Particle-free and best quality transparent medical grade PVC film ,Round shaped with peripheral hanger slits and holes,     Types: CPDA, CPDA-1, SAGM                               Sizes: 100ml, 250ml, 350ml &amp; 450ml                          Needle: 16G                  Tube: 150-200cm</td>
                    <td data-sheets-value="{'1':2,'2':'Specification: Single, Double, Triple, Quadruple'}">Specification: Single, Double, Triple, Quadruple</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':12}">12</td>
                    <td data-sheets-value="{'1':2,'2':'Elbow support'}">Elbow support</td>
                    <td data-sheets-value="{'1':2,'2':' cotton + elastic + spandex polyester\nSizes: S, M, L, XL and XXL'}"> cotton + elastic + spandex polyester<br/>
                      Sizes: S, M, L, XL and XXL</td>
                    <td data-sheets-value="{'1':2,'2':'One pair per box, \n240 boxes / carton\n\nMOQ: 1,500 pairs'}">One pair per box, <br/>
                      240 boxes / carton<br/>
                      <br/>
                      MOQ: 1,500 pairs</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':13}">13</td>
                    <td data-sheets-value="{'1':2,'2':'Knee support'}">Knee support</td>
                    <td data-sheets-value="{'1':2,'2':'Material: Polyester & rubber\nSize: Length: 25cm, width: shorter end:12cm, longer end: 14 cm'}">Material: Polyester &amp; rubber<br/>
                      Size: Length: 25cm, width: shorter end:12cm, longer end: 14 cm</td>
                    <td data-sheets-value="{'1':2,'2':'One pair per box, \n240 boxes / carton \n\nMOQ: 1,500 Pieces'}">One pair per box, <br/>
                      240 boxes / carton <br/>
                      <br/>
                      MOQ: 1,500 Pieces</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':14}">14</td>
                    <td data-sheets-value="{'1':2,'2':'Palm support'}">Palm support</td>
                    <td data-sheets-value="{'1':2,'2':' cotton + elastic + spandex polyester\nSizes: Standard'}"> cotton + elastic + spandex polyester<br/>
                      Sizes: Standard</td>
                    <td data-sheets-value="{'1':2,'2':'One pair per box, \n240 boxes / carton\n\nMOQ: 1,500 pairs'}">One pair per box, <br/>
                      240 boxes / carton<br/>
                      <br/>
                      MOQ: 1,500 pairs</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':15}">15</td>
                    <td data-sheets-value="{'1':2,'2':'Ankle support'}">Ankle support</td>
                    <td data-sheets-value="{'1':2,'2':'cotton + elastic +  spandex polyester                         Size: Standard fits all\n Length: 20 -22 cm           Width: 9.5-11.5 cm'}">cotton + elastic +  spandex polyester                         Size: Standard fits all<br/>
                      Length: 20 -22 cm           Width: 9.5-11.5 cm</td>
                    <td data-sheets-value="{'1':2,'2':'One pair per box, \n240 boxes / carton\n\nMOQ: 1,500 pairs'}">One pair per box, <br/>
                      240 boxes / carton<br/>
                      <br/>
                      MOQ: 1,500 pairs</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':16}">16</td>
                    <td data-sheets-value="{'1':2,'2':'Crepe bandage'}">Crepe bandage</td>
                    <td data-sheets-value="{'1':2,'2':'Weave and knitted, bleached and unbleached and skin color\nNon-sterile and sterile, individual pack in cellophane or blister\nAvailable in different weight and material, cotton or spandex\nComplies with USP, EP or BP      Sizes: \n2.5cm x 4m \n5cm x 4.5m\n7.5cm x 4.5m \n10cm x 4.5m \n15cm x 4.5m  '}">Weave and knitted, bleached and unbleached and skin color<br/>
                      Non-sterile and sterile, individual pack in cellophane or blister<br/>
                      Available in different weight and material, cotton or spandex<br/>
                      Complies with USP, EP or BP      Sizes: <br/>
                      2.5cm x 4m <br/>
                      5cm x 4.5m<br/>
                      7.5cm x 4.5m <br/>
                      10cm x 4.5m <br/>
                      15cm x 4.5m </td>
                    <td data-sheets-value="{'1':2,'2':'Multiple packs as per customer specifications MOQ:5000pieces'}">Multiple packs as per customer specifications MOQ:5000pieces</td>
                  </tr>
                  <tr>
                    <td data-sheets-value="{'1':3,'3':17}">17</td>
                    <td data-sheets-value="{'1':2,'2':'Plaster of Paris(POP)'}">Plaster of Paris(POP)</td>
                    <td data-sheets-value="{'1':2,'2':'Suitable for instant use and for treatment after surgery, Smooth and fluid plaster covers gauze completely, water permeable, strong setting abilities, reliable casting\nMaterial: Cotton and plaster of paris\nSolidifying time: 2-5 minutes\nColor: White\nType: Tooth cutting and cross cutting\nPacking: Normal packing for individual is wrapped individual cellophane, aluminum foil bag, white PE pouch and transparent OPP bag\nSizes: \n5.0cm x 270cm \n7.5cm x 270cm \n10cm x 270cm \n15cm x 270cm \n20cm x 270cm '}">Suitable for instant use and for treatment after surgery, Smooth and fluid plaster covers gauze completely, water permeable, strong setting abilities, reliable casting<br/>
                      Material: Cotton and plaster of paris<br/>
                      Solidifying time: 2-5 minutes<br/>
                      Color: White<br/>
                      Type: Tooth cutting and cross cutting<br/>
                      Packing: Normal packing for individual is wrapped individual cellophane, aluminum foil bag, white PE pouch and transparent OPP bag<br/>
                      Sizes: <br/>
                      5.0cm x 270cm <br/>
                      7.5cm x 270cm <br/>
                      10cm x 270cm <br/>
                      15cm x 270cm <br/>
                      20cm x 270cm </td>
                    <td data-sheets-value="{'1':2,'2':'1 piece/pack MOQ:10000pieces'}">1 piece/pack MOQ:10000pieces</td>
                  </tr>
                </tbody>
              </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include "footer.php"; ?>
      <?php include "assetJs.php"; ?>
<script type="text/javascript" src="js/custom.js"></script>
