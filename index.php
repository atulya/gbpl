<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $projectName ?>
  </title>
  <?php include "assetCss.php"; ?>
  <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet"> </head>

<body>
  <?php include "header.php"; ?>
  <div class="homeBanner container">
    <div class="demo-2 row">
      <div id="slider" class="grid-wrapper col-sm-12">
        <div class="row">
          <div class="col-sm-3 item-1 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-1">
              <div class="bg-img bg-img-1"></div>
              <h5>Meet James Warner Brothers</h5> </a>
          </div>
          <div class="col-sm-3 item-2 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-2">
              <div class="bg-img bg-img-2"></div>
              <h5>Find Akira &amp; Ocean</h5> </a>
          </div>
          <div class="col-sm-3 item-3 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-3">
              <div class="bg-img bg-img-3"></div>
              <h5>Welcome Emma. Bid adieu Mrs. Jose.</h5> </a>
          </div>
          <div class="col-sm-3 item-4 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-4">
              <div class="bg-img bg-img-4"></div>
              <h5>Rendezvous with Kris-Myra.</h5> </a>
          </div>
          <div class="col-sm-3 item-5 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-5">
              <div class="bg-img bg-img-5"></div>
              <h5>Now the only stress in Life is his In-laws.</h5> </a>
          </div>
          <div class="col-sm-3 item-6 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-6">
              <div class="bg-img bg-img-6"></div>
              <h5>Meet Emanuel and Ana.</h5> </a>
          </div>
          <div class="col-sm-3 item-7 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-7">
              <div class="bg-img bg-img-7"></div>
              <h5>Say Hi to Isabelle &amp; Den.</h5> </a>
          </div>
          <div class="col-sm-3 item-8 banner-box">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#item-8">
              <div class="bg-img bg-img-8"></div>
              <h5>Discover Dorothy</h5> </a>
          </div>
        </div>
        <!-- Clip Loader -->
        <div class="clip">
          <div class="overlay">
            <div class="modelBox">
              <div align="right">
                <a href="#" class="close">
                  <div class="closeClipBtn">Skip <i class="glyphicon glyphicon-remove"></i> </div>
                </a>
              </div>
              <div class="mText">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/slxdBQIqq2U?controls=0&showinfo=0&rel=0&autoplay=1&loop=0&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <?php include "assetJs.php"; ?>
        <script type='text/javascript'>
          $(document).ready(function() {
            // Get an array of all element heights
            var elementHeights = $('.banner-box h5').map(function() {
              return $(this).height();
            }).get();
            // Math.max takes a variable number of arguments
            // `apply` is equivalent to passing each height as an argument
            var maxHeight = Math.max.apply(null, elementHeights);
            // Set each height to the max height
            $('.banner-box h5').height(maxHeight);
          });
        </script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
        <script type="text/javascript">
          function model(mContent) {
            $(".overlay").fadeIn();
            $('.mText').html(mContent);
            $(".close").on('click', function() {
              $(".overlay").remove();
            });
          }
          var bac = ""
          var abc = '' + bac + ''
          $(document).ready(function() {
            model();
          });
          setTimeout(function() {
            $('.overlay').remove();
          }, 120000);
        </script>
        <script type="text/javascript">
          $(function() {
            var Page = (function() {
              var $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                  onBeforeChange: function(slide, pos) {
                    $nav.removeClass('nav-dot-current');
                    $nav.eq(pos).addClass('nav-dot-current');
                  }
                }),
                init = function() {
                  initEvents();
                },
                initEvents = function() {
                  $nav.each(function(i) {
                    $(this).on('click', function(event) {
                      var $dot = $(this);
                      if (!slitslider.isActive()) {
                        $nav.removeClass('nav-dot-current');
                        $dot.addClass('nav-dot-current');
                      }
                      slitslider.jump(i + 1);
                      return false;
                    });
                  });
                };
              return {
                init: init
              };
            })();
            Page.init();
          });
        </script>
        <!-- grid item modal -->
        <!-- item-1 -->
        <div class="pop">
          <div class="modal fade item-modal-wrap" id="item-1" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content col-sm-12">
                <div class="row">
                  <div class="col-sm-6 item-modal-box demo-2">
                    <div class="bg-img bg-img-1"></div>
                  </div>
                  <div class="col-sm-6">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Meet James Warner Brothers</h4> </div>
                    <div class="modal-body">
                      <div class="contentText">
                        <p>Family that stays together, works together, pray and party together.
                          <br> To them " Life is sharing bonds of unity, festivity and harmony "
                          <br>
                          <br> <span class="onePara">GBennetti's complete range of healthcare offerings from infancy (pediatric care) to senility(geriatric care) help families like these enjoy their moments of togetherness.</span>
                          <br>
                          <br> <span class="express">Life is blessing. Embrace. Expand. Enrich.</span> </p>
                        <p><a class="btn btn-primary" href="human-health-promethus.php" role="button">Read More...</a> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- item-2 -->
          <div class="modal fade item-modal-wrap demo-2" id="item-2" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content col-sm-12">
                <div class="row">
                  <div class="col-sm-6 item-modal-box">
                    <div class="bg-img bg-img-2"></div>
                  </div>
                  <div class="col-sm-6">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Find Akira &amp; Ocean</h4> </div>
                    <div class="modal-body">
                      <div class="contentText">
                        <p>Mother son special. A mother nolds her sons hand for a while but his heart for lifetime.
                          <br><span class="onePara">Says Akira "Son Ocean, You are Precious in every way, my Sunshine of the day, the Joy in my Soul and the Love of my Life. You are my whole new world". The bond between Mom and Son is a special one - the bond of miracle!</span>
                          <br>
                          <br> <span class="onePara">GBennetti's range of products and services from women care (Gynecology &amp; Obstetrics) helps coalesce this bond through all the seasons of Life-Monsoon, Autumn, winter and summer - from inception to adulthood.</span>
                          <br>
                          <br> <span class="express">Life is blessing. Embrace. Expand. Enrich.</span> </p>
                        <p><a class="btn btn-primary" href="human-health-promethus.php" role="button">Read More...</a> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- item-3 -->
          <div class="modal fade item-modal-wrap" id="item-3" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content col-sm-12 demo-2">
                <div class="row">
                  <div class="col-sm-6 item-modal-box">
                    <div class="bg-img bg-img-3"></div>
                  </div>
                  <div class="col-sm-6">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Welcome Emma. Bid adieu Mrs. Jose.</h4> </div>
                    <div class="modal-body">
                      <div class="contentText">
                        <p> <span class="onePara">A week ago Emma, a beautiful young baby girl was born. Yesterday Mrs Jose, her grand grand ma took her last breath. Both lived a world of relationship in intensive care for merely one week.</span>
                          <br>
                          <br> <span class="onePara">Such is the circle of life. Where one life started its journey of growing and learning, wonderment and joy; the another ceased to exist out of despair amidst life challenging adversity.</span>
                          <br>
                          <br> <span class="onePara">‘Next to creating a Life, the finest thing a man can do is save one!'.The specialty range of  intensive care offerings from GBennetti adds power to the living in critical conditions. Now Live the life you love. Love the Life you live. Complete the circle of life with trust and care. <br><br></span> </p> <span class="express">Life is blessing. Embrace. Expand. Enrich.</span>
                        <p><a class="btn btn-primary" href="human-health-promethus.php" role="button">Read More...</a> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- item-4 -->
        <div class="modal fade item-modal-wrap" id="item-4" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content col-sm-12  demo-2">
              <div class="row">
                <div class="col-sm-6 item-modal-box">
                  <div class="bg-img bg-img-4"></div>
                </div>
                <div class="col-sm-6">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Rendezvous with Kris-Myra.</h4> </div>
                  <div class="modal-body">
                    <div class="contentText">
                      <p>Icons of glamor, love and youth
                        <br> They say 'Life is finding ecstasy. The mere sense of living is joy enough'.
                        <br>
                        <br> <span class="onePara"> GBennetti's complete range of Lifestyle enhancing cosmetologicals, personal care, Health and hygiene related products help nurture, protect and enhance care for beauty exemplified in youth.</span>
                        <br>
                        <br> </p> <span class="express">Life is blessing. Embrace. Expand. Enrich.</span>
                      <br>
                      <br>
                      <p><a class="btn btn-primary" href="human-health-promethus.php" role="button">Read More...</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- item-5 -->
      <div class="modal fade item-modal-wrap" id="item-5" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-sm-12 demo-2">
            <div class="row">
              <div class="col-sm-6 item-modal-box">
                <div class="bg-img bg-img-5"></div>
              </div>
              <div class="col-sm-6">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Now the only stress in Life is his In-laws.</h4> </div>
                <div class="modal-body">
                  <div class="contentText">
                    <p>Selfie with Cyrus Merchant: Global civil contractor, a passionate aviator and an accomplished business leader.
                      <br>
                      <br> <span class="onePara">For him, Life is living a lifestyle of legendary. An array of healthcare offerings from GBennetti aid in protecting and treating cardiovascular, diabetic and various other emerging lifestyle conditions to keep adolescents like these care free. </span>
                      <br>
                      <br> <span class="express">Life is blessing. Embrace. Expand. Enrich.</span> </p>
                    <p><a class="btn btn-primary" href="human-health-promethus.php" role="button">Read More...</a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- item-6 -->
      <div class="modal fade item-modal-wrap" id="item-6" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-sm-12 demo-2">
            <div class="row">
              <div class="col-sm-6 item-modal-box">
                <div class="bg-img bg-img-6"></div>
              </div>
              <div class="col-sm-6">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Meet Emanuel and Ana.</h4> </div>
                <div class="modal-body">
                  <div class="contentText">
                    <p><span class="onePara">Aspiring daughter-son duo. Mom's overtly protected obedient daughter Ana, kitchen helper but a wanna-be yoga teacher.<br> Dad's sparred dignified world cup champion son Emanuel. </span>
                      <br>
                      <br> They have a story to say. Life is right to equality of opportunity and freedom of play.
                      <br>
                      <br> <span class="onePara">GBennetti's variety of healthcare offerings from acute to chronic respiratory and orthopedic care ensures break-free wound-free dignified life. Now experience liberty of movements like never before. Be it a child's play or any sport at life's bay.</span>
                      <br>
                      <br> <span class="express">Life is blessing. Embrace. Expand. Enrich.</span> </p>
                    <p><a class="btn btn-primary" href="human-health-promethus.php" role="button">Read More...</a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- item-7 -->
      <div class="modal fade item-modal-wrap" id="item-7" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-sm-12 demo-2">
            <div class="row">
              <div class="col-sm-6 item-modal-box">
                <div class="bg-img bg-img-7"></div>
              </div>
              <div class="col-sm-6">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Say Hi to Isabelle &amp; Den.</h4> </div>
                <div class="modal-body">
                  <div class="contentText">
                    <p><span class="onePara">An eminent Dentist &amp; Orthosurgeon doctor duo in a reputed hospital. They attend multiple patients, refer medical examinations , and provide both surgical and non-surgical treatment options in their clinical practice. Their effective diagnosis, prognosis and onsite care help patients recover fast. </span>
                      <br>
                      <br> <span class="onePara">GBennetti's range of medical consumables and diagnostic kits in healthcare supplies ensure medical practioners like these remain well appointed to their patient-care at all times.</span>
                      <br>
                      <br> <span class="express">Life is blessing. Embrace. Expand. Enrich.</span> </p>
                    <p><a class="btn btn-primary" href="healthcare-supplies-hemera.php" role="button">Read More...</a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- item-8 -->
      <div class="modal fade item-modal-wrap" id="item-8" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-sm-12 demo-2">
            <div class="row">
              <div class="col-sm-6 item-modal-box">
                <div class="bg-img bg-img-8"></div>
              </div>
              <div class="col-sm-6">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Discover Dorothy</h4> </div>
                <div class="modal-body">
                  <div class="contentText">
                    <p><span class="onePara">Most lovable Life companion partner. He doesn't care who you are, who you know,what you wear, where you live or which car you drive. <br>He only cares that he is there for you unconditionally.</span>
                      <br>
                      <br><span class="onePara">GBennetti's range of animal health products for companion as well as farm animals offer absolute healthcare from head to toe to these beloved partners, thereby protecting treating and nurturing fellowship for ages of Life.</span></span>
                      <br>
                      <br><span class="express">Life is blessing. Embrace. Expand. Enrich.</span> </p>
                    <p><a class="btn btn-primary" href="healthcare-supplies-hemera.php" role="button">Read More...</a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "footer.php"; ?>