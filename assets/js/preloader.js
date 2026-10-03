// preloader.js
(function ($) {
	"use strict";

	// ============================================
	// GSAP CONFIGURATION
	// ============================================
	gsap.config({
		nullTargetWarn: false,
		trialWarn: false,
	});

	if (typeof ScrollTrigger !== "undefined") {
		gsap.registerPlugin(ScrollTrigger);
	}

	// ============================================
	// GLOBAL VARIABLES
	// ============================================
	const html = document.documentElement;
	const body = document.body;

	// ============================================
	// 1. PRELOADER MODULE
	// ============================================
	window.TJPreloader = {
		init: function () {
			const preloader = document.querySelector(".tj-preloader");
			const preloaderSvg = preloader.querySelector("#preloaderSvg");
			const loadingWrap = preloader.querySelector(".loading-container");
			const preloaderText = preloader.querySelector(".tj-preloader_bottom");
			const curve = "M0 502S175 329.5 500 329.5s500 172.5 500 172.5V0H0Z";
			const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

			const preTl = gsap.timeline();

			preTl.to([loadingWrap, preloaderText], {
				delay: 0.5,
				opacity: 0,
				duration: 0.4,
			});

			preTl
				.to(preloaderSvg, {
					duration: 0.4,
					attr: { d: curve },
					ease: "power2.in",
				})
				.to(preloaderSvg, {
					duration: 0.4,
					attr: { d: flat },
				});

			preTl.to(preloader, {
				yPercent: -100,
				duration: 0.4,
				ease: "power2.inOut",
			});
		},
	};
})(jQuery);
