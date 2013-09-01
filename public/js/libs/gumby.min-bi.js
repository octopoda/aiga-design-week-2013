/**
* Gumby Framework
* ---------------
*
* Follow @gumbycss on twitter and spread the love.
* We worked super hard on making this awesome and released it to the web.
* All we ask is you leave this intact. #gumbyisawesome
*
* Gumby Framework
* http://gumbyframework.com
*
* Built with love by your friends @digitalsurgeons
* http://www.digitalsurgeons.com
*
* Free to use under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
*/!function(){"use strict";function e(){this.$dom=$(document);this.isOldie=!!this.$dom.find("html").hasClass("oldie");this.click="click";this.onReady=this.onOldie=this.onTouch=!1;this.uiModules={};this.inits={};this.path=$("script[gumby-path]").attr("gumby-path")||"js/libs";this.breakpoint=Number($("script[gumby-breakpoint]").attr("gumby-breakpoint"))||1024}e.prototype.init=function(){var e=this;this.$dom.ready(function(){e.initUIModules();e.onReady&&e.onReady();e.isOldie&&e.onOldie&&e.onOldie();Modernizr.touch&&e.onTouch&&e.onTouch()})};e.prototype.ready=function(e){e&&typeof e=="function"&&(this.onReady=e)};e.prototype.oldie=function(e){e&&typeof e=="function"&&(this.onOldie=e)};e.prototype.touch=function(e){e&&typeof e=="function"&&(this.onTouch=e)};e.prototype.debug=function(){return{$dom:this.$dom,isOldie:this.isOldie,uiModules:this.uiModules,click:this.click}};e.prototype.selectAttr=function(){var e=0;for(;e<arguments.length;e++){var t=arguments[e],n="data-"+arguments[e],r="gumby-"+arguments[e];if(this.is("["+n+"]"))return this.attr(n)?this.attr(n):!0;if(this.is("["+r+"]"))return this.attr(r)?this.attr(r):!0;if(this.is("["+t+"]"))return this.attr(t)?this.attr(t):!0}return!1};e.prototype.addInitalisation=function(e,t){this.inits[e]=t};e.prototype.initialize=function(e,t){this.inits[e]&&typeof this.inits[e]=="function"&&this.inits[e](t)};e.prototype.UIModule=function(e){var t=e.module;this.uiModules[t]=e};e.prototype.initUIModules=function(){var e;for(e in this.uiModules)this.uiModules[e].init()};window.Gumby=new e}();