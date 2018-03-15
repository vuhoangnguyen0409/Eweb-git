(function ($) {

	$(document).ready(function () {
		//call functions
		meanmenu("#nav_global");
		rollover(".service a img, .socials a img", 0.6, 200); // exclusion / opacity / speed
		imgReplace(769, 'img'); // width / object
		//spAutoTel('.tel', 0974487944); // object/ number
		//fixed header
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();
			//console.log(scroll);
			if (scroll > 100) {
				$("header").addClass("fixed");
				$("#wrapper").css({
					'padding-top':'120px'
				});
			} else {
				$("header").removeClass("fixed");
				$("#wrapper").css({
					'padding-top':'0px'
				});
			}
		});
		$(".paginaton .next, .paginaton .prev").parent().hide();
	});// end document ready
	$(window).load(function () {

		//homejs
		//service
		$('.service-icons ul li b').matchHeight();
		//company
		$('.advisor-item').matchHeight();
		$('.blog-txt').matchHeight();
		/* !fancyBox ---------------------------------------------------------------- */
		$('.fancybox').each(function (i) {
			$('a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".gif"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"],a[href$=".GIF"]').each(function () {
				$(this).attr({
					"rel": "grp" + i,
					"title": $('img', $(this)).attr("alt")
				});
			}).fancybox({
				transitionIn: 'elastic', //'elastic', 'fade' or 'none'
				transitionOut: 'elastic', //'elastic', 'fade' or 'none'
				centerOnScroll: true
			});
		});
		//////////////////////////////    dropdown menu   
		$("#nav_global li ul").hide();
		$("#nav_global li").hover(function () {
			$(this).children("ul").stop().slideDown();
		}, function () {
			$(this).children("ul").stop().slideUp();
		});

		/////////////////////////////      add class active to menu of current page (text, no sub-menu)     
		$('#nav_global ul li').each(function () {
			if (window.location.href.indexOf($(this).find('a:first').attr('href')) > -1) // lay href cua element a dau tien trong moi element li roi kiem tra co trong window href khong
			{
				$(this).addClass('active').siblings().removeClass('active');
				$(this).parents('li').addClass('active').siblings().removeClass('active');
				var li_is_text = $(this).children('a').text(); // check text in tag <a>
				//console.log(li_is_text);
				if (li_is_text == '') { // neu menu la hinh
					$('.active > a > img').each(function () {
						var src = $(this).attr('src');
						$(this).attr('src', src.replace('off', 'actived'));
					});
				}
			}
		});
		//////////////////////////         scroll to id trong page (landing page) 
		$('a[href^="#"]').on('click', function (e) {
			var target = this.hash;
			$target = $(target);
			if ($(window).width() > 999) {
				//alert(target);
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top -100
					//'scrollTop': $target.offset().top - 0
				}, 1200, 'swing');
			} else {
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 1200, 'swing');
			}
		});

		///////////////////////////           sroll to id  ngoai page  
		var getHash = window.location.hash;
		//console.log(getHash);
		if ($(window).width() > 480) {
			if (getHash != '') {
				var pst = $(getHash).offset().top;
				//alert(pst);
				$('html,body').animate({
					scrollTop: pst -100
				}, 800);
			}
		}
		
		//animate
		$(".socials p").each(function () {
			var sorder = $(this).index();
			var stime = (sorder + 1) * 500;
			//console.log(stime);
			$(this).animate({
				right: '5px'
			}, stime);
		});
		//pagetop
		$("#pagetop").hide();
		$(window).on("scroll", function () {
			if ($(this).scrollTop() > 100) {
				$('#pagetop').fadeIn('slow');
			} else {
				$('#pagetop').fadeOut('slow');
			}
			scrollHeight = $(document).height();
			scrollPosition = $(window).height() + $(window).scrollTop();
			footHeight = $("footer").innerHeight();
			if (scrollHeight - scrollPosition <= footHeight) {
				$("#pagetop").css({
					"position": "absolute",
					"bottom": footHeight - 87,
					"right": "-100px",
					"z-index": "999999999"
				});
			} else {
				$("#pagetop").css({
					"position": "fixed",
					"bottom": "30px",
					"right": "10px",
					"z-index": "999999999"
				});
			}
		});

	}); // end document

	//----------------------------------------------------------------------------------------------------------
	/* !meanmenu ------------------------------------------------------------ */
	var meanmenu = function (elemClass) {
		$(elemClass).meanmenu({
			meanMenuClose: "×", // クローズボタン
			meanMenuCloseSize: "25px", // クローズボタンのフォントサイズ
			meanMenuOpen: "<span /><span /><span />", // 通常ボタン
			meanRevealPosition: "right", // 表示位置
			meanRevealColour: "", // 背景色
			meanScreenWidth: "1000", // ブレイクポイント)
		});
	};

	///////////////////////////////           hover img_off - img_on
	var rollover = function (exclusion, opacity, speed) {
		$("a img").not(exclusion).each(function () {
			var img = $(this);
			if ($(this).attr("src").match("_off")) {
				$(this).hover(function () {
					$(img).attr("src", $(img).attr("src").replace("_off", "_on"));
				}, function () {
					$(img).attr("src", $(img).attr("src").replace("_on", "_off"));
				});
			} else {
				$(this).hover(function () {
					$(img).stop().animate({
						"opacity": opacity
					}, speed);
				}, function () {
					$(img).stop().animate({
						"opacity": 1
					}, speed);
				});
			}
		});
	};



	////////////////////////////////// imgPeplace pc_sp
	var imgReplace = function (widthReplace, objectReplace) {
		var $setElem = $(objectReplace),
			replaceWidth = widthReplace;
		$setElem.each(function () {
			var $this = $(this);

			function imgSize() {
				var windowWidth = parseInt(window.innerWidth || document.documentElement.clientWidth);
				if (windowWidth >= replaceWidth) {
					$this.attr('src', $this.attr('src').replace('_sp', '_pc'));
				} else if (windowWidth < replaceWidth) {
					$this.attr('src', $this.attr('src').replace('_pc', '_sp'));
				}
			}
			$(window).resize(function () {
				imgSize();
			});
			imgSize();
		});
	};


	///////////////////////////////// !sp auto tel
	var spAutoTel = function (elemClass, telNumber) {
		var device = navigator.userAgent;
		//console.log(device);
		if ((device.indexOf('iPhone') > 0 && device.indexOf('iPad') == -1) || device.indexOf('iPod') > 0 || device.indexOf('Android') > 0) {
			$(elemClass).wrapInner("<a href=tel:" + telNumber + "></a>");
		}
	};
})(jQuery);
