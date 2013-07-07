'use strict';
/* App Module */
angular.module('hwds', ['ngSanitize']).
  config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider){
  $routeProvider.
	  when('/', {templateUrl: 'partials/index.html', controller: IndexCtrl}).
	  when('/ourfirm', {templateUrl: 'partials/our-firm.html', controller: OurFirmCtrl}).
	  when('/publications', {templateUrl: 'partials/publications.html', controller: PublicationsCtrl}).
	  when('/promotions', {templateUrl: 'partials/promotions.html', controller: PromotionsCtrl}).
	  when('/interactive', {templateUrl: 'partials/interactive.html', controller: InteractiveCtrl}).
	  when('/identity', {templateUrl: 'partials/identity.html', controller: IdentityCtrl}).
	  when('/editorial', {templateUrl: 'partials/editorial.html', controller: EditorialCtrl}).
	  when('/newsletters', {templateUrl: 'partials/newsletters.html', controller: NewslettersCtrl}).
	  when('/bilingual', {templateUrl: 'partials/bilingual.html', controller: BilingualCtrl}).
	  when('/events', {templateUrl: 'partials/events.html', controller: EventsCtrl}).
	  when('/minisamplebooks', {templateUrl: 'partials/minisamplebooks.html', controller: MiniSampleBooksCtrl}).
	  when('/contact', {templateUrl: 'partials/contact.html', controller: ContactCtrl}).
	  when('/memberships', {templateUrl: 'partials/memberships.html', controller: MembershipsCtrl}).
	  otherwise({redirectTo: '/'});

  $locationProvider.html5Mode(true);
  $locationProvider.hashPrefix = '!';
}]).directive('scrollbarDirective', function(){
  return function(scope, element, attrs){
	if (scope.$last){
		$('#scrollbar0').tinyscrollbar();
	}
  };
}).directive('popupsDirective', function(){
  return function(scope, element, attrs){
	$("div[rel]").overlay({
		mask: { color: '#000', loadSpeed: 200, opacity: 0.75 },
		onClose: function (){
			$(".popupswap").hide();
			$("#ecardsmain,#imagsmain,#timelessmain,#stuffabusmain").show();
		}
	});
	
	var flashecards = [
		{"id":0,"img":"Bell_Large.jpg","video":"HWDSHolidayCard.swf","w":550,"h":320},
		{"id":1,"img":"LLGEnvelope2-Holidays2009_u.jpg","video":"LLGCard2009.swf","w":720,"h":480},
		{"id":2,"img":"Bell_Large.jpg","video":"HWDSHalloweenCarcd2.swf","w":720,"h":480},
		{"id":3,"img":"MetrolinkEnvelope2010.jpg","video":"MetrolinkHoliday2011_22.swf","w":720,"h":480},
		{"id":4,"img":"EnvelopePenguins.jpg","video":"HWDS-Flash-Card07.swf","w":800,"h":400},
		{"id":5,"img":"LLGEnvelope2Holidays2010.jpg","video":"LLGHoliday2011_10.swf","w":720,"h":480},
		{"id":6,"img":"HDWSEnvelopeHolidays2012open.jpg","video":"HWflash14.swf","w":360,"h":460},
	];
	scope.flashecards = flashecards;
	
	$(".ecardflash").click(function(){
		var id = getID(this);
		swfobject.embedSWF("images/popups/ecards/"+flashecards[id].video, "ecardflashcontent"+id, flashecards[id].w, flashecards[id].h, "9.0.0",null,{},{wmode:"transparent"},{});
		
		$("#ecardsmain").hide();
		$("#ecard"+id+"popup").show();
	});
	$(".imagscontent").click(function(){
		var id = getID(this);
		$("#imagsmain").hide();
		$("#imags"+id+"popup").show();
	});
	$(".timelesscontent").click(function(){
		var id = getID(this);
		$("#timelessmain").hide();
		$("#timeless"+id+"popup").show();
	});
	$(".stuffabuscontent").click(function(){
		var id = getID(this);
		$("#timeless0popup").hide();
		$("#stuffabus"+id+"popup").show();
	});
	$(".csncontent").click(function(){
		var id = getID(this);
		$("#timeless1popup").hide();
		$("#csn"+id+"popup").show();
	});
	$(".traincontent").click(function(){
		var id = getID(this);
		$("#timeless2popup").hide();
		$("#train"+id+"popup").show();
	});
	function getID(el){
		var id = $(el).attr("rel");
		return id.replace(/[^\d]/g, "");//get only the digits
	}
  };
});

/* Controllers */
function IndexCtrl($scope){
	setPageFunctions();
	setPopupLoaders();
	//add the slideshow
	$("#showcase").awShowcase(
	{
		content_width:			1000,
		content_height:			300,
		fit_to_parent:			false,
		auto:					true,
		interval:				5000,
		continuous:				false,
		loading:				true,
		tooltip_width:			200,
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true,
		buttons:				true,
		btn_numbers:			false,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'hslide', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		1000,
		show_caption:			'onload', /* onload/onhover/show */
		thumbnails:				false,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		custom_function:		null /* Define a custom function that runs on content change */
	});
}

function OurFirmCtrl($scope){
	setPageFunctions();
	$('#scrollbar1').tinyscrollbar();
	$('#scrollbar2').tinyscrollbar();
}
function PublicationsCtrl($scope,$http){
	setPageFunctions();
	$http.get('data/publications.json').success(function(data){
		$scope.sections = data;
	});
}
function PromotionsCtrl($scope,$http){
	setPageFunctions();
	$http.get('data/promotions.json').success(function(data){
		$scope.sections = data;
	});
}
function InteractiveCtrl($scope,$http){
	setPageFunctions();
	$('#scrollbar0').tinyscrollbar();
	
	var flashvideos = [
		{"id":0,"img":"LLGCardscreen.jpg","video":"LLGHoliday2011_11.swf","w":720,"h":400},
		{"id":1,"img":"MetrolinkHolidayCard.jpg","video":"MetrolinkHoliday2011_23.swf","w":720,"h":400},
		{"id":2,"img":"wilspenstaticscreen.jpg","video":"wilspen.swf","w":550,"h":300},
		{"id":3,"img":"TakeTransitstaticscreensquare.jpg","video":"TakeTransitSquareWebbanner.swf","w":300,"h":250},
		{"id":4,"img":"TakeTransitstaticscreen3.jpg","video":"TakeTransitNetHorizontalWebbanner.swf","w":720,"h":90},
		{"id":5,"img":"LLGCard2010Screen1.jpg","video":"LLG2010Holidaycard8D.swf","w":720,"h":400},
		{"id":6,"img":"WilsonBridge1.jpg","video":"WilsonBridge-6(300x250).swf","w":300,"h":250},
		{"id":7,"img":"standbaggerstaticscreen.jpg","video":"standbagger.swf","w":500,"h":350},
		{"id":8,"img":"Flyfisherman.jpg","video":"FlyFisherman.swf","w":900,"h":333}
	];
	$scope.flashvideos = flashvideos;
	
	$(".popflash").click(function(){
		var id = $(this).attr("rel");
		id = id.replace(/[^\d]/g, "");//get only the digits
		$(this).overlay({
			mask: { color: '#000', loadSpeed: 200, opacity: 0.75 },
			load: true,
			onBeforeLoad: function (){
				swfobject.embedSWF("images/interactive/"+flashvideos[id].video, "flashcontent"+id, flashvideos[id].w, flashvideos[id].h, "9.0.0",null,{},{wmode:"transparent"},{});
			}
		});
	});
}
function IdentityCtrl($scope,$http){
	setPageFunctions();
	$http.get('data/identity.json').success(function(data){
		$scope.sections = data;
	});
}
function EditorialCtrl($scope,$http){
	setPageFunctions();
	$http.get('data/editorial.json').success(function(data){
		$scope.sections = data;
	});
}
function NewslettersCtrl($scope,$http){
	setPageFunctions();
	$http.get('data/newsletters.json').success(function(data){
		$scope.sections = data;
	});
}
function BilingualCtrl($scope,$http){
	setPageFunctions();
	$http.get('data/bilingual.json').success(function(data){
		$scope.sections = data;
	});
}
function EventsCtrl($scope,$http){
	setPageFunctions();
	$http.get('data/events.json').success(function(data){
		$scope.sections = data;
	});
}
function MiniSampleBooksCtrl(){
	setPageFunctions();
}
function ContactCtrl(){
	setPageFunctions();
}
function MembershipsCtrl(){
	setPageFunctions();
}
function setPopupLoaders(){
	var query = window.location.search.substring(1);
	if(query == 'clients'){
		$("#pages div[rel=#clientspopup]").click();
	} else if(query == 'ecards'){
		$("#pages div[rel=#ecardspopup]").click();
	} else if(query == 'imags'){
		$("#pages div[rel=#imagspopup]").click();
	} else if(query == 'timeless'){
		$("#pages div[rel=#timelesspopup]").click();
	} else if(query == 'advertising'){
		$("#pages div[rel=#advertisingpopup]").click();
	} else if(query == 'branding'){
		$("#pages div[rel=#brandingpopup]").click();
	} else if(query == 'promoting'){
		$("#pages div[rel=#promotingpopup]").click();
	} else if(query == 'webmarketing'){
		$("#pages div[rel=#webmarketingpopup]").click();
	} else if(query == 'green'){
		$("#pages div[rel=#greenpopup]").click();
	}
}
function setPageFunctions(){
	//hide the pre-loader animation
	$('#floatingCirclesG').hide();
	
	//hide whichever popup view is showing
	$("a.ecardsreturn").on("click",function(e){
		e.preventDefault();
		$(".popupswap").hide();
		$("#ecardsmain").show();
	});
	$("a.imagsreturn").on("click",function(e){
		e.preventDefault();
		$(".popupswap").hide();
		$("#imagsmain").show();
	});
	$("a.timelessreturn").on("click",function(e){
		e.preventDefault();
		$(".popupswap").hide();
		$("#timelessmain").show();
	});
	$("a.stuffabusreturn").on("click",function(e){
		e.preventDefault();
		$(".popupswap").hide();
		$("#timeless0popup").show();
	});
	$("a.csnreturn").on("click",function(e){
		e.preventDefault();
		$(".popupswap").hide();
		$("#timeless1popup").show();
	});
	$("a.trainreturn").on("click",function(e){
		e.preventDefault();
		$(".popupswap").hide();
		$("#timeless2popup").show();
	});

	//setup the dropdown menu animation
    $(function() {
    	$('#nyMenu li').hover(function(){
			$('ul', this).slideDown('fast').show();
		}, function () {
			$('ul', this).slideUp('fast');
		});
    });
}
