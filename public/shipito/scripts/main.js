(function($){var $clearToggleElement=$('[data-toggle-class=clear]');var classToggle=function(element,className){element.hasClass(className)?element.removeClass(className):element.addClass(className);}
var clearClassToggle=function(element,className){element.hasClass(className)?element.removeClass(className):element.addClass(className).siblings().removeClass(className);}
$('[data-toggle-target]').on('click',function(event){var $this=$(this),target=$this.data('toggle-target'),$clear=$this.closest('[data-toggle-class]').data('toggle-class'),$clearSelf=$this.data('toggle-target');event.preventDefault();if(target==='parent'){$toggle=$this.closest('[data-toggle-class]');}else{$toggle=$this;}
$clear==="clear"||$clearSelf==="clear"?clearClassToggle($toggle,'active'):classToggle($toggle,'active');});$('.selector .drawer>li').on('click',function(){var $this=$(this),$content=$this.html(),$toggle=$this.closest('[data-toggle-class]');$this.addClass('active').siblings('li').removeClass('active').closest('.selector').find('.face-content').html($content);classToggle($toggle,'active');});$(document).on('click',function(event){var $target=$('[data-toggle-class=catch');if(!$(event.target).closest('[data-toggle-class=catch]').length){$target.removeClass('active');}});})(jQuery);