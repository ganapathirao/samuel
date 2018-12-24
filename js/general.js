// Main Function

// TO REMOVE $ AND , FROM CURRENCY MASK => VARIABLENAME.replace(/[$,]/g,'');

$('.navbarTransactions, .navbarProperty').hide();

// Login Hide
$('.loginCol2').hide();

// New Deal Work flow hide
$('.newDealColAddSponsor, .newDealColWithSponsor, .newDealIndividualDiv, .newDealExistingSponsorNextButton').hide();

// New Deal Work flow global hide
//$('.dealGlobal2, .dealGlobal3').hide();

$(document).ready(function () {
	"use strict";

	if (window.location.href.indexOf("dashboard") > -1 ||
		window.location.href.indexOf("newdeal") > -1 ||
		window.location.href.indexOf("index") > -1) {
		$('.navbarMainSection').hide();
	} else {
		$('.bodyMain').css('padding-top', '140px');
	}

	$('.navbar3Menu, .navbarLevel3Div').mouseover(function () {
		var index = $(this).data("id");
		if (index === 1) {
			$('.navbarTransactions').slideDown();
			$('.navbarProperty').hide();
		} else if (index === 2) {
			$('.navbarTransactions').hide();
			$('.navbarProperty').slideDown();
		}
	});

	$('.navbarLevel3Section').mouseover(function () {}).mouseleave(function () {
		$('.navbarTransactions').slideUp();
		$('.navbarProperty').slideUp();
	});


	$('.selectBoxJs0').select2({
		placeholder: "CHOOSE A PROPERTY",
		allowClear: true,
		width: '100%'
	});


	// Currency Mask

	$(function () {
		$('.currencyMask').maskMoney({
			prefix: '$'
		});
	});
});

// Process Navbar

function closeNavbarMain() {
	"use strict";
	//		$('.navbarMainSection').slideUp();
	window.location.replace("dashboard.php");
}

// Process Deal Functions (Main Handler)

function processDeal(event) {
	"use strict";

	var dealType;

	if (document.getElementById('businessCheck').checked) {
		dealType = document.getElementById('businessCheck').value;
	} else if (document.getElementById('individualCheck').checked) {
		dealType = document.getElementById('individualCheck').value;
	}

	if (event === 'add') {
		$('.newDealColNoSponsor, .newDealNextButton').hide();
		$('.newDealColAddSponsor').fadeIn();
		$('#overlay').toggleClass('overlayDiv');
	} else if (event === 'cancel') {
		$('.newDealColNoSponsor, .newDealNextButton').fadeIn();
		$('.newDealColAddSponsor').hide();
		$('#overlay').toggleClass('overlayDiv');
	} else if (dealType === 'business') {
		$('.newDealBusinessDiv').fadeIn();
		$('.newDealIndividualDiv').hide();
	} else if (dealType === 'individual') {
		$('.newDealBusinessDiv').hide();
		$('.newDealIndividualDiv').fadeIn();
	}
}

//		function newDealSteps(index) {
//	"use strict";
////	 if(dealType === 'newDealStep1') {
//	for(var i = 0; i < 4; i++) {
//		if(index === i) {
//			$('.dealSwitch' + index).addClass('switchActive');
//			$('.dealSwitchNumber' + index).addClass('dealSwitchNumberActive');
//			$('.dealGlobal' + index).fadeIn();
//		} else {
//			$('.dealSwitch' + i).removeClass('switchActive');
//			$('.dealSwitchNumber' + i).removeClass('dealSwitchNumberActive');
//			$('.dealGlobal' + i).hide();
//		}
//	}
//
//}

$(window).on('load resize', function () {
	"use strict";

	var windowWidth = $(window).innerWidth();
	var windowHeight = $(window).innerHeight();

	//	alert(windowWidth);

	// AG-Grid

	var navPanelHeight = $('.transSizingNavSection').height();
	var navbarHeight = $('#menu').height() + $('#menu2').height();
	//	var loanPanelHeight = $('#globalTransLoanPanel').height() + navPanelHeight;
	var loanPanelHeight = windowHeight - ($('#globalTransLoanPanel').height() + navbarHeight + navPanelHeight);
	//	var bridgePanelHeight = $('#globalTransBridgePanel').height() + navPanelHeight;
	var bridgePanelHeight = windowHeight - ($('#globalTransBridgePanel').height() + navbarHeight + navPanelHeight);

	if (loanPanelHeight) {
		$('#myGrid').css('height', loanPanelHeight);
	} else if (bridgePanelHeight) {
		$('#myGrid').css('height', bridgePanelHeight);
	}

	// AG-Grid End

	if (windowWidth > 2500) {
		var newDealCol1Height = $('.newDeal1SubDiv').height() + 100;
		$('.newDealColNoSponsor').css('height', newDealCol1Height);
	}

	AOS.init({
		easing: 'ease-in-out-sine'
	});

	//  New Deal Map Step 3

	var deal3MapWidth = $('.newDeal3PropertyCol1Div').innerHeight() - 140;
	$('#deal3Map').css('height', deal3MapWidth);

});

function revealSignIn() {
	"use strict";
	$('.loginCol1').slideUp();
	$('.loginCol2').slideDown();
	$('.logoLink').css('color', '#131313');
}

$('.filterLink').on('click', function () {
	"use strict";
	var index = $(this).data("id");
	for (var i = 0; i < 7; i++) {
		if (index === i) {
			$('.filterLink' + index).addClass('filterLinkActive');
			$('.filterNumber' + index).addClass('filterNumberActive');
		} else {
			$('.filterLink' + i).removeClass('filterLinkActive');
			$('.filterNumber' + i).removeClass('filterNumberActive');
		}
	}
});

$('.dealDetailsFavorite').on('click', function () {
	"use strict";
	var index = $(this).data("id");
	$('.heart' + index).toggleClass('far');
	$('.heart' + index).toggleClass('fas');
});

$('.dealDetailsText').on('click', function () {
	"use strict";
	$('.filterSection').slideToggle();
});

//  Select Option Box

$(".selectBox").change(function () {
	"use strict";
	$("option:selected", this).toggleClass(".selectedBox");
	//    $(".selectBox").attr("class", selected);
});

// Scroll To

//$('a[href^="#"]').on('click', function (e) {
//	e.preventDefault();
//
//	var target = this.hash,
//		$target = $(target);
//
//	$('html, body').stop().animate({
//		'scrollTop': $target.offset().top - 70
//	}, 500, 'swing', function () {
//		window.location.hash = target;
//		window.location.hash = target;
//	});
//});
