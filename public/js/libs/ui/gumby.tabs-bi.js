/**
* Gumby Tabs
*/!function(){"use strict";function e(e){this.$el=e;this.$nav=this.$el.find("ul.tab-nav > li");this.$content=this.$el.find(".tab-content");var t=this;this.$nav.children("a").on(Gumby.click,function(e){e.stopImmediatePropagation();e.preventDefault();t.click($(this))});this.$el.on("gumby.set",function(e,n){t.set(e,n)})}e.prototype.click=function(e){var t=e.parent().index();this.$nav.add(this.$content).removeClass("active");this.$nav.eq(t).add(this.$content.eq(t)).addClass("active");this.$el.trigger("gumby.onChange",t)};e.prototype.set=function(e,t){this.$nav.eq(t).find("a").trigger(Gumby.click)};Gumby.addInitalisation("tabs",function(){$(".tabs").each(function(){var t=$(this);if(t.data("isTabs"))return!0;t.data("isTabs",!0);new e(t)})});Gumby.UIModule({module:"tabs",events:["onChange","set"],init:function(){Gumby.initialize("tabs")}})}();