$(document).ready(function () {

	/* Субменю в хедере */

	var slideAllow = true;

	function toggleSmth(someItem, someDir, someSpeed) {
		if (slideAllow)	{
			$(someItem).toggle('slide',  {direction: someDir || 'up'}, someSpeed || 300);
			slideAllow = false;
		}
		setTimeout(function() {slideAllow = true}, 500);
	}

	$('.js-nav-link').hoverIntent(function() {
		if (!$('.js-nav-submenu').is(':visible')) {
			toggleSmth('.js-nav-submenu', 'up');
		}
	}, function() {return true});

	$('.js-nav-wrapper').on('mouseleave', function() {
		closeSubmenu();
	});

	$('.js-nav-out').on('mouseenter', function() {
		closeSubmenu();
	});

	function closeSubmenu() {
		setTimeout(function() {
			if ($('.js-nav-submenu').is(':visible')) {
				if ($('.js-inner-nav-link').is(':visible')) {
					$('.js-inner-nav-link').click();
				} else {
					toggleSmth('.js-nav-submenu', 'up');
				}
			}
		}, 400);
	}

	$('.js-submenu-close').click(function(){
		toggleSmth('.js-nav-submenu', 'up');
	});

	$('.js-to-step-form').click(function(event) {
		event.preventDefault();
		$('html, body').animate({ scrollTop: 620 }, 1000);
	});

	/* Внутреннее субменю */

	$('.js-inner-nav-link').click(function() {
		toggleSmth('.js-nav-submenu', 'up');
	});

	/* Попап в хедере */

	$('header .js-popup-open').click(function() {
		toggleSmth('.js-header-form-wrapper', 'right', 600);
	});

	if ($('.js-header-form-wrapper').length) {
		$(document).click(function(event) {
			if ($('.js-header-form-wrapper').is(':visible')) {
				if(!$(event.target).closest('.js-header-form-wrapper, .js-popup-open').length) {
					toggleSmth('.js-header-form-wrapper', 'right', 600);
				}
			}
		});
	}

	$('header .js-popup-close').click(function() {
		toggleSmth('.js-header-form-wrapper', 'right', 600);
	});

	/* Форма */

	$('.js-fancy-field input, .js-fancy-field textarea').focus(function() {
		$(this).parent().addClass('is-focused').addClass('has-label');
	});

	$('.js-fancy-field input, .js-fancy-field textarea').focusout(function() {
		$(this).parent().removeClass('is-focused');
		if (!$(this).val()) {
			$(this).parent().removeClass('has-label');
		}
	});

	/* Валидация */

	if ($('.js-form').length) {

		$('.js-form').each(function(){
			var $form = $(this);
			$form.ajaxForm({
				url: '/local/ajax/main/step-form.php',
				success : function(responseText){
					console.log(responseText);
					$('.js-form-content', $form).hide();
					$('.js-step-form-nav', $form).hide();
					$('.step-form-step__title', $form).hide()
					$('.js-prev-step', $form).hide()
					$('.step-form-progress-wrapper', $form).hide()
					$('.js-form-success', $form).fadeIn();
				},
				dataType: 'html',
        		type: 'POST'
			});

		});
	}

	/* Телефон */

	if($('.js-phone').length) {

		$('.js-phone').mask("+7 999 999 99 99");

	}

	/* Форма онлайн-записи */

	changeProgress();

	function changeProgress(index) {
		var countAllow = $('.step-form-nav__step--active', $('.js-step-form')).length;
		var width = 25 * countAllow;
		$('.js-step-progress').css('width', width + '%');
	}

	var trashAllow = true;

	/* Клик выбора типа мусора */

	$('.js-trash-item').click(function() {
		if (!$(this).hasClass('trash-type-item--active') && trashAllow) {
			$('.js-trash-item').removeClass('trash-type-item--active');
			$(this).addClass('trash-type-item--active');
			$('.js-trash-value').attr('NAME', '');
			$('.js-trash-value', $(this)).attr('NAME', 'ST_TTYPE');
			$('.js-next-step', $(this).closest('.js-single-step')).removeClass('button-disabled');
			trashAllow = false;
		}
		setTimeout(function() {trashAllow = true}, 300);
    });

	/* Отменить выбор типа мусора */

	$('.js-trash-close').click(function() {
		var index = $(this).closest('.js-single-step').index();
		$('.js-trash-item').removeClass('trash-type-item--active');
		$('.js-trash-value').attr('NAME', '');
		$('.js-next-step', $(this).closest('.js-single-step')).addClass('button-disabled')
		trashAllow = false;
		setTimeout(function() {trashAllow = true}, 300);
	});

	/* Переход между шагами */

	$('.js-next-step').click(function() {
		var nextIndex = $(this).closest('.js-single-step').index() + 1;
		if (!$(this).hasClass('button-disabled')) {
			$(this).closest('.js-single-step').hide();
			$(this).closest('.js-single-step').next().fadeIn();
			$('.js-step-nav').eq(nextIndex).addClass('step-form-nav__step--active');
			changeProgress();
		}

	});

	$('.js-prev-step').click(function() {
		var prevIndex = $(this).closest('.js-single-step').index() - 1;
		$(this).closest('.js-single-step').hide();
		$(this).closest('.js-single-step').prev().fadeIn();
	});

	$('.js-add-dist-block input').bind('input', function() {
		var parentStep = $('.js-district-list').closest('.js-single-step')
		var index = parentStep.index();
		if ($(this).val().length < 3) {
			$('.js-next-step', parentStep).addClass('button-disabled');
		} else {
			$('.js-next-step', parentStep).removeClass('button-disabled');
		}
	    //console.log($(this).val().length)
	});

	$('.js-add-dist-block input').keydown(function(event){
	    if(event.keyCode == 13) {
	        event.preventDefault();
	        var newDist = $(this).val();
	        if (newDist) {
	        $('.js-district-list').append('<div class="step-district__item"><span>' + newDist + '<span class="step-district__item-close js-dist-close"></span></span><input type="hidden" value="' + newDist + '"></div>');
	        }
	        checkDistAmount();
	        return false;
	    }
	});

	checkDistAmount();

	function checkDistAmount() {
		var parentStep = $('.js-district-list').closest('.js-single-step')
		var index = parentStep.index();
	    if ($('.js-district-list').children().length == 0) {
	        $('.js-add-dist-block').fadeIn();
	        $('.js-next-step', parentStep).addClass('button-disabled');
	    } else {
	        $('.js-add-dist-block').fadeOut();
	        $('.js-next-step', parentStep).removeClass('button-disabled');
	    }
	}

	/* Кол-во контейнеров */

	$('.js-cont-type').click(function() {
		var parentStep = $(this).closest('.js-single-step');
		var index = $(this).index();
		var thisSlide = $('.js-cont-slide').eq(index);
		$('[type="checkbox"]', $('.js-cont-slide')).attr("checked", false);
		$('[type="checkbox"]', thisSlide).attr("checked", true);
		$('.js-cont-amount').not($('input', thisSlide)).attr('name', '');
		$('.js-cont-amount', thisSlide).attr('name', 'ST_CNUM').focus();
		$('.js-cont-type').removeClass('step-cont-type--active');
		$(this).addClass('step-cont-type--active');
		if (!$('.js-cont-slide').eq(index).is(':visible')) {
			$('.js-cont-slide').not(this).hide();
			thisSlide.fadeIn();
			$('.js-cont-amount', thisSlide).attr('name', 'ST_CNUM').focus();
		}
		$('.js-next-step', parentStep).removeClass('button-disabled');
	});

	/* Карта в футере */

	if ($('#ya-map').length) {

				var myMap,
					myPlacemark;


				function init(){
					myMap = new ymaps.Map ("ya-map", {
						center: [55.75167978, 37.81655332],
						zoom: 15
					});

					myPlacemark = new ymaps.Placemark([55.75167978, 37.81655332], {
						hintContent: 'MUSORY-NET'
					});

					myMap.geoObjects.add(myPlacemark);

					myMap.controls.add('zoomControl', { left: 5, top: 5 })
				}

		ymaps.ready(init);
	}

	if ($('#gg-map').length) {
		function ggInitialize() {
	    var mapCanvas = document.getElementById('gg-map');
	    // var ggStyleArray = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dde6e8"},{"visibility":"on"}]}]
	    // var styledMap = new google.maps.StyledMapType(ggStyleArray,
	    // 	{name: "Styled Map"});
	    var mapOptions = {
					center: new google.maps.LatLng(55.76567978, 37.81655332),
					zoom: 12,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					mapTypeControlOptions: {
						mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
					}
	    		}
	        var ggMap = new google.maps.Map(mapCanvas, mapOptions)

	        var ggMarker = new google.maps.Marker({
				position: new google.maps.LatLng(55.75167978, 37.81655332),
				map: ggMap,
				icon: '/local/templates/main/img/map-mark.png'
			});

			// ggMap.mapTypes.set('map_style', styledMap);
			// ggMap.setMapTypeId('map_style');
		}
		google.maps.event.addDomListener(window, 'load', ggInitialize);
	}

	var toggles = document.querySelectorAll(".c-hamburger");

	for (var i = toggles.length - 1; i >= 0; i--) {
		var toggle = toggles[i];
		toggleHandler(toggle);
	};

	function toggleHandler(toggle) {
		toggle.addEventListener( "click", function(e) {
			e.preventDefault();
			(this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
		});
	}

	$('dl.tabs dt').click(function(){
        $(this)
            .siblings().removeClass('tab-selected').end()
            .next('dd').andSelf().addClass('tab-selected');
    });

    var accAllow = true;

    $('.accordion a').click(function(event) {
        event.preventDefault();
        if (accAllow) {
            accAllow = false;
            var parent = $(this).closest('section');
            if (!parent.hasClass('selected')) {
                $('.accordion section').removeClass('selected');
                parent.addClass('selected');
                $('.inner-form-section').addClass('inner-form-section--border')
            } else {
                parent.removeClass('selected');
            }
            setTimeout(function() {
                accAllow = true;
            }, 400);
        }
    });

    if ($('.grid').length) {
	    $('.grid').masonry({
			itemSelector: '.grid__item',
			columnWidth: 300,
			gutter: 60
		});
	}

});
