jQuery.fn.exists = function(callback) {
	var args = [].slice.call(arguments, 1);
	if (this.length) {
		callback.call(this, args);
	}
	return this;
};
(function ($) {
	'use strict';

	var TCViralblog = {

		initReady: function() {
			this.stickyMenu();
			this.searchBox();
			this.mobileMenu();
			this.scrollTop();
			this.hideSocial();
			this.pinterest();
			this.loadSocialScript(document, 'script');

			if (typeof loadStyle != 'undefined') {
				if (loadStyle === 'infinite') {
					this.infiniteScroll();
				} else {
					this.infiniteLoading();	
				}
			}
		},
		stickyMenu: function() {
			var self = this;

			var catcher = $('#catcher'),
				sticky  = $('#sticky'),
				bodyTop = $('body').offset().top;

			if ( sticky.length ) {
				$(window).scroll(function() {
					self.stickThatMenu(sticky,catcher,bodyTop);
				});
				$(window).resize(function() {
					self.stickThatMenu(sticky,catcher,bodyTop);
				});
			}
		},
		isScrolledTo: function(elem,top) {
			var docViewTop = $(window).scrollTop();
			var docViewBottom = docViewTop + $(window).height();

			var elemTop = $(elem).offset().top - top;
			var elemBottom = elemTop + $(elem).height();

			return ((elemTop <= docViewTop));
		},
		stickThatMenu: function(sticky,catcher,top) {
			var self = this;

			if(self.isScrolledTo(sticky,top)) {
				sticky.addClass('sticky-nav');
				catcher.height(sticky.height());
			} 
			var stopHeight = catcher.offset().top;
			if ( stopHeight > sticky.offset().top) {
				sticky.removeClass('sticky-nav');
				catcher.height(0);
			}
		},
		mobileMenu: function() {
			var $top_menu = $('.top-navigation');
			var $secondary_menu = $('.main-navigation');
			var $first_menu = '';
			var $second_menu = '';

			if ($top_menu.length == 0 && $secondary_menu.length == 0) {
				return;
			} else {
				if ($top_menu.length) {
					$first_menu = $top_menu;
					if($secondary_menu.length) {
						$second_menu = $secondary_menu;
					}
				} else {
					$first_menu = $secondary_menu;
				}
			}
			var menu_wrapper = $first_menu
			.clone().attr('class', 'top-navigation')
			.wrap('<div id="mobile-menu-wrapper" class="mobile-only"></div>').parent().hide()
			.appendTo('body');
			
			// Add items from the other menu
			if ($second_menu.length) {
				$second_menu.find('ul.menu').clone().appendTo('#mobile-menu-wrapper .top-navigation');
			}

			$('.toggle-mobile-menu').click(function(e) {
				e.preventDefault();
				e.stopPropagation();
				$('#mobile-menu-wrapper').show(); // only required once
				$('body').toggleClass('mobile-menu-active');
			});

			$('#page').click(function() {
				if ($('body').hasClass('mobile-menu-active')) {
					$('body').removeClass('mobile-menu-active');
				}
			});

			if($('#wpadminbar').length) {
				$('#mobile-menu-wrapper').addClass('wpadminbar-active');
			}

		},
		searchBox: function() {
			$('.btn-search').on('click', function(e) {
				e.preventDefault();
				var hasActive = $(this).hasClass('active');
				if(!hasActive) {
					$(this).addClass('active');
					$('.search-wraper').addClass('active');
				} else {
					$(this).removeClass('active');
					$('.search-wraper').removeClass('active');
				}
			});
		},
		hideSocial: function() {
			$('.btn-hide').on('click', function(e) {
				e.preventDefault();
				var open = $(this).hasClass('active');
				if(!open) {
					$(this).addClass('active');
					$('.sharing-top-float').addClass('hide-social');
				} else {
					$(this).removeClass('active');
					$('.sharing-top-float').removeClass('hide-social');
				}
			});
		},
		infiniteLoading: function() {
			var pageNumber = 2;
			
			$('#load-more-post').on('click', function(e) {

				if (pageNumber <= totalPages) {
					var that = this;
					e.preventDefault();
					$.ajax({
						url: AdminAjaxURL.ajaxurl,
						type:'POST',
						data: 'action=infinite_scroll&page_no='+ pageNumber,
						beforeSend : function() {
							$(that).html($(that).data('loading'));
						}
						
					}).done(function(html) {
						$('.post-container').append(html); 
						$(that).html($(that).data('more'));
					});
					pageNumber++;

					if ( pageNumber > totalPages ) {
						$(this).parent().hide();
					}
				}

				e.preventDefault();
			});
		},
		infiniteScroll: function() {
			var pageNumber = 2;
			var isLoading = false;
			$(window).scroll(function(){
				
				if($(window).scrollTop() + $(window).height() > $('#main').height()) {

					if (pageNumber <= totalPages && isLoading === false) {
						$.ajax({
							url: AdminAjaxURL.ajaxurl,
							type: 'POST',
							data: 'action=infinite_scroll&page_no='+ pageNumber,
							beforeSend: function () {
								isLoading = true;
								$('.scroll-loading').show();
							},
							success: function (data) {
								$('.post-container').append(data); 
								isLoading = false;
								pageNumber++;
								$('.scroll-loading').removeAttr('style');
							}
							
						});
					}
				}
			}); 
		},
		scrollTop: function() {
			var scrollDes = 'html,body';  
			// Opera does a strange thing if we use 'html' and 'body' together so my solution is to do the UA sniffing thing
			if(navigator.userAgent.match(/opera/i)){
				scrollDes = 'html';
			}
			// Show ,Hide
			$(window).scroll(function () {
				if ($(this).scrollTop() > 130) {
					$('.back-to-top').addClass('filling').removeClass('hiding');
					// $('.sharing-top-float').fadeIn();
				} else {
					$('.back-to-top').removeClass('filling').addClass('hiding');
					// $('.sharing-top-float').fadeOut();
				}
			});
			// Scroll to top when click
			$('.back-to-top').click(function () {
				$(scrollDes).animate({ 
					scrollTop: 0
				},{
					duration :500
				});

			});
		},
		pinterest: function() {
			//pinterest
			$('.social-pinterst').on('click', function(e) {
				e.preventDefault();
				try {
					var e = document.createElement('script');
					e.setAttribute('type', 'text/javascript');
					e.setAttribute('charset', 'UTF-8');
					e.setAttribute('src', '//assets.pinterest.com/js/pinmarklet.js?r=' + Math.random() * 99999999);
					document.body.appendChild(e);
				
				} catch (e) {

				}
				//record share
				Nova.Social.recordShare($(this).attr('data-socialsite'), $(this).attr('data-location'), Nova.System.articleId);
			});
		},
		loadSocialScript: function(d,s) {
			var js, fjs = d.getElementsByTagName(s)[0],
			load = function(url, id) {
				if (d.getElementById(id)) {
					return;
				}
				js = d.createElement(s);
				js.src = url;
				js.id = id;
				fjs.parentNode.insertBefore(js, fjs);
			};
			$('span.facebookbtn, .fb-like-box').exists(function() {
				load('//connect.facebook.net/en_US/all.js#xfbml=1', 'fbjssdk');
			});
			$('span.gplusbtn').exists(function() {
				load('https://apis.google.com/js/plusone.js', 'gplus1js');
			});
			$('span.twitterbtn').exists(function() {
				load('//platform.twitter.com/widgets.js', 'tweetjs');
			});
			$('span.linkedinbtn').exists(function() {
				load('//platform.linkedin.com/in.js', 'linkedinjs');
			});
			$('span.pinbtn, .tc-pinterest-profile').exists(function() {
					load('//assets.pinterest.com/js/pinit.js', 'pinterestjs');
			});
			$('span.stumblebtn').exists(function() {
				load('//platform.stumbleupon.com/1/widgets.js', 'stumbleuponjs');
			});

		}
	}

	$(document).ready(function () {
		TCViralblog.initReady();
	});

})(jQuery);