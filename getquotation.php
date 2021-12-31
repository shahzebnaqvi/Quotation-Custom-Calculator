<!DOCTYPE html>
<?php include_once('connection.php'); ?>
<!-- saved from url=(0060)getquote/ -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>:root{--litepicker-container-months-color-bg: #fff;--litepicker-container-months-box-shadow-color: #ddd;--litepicker-footer-color-bg: #fafafa;--litepicker-footer-box-shadow-color: #ddd;--litepicker-tooltip-color-bg: #fff;--litepicker-month-header-color: #333;--litepicker-button-prev-month-color: #9e9e9e;--litepicker-button-next-month-color: #9e9e9e;--litepicker-button-prev-month-color-hover: #2196f3;--litepicker-button-next-month-color-hover: #2196f3;--litepicker-month-width: calc(var(--litepicker-day-width) * 7);--litepicker-month-weekday-color: #9e9e9e;--litepicker-month-week-number-color: #9e9e9e;--litepicker-day-width: 38px;--litepicker-day-color: #333;--litepicker-day-color-hover: #2196f3;--litepicker-is-today-color: #f44336;--litepicker-is-in-range-color: #bbdefb;--litepicker-is-locked-color: #9e9e9e;--litepicker-is-start-color: #fff;--litepicker-is-start-color-bg: #2196f3;--litepicker-is-end-color: #fff;--litepicker-is-end-color-bg: #2196f3;--litepicker-button-cancel-color: #fff;--litepicker-button-cancel-color-bg: #9e9e9e;--litepicker-button-apply-color: #fff;--litepicker-button-apply-color-bg: #2196f3;--litepicker-button-reset-color: #909090;--litepicker-button-reset-color-hover: #2196f3;--litepicker-highlighted-day-color: #333;--litepicker-highlighted-day-color-bg: #ffeb3b}.show-week-numbers{--litepicker-month-width: calc(var(--litepicker-day-width) * 8)}.litepicker{font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;font-size:0.8em;display:none}.litepicker button{border:none;background:none}.litepicker .container__main{display:-webkit-box;display:-ms-flexbox;display:flex}.litepicker .container__months{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;background-color:var(--litepicker-container-months-color-bg);border-radius:5px;-webkit-box-shadow:0 0 5px var(--litepicker-container-months-box-shadow-color);box-shadow:0 0 5px var(--litepicker-container-months-box-shadow-color);width:calc(var(--litepicker-month-width) + 10px);-webkit-box-sizing:content-box;box-sizing:content-box}.litepicker .container__months.columns-2{width:calc((var(--litepicker-month-width) * 2) + 20px)}.litepicker .container__months.columns-3{width:calc((var(--litepicker-month-width) * 3) + 30px)}.litepicker .container__months.columns-4{width:calc((var(--litepicker-month-width) * 4) + 40px)}.litepicker .container__months.split-view .month-item-header .button-previous-month,.litepicker .container__months.split-view .month-item-header .button-next-month{visibility:visible}.litepicker .container__months .month-item{padding:5px;width:var(--litepicker-month-width);-webkit-box-sizing:content-box;box-sizing:content-box}.litepicker .container__months .month-item-header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;font-weight:500;padding:10px 5px;text-align:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;color:var(--litepicker-month-header-color)}.litepicker .container__months .month-item-header div{-webkit-box-flex:1;-ms-flex:1;flex:1}.litepicker .container__months .month-item-header div>.month-item-name{margin-right:5px}.litepicker .container__months .month-item-header div>.month-item-year{padding:0}.litepicker .container__months .month-item-header .reset-button{color:var(--litepicker-button-reset-color)}.litepicker .container__months .month-item-header .reset-button>svg{fill:var(--litepicker-button-reset-color)}.litepicker .container__months .month-item-header .reset-button *{pointer-events:none}.litepicker .container__months .month-item-header .reset-button:hover{color:var(--litepicker-button-reset-color-hover)}.litepicker .container__months .month-item-header .reset-button:hover>svg{fill:var(--litepicker-button-reset-color-hover)}.litepicker .container__months .month-item-header .button-previous-month,.litepicker .container__months .month-item-header .button-next-month{visibility:hidden;text-decoration:none;padding:3px 5px;border-radius:3px;-webkit-transition:color 0.3s, border 0.3s;transition:color 0.3s, border 0.3s;cursor:default}.litepicker .container__months .month-item-header .button-previous-month *,.litepicker .container__months .month-item-header .button-next-month *{pointer-events:none}.litepicker .container__months .month-item-header .button-previous-month{color:var(--litepicker-button-prev-month-color)}.litepicker .container__months .month-item-header .button-previous-month>svg,.litepicker .container__months .month-item-header .button-previous-month>img{fill:var(--litepicker-button-prev-month-color)}.litepicker .container__months .month-item-header .button-previous-month:hover{color:var(--litepicker-button-prev-month-color-hover)}.litepicker .container__months .month-item-header .button-previous-month:hover>svg{fill:var(--litepicker-button-prev-month-color-hover)}.litepicker .container__months .month-item-header .button-next-month{color:var(--litepicker-button-next-month-color)}.litepicker .container__months .month-item-header .button-next-month>svg,.litepicker .container__months .month-item-header .button-next-month>img{fill:var(--litepicker-button-next-month-color)}.litepicker .container__months .month-item-header .button-next-month:hover{color:var(--litepicker-button-next-month-color-hover)}.litepicker .container__months .month-item-header .button-next-month:hover>svg{fill:var(--litepicker-button-next-month-color-hover)}.litepicker .container__months .month-item-weekdays-row{display:-webkit-box;display:-ms-flexbox;display:flex;justify-self:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;color:var(--litepicker-month-weekday-color)}.litepicker .container__months .month-item-weekdays-row>div{padding:5px 0;font-size:85%;-webkit-box-flex:1;-ms-flex:1;flex:1;width:var(--litepicker-day-width);text-align:center}.litepicker .container__months .month-item:first-child .button-previous-month{visibility:visible}.litepicker .container__months .month-item:last-child .button-next-month{visibility:visible}.litepicker .container__months .month-item.no-previous-month .button-previous-month{visibility:hidden}.litepicker .container__months .month-item.no-next-month .button-next-month{visibility:hidden}.litepicker .container__days{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;justify-self:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:center;-webkit-box-sizing:content-box;box-sizing:content-box}.litepicker .container__days>div,.litepicker .container__days>a{padding:5px 0;width:var(--litepicker-day-width)}.litepicker .container__days .day-item{color:var(--litepicker-day-color);text-align:center;text-decoration:none;border-radius:3px;-webkit-transition:color 0.3s, border 0.3s;transition:color 0.3s, border 0.3s;cursor:default}.litepicker .container__days .day-item:hover{color:var(--litepicker-day-color-hover);-webkit-box-shadow:inset 0 0 0 1px var(--litepicker-day-color-hover);box-shadow:inset 0 0 0 1px var(--litepicker-day-color-hover)}.litepicker .container__days .day-item.is-today{color:var(--litepicker-is-today-color)}.litepicker .container__days .day-item.is-locked{color:var(--litepicker-is-locked-color)}.litepicker .container__days .day-item.is-locked:hover{color:var(--litepicker-is-locked-color);-webkit-box-shadow:none;box-shadow:none;cursor:default}.litepicker .container__days .day-item.is-in-range{background-color:var(--litepicker-is-in-range-color);border-radius:0}.litepicker .container__days .day-item.is-start-date{color:var(--litepicker-is-start-color);background-color:var(--litepicker-is-start-color-bg);border-top-left-radius:5px;border-bottom-left-radius:5px;border-top-right-radius:0;border-bottom-right-radius:0}.litepicker .container__days .day-item.is-start-date.is-flipped{border-top-left-radius:0;border-bottom-left-radius:0;border-top-right-radius:5px;border-bottom-right-radius:5px}.litepicker .container__days .day-item.is-end-date{color:var(--litepicker-is-end-color);background-color:var(--litepicker-is-end-color-bg);border-top-left-radius:0;border-bottom-left-radius:0;border-top-right-radius:5px;border-bottom-right-radius:5px}.litepicker .container__days .day-item.is-end-date.is-flipped{border-top-left-radius:5px;border-bottom-left-radius:5px;border-top-right-radius:0;border-bottom-right-radius:0}.litepicker .container__days .day-item.is-start-date.is-end-date{border-top-left-radius:5px;border-bottom-left-radius:5px;border-top-right-radius:5px;border-bottom-right-radius:5px}.litepicker .container__days .day-item.is-highlighted{color:var(--litepicker-highlighted-day-color);background-color:var(--litepicker-highlighted-day-color-bg)}.litepicker .container__days .week-number{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:var(--litepicker-month-week-number-color);font-size:85%}.litepicker .container__footer{text-align:right;padding:10px 5px;margin:0 5px;background-color:var(--litepicker-footer-color-bg);-webkit-box-shadow:inset 0px 3px 3px 0px var(--litepicker-footer-box-shadow-color);box-shadow:inset 0px 3px 3px 0px var(--litepicker-footer-box-shadow-color);border-bottom-left-radius:5px;border-bottom-right-radius:5px}.litepicker .container__footer .preview-date-range{margin-right:10px;font-size:90%}.litepicker .container__footer .button-cancel{background-color:var(--litepicker-button-cancel-color-bg);color:var(--litepicker-button-cancel-color);border:0;padding:3px 7px 4px;border-radius:3px}.litepicker .container__footer .button-cancel *{pointer-events:none}.litepicker .container__footer .button-apply{background-color:var(--litepicker-button-apply-color-bg);color:var(--litepicker-button-apply-color);border:0;padding:3px 7px 4px;border-radius:3px;margin-left:10px;margin-right:10px}.litepicker .container__footer .button-apply:disabled{opacity:0.7}.litepicker .container__footer .button-apply *{pointer-events:none}.litepicker .container__tooltip{position:absolute;margin-top:-4px;padding:4px 8px;border-radius:4px;background-color:var(--litepicker-tooltip-color-bg);-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.25);box-shadow:0 1px 3px rgba(0,0,0,0.25);white-space:nowrap;font-size:11px;pointer-events:none;visibility:hidden}.litepicker .container__tooltip:before{position:absolute;bottom:-5px;left:calc(50% - 5px);border-top:5px solid rgba(0,0,0,0.12);border-right:5px solid transparent;border-left:5px solid transparent;content:""}.litepicker .container__tooltip:after{position:absolute;bottom:-4px;left:calc(50% - 4px);border-top:4px solid var(--litepicker-tooltip-color-bg);border-right:4px solid transparent;border-left:4px solid transparent;content:""}
</style>
	
		<title>GetQuote</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="wordpress-704365-2339844.cloudwaysapps.com » Feed" href="feed/">
<link rel="alternate" type="application/rss+xml" title="wordpress-704365-2339844.cloudwaysapps.com » Comments Feed" href="comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./GetQuote/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="wp-block-library-css" href="./GetQuote/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wc-blocks-vendors-style-css" href="./GetQuote/wc-blocks-vendors-style.css" type="text/css" media="all">
<link rel="stylesheet" id="wc-blocks-style-css" href="./GetQuote/wc-blocks-style.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-layout-css" href="./GetQuote/woocommerce-layout.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="./GetQuote/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="./GetQuote/woocommerce.css" type="text/css" media="all">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="woolementor-css" href="./GetQuote/front.min.css" type="text/css" media="all">
<link rel="stylesheet" id="woolementor-grid-css" href="./GetQuote/cx-grid.min.css" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-css" href="./GetQuote/style.min(1).css" type="text/css" media="all">
<link rel="stylesheet" id="hello-elementor-theme-style-css" href="./GetQuote/theme.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="./GetQuote/frontend-lite.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-7-css" href="./GetQuote/post-7.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="./GetQuote/elementor-icons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-pro-css" href="./GetQuote/frontend.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="./GetQuote/global.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-630-css" href="./GetQuote/post-630.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="./GetQuote/css" type="text/css" media="all">
<script type="text/javascript" src="./GetQuote/jquery.min.js.download" id="jquery-core-js"></script>
<script type="text/javascript" src="./GetQuote/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>
<link rel="https://api.w.org/" href="wp-json/"><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/630"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.8.2">
<meta name="generator" content="WooCommerce 6.0.0">
<link rel="canonical" href="getquote/">
<link rel="shortlink" href="?p=630">
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwordpress-704365-2339844.cloudwaysapps.com%2Fgetquote%2F">
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwordpress-704365-2339844.cloudwaysapps.com%2Fgetquote%2F&amp;format=xml">
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"></head>
<body class="page-template page-template-elementor_canvas page page-id-630 theme-hello-elementor woocommerce-js woolementor wl elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-630 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop">
			<div data-elementor-type="wp-page" data-elementor-id="630" class="elementor elementor-630" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-d3529bf elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="d3529bf" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1436px; left: 0px;">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ae1ff10" data-id="ae1ff10" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-ecd7962 elementor-widget elementor-widget-template" data-id="ecd7962" data-element_type="widget" data-widget_type="template.default">
				<div class="elementor-widget-container">
					<div class="elementor-template">
					<div data-elementor-type="section" data-elementor-id="304" class="elementor elementor-304" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-704aa88d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="704aa88d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ff8c465" data-id="1ff8c465" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-280506be elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="280506be" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7e675787 elementor-hidden-tablet elementor-hidden-phone" data-id="7e675787" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-575cec4a" data-id="575cec4a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1262b31f elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1262b31f" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget.elementor-icon-list--layout-inline .elementor-widget-container{overflow:hidden}.elementor-widget .elementor-icon-list-items.elementor-inline-items{margin-right:-8px;margin-left:-8px}.elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:8px;margin-left:8px}.elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{width:auto;left:auto;right:auto;position:relative;height:100%;border-top:0;border-bottom:0;border-right:0;border-left-width:1px;border-style:solid;right:-8px}.elementor-widget .elementor-icon-list-items{list-style-type:none;margin:0;padding:0}.elementor-widget .elementor-icon-list-item{margin:0;padding:0;position:relative}.elementor-widget .elementor-icon-list-item:after{position:absolute;bottom:0;width:100%}.elementor-widget .elementor-icon-list-item,.elementor-widget .elementor-icon-list-item a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:inherit}.elementor-widget .elementor-icon-list-icon+.elementor-icon-list-text{-ms-flex-item-align:center;align-self:center;padding-left:5px}.elementor-widget .elementor-icon-list-icon{display:-webkit-box;display:-ms-flexbox;display:flex}.elementor-widget .elementor-icon-list-icon svg{width:var(--e-icon-list-icon-size,1em);height:var(--e-icon-list-icon-size,1em)}.elementor-widget .elementor-icon-list-icon i{width:1.25em;font-size:var(--e-icon-list-icon-size)}.elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon{text-align:var(--e-icon-list-icon-align)}.elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon svg{margin:var(--e-icon-list-icon-margin,0 calc(var(--e-icon-list-icon-size, 1em) * .25) 0 0)}.elementor-widget.elementor-list-item-link-full_width a{width:100%}.elementor-widget.elementor-align-center .elementor-icon-list-item,.elementor-widget.elementor-align-center .elementor-icon-list-item a{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-align-center .elementor-icon-list-item:after{margin:auto}.elementor-widget.elementor-align-center .elementor-inline-items{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-align-left .elementor-icon-list-item,.elementor-widget.elementor-align-left .elementor-icon-list-item a{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.elementor-widget.elementor-align-left .elementor-inline-items{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-widget.elementor-align-right .elementor-icon-list-item,.elementor-widget.elementor-align-right .elementor-icon-list-item a{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;text-align:right}.elementor-widget.elementor-align-right .elementor-icon-list-items{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after{right:0}@media (max-width:1024px){.elementor-widget.elementor-tablet-align-center .elementor-icon-list-item,.elementor-widget.elementor-tablet-align-center .elementor-icon-list-item a,.elementor-widget.elementor-tablet-align-center .elementor-icon-list-items{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-tablet-align-center .elementor-icon-list-item:after{margin:auto}.elementor-widget.elementor-tablet-align-left .elementor-icon-list-items{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-widget.elementor-tablet-align-left .elementor-icon-list-item,.elementor-widget.elementor-tablet-align-left .elementor-icon-list-item a{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.elementor-widget.elementor-tablet-align-right .elementor-icon-list-items{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-widget.elementor-tablet-align-right .elementor-icon-list-item,.elementor-widget.elementor-tablet-align-right .elementor-icon-list-item a{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;text-align:right}.elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after{right:0}}@media (max-width:767px){.elementor-widget.elementor-mobile-align-center .elementor-icon-list-item,.elementor-widget.elementor-mobile-align-center .elementor-icon-list-item a,.elementor-widget.elementor-mobile-align-center .elementor-icon-list-items{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-mobile-align-center .elementor-icon-list-item:after{margin:auto}.elementor-widget.elementor-mobile-align-left .elementor-icon-list-items{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-widget.elementor-mobile-align-left .elementor-icon-list-item,.elementor-widget.elementor-mobile-align-left .elementor-icon-list-item a{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.elementor-widget.elementor-mobile-align-right .elementor-icon-list-items{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-widget.elementor-mobile-align-right .elementor-icon-list-item,.elementor-widget.elementor-mobile-align-right .elementor-icon-list-item a{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;text-align:right}.elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after{right:0}}</style>		<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-map-marker"></i>						</span>
										<span class="elementor-icon-list-text">Dummy Address</span>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-envelope1"></i>						</span>
										<span class="elementor-icon-list-text">dummy@gmail.com</span>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c528eed" data-id="5c528eed" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7eb72ede e-grid-align-right e-grid-align-mobile-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="7eb72ede" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);-webkit-box-pack:var(--justify-content,center);-ms-flex-pack:var(--justify-content,center);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));height:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;background-color:#818a91;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#818a91}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{-webkit-border-radius:10%;border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{-webkit-border-radius:50%;border-radius:50%}</style>		<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-pulse elementor-repeater-item-affc141" target="_blank">
						<span class="elementor-screen-only">Facebook-f</span>
						<i class="fab fa-facebook-f"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-pulse elementor-repeater-item-fdcec2a" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<i class="fab fa-twitter"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-google-plus-g elementor-animation-pulse elementor-repeater-item-f61d2f4" target="_blank">
						<span class="elementor-screen-only">Google-plus-g</span>
						<i class="fab fa-google-plus-g"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-pulse elementor-repeater-item-c53ccda" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<i class="fab fa-instagram"></i>					</a>
				</span>
					</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7017932c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7017932c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67be9c5" data-id="67be9c5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-7e16407d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7e16407d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4f0eafe4" data-id="4f0eafe4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-60479e0e elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="60479e0e" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>													<a href="getquote/#">
							<img width="148" height="84" src="./GetQuote/dummy-logo.png" class="attachment-full size-full" alt="" loading="lazy">								</a>
															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4d7d6d09" data-id="4d7d6d09" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-0ca3af5 elementor-nav-menu__align-left elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="0ca3af5" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
						<nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade"><ul id="menu-1-0ca3af5" class="elementor-nav-menu" data-smartmenus-id="1640690954537456"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-375"><a href="" class="elementor-item">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433"><a href="about/" class="elementor-item">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-503"><a href="shop-now/" class="elementor-item">Shop</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-432"><a href="faqs/" class="elementor-item">FAQs</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-443"><a href="contactus/" class="elementor-item">Contactus</a></li>
</ul></nav>
					<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
			<i class="eicon-menu-bar" aria-hidden="true"></i>
			<span class="elementor-screen-only">Menu</span>
		</div>
			<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true"><ul id="menu-2-0ca3af5" class="elementor-nav-menu" data-smartmenus-id="16406909545405828"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-375"><a href="" class="elementor-item">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433"><a href="about/" class="elementor-item">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-503"><a href="shop-now/" class="elementor-item">Shop</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-432"><a href="faqs/" class="elementor-item">FAQs</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-443"><a href="contactus/" class="elementor-item">Contactus</a></li>
</ul></nav>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d607dac elementor-hidden-tablet elementor-hidden-phone" data-id="d607dac" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4318be7b elementor-align-right elementor-widget elementor-widget-button" data-id="4318be7b" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="getquotation.php" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-pulse" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Get A Quote</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				</div>
		</div>
				</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f6027c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f6027c9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-49a1b75" data-id="49a1b75" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-c2aee2f elementor-widget elementor-widget-heading" data-id="c2aee2f" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Get QUOTE</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-086a630 elementor-icon-list--layout-inline elementor-align-center elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="086a630" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Home</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Get Quote</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-64f2a7b elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="64f2a7b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1436px; left: 0px;">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9f8d8d" data-id="f9f8d8d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-6f4d92f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f4d92f" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a8710ee" data-id="a8710ee" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-207db67 elementor-tabs-view-horizontal elementor-widget elementor-widget-tabs" data-id="207db67" data-element_type="widget" data-widget_type="tabs.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper{width:25%;-ms-flex-negative:0;flex-shrink:0}.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active{border-right-style:none}.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after,.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before{height:999em;width:0;right:0;border-right-style:solid}.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before{top:0;-webkit-transform:translateY(-100%);-ms-transform:translateY(-100%);transform:translateY(-100%)}.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after{top:100%}.elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title{display:table-cell}.elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active{border-bottom-style:none}.elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after,.elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before{bottom:0;height:0;width:999em;border-bottom-style:solid}.elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before{right:100%}.elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after{left:100%}.elementor-widget-tabs .elementor-tab-content,.elementor-widget-tabs .elementor-tab-title,.elementor-widget-tabs .elementor-tab-title:after,.elementor-widget-tabs .elementor-tab-title:before,.elementor-widget-tabs .elementor-tabs-content-wrapper{border:1px #d4d4d4}.elementor-widget-tabs .elementor-tabs{text-align:left}.elementor-widget-tabs .elementor-tabs-wrapper{overflow:hidden}.elementor-widget-tabs .elementor-tab-title{cursor:pointer;outline:var(--focus-outline,none)}.elementor-widget-tabs .elementor-tab-desktop-title{position:relative;padding:20px 25px;font-weight:700;line-height:1;border:solid transparent}.elementor-widget-tabs .elementor-tab-desktop-title.elementor-active{border-color:#d4d4d4}.elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:after,.elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:before{display:block;content:"";position:absolute}.elementor-widget-tabs .elementor-tab-mobile-title{padding:10px;cursor:pointer}.elementor-widget-tabs .elementor-tab-content{padding:20px;display:none}@media (max-width:767px){.elementor-tabs .elementor-tab-content,.elementor-tabs .elementor-tab-title{border-style:solid solid none}.elementor-tabs .elementor-tabs-wrapper{display:none}.elementor-tabs .elementor-tabs-content-wrapper{border-bottom-style:solid}.elementor-tabs .elementor-tab-content{padding:10px}}@media (min-width:768px){.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs{display:-webkit-box;display:-ms-flexbox;display:flex}.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-content-wrapper{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;border-style:solid solid solid none}.elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-content{border-style:none solid solid}.elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper,.elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper,.elementor-widget-tabs.elementor-tabs-alignment-stretch .elementor-tabs-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex}.elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-horizontal .elementor-tab-title{width:100%}.elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-vertical .elementor-tab-title{height:100%}.elementor-tabs .elementor-tab-mobile-title{display:none}}</style>		<div class="elementor-tabs">
			<div class="elementor-tabs-wrapper" role="tablist">
									<div id="elementor-tab-title-3401" class="elementor-tab-title elementor-tab-desktop-title elementor-active" aria-selected="true" data-tab="1" role="tab" tabindex="0" aria-controls="elementor-tab-content-3401" aria-expanded="true">On-Grid Solutions</div>
									<div id="elementor-tab-title-3402" class="elementor-tab-title elementor-tab-desktop-title" aria-selected="false" data-tab="2" role="tab" tabindex="-1" aria-controls="elementor-tab-content-3402" aria-expanded="false">Hybrid Solutions</div>
									<div id="elementor-tab-title-3403" class="elementor-tab-title elementor-tab-desktop-title" aria-selected="false" data-tab="3" role="tab" tabindex="-1" aria-controls="elementor-tab-content-3403" aria-expanded="false">Off-Grid Solution</div>
							</div>
			<div class="elementor-tabs-content-wrapper" role="tablist" aria-orientation="vertical">
									<div class="elementor-tab-title elementor-tab-mobile-title elementor-active" aria-selected="true" data-tab="1" role="tab" tabindex="0" aria-controls="elementor-tab-content-3401" aria-expanded="true">On-Grid Solutions</div>
					<div id="elementor-tab-content-3401" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-3401" tabindex="0" style="display: block;"><h3 style="text-align: center;">On-Grid Solution</h3><p style="text-align: center;">		</p><div data-elementor-type="page" data-elementor-id="711" class="elementor elementor-711" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-b36859c elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="b36859c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1436px; left: -179.067px;">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-789273b" data-id="789273b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-9fce8e3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9fce8e3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fd77b93" data-id="fd77b93" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-403d8da elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="403d8da" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
				<div class="elementor-widget-container">
					<form  method="post" name="offgrid" action="invoice.php">
						<input type="hidden" name="solar" value="On-Grid Solutions">
			<input type="hidden" name="post_id" value="711">
			<input type="hidden" name="form_id" value="403d8da">
			<input type="hidden" name="referer_title" value="GetQuote">

							<input type="hidden" name="token" value="<?php echo rand(10000,99999); ?>">
			
			<div class="elementor-form-fields-wrapper elementor-labels-above">


				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">Name</label>		
					<div class="elementor-field elementor-select-wrapper ">
						<input name="name" class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>
				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">E-mail</label>
					<div class="elementor-field elementor-select-wrapper ">
						<input name="email"  class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>
				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">Phone</label>
					<div class="elementor-field elementor-select-wrapper ">
						<input name="phone"  class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>


					




								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-50">
					<label for="form-field-field_d6c99f0" class="elementor-field-label">Inverter</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="inverter" id="form-field-field_d6c99f0" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Inverter" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']." </option>";
		}
		?></select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_2837765 elementor-col-50 elementor-field-required">
					<label for="form-field-field_2837765" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">

						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Inverter" GROUP BY kilowatt order by kilowatt ASC';
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_2837765-'.$i.'" name="inverterkw" required="required" aria-required="true"> <label for="form-field-field_2837765-'.$i.'">'.$row['kilowatt'].' Kw  </label></span>';
								$i++;
							}
						?>

						<!-- <span class="elementor-field-option"><input type="radio" value="5 Kw" id="form-field-field_2837765-0" name="form_fields[field_2837765]" required="required" aria-required="true"> <label for="form-field-field_2837765-0">5 Kw</label></span>
						<span class="elementor-field-option"><input type="radio" value="10 Kw" id="form-field-field_2837765-1" name="form_fields[field_2837765]" required="required" aria-required="true"> <label for="form-field-field_2837765-1">10 Kw</label></span>
						<span class="elementor-field-option"><input type="radio" value="15 Kw" id="form-field-field_2837765-2" name="form_fields[field_2837765]" required="required" aria-required="true"> <label for="form-field-field_2837765-2">15 Kw</label></span> -->

					</div>				
				</div>
								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_16c5881 elementor-col-50">
					<label for="form-field-field_16c5881" class="elementor-field-label">Panels</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="panels" id="form-field-field_16c5881" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Panels" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']."  </option>";
		}
		?></select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_74e057e elementor-col-50">
					<label for="form-field-field_74e057e" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">

						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Panels" GROUP BY kilowatt order by kilowatt ASC';
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_74e057e-'.$i.'" name="panelskw" required="required" aria-required="true"> <label for="form-field-field_74e057e-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>
					</div>				</div>
								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_7b95779 elementor-col-50">
					<label for="form-field-field_7b95779" class="elementor-field-label">Structure</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="structure" id="form-field-field_7b95779" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Structure" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']." </option>";
		}
		?>			</select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_7a564ad elementor-col-50">
					<label for="form-field-field_7a564ad" class="elementor-field-label">Voltage</label>
					<div class="elementor-field-subgroup  elementor-subgroup-inline">

						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Structure" GROUP BY kilowatt order by kilowatt ASC';
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_7a564ad-'.$i.'" name="structurekw" required="required" aria-required="true"> <label for="form-field-field_7a564ad-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>

					</div>				</div>
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
					<label for="form-field-field_7a564ad" class="elementor-field-label">Labour, Miscellaneous Components, Transport and Earthing Pit charges should be included in the quotation.</label><button type="submit" class="elementor-button elementor-size-sm">
						<span>
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text" >Get quote</span>
													</span>
					</button>
				</div>
			</div>
		</form>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>
		<p></p></div>
									<div class="elementor-tab-title elementor-tab-mobile-title" aria-selected="false" data-tab="2" role="tab" tabindex="-1" aria-controls="elementor-tab-content-3402" aria-expanded="false">Hybrid Solutions</div>
					<div id="elementor-tab-content-3402" class="elementor-tab-content elementor-clearfix" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-3402" tabindex="0" hidden="hidden"><h3 style="text-align: center;">Hybrid Solution</h3><p style="text-align: center;">		</p><div data-elementor-type="page" data-elementor-id="770" class="elementor elementor-770" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-dd0ca64 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd0ca64" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a7cec1" data-id="4a7cec1" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-16ebd23 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="16ebd23" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1436px; left: 0px;">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-974e098" data-id="974e098" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-f34c02e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f34c02e" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-eb2e491" data-id="eb2e491" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8f231b2 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="8f231b2" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
				<div class="elementor-widget-container">
					<form  method="post" name="offgrid" action="invoice.php">
						<input type="hidden" name="solar" value="Hybrid Solutions">
			<input type="hidden" name="post_id" value="770">
			<input type="hidden" name="form_id" value="8f231b2">
			<input type="hidden" name="referer_title" value="GetQuote">

							<input type="hidden" name="token" value="<?php echo rand(10000,99999); ?>">
			
			<div class="elementor-form-fields-wrapper elementor-labels-above">


				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">Name</label>		
					<div class="elementor-field elementor-select-wrapper ">
						<input name="name" class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>
				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">E-mail</label>
					<div class="elementor-field elementor-select-wrapper ">
						<input name="email"  class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>
				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">Phone</label>
					<div class="elementor-field elementor-select-wrapper ">
						<input name="phone"  class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>

								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-50">
					<label for="form-field-field_d6c99f0" class="elementor-field-label">Inverter</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="inverter" id="form-field-field_d6c99f0" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Inverter" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']."  </option>";
		}
		?>
				<!-- <option value="Medium Quality SOFAR">Medium Quality SOFAR</option><option value="High Quality Inverex NITROX/Infini">High Quality Inverex NITROX/Infini</option> -->		
					</select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_2837765 elementor-col-50 elementor-field-required">
					<label for="form-field-field_2837765" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">

						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Panels" GROUP BY kilowatt order by kilowatt ASC';
							// echo $sql;
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_2837765-'.$i.'" name="inverterkw" required="required" aria-required="true"> <label for="form-field-field_2837765-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>

					</div>				</div>
								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_16c5881 elementor-col-50">
					<label for="form-field-field_16c5881" class="elementor-field-label">Panels</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="panels" id="form-field-field_16c5881" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Panels" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']."  </option>";
		}
		?>
						</select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_74e057e elementor-col-50">
					<label for="form-field-field_74e057e" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">


						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Panels" GROUP BY kilowatt order by kilowatt ASC';
							// echo $sql;
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_74e057e-'.$i.'" name="panelskw" required="required" aria-required="true"> <label for="form-field-field_74e057e-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>

						<!-- <span class="elementor-field-option"><input type="radio" value="10 Kw" id="form-field-field_74e057e-0" name="form_fields[field_74e057e]"> <label for="form-field-field_74e057e-0">10 Kw</label></span>

						<span class="elementor-field-option"><input type="radio" value="20 Kw" id="form-field-field_74e057e-1" name="form_fields[field_74e057e]"> <label for="form-field-field_74e057e-1">20 Kw</label></span> -->

					</div>				</div>
								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_7b95779 elementor-col-50">
					<label for="form-field-field_7b95779" class="elementor-field-label">Structure</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="structure" id="form-field-field_7b95779" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Structure" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']."  </option>";
		}
		?>			</select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_7a564ad elementor-col-50">
					<label for="form-field-field_7a564ad" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">


						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Structure" GROUP BY kilowatt order by kilowatt ASC';
							// echo $sql;
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_7a564ad-'.$i.'" name="structurekw" required="required" aria-required="true"> <label for="form-field-field_7a564ad-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>

					</div>				</div>
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
					<label for="form-field-field_7a564ad" class="elementor-field-label">Labour, Miscellaneous Components, Transport and Earthing Pit charges should be included in the quotation.</label><button type="submit" class="elementor-button elementor-size-sm">
						<span>
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">Get quote</span>
													</span>
					</button>
				</div>
			</div>
		</form>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>
		<p></p></div>
									<div class="elementor-tab-title elementor-tab-mobile-title" aria-selected="false" data-tab="3" role="tab" tabindex="-1" aria-controls="elementor-tab-content-3403" aria-expanded="false">Off-Grid Solution</div>
					<div id="elementor-tab-content-3403" class="elementor-tab-content elementor-clearfix" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-3403" tabindex="0" hidden="hidden"><h3 style="text-align: center;">Off-Grid Solution</h3><p style="text-align: center;">		</p><div data-elementor-type="page" data-elementor-id="780" class="elementor elementor-780" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-3c6d8d7 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="3c6d8d7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1436px; left: 0px;">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-59058be" data-id="59058be" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-1033ace elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1033ace" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-36df68f" data-id="36df68f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1448526 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="1448526" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
				<div class="elementor-widget-container">
					<form  method="post" name="offgrid" action="invoice.php">
						<input type="hidden" name="solar" value="Off-Grid Solution">
			<input type="hidden" name="post_id" value="780">
			<input type="hidden" name="form_id" value="1448526">
			<input type="hidden" name="referer_title" value="GetQuote">

							<input type="hidden" name="token" value="<?php echo rand(10000,99999); ?>">
			
			<div class="elementor-form-fields-wrapper elementor-labels-above">


				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">Name</label>		
					<div class="elementor-field elementor-select-wrapper ">
						<input name="name" class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>
				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">E-mail</label>
					<div class="elementor-field elementor-select-wrapper ">
						<input name="email"  class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>
				<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-33">
					<label for="" class="elementor-field-label">Phone</label>
					<div class="elementor-field elementor-select-wrapper ">
						<input name="phone"  class="elementor-field-textual elementor-size-sm" required="">
					</div>
				</div>

								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d6c99f0 elementor-col-50">
					<label for="form-field-field_d6c99f0" class="elementor-field-label">Inverter</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="inverter" id="form-field-field_d6c99f0" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Inverter" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']."  </option>";
		}
		?>
				<!-- <option value="Low Quality ">Low Quality </option><option value="Medium Quality SOFAR/SAJ">Medium Quality SOFAR/SAJ</option><option value="High Quality KNOX/CHINT">High Quality KNOX/CHINT</option> -->			</select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_2837765 elementor-col-50 elementor-field-required">
					<label for="form-field-field_2837765" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">
						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Inverter" GROUP BY kilowatt order by kilowatt ASC';
							// echo $sql;
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_2837765-'.$i.'" name="inverterkw" required="required" aria-required="true"> <label for="form-field-field_2837765-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>

					</div>				</div>
								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_16c5881 elementor-col-50">
					<label for="form-field-field_16c5881" class="elementor-field-label">Panels</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="panels" id="form-field-field_16c5881" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Panels" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']."  </option>";
		}
		?>
							</select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_74e057e elementor-col-50">
					<label for="form-field-field_74e057e" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">

						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Panels" GROUP BY kilowatt order by kilowatt ASC';
							// echo $sql;
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_74e057e-'.$i.'" name="panelskw" required="required" aria-required="true"> <label for="form-field-field_74e057e-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>

					</div>				</div>
								<div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_7b95779 elementor-col-50">
					<label for="form-field-field_7b95779" class="elementor-field-label">Structure</label>		<div class="elementor-field elementor-select-wrapper ">
			<select name="structure" id="form-field-field_7b95779" class="elementor-field-textual elementor-size-sm">
				<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Structure" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value='".$row['quality']."' >".$row['quality']."  </option>";
		}
		?>		</select>
		</div>
						</div>
								<div class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-field_7a564ad elementor-col-50">
					<label for="form-field-field_7a564ad" class="elementor-field-label">Voltage</label><div class="elementor-field-subgroup  elementor-subgroup-inline">

						<?php
							$sql = 'SELECT `kilowatt` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Panels" GROUP BY kilowatt order by kilowatt ASC';
							// echo $sql;
							$result = mysqli_query(connect_db(),$sql);
							$i=0;
							while($row = mysqli_fetch_assoc($result)){
								// echo "<option>".$row['kilowatt']."</option>";


								echo '<span class="elementor-field-option"><input type="radio" value="'.$row['kilowatt'].'" id="form-field-field_7a564ad-'.$i.'" name="structurekw" required="required" aria-required="true"> <label for="form-field-field_7a564ad-'.$i.'">'.$row['kilowatt'].' Kw </label></span>';
								$i++;
							}
						?>



					</div>				</div>
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">

					<label for="form-field-field_7a564ad" class="elementor-field-label">Labour, Miscellaneous Components, Transport and Earthing Pit charges should be included in the quotation.</label><button type="submit" class="elementor-button elementor-size-sm">
						<span>
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">Get quote</span>
													</span>
					</button>
				</div>
			</div>
		</form>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>
		<p></p></div>
							</div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-420cd1d elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="420cd1d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1436px; left: 0px;">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ac8f775" data-id="ac8f775" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-29aef38 elementor-widget elementor-widget-template" data-id="29aef38" data-element_type="widget" data-widget_type="template.default">
				<div class="elementor-widget-container">
					<div class="elementor-template">
					<div data-elementor-type="section" data-elementor-id="310" class="elementor elementor-310" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-424a72f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="424a72f5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4673113a" data-id="4673113a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-a50f693 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a50f693" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-26693a10" data-id="26693a10" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2765bcc4 elementor-widget elementor-widget-image" data-id="2765bcc4" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="148" height="84" src="./GetQuote/dummy-logo.png" class="attachment-full size-full" alt="" loading="lazy">															</div>
				</div>
				<div class="elementor-element elementor-element-43945dfd elementor-widget elementor-widget-text-editor" data-id="43945dfd" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p>Lorem ipsum dolor sit amet, consect etuer adipiscing elit, sed diam nonu mmy nibh euis</p>						</div>
				</div>
				<div class="elementor-element elementor-element-653baf8b e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="653baf8b" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
					<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-pulse elementor-repeater-item-b7b26a1" target="_blank">
						<span class="elementor-screen-only">Facebook-square</span>
						<i class="fab fa-facebook-square"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-pulse elementor-repeater-item-436e8f3" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<i class="fab fa-twitter"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-icon-google-plus elementor-animation-pulse elementor-repeater-item-4451df6" target="_blank">
						<span class="elementor-screen-only">Icon-google-plus</span>
						<i class="icon icon-google-plus"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-pulse elementor-repeater-item-cfc73c5" target="_blank">
						<span class="elementor-screen-only">Linkedin</span>
						<i class="fab fa-linkedin"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest-p elementor-animation-pulse elementor-repeater-item-db564d7" target="_blank">
						<span class="elementor-screen-only">Pinterest-p</span>
						<i class="fab fa-pinterest-p"></i>					</a>
				</span>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-363601f1" data-id="363601f1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-43388e62 elementor-widget elementor-widget-heading" data-id="43388e62" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Services</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-771262d1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="771262d1" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Conditions</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Terms of Use </span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Our Services</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">New Guests List</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">The Team List</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-df73e97 elementor-hidden-tablet elementor-hidden-phone" data-id="df73e97" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-27796d4b elementor-widget elementor-widget-heading" data-id="27796d4b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Latest Post</h4>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-146c299b" data-id="146c299b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2dfe536 elementor-widget elementor-widget-heading" data-id="2dfe536" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Subscribe</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-6e5b95b0 elementor-widget elementor-widget-text-editor" data-id="6e5b95b0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Get the latest updates via email. Any time you may unsubscribe</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-51082892 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51082892" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-423741e9" data-id="423741e9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-27768ba6 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="27768ba6" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1576f6c4" data-id="1576f6c4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-658b1014 elementor-icon-list--layout-inline elementor-align-left elementor-mobile-align-center elementor-widget__width-auto elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="658b1014" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">2021- 2022 © powered by</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-7980458a elementor-icon-list--layout-inline elementor-align-left elementor-mobile-align-center elementor-widget__width-auto elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7980458a" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="/#">

											<span class="elementor-icon-list-text">Dummy.</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-60589652" data-id="60589652" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7030b306 elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7030b306" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Privacy  </span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Terms</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Site map</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="getquote/#">

											<span class="elementor-icon-list-text">Help</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				</div>
		</div>
				</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>
			<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel="stylesheet" id="elementor-post-304-css" href="./GetQuote/post-304.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-711-css" href="./GetQuote/post-711.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-770-css" href="./GetQuote/post-770.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-780-css" href="./GetQuote/post-780.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-310-css" href="./GetQuote/post-310.css" type="text/css" media="all">
<link rel="stylesheet" id="e-animations-css" href="./GetQuote/animations.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="./GetQuote/fontawesome.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="./GetQuote/brands.min.css" type="text/css" media="all">
<script type="text/javascript" src="./GetQuote/jquery.blockUI.min.js.download" id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="./GetQuote/add-to-cart.min.js.download" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="./GetQuote/js.cookie.min.js.download" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="./GetQuote/woocommerce.min.js.download" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_84224eb486c2da79bb93ceb8d00585dd","fragment_name":"wc_fragments_84224eb486c2da79bb93ceb8d00585dd","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" src="./GetQuote/cart-fragments.min.js.download" id="wc-cart-fragments-js"></script>
<script type="text/javascript" id="woolementor-js-extra">
/* <![CDATA[ */
var WOOLEMENTOR = {"ajaxurl":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/wp-admin\/admin-ajax.php","_nonce":"80fbfb830b","icon":";;;;;;;;;;;;;;;;;;;,,:;;;;;;;;;;;;;;;;;;\n;;;;;;;;;;;;;;;;'.    .,;;;;;;;;;;;;;;;;\n;;;;;;;;;;;;;.            .;;;;;;;;;;;;;\n;;;;;;;;;'.                  .';;;;;;;;;\n;;;;;:.                          .;;;;;;\n;;:.                                .:;;\n;;.                                  .;;\n;;.   .;;;;;;;;;;;:. .;;;,. .:;;;.   .;;\n;;.    ;;;;;;;;;;;;;;;;;,  .;;;;;    .;;\n;;.     ';;;;;; ':;;;;;. .:;;;.      ;;;\n;;.      .;;;;:..;;;;;;..:;;;;.      .;;\n;;.       .;;;;;;;;;;;;:;;;;;.       .;;\n;;.        .;;;;;;;:.;;;;;;;.        .;;\n;;.          ;;;;;,  ';;;;;          .;;\n;;.           ';;.    .;;'           .;;\n;;;.            ..    ..            .;;;\n;;;;;,.                          .,;;;;;\n;;;;;;;;:..                  ..:;;;;;;;;\n;;;;;;;;;;;;,.            .,;;;;;;;;;;;;\n;;;;;;;;;;;;;;;:..     .:;;;;;;;;;;;;;;;\n;;;;;;;;;;;;;;;;;;,..';;;;;;;;;;;;;;;;;;","widgets":["shop-classic","shop-standard","shop-flip","shop-trendy","shop-curvy","shop-curvy-horizontal","shop-slider","shop-accordion","shop-table","shop-beauty","filter-horizontal","filter-vertical","product-title","product-breadcrumbs","product-short-description","product-variations","product-add-to-cart","product-sku","product-categories","product-tags","product-thumbnail","product-add-to-wishlist","pricing-table-advanced","pricing-table-basic","pricing-table-regular","pricing-table-smart","pricing-table-fancy","related-products-classic","related-products-standard","related-products-flip","related-products-trendy","related-products-curvy","related-products-accordion","related-products-table","gallery-fancybox","gallery-lc-lightbox","gallery-box-slider","cart-items","cart-overview","coupon-form","billing-address","shipping-address","order-notes","order-review","order-pay","payment-methods","thankyou","checkout-login","my-account","wishlist","customer-reviews-classic","customer-reviews-standard","faqs-accordion","tabs-basic","tabs-classic","tabs-fancy","tabs-beauty","gradient-button","sales-notification","category","basic-menu","dynamic-tabs"],"min_price":"9","max_price":"190","cart_url":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/cart\/","crnt_min":"9","crnt_max":"190","pro_installed":"","pro_activated":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="./GetQuote/front.min.js.download" id="woolementor-js"></script>
<script type="text/javascript" src="./GetQuote/hello-frontend.min.js.download" id="hello-theme-frontend-js"></script>
<script type="text/javascript" src="./GetQuote/core.min.js.download" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="./GetQuote/accordion.min.js.download" id="jquery-ui-accordion-js"></script>
<script type="text/javascript" src="./GetQuote/mouse.min.js.download" id="jquery-ui-mouse-js"></script>
<script type="text/javascript" src="./GetQuote/slider.min.js.download" id="jquery-ui-slider-js"></script>
<script type="text/javascript" src="./GetQuote/tabs.min.js.download" id="jquery-ui-tabs-js"></script>
<script type="text/javascript" src="./GetQuote/wp-embed.min.js.download" id="wp-embed-js"></script>
<script type="text/javascript" src="./GetQuote/jquery.smartmenus.min.js.download" id="smartmenus-js"></script>
<script type="text/javascript" src="./GetQuote/webpack-pro.runtime.min.js.download" id="elementor-pro-webpack-runtime-js"></script>
<script type="text/javascript" src="./GetQuote/webpack.runtime.min.js.download" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="./GetQuote/frontend-modules.min.js.download" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="./GetQuote/jquery.sticky.min.js.download" id="elementor-sticky-js"></script>
<script type="text/javascript" id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/wp-admin\/admin-ajax.php","nonce":"fefa085593","urls":{"assets":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/wp-content\/plugins\/elementor-pro\/assets\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"menu_cart":{"cart_page_url":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/cart\/","checkout_page_url":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/checkout\/"},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type="text/javascript" src="./GetQuote/frontend.min.js.download" id="elementor-pro-frontend-js"></script>
<script type="text/javascript" src="./GetQuote/waypoints.min.js.download" id="elementor-waypoints-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.5.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"hello-theme-header-footer":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/wordpress-704365-2339844.cloudwaysapps.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":630,"title":"GetQuote%20%E2%80%93%20wordpress-704365-2339844.cloudwaysapps.com","excerpt":"","featuredImage":false}};
</script>
<script type="text/javascript" src="./GetQuote/frontend.min.js(1).download" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="./GetQuote/elements-handlers.min.js.download" id="pro-elements-handlers-js"></script>
	

<div id="h10-xray"></div><div id="h10-asin-grabber"></div><div id="h10-demand"></div><div id="h10-inventory"></div><div id="h10-profitability-calculator"></div><div id="h10-review"></div><div id="h10-xray-walmart"></div></body></html>