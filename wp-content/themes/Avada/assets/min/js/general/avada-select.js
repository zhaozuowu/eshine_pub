function calcSelectArrowDimensions(){jQuery(".avada-select-parent .select-arrow, .gravity-select-parent .select-arrow, .wpcf7-select-parent .select-arrow").filter(":visible").each(function(){jQuery(this).prev().innerHeight()>0&&jQuery(this).css({height:jQuery(this).prev().innerHeight(),width:jQuery(this).prev().innerHeight(),"line-height":jQuery(this).prev().innerHeight()+"px"})})}jQuery(window).load(function(){calcSelectArrowDimensions(),setTimeout(function(){calcSelectArrowDimensions()},100)});