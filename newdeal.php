<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CapLogIQ</title>
	<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<link href="css/newDealStyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link href="css/navbar.css" rel="stylesheet" type="text/css">
	<link href="css/simple-animation.css" rel="stylesheet" type="text/css">
	<link href="css/hamburgerMenu.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/dropzone.css">
	<link rel="stylesheet" href="css/globalInputStyle.css">
	<link rel="stylesheet" href="https://use.typekit.net/mtv5pap.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/select2.min.css" type="text/css">
<!--	<link rel="stylesheet" href="css/demo.css" type="text/css">-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<script>
		( function ( e, t, n ) {
			var r = e.querySelectorAll( "html" )[ 0 ];
			r.className = r.className.replace( /(^|\s)no-js(\s|$)/, "$1js$2" )
		} )( document, window, 0 );
	</script>
</head>

<body class="bodyMain overflowXHidden" style="padding-top: 70px">

	<?php include('navbar.php'); ?>


	<?php include('newdeal/newdealnav.php'); ?>


	<section class="dealGlobal1">
		<?php include('newdeal/newdeal1.php'); ?>
	</section>

	
	<section class="dealGlobal2 hide">
		<?php include('newdeal/newdeal2.php'); ?>
	</section>


	<section class="dealGlobal3 hide">
		<?php include('newdeal/newdeal3.php'); ?>
	</section>


	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap-3.3.7.js"></script>
	<script src="js/general.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/select2.full.min.js"></script>
	<script src="js/jquery.maskMoney.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/custom-file-input.js"></script>
	<script src="js/dropzone.js"></script>
	<script>
		//		.forElement("#mydropzone")
		//		if ( $( '#dealsDropZone' ).length ) {
		//			var dropzone = new Dropzone( '#dealsDropZone', {
		var mydrop = $( "#dealsDropZone" ).dropzone( {
			previewTemplate: document.querySelector( '#preview-template' ).innerHTML,
			parallelUploads: 2,
			thumbnailHeight: 120,
			thumbnailWidth: 120,
			maxFilesize: 3,
			filesizeBase: 1000,
			// addRemoveLinks: true,
			previewsContainer: '#preview',
			//				thumbnail: function ( file, dataUrl ) {
			//					if ( file.previewElement ) {
			//						file.previewElement.classList.remove( "dz-file-preview" );
			//					}
			//				}

		} );
		//		}
	</script>
<!--
	<script>
		$( document ).ready( function () {
			"use strict";

			$( '.selectBoxJs1' ).select2( {
				placeholder: "Select a Team",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs2' ).select2( {
				placeholder: "Select a Loan Program",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs3' ).select2( {
				placeholder: "Search",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs4' ).select2( {
				placeholder: "",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs5' ).select2( {
				placeholder: "Phone Number",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs6' ).select2( {
				placeholder: "Financing Purpose",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs7' ).select2( {
				placeholder: "Primary Property Subtype",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs8' ).select2( {
				placeholder: "Primary Property Type",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs9' ).select2( {
				placeholder: "Document Type",
				allowClear: true,
				width: '100%'
			} );
			$( '.selectBoxJs10' ).select2( {
				placeholder: "Select a Portfolio",
				allowClear: true,
				width: '100%'
			} );
			//	$('#mySelect2').val(null).trigger('change');
			$( '.select2-selection__arrow' ).append( '<i class="fa fa-angle-down"></i>' );
			$( '.select2-selection__clear' ).append( '<i class="fas fa-times"></i>' );
			//	<i class="fas fa-times" style="color: #2699FB"></i>
			$( 'b[role="presentation"]' ).hide();

			$( '.selectBoxJs1' ).on( 'select2:select', function ( e ) {
				//		$('.select2-selection__arrow').fadeOut();
			} );
			$( '.selectBoxJs1' ).on( 'select2:unselect', function ( e ) {
				//		$('.select2-selection__arrow').fadeIn();
			} );

		} );
	</script>
-->
	<script>
		
		function initMap(mapId) {
			// The location of Uluru
			var uluru = {
				lat: -25.344,
				lng: 131.036
			};
			// The map, centered at Uluru
			var map = new google.maps.Map(
				document.getElementById( mapId ), {
					zoom: 8,
					center: uluru
				} );
			// The marker, positioned at Uluru
			var marker = new google.maps.Marker( {
				position: uluru,
				map: map
			} );
    google.maps.event.trigger(map, "resize");
		}
		
	function newDealSteps(index) {
	"use strict";
		var mapId;
	for(var i = 0; i < 4; i++) {
		if(index === i) {
			$('.dealSwitch' + index).addClass('switchActive');
			$('.dealSwitchNumber' + index).addClass('dealSwitchNumberActive');
			$('.dealGlobal' + index).removeClass('hide');
			
		} else {
			$('.dealSwitch' + i).removeClass('switchActive');
			$('.dealSwitchNumber' + i).removeClass('dealSwitchNumberActive');
			$('.dealGlobal' + i).addClass('hide');
		}

	}
		if(index === 2) {
				mapId = 'deal2Map';
			} else if(index === 3) {
				mapId = 'deal3Map';	
			}
			initMap(mapId);
}

	</script>
	<!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAesDd2nC6OMqSypsBYieFgUesN5_MZtxk&callback=initMap">
	</script>
	
<!--
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjB0KQoQfO3zmUUSleq72bdbviN9VGwrM&callback=initMap">
	</script>
-->


</body>
</html>