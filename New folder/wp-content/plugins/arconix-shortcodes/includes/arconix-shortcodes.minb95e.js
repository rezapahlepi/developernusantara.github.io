jQuery(document).ready(function(){jQuery(".arconix-toggle-title").each(function(){jQuery(this).hasClass("toggle-closed")?jQuery(this).next(".arconix-toggle-content").hide():jQuery(this).hasClass("toggle-open")&&jQuery(this).next("i.fa").toggleClass("fa-plus-square fa-minus-square"),jQuery(this).click(function(){jQuery(this).toggleClass("toggle-open toggle-closed"),jQuery(this).find("i.fa").toggleClass("fa-plus-square fa-minus-square"),jQuery(this).next(".arconix-toggle-content").slideToggle()})}),jQuery(".arconix-list ul").addClass("fa-ul"),jQuery(".arconix-list").each(function(){var i=jQuery(this).data("arconix-icon"),a=jQuery(this).data("arconix-color");jQuery(this).find("li").prepend('<i class="fa fa-li '+i+" "+a+'"></i>')}),jQuery("ul.arconix-tabs").tabs("div.arconix-panes > div"),jQuery("ul.arconix-tabs li").each(function(){var i=jQuery(this).data("arconix-icon"),a=jQuery(this).data("arconix-color");i.length>2&&jQuery(this).find("a").prepend('<i class="fa '+i+" "+a+'"></i>')}),jQuery(".arconix-accordions-0").tabs("div.arconix-accordion-content",{tabs:"div.arconix-accordion-title",effect:"slide",initialIndex:null}),jQuery(".arconix-accordions-1").tabs("div.arconix-accordion-content",{tabs:"div.arconix-accordion-title",effect:"slide",initialIndex:0}),jQuery(".arconix-accordions-2").tabs("div.arconix-accordion-content",{tabs:"div.arconix-accordion-title",effect:"slide",initialIndex:1}),jQuery(".arconix-accordions-3").tabs("div.arconix-accordion-content",{tabs:"div.arconix-accordion-title",effect:"slide",initialIndex:2}),jQuery(".arconix-accordions-4").tabs("div.arconix-accordion-content",{tabs:"div.arconix-accordion-title",effect:"slide",initialIndex:3}),jQuery(".arconix-accordions-5").tabs("div.arconix-accordion-content",{tabs:"div.arconix-accordion-title",effect:"slide",initialIndex:4})});