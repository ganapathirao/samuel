<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
	// Navbar
	//var navbarHeight = $('#menu').outerHeight();
	//var fullHeight = $(window).outerHeight() - navbarHeight;
	//$('#tempLoader').css('height', fullHeight);
	$( window ).on( "load resize", function () {
		"use strict";
		$( "#tempLoader" ).fadeOut( "slow" );
	} );
</script>
<style>
	#tempLoader {
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100vh;
		z-index: 9990;
		background-color: #ffffff;
		display: flex;
	}
	
	.spinLoader {
		z-index: 9991;
		margin: auto;
	}
</style>

<div id="tempLoader">
	<i class="fa fa-spinner fa-spin spinLoader" style="font-size:42px"></i>
</div>