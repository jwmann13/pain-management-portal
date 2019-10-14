﻿// Quick feature detection
function isTouchEnabled() {
 	return (('ontouchstart' in window)
      	|| (navigator.MaxTouchPoints > 0)
      	|| (navigator.msMaxTouchPoints > 0));
}
jQuery(function(){
	jQuery("path[id^=\"anatomy_\"]").each(function (i, e) {
		anatomyaddEvent( jQuery(e).attr('id') );
	});
})
function anatomyaddEvent(id,relationId){
	var _obj = jQuery('#'+id);
	var _Textobj = jQuery('#'+id+','+'#'+anatomy_config[id]['visnames']);
	var _h = jQuery('#anatomy').height();

		_obj.attr({'fill':'rgba(255, 0, 0, 0)','stroke':anatomy_config['default']['borderclr']});
		_Textobj.attr({'cursor':'default'});
		if(anatomy_config[id]['enbl'] == true){
			if (isTouchEnabled()) {
				_Textobj.on('touchstart', function(e){
					var touch = e.originalEvent.touches[0];
					var x=touch.pageX-10, y=touch.pageY+(-15);
					var anatomytipw=jQuery('#tipanatomy').outerWidth(), anatomytiph=jQuery('#tipanatomy').outerHeight(), 
					x=(x+anatomytipw>jQuery(document).scrollLeft()+jQuery(window).width())? x-anatomytipw-(20*2) : x
					y=(y+anatomytiph>jQuery(document).scrollTop()+jQuery(window).height())? jQuery(document).scrollTop()+jQuery(window).height()-anatomytiph-10 : y
					if(anatomy_config[id]['targt'] != 'none'){
						jQuery('#'+id).css({'fill':'rgba(255, 0, 0, 0.7)'});
					}
					jQuery('#tipanatomy').show().html(anatomy_config[id]['hover']);
					jQuery('#tipanatomy').css({left:x, top:y})
				})
				_Textobj.on('touchend', function(){
					jQuery('#'+id).css({'fill':'rgba(255, 0, 0, 0)'});
					if(anatomy_config[id]['targt'] == '_blank'){
						window.open(anatomy_config[id]['url']);	
					}else if(anatomy_config[id]['targt'] == '_self'){
						window.parent.location.href=anatomy_config[id]['url'];
					}
					jQuery('#tipanatomy').hide();
				})
			}
			_Textobj.attr({'cursor':'pointer'});
			_Textobj.hover(function(){
				//moving in/out effect
				jQuery('#tipanatomy').show().html(anatomy_config[id]['hover']);
				_obj.css({'fill':'rgba(255, 0, 0, 0.3)'})
			},function(){
				jQuery('#tipanatomy').hide();
				jQuery('#'+id).css({'fill':'rgba(255, 0, 0, 0)'});
			})
			if(anatomy_config[id]['targt'] != 'none'){
				//clicking effect
				_Textobj.mousedown(function(){
					jQuery('#'+id).css({'fill':'rgba(255, 0, 0, 0.7)'});
				})
			}
			_Textobj.mouseup(function(){
				jQuery('#'+id).css({'fill':'rgba(255, 0, 0, 0.3)'});
				if(anatomy_config[id]['targt'] == '_blank'){
					window.open(anatomy_config[id]['url']);	
				}else if(anatomy_config[id]['targt'] == '_self'){
					window.parent.location.href=anatomy_config[id]['url'];
				}
			})
			_Textobj.mousemove(function(e){
				var x=e.pageX+10, y=e.pageY+15;
				var anatomytipw=jQuery('#tipanatomy').outerWidth(), anatomytiph=jQuery('#tipanatomy').outerHeight(), 
				x=(x+anatomytipw>jQuery(document).scrollLeft()+jQuery(window).width())? x-anatomytipw-(20*2) : x
				y=(y+anatomytiph>jQuery(document).scrollTop()+jQuery(window).height())? jQuery(document).scrollTop()+jQuery(window).height()-anatomytiph-10 : y
				jQuery('#tipanatomy').css({left:x, top:y})
			})
		}	
}