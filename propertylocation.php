<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CapLogIQ</title>
	<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link href="css/navbar.css" rel="stylesheet" type="text/css">
	<link href="css/simple-animation.css" rel="stylesheet" type="text/css">
	<link href="css/hamburgerMenu.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/dropzone.css">
	<link rel="stylesheet" href="css/globalInputStyle.css">
	<link href="css/propStyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.typekit.net/mtv5pap.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/toggleStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/select2.min.css" type="text/css">
	<link rel="stylesheet" href="css/editor.css" type="text/css">
	<script src="js/jquery-1.11.3.min.js"></script>

	<!--	<link rel="stylesheet" href="css/demo.css" type="text/css">-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<script src="https://unpkg.com/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css">
	<link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-balham.css">
	<script>
		( function ( e, t, n ) {
			var r = e.querySelectorAll( "html" )[ 0 ];
			r.className = r.className.replace( /(^|\s)no-js(\s|$)/, "$1js$2" )
		} )( document, window, 0 );
	</script>
</head>

<body class="bodyMain overflowXHidden" style="padding-top: 70px">

	<?php include('navbar.php'); ?>

	<section class="propSizingNavSection">
		<div class="propSizingNavDiv">
			<div id="propSizingNavLinkDiv" class="propSizingNavLinkDiv globalNavLinkDiv futuraDemi letterSpaceFuturaBook">
				<a href="#summarytab" class="globalNavLink globalNavLink1 globalNavLinkActive hover-delay propMarketNav" data-id="1">
					Summary
				</a>
			
				<a href="#profiletab" class="globalNavLink globalNavLink2 hover-delay propMarketNav" data-id="2">
					Profile
				</a>
			
				<a href="#demandtab" class="globalNavLink globalNavLink3 hover-delay propMarketNav" data-id="3">
					Demand Drivers
				</a>
			
				<a href="#demographicstab" class="globalNavLink globalNavLink4 hover-delay propMarketNav" data-id="4">
					Demographics
				</a>
			
				<a href="#airportstab" class="globalNavLink globalNavLink5 hover-delay propMarketNav" data-id="5">
					Airports
				</a>
			
				<a href="#neighborhoodtab" class="globalNavLink globalNavLink6 hover-delay propMarketNav" data-id="6">
					Neighborhood
				</a>
			
			</div>
		</div>
	</section>

	<section id="globalPropLocationSummary" class="globalLink1 hide">
		<?php include('propertylocation/summary.php'); ?>
	</section>

	<section id="globalPropLocationProfile" class="globalLink2">
		<?php include('propertylocation/profile.php'); ?>
	</section>

	<section id="globalPropLocationDemand" class="globalLink3 hide">
		<?php include('propertylocation/demand.php'); ?>
	</section>

	<section id="globalPropLocationDemographics" class="globalLink4 hide">
		<?php include('propertylocation/demographics.php'); ?>
	</section>

	<section id="globalPropLocationAir" class="globalLink5 hide">
		<?php include('propertylocation/airport.php'); ?>
	</section>

	<section id="globalPropLocationNeighborhood" class="globalLink6 hide">
		<?php include('propertylocation/neighborhood.php'); ?>
	</section>

	<script src="js/bootstrap-3.3.7.js"></script>
	<script src="js/general.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/select2.full.min.js"></script>
	<script src="js/jquery.maskMoney.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/custom-file-input.js"></script>
	<script src="js/editor.js"></script>
	<script>
		$( document ).ready( function () {
			$( "#txtEditor1" ).Editor( {
				status_bar: false
			} );
			$( "#txtEditor2" ).Editor( {
				status_bar: false
			} );
			$( "#txtEditor3" ).Editor( {
				status_bar: false
			} );
			$( "#txtEditor4" ).Editor( {
				status_bar: false
			} );
			$( "#txtEditor5" ).Editor( {
				status_bar: false
			} );
			$( "#txtEditor6" ).Editor( {
				status_bar: false
			} );
		} );
	</script>
	<script>
		$( document ).ready( function () {
			"use strict";

			// Properties Market Tab

			var globalNavLink = $( ".globalNavLink" );
			for ( var i = 0; i < globalNavLink.length; i++ ) {
				globalNavLink[ i ].addEventListener( "click", function () {
					var current = document.getElementsByClassName( "globalNavLinkActive" );
					current[ 0 ].className = current[ 0 ].className.replace( " globalNavLinkActive", "" );
					this.className += " globalNavLinkActive";
				} );
			}
			var globalSubNavLink = $( ".globalSubNavLink" );
			for ( var i = 0; i < globalSubNavLink.length; i++ ) {
				globalSubNavLink[ i ].addEventListener( "click", function () {
					var current = document.getElementsByClassName( "globalNavLinkActive" );
					current[ 0 ].className = current[ 0 ].className.replace( " globalNavLinkActive", "" );
					this.className += " globalNavLinkActive";
				} );
			}

			$( '.globalNavLink' ).click( function () {
				var index = $( this ).data( 'id' );
				for ( var i = 0; i < 7; i++ ) {
					if ( index === i ) {
						$( '.globalLink' + index ).removeClass( 'hide' );
					} else {
						$( '.globalLink' + i ).addClass( 'hide' );
					}
				}

			} );

		} );

		function initMap() {
			// The location of Uluru
			var uluru = {
				lat: -25.344,
				lng: 131.036
			};
			// The map, centered at Uluru
			var map = new google.maps.Map(
				document.getElementById( 'map' ), {
					zoom: 8,
					center: uluru
				} );
			var mapProfile = new google.maps.Map(
				document.getElementById( 'mapProfile' ), {
					zoom: 8,
					center: uluru
				} );
			var mapNeighborhood = new google.maps.Map(
				document.getElementById( 'mapNeighborhood' ), {
					zoom: 8,
					center: uluru
				} );
			var mapDemand = new google.maps.Map(
				document.getElementById( 'mapDemand' ), {
					zoom: 8,
					center: uluru
				} );
			var mapAirport = new google.maps.Map(
				document.getElementById( 'mapAirport' ), {
					zoom: 8,
					center: uluru
				} );
			// The marker, positioned at Uluru
			var marker = new google.maps.Marker( {
				position: uluru,
				map: map
			} );
			var markerProfile = new google.maps.Marker( {
				position: uluru,
				map: mapProfile
			} );
			var markerNeighborhood = new google.maps.Marker( {
				position: uluru,
				map: mapNeighborhood
			} );
			var markerDemand = new google.maps.Marker( {
				position: uluru,
				map: mapDemand
			} );
			var markerAirport = new google.maps.Marker( {
				position: uluru,
				map: mapAirport
			} );
			//			    google.maps.event.trigger(map, "resize");

		}
	</script>
	<script>
		$( window ).on( 'load resize', function () {
			var neighborhoodColHeight = $( '.propLocationNeighCol1' ).height();
			$( '#mapNeighborhood' ).css( 'height', neighborhoodColHeight );
			var demandColHeight = $( '.propLocationDemandCol2' ).height();
			$( '#mapDemand' ).css( 'height', demandColHeight );
			var airportColHeight = $( '.propLocationAirportCol2' ).height();
			$( '#mapAirport' ).css( 'height', airportColHeight );
		} );
	</script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOBcAF5QAmP4aUo7PwqOvK9FNNmj3I5to&callback=initMap">
	</script>


</body>
</html>