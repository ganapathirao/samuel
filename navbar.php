<section class="navSection">
	<div class="navDiv">
		<nav id="menu" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					<a href="index.php" class="logoLinkMain futuraHeavy letterSpaceFuturaDemi hover-delay">caplog<span class="blue">IQ</span></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="topFixedNavbar1">
					<ul class="nav navbar-nav navbar-right myNavbar futuraMedium">
						<li><a href="dashboard.php" class="link hover-delay">Home</a>
						</li>
						<li><a href="#" class="link hover-delay">Favorite Deals</a>
						</li>
						<li><a href="#" class="link hover-delay">Drafts</a>
						</li>
						</li>
						<li><a href="#" class="link hover-delay">Deal Folders</a>
						</li>
						<li><a href="#" class="link hover-delay">Assumptions</a>
						</li>
						<li><a href="#" class="link hover-delay"><img src="img/settingsIcon.svg" alt="Settings Icon" class="settingsIcon" /></a>
						</li>
						<li><a href="#" class="link hover-delay"><img src="img/notificationIcon.svg" alt="Notifications Icon" class="notificationsIcon" /><span class="notificationsNumber">4</span></a>
						</li>
						<li><a href="#" class="link hover-delay"><img src="img/profileIcon.svg" alt="Profile Icon" class="profileIcon" /></a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-ctollapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</div>
</section>

	<section id="navbarMainSection" class="navbarMainSection">
		<div class="navbarMainDiv">
			<nav id="menu2" class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
						<h1 class="navbarPortfolioHeader futuraHeavy letterSpaceFuturaBook hover-delay">Indiana Hotel Portfolio</h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="topFixedNavbar1">
						<ul class="nav navbar-nav myNavbar2 navbar-right futuraDemi letterSpaceFuturaDemi">
							<li><a href="#" class="link hover-delay">UW MODEL <span class="xlsIcon"><img src="img/xlsIcon.svg" class="xlsIconImg" alt="Xls Icon" /></span></a>
							</li>
							<li><a href="#" class="link hover-delay">FINANCING MEMO <span class="pdfIcon"><img src="img/pdfIcon.svg" class="pdfIconImg" alt="Xls Icon" /></span></a>
							</li>
							<li><a href="#" class="link hover-delay navbar3Menu" data-id="1">TRANSACTION DETAILS</a>
							</li>
							</li>
							<li><a href="#" class="link hover-delay navbar3Menu" data-id="2">PROPERTY DETAILS</a>
							</li>
							<li class="menu2SelectLi">
								<select name="dealName" class="selectBoxNavbar" id="newDeal1InputSelect">
									<option value="">Select</option>
									<option value="Yourself">Yourself</option>
									<option value="Sample">Sample</option>
									<option value="Sample">Sample</option>
									<option value="Sample">Sample</option>
								</select>
							</li>
							<li><a href="#/" class="navbarLevel2Close futuraDemi hover-delay" onClick="closeNavbarMain();">
								X
								</a>
							
							</li>
						</ul>
					</div>
					<!-- /.navbar-ctollapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
			<section class="navbarLevel3Section">
				<?php include('navbar3.php'); ?>
			</section>
		</div>
		</div>
	</section>