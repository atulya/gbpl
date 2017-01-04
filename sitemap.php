<?php include "routes.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $projectName ?>  | Sitemap</title>
		<?php include "assetCss.php"; ?>
	</head>
	<body>
		<div class="headerAboutus">
			<?php include "header.php"; ?>
		</div>
		<div class="innerpageBanner">
			<img src="images/about-us.png" alt="about us">
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
					<ul>
						<li>
							<a href="javascript:void(0);">We stand for<span class="caret"></span></a>
								<ul>
									<li><a href="aboutus.php">Healthcare Corporation</a></li>
									<li><a href="snap-shot.php">Snapshot at a glance</a></li>
									<li><a href="javascript:void(0);">Corporate Philosophy</a>
										<ul>
											<li><a href="corporate-philosophy.php">Vision Mission</a></li>
											<li><a href="core-ideology.php">Core Ideology</a></li>
											<li><a href="core-values.php">Values</a></li>
											<li><a href="core-strengths.php">Strengths</a></li>
										</ul>
									</li>
									<li><a href="corporate-identity.php">Corporate identity</a></li>
									<!-- <li><a href="group-affiliates.php">Group AFFILIATES</a></li> -->
								</ul>
						</li>
						<li>
							<a href="javascript:void(0);">We Represent<span class="caret"></span></a>
							<ul>
								<li><a href='human-health-promethus.php'>Human Health</a></li>
								<li><a href='animal-care-zooker.php'>Animal care</a></li>
								<li><a href='herbal-naturals-renaissant.php'>Herbal naturals </a></li>
								<li><a href="healthcare-supplies-hemera.php">Healthcare supplies</a></li>
								<!-- <li>Strengths </li> -->
							</ul>
						</li>
					<li>
						<a href="javascript:void(0);">We do <span class="caret"></span></a>
						<ul>
							<li><a href="javascript:void(0);">Research &amp; innovation</a>
							<ul>
								<li>
									<a href="research-and-development.php">Research centers</a>
								</li>
								<li>
									<a href="research-innovation-capabilities.php">Capabilities</a>
								</li>
							</ul>
						</li>
						<li><a href="javascript:void(0);">Manufacturing</a>
						<ul>
							<li>
								<a href="facilities.php">Facilities</a>
							</li>
							<li>
								<a href="manufacturing-competencies.php">Competencies</a>
							</li>
							<li><a href="manufacturing-capabilities.php">Capabilities</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0);">Quality Assurance</a>
					<ul>
						<li>
							<a href="quality-control-assurance.php">GLOBAL Quality</a>
						</li>
						<li>
							<a href="quality-capabilities-assurance.php">Capabilities</a>
						</li>
						<li><a href="quality-policy.php">quality policy</a></li>
					</ul>
				</li>
				<li><a href="supply-chain.php">Supply chain</a></li>
				<li><a href="regulatory-compliance.php">Regulatory Compliance</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);">We Care<span class="caret"></span></a>
			<ul>
				<li><a href="social-responsiblity.php">Corporate citizenship</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);">We offer <span class="caret"></span></a>
			<ul>
				<li><a href="promethus-augustus.php">Promethus</a></li>
				<li><a href="zooker.php">Zooker</a></li>
				<li><a href="renaissant-hextus.php">Renaissant</a></li>
				<li><a href="hemera-bona-dias.php">Hemera</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);">We serve <span class="caret"></span></a>
			<ul>
				<li><a href="preferential-partnership.php">Preferential Partnership</a></li>
				<li><a href="technical-development.php">Technical development</a></li>
				<li><a href="contract-manufacturing.php">Contract manufacturing</a></li>
				<li><a href="technology-transfer.php">Technology transfer</a></li>
				<li><a href="trade-supply.php">Trade supply</a></li>
				<li><a href="turn-key-projects.php">Turn key projects</a></li>
				<li><a href="javascript:void();">Strategic Bio-consulting</a><!-- (Link PKPDH) --></li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);">We are global<span class="caret"></span></a>
			<ul>
				<li>
					<a href="global-network.php">International business</a>
				</li>
				<li>
					<a href="global-sourcing.php">Global sourcing</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);">We manifest<span class="caret"></span></a>
			<ul>
				<li><a href="human-resources.php">Lean organisation</a></li>
				<li><a href="life-at-gbpl.php">Life at GBPL</a></li>
				<li><a href="culture.php">Career</a></li>
				<!-- <li><a href="send-your-cv.php">Send your CV</a></li> -->
			</ul>
		</li>
	</ul>
</div>
<div class="col-md-3">
	<a href="javascipt:void(0);"></a>
</div>
</div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>
