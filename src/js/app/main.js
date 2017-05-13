var Main = (function (self) {
	var my = self, func = {},
		mockChartData = [
			{
				percentage: 8.3333333,
				label: 'communication',
				color: '#b6c1b6',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "cooperation",
				color: '#719e5e',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "creativity",
				color: '#8bc53e',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "critical thinking",
				color: '#f7d115',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "decision-making",
				color: '#f7921e',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "empathy",
				color: '#f05a23',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: 'negotination',
				color: '#c1272c',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "participation",
				color: '#7e4824',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "problem-solving",
				color: '#a7e3ea',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "resilience",
				color: '#52dbce',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "respect for diversity",
				color: '#3785db',
				fontColor: ''
			},
			{
				percentage: 8.3333333,
				label: "self-management",
				color: '#ddc8b3',
				fontColor: ''
			}
		];

	
	function calculateSectors(data) {
		var sectors = [];
		var colors = [
			"#61C0BF", "#DA507A", "#BB3D49", "#DB4547"
		];

		var l = data.size / 2
		var a = 0 // Angle
		var aRad = 0 // Angle in Rad
		var z = 0 // Size z
		var x = 0 // Side x
		var y = 0 // Side y
		var X = 0 // SVG X coordinate
		var Y = 0 // SVG Y coordinate
		var R = 0 // Rotation

		data.sectors.map(function (item, key) {
			a = 360 * (item.percentage / 100);
			aCalc = (a > 180) ? 360 - a : a;
			aRad = aCalc * Math.PI / 180;
			z = Math.sqrt(2 * l * l - (2 * l * l * Math.cos(aRad)));
			if (aCalc <= 90) {
				x = l * Math.sin(aRad);
			}
			else {
				x = l * Math.sin((180 - aCalc) * Math.PI / 180);
			}

			y = Math.sqrt(z * z - x * x);
			Y = y;

			if (a <= 180) {
				X = l + x;
				arcSweep = 0;
			}
			else {
				X = l - x;
				arcSweep = 1;
			}

			sectors.push({
				percentage: item.percentage,
				label: item.label,
				color: item.color,
				arcSweep: arcSweep,
				L: l,
				X: X,
				Y: Y,
				R: R
			});

			R = R + a;
		})


		return sectors
	}

	//Home
	func.tileBlockHandler = function () {
		$('.tile-block-section').foundation();
	};
	func.drawCustomPieChart = function () {

		
		var containerElem = $("#dvIntroChart"),
			chartWidth = containerElem.outerWidth() - 60,
			chartRenderResult, pathTextTemplate;

			pathTextTemplate = '<use xlink:href="#{ID}" fill="none" stroke="red"  />';
			pathTextTemplate += '<text font-family="robotomedium" font-size="14" fill="white" >';
			pathTextTemplate += '<textPath xlink:href="#{ID}">';
			pathTextTemplate += '{LABEL}';
			pathTextTemplate += '</textPath></text>';
		
		if (chartWidth > 700) {
			chartWidth = 700;
		}
		chartRenderResult = calculateSectors({
			size: chartWidth,
			sectors: mockChartData
		});

		containerElem.html('');

		var newSVG = document.createElementNS("http://www.w3.org/2000/svg","svg"),
			gElem = document.createElement("g"), 
			svgStyle = document.createElement("style"),
			cssText = "path { font-family: 'robotomedium', sans-serif; color: #FFF; }";

		containerElem.append('<div class="chart-desc-wrapper"></div>');		
		svgStyle.appendChild(document.createTextNode(cssText));
		newSVG.setAttributeNS(null, 'style', "width: " + chartWidth + "px; height: " + chartWidth + "px");
		newSVG.appendChild(svgStyle);
		containerElem.get(0).appendChild(newSVG);

		containerElem.find('.chart-desc-wrapper').css({
			width: chartWidth,
			height: chartWidth,
			left: '50%',
			'margin-left': (chartWidth / 2) * -1
		});

		$.each(chartRenderResult, function (idx, sector) {
			var newSector = document.createElementNS( "http://www.w3.org/2000/svg","path" ), id = 'chart_piece_' + idx;
			newSector.setAttribute("id", id);
			newSector.setAttributeNS(null, 'fill', sector.color);
			newSector.setAttributeNS(null, 'd', 'M' + sector.L + ',' + sector.L + ' L' + sector.L + ',0 A' + sector.L + ',' + sector.L + ' 1 0,1 ' + sector.X + ', ' + sector.Y + ' z');
			newSector.setAttributeNS(null, 'transform', 'rotate(' + sector.R + ', '+ sector.L+', '+ sector.L+')');
			
			//Added sector dom
			newSVG.appendChild(newSector);

			var newSectorTextUse = document.createElement("use"),
				newSectorText = document.createElement("text"),
				newSectorTextPath = document.createElement("textPath");
			
			//Set <use> tag
			newSectorTextUse.setAttribute("xlink:href", '#' + id);
			newSectorTextUse.setAttribute("fill", 'none');
			newSectorTextUse.setAttribute("stroke", 'black');

			//Set <textPath> tag
			newSectorTextPath.setAttribute("xlink:href", '#' + id);
			newSectorTextPath.appendChild(document.createTextNode(sector.label));

			//Set <text> tag
			newSectorText.setAttribute("x", '10');
			newSectorText.setAttribute("y", idx * 15);
			newSectorText.setAttribute("font-family", 'robotomedium');
			newSectorText.setAttribute("font-size", '14');
			newSectorText.setAttribute("fill", 'black');
			newSectorText.appendChild(document.createTextNode(sector.label));

			//Append textPath to text
			// newSectorText.appendChild(newSectorTextPath);

			//Append use and text to sector
			newSVG.appendChild(newSectorText);
			
			// containerElem.find('.chart-desc-wrapper').append('<span class="chart-sector-desc" style="width: ' + sector.L + 'px; transform: rotate(' + sector.R + 'deg);"><span class="inner-box"><label>' + sector.label + '</label></span></span>');
			var textRotateDeg = 105 + sector.R,
				labelStyle = idx < (chartRenderResult.length / 2) ? 'flip-text' : '';
			containerElem.find('.chart-desc-wrapper').append('<span class="chart-sector-desc" style="width: ' + sector.L + 'px; transform: rotate(' + textRotateDeg + 'deg)"><span class="inner-box"><label class="' + labelStyle + '">' + sector.label + '</label></span></span>');
		});

		newSVG.appendChild(gElem);

		// var midCircle = document.createElementNS( "http://www.w3.org/2000/svg","circle" );
		// midCircle.setAttributeNS(null, 'cx', data.size * 0.5 );
		// midCircle.setAttributeNS(null, 'cy', data.size * 0.5);
		// midCircle.setAttributeNS(null, 'r', data.size * 0.28 );
		// midCircle.setAttributeNS(null, 'fill', '#42495B' );

		// newSVG.appendChild(midCircle);
	};
	func.initMainBannerSlider = function () {
		var bannerSwiper, logoSwiper,
			bannerSliderOption = {
				loop: true
			},
			logoSliderOption = {
				loop: true,
				slidesPerView: 9,
				spaceBetween: 0,
				prevButton: ".logo-slider-wrapper > .slider-nav-prev",
				nextButton: ".logo-slider-wrapper > .slider-nav-next",
				breakpoints: {
					480: {
						slidesPerView: 3,
						spaceBetween: 10
					},
					640: {
						slidesPerView: 4,
						spaceBetween: 10
					},
					768: {
						slidesPerView: 5,
						spaceBetween: 10
					},
					1023: {
						slidesPerView: 6,
						spaceBetween: 10
					}
				}
			};
		
		$(window).on("resizestop.main-banner", 200, function () {		
			var vpw = verge.viewportW();
			$(".mena-map-layer").removeClass("displayed");

			if (vpw >= 1024) {
				if (logoSwiper && $('.logo-slider-wrapper .swiper-container').hasClass("swiper-container-horizontal")) {
					logoSwiper.destroy(true, true);
				}
				if (bannerSwiper && $('.main-banner-slide-wrapper').hasClass("swiper-container-horizontal")) {
					bannerSwiper.destroy(true, true);					
				}
			} else {
				bannerSwiper = new Swiper('.main-banner-slide-wrapper', bannerSliderOption);
				logoSwiper = new Swiper('.logo-slider-wrapper .swiper-container', logoSliderOption);
			}
		});
		$(window).trigger("resizestop.main-banner");
	};
	func.homeInit = function () {
		func.drawCustomPieChart();
	};

	//Global
	func.closeLanguageMenu = function () {
		var langSelectorWrapper = $(".language-selector");
		if (!langSelectorWrapper.hasClass("animating")) {
			langSelectorWrapper.removeClass("opened");

			setTimeout(function () {
				langSelectorWrapper.removeClass("animating");
			}, 150);
		}
	};
	func.initHeaderMenuEvent = function () {
		var langDdlHeight = $(".language-selector .lang-list").prop("scrollHeight");
		$(".language-selector .lang-list").attr("data-height", langDdlHeight);

		$(".language-selector").on("contextmenu", function () {
			return false;
		});
		$(".btn-language").on("click", function (e) {
			if (!$(this).parent().hasClass("animating")) {
				$(this).parent().toggleClass("opened");

				setTimeout(function () {
					$(".language-selector").removeClass("animating");
				}, 150);
			}
		});

		$(".lang-list li a").on("click", function (e) {
			e.preventDefault();
			var btnLanguage = $(".btn-language"),
				selectedLangText = $(this).parent().data("lang");

			if (!$(this).parent().hasClass("active")) {
				btnLanguage.find(".current-lang").html(selectedLangText);
				if (!/^(en)/gi.test(selectedLangText)) {
					btnLanguage.find(".current-lang").addClass("arabic-reg");
				} else {
					btnLanguage.find(".current-lang").removeClass("arabic-reg");
				}

				$(".lang-list li.active").removeClass("active");
				$(this).parent().addClass("active");
				//Change language here
			}

			func.closeLanguageMenu();
		});

		$(window).on("click.lang-menu", function (e) {
			if (!$(e.target).hasClass("language-selector") && $(e.target).closest(".language-selector").length === 0) {
				func.closeLanguageMenu();
			}
		});

		$(".search-icon").on("click", function () {
			$(".search-box-wrapper").toggleClass("opened");

			if ($(".search-box-wrapper").hasClass("opened")) {
				$(".search-box-wrapper").find("input").focus();
			}
		});
		$(".search-box-wrapper").find("input").on("blur", function () {
			$(".search-box-wrapper").removeClass("opened");
		});
		$('[name="fmSearch"]').submit(function () {
			return false;
		});

		$(".main-menu-toggle").on("click", function () {
			if (!$(".main-menu-bar").hasClass("animating")) {
				$(".main-menu-bar").addClass("animating");

				if (!$(".main-menu-bar").hasClass("displayed")) {
					$(".main-menu-bar").addClass("displayed");
					$("body").addClass("no-scroll");
					setTimeout(function () {
						$(".main-menu-bar").removeClass("animating")
					}, 200);
				} else {
					$(".main-menu-bar").addClass("closing");
					$("body").removeClass("no-scroll");
					setTimeout(function () {
						$(".main-menu-bar").removeClass("displayed closing animating")
					}, 200);
				}
			}
		});
		$(".main-menu-overlay").on("click", function () {
			if (!$(".main-menu-bar").hasClass("animating")) {
				$(".main-menu-bar").addClass("animating closing");
				$("body").removeClass("no-scroll");
				setTimeout(function () {
					$(".main-menu-bar").removeClass("displayed closing animating")
				}, 200);
			}
		});
		$(window).on("resizestop.mobile-menu", 100, function () {
			var vpw = verge.viewportW();
			$(".main-menu-bar.displayed").removeClass("displayed");
			$("body").removeClass("no-scroll");
			$(".search-box-wrapper input").blur();
		});
	};
	func.bindEvent = function () {	
		$('[data-role="banner-button"]').on("click", function () {
			var url = $(this).data("url");
			if (url === "#map") {
				//Show map
				$(".mena-map-layer").toggleClass("displayed");
			} else {
				//Redirect
				window.location.href = url;
			}
		});
		$(".mena-map-layer .close-map").on("click", function (e) {
			e.preventDefault();
			$(".mena-map-layer").toggleClass("displayed");
		});
	};

	//filter
	func.initFilter = function () {
		$(".sidenav-filter-list").attr("data-height", $(".sidenav-filter-list").prop("scrollHeight"));

		$(".filter-sidenav-header").click(function () {
			var filterPanel = $(".sidenav-filter-list"),
				wrapper = $(".filtering-sidenav");
			if (!filterPanel.hasClass("animating")) {
				if (!wrapper.hasClass("open")) {
					wrapper.addClass("open");
					filterPanel.addClass("animating").css({
						height: filterPanel.data("height")
					});
				} else {
					wrapper.removeClass("open");
					filterPanel.addClass("animating").css({
						height: 0
					});
				}
				
				setTimeout(function () {
					filterPanel.removeClass("animating");
				}, 195);
			}
		});
		$(".filter-sidenav-header").on("contextmenu", function () {
			return false;
		});
		$(".sidenav-filter-list a").on("click", function (e) {
			e.preventDefault();
			var filterPanel = $(".sidenav-filter-list"),
				wrapper = $(".filtering-sidenav");

			if (!$(this).parent().hasClass("active")) {
				$(".sidenav-filter-list li.active").removeClass("active");
				$(this).parent().addClass("active");
				func.filterResource();
			}

			wrapper.removeClass("open");
			if (!filterPanel.hasClass("animating")) {
				filterPanel.addClass("animating").css({
					height: 0
				});
				setTimeout(function () {
					filterPanel.removeClass("animating");
				}, 195);
			}	
		});
		$(window).on("click.filter-menu", function (e) {
			if (!$(e.target).hasClass("filtering-sidenav") && $(e.target).closest(".filtering-sidenav").length === 0) {
				var filterPanel = $(".sidenav-filter-list"),
					wrapper = $(".filtering-sidenav");
				
				wrapper.removeClass("open");
				if (!filterPanel.hasClass("animating")) {
					filterPanel.addClass("animating").css({
						height: 0
					});
					setTimeout(function () {
						filterPanel.removeClass("animating");
					}, 195);
				}
			}
		});
	};

	//Glossary
	func.initGlossary = function () {
		$(".index-list a").on("click", function () {
			if ($(this).hasClass("active")) {
				return false;
			}

			if ($(".index-list a.active").length > 0) {
				$(".index-list a.active").removeClass("active");
			}
			$(this).addClass("active");
		});
	};
	my.initGlossaryWaypoint = function () {
		var currentvpw = verge.viewportW(),
			scrollContext = currentvpw >= 1024 ? document.body : document.getElementById('dvPageWrapper');

		var glossaryIdxWp = $('.glossary-index').waypoint(
			function(direction) {
				if (direction === "up") {
					$('.glossary-index').removeClass("sticky");
				} else {
					$('.glossary-index').addClass("sticky");
				}
			}, {
				offset: 0,
				context: scrollContext
			});
		
		var mixlinkWp = $(".link-mix-section").waypoint(
			function(direction) {
				if (direction === "up") {
					$('.glossary-index').addClass("sticky");
				} else {
					$('.glossary-index').removeClass("sticky");
				}
			}, {
				offset: '100%',
				context: scrollContext
			});


		$(window).on("resizestop.glossary-waypoint", function () {
			var vpw = verge.viewportW(),
				currentScrollContext = vpw >= 1024 ? document.body : document.getElementById('dvPageWrapper');
			
			glossaryIdxWp[0].destroy();
			mixlinkWp[0].destroy();
			$('.glossary-index').removeClass("sticky");

			if (vpw < 1024) {
				glossaryIdxWp = $('.glossary-index').waypoint(
					function(direction) {
						if (direction === "up") {
							$('.glossary-index').removeClass("sticky");
						} else {
							$('.glossary-index').addClass("sticky");
						}
					}, {
						offset: 0,
						context: currentScrollContext
					});
				
				mixlinkWp = $(".link-mix-section").waypoint(
					function(direction) {
						if (direction === "up") {
							$('.glossary-index').addClass("sticky");
						} else {
							$('.glossary-index').removeClass("sticky");
						}
					}, {
						offset: '100%',
						context: currentScrollContext
					});
			}			
		});
	};

	//Resource
	func.filterResource = function () {
		if ($("body").data("template") === "resources") {
			var initType = $(".resources-filter-row .filter-block-wrapper .filter-block.active").data("type"),
				initMainCategory = $(".sidenav-filter-list li.active").data("category");

			$(".category-result li.displayed").removeClass("displayed");
			$('.resource-content-wrapper:visible .category-detail-list li[data-main-category="' + initMainCategory + '"]').addClass("displayed");

			$('.resource-content-wrapper:visible .category-detail-list').each(function () {
				var $list = $(this);
				if ($list.find("li:not(.no-item).displayed").length > 0) {
					$list.find("li.no-item").removeClass("displayed");
				} else {
					$list.find("li.no-item").addClass("displayed");
				}
			});
		}		
	};
	func.initResource = function () {
		func.initFilter();
		func.filterResource();

		$(".category-result > li").on("click", function () {
			$(this).toggleClass("opened");
		});

		$(".resources-filter-row .filter-block-wrapper .filter-block").on("click", function () {


			var dataType = $(this).data("type");

			if(dataType === "country") { // show maps
				$(".mena-map-layer").addClass("displayed");
				parallax.callMap();
			} else {
				$(".mena-map-layer").removeClass("displayed");
			}

			if($(this).hasClass("active")) return;

			

			$(".resources-filter-row .filter-block.active").removeClass("active");
			$(this).addClass("active");
			$(".category-result .opened").removeClass("opened");
			$(".resource-content-wrapper.active").removeClass("active");
			$('.resource-content-wrapper[data-type="' + dataType + '"]').addClass("active");

			func.filterResource();
			
		});
	};

	//news
	func.initNewsEvents = function () {
		func.initFilter();

		$(".news-event-paging li:not(.nav)").on("click", function () {
			if (!$(this).hasClass("current")) {
				$(".news-event-paging li.current").removeClass("current");
				$(this).addClass("current");
			}
		})
	};

	//News detail
	func.initNewsDetail = function () {
		if ($(".news-detail-slider .swiper-slide").length > 1) {
			var swiper = new Swiper(".news-detail-slider", {
				paginationClickable: true,
				loop: true,
				nextButton: '.news-detail-slider  .swiper-button-next',
				prevButton: '.news-detail-slider  .swiper-button-prev'
			});
		} else {
			$('.news-detail-slider  .swiper-button-next').remove();
			$('.news-detail-slider  .swiper-button-prev').remove();
		}		
	};

	my.initContactMap = function () {
		var mapOptions = {
			draggable: false,
			scrollwheel: false,
			zoom: 8,
			center: new google.maps.LatLng(31.961551, 35.912010),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById('dvContactMap'), mapOptions);
	};
	func.loadMapScript = function () {
		var script = document.createElement("script");
		script.type = "text/javascript";
		document.getElementsByTagName("head")[0].appendChild(script);
		script.src = 'http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=Main.initContactMap&key=' + $("#dvContactMap").data("map-api-key");
	};
	func.initContact = function () {
		func.loadMapScript();
	};

	my.init = function () {
		setTimeout(function () {
			window.scrollTo(0, 0);
		}, 0);

		var currentTemplate = $("body").data("template");

		$("body").addClass("page-ready");

		func.initHeaderMenuEvent();
		func.initMainBannerSlider();
		func.bindEvent();

		if (currentTemplate === "homepage") {
			// func.tileBlockHandler();
			// func.homeInit();
		}		

		if (currentTemplate === "glossary") {
			func.initGlossary();
		}

		if (currentTemplate === "about") {
			//
		}

		if (currentTemplate === "resources") {
			func.initResource();
		}

		if (currentTemplate === "resources-detail") {
			
		}

		if (currentTemplate === "news-events") {
			func.initNewsEvents();
		}

		if (currentTemplate === "news-event-detail") {
			func.initNewsDetail();
		}

		if (currentTemplate === "contact") {
			func.initContact();
		}

		$(document).foundation();
	};

	return my;
})(Main || {});