
jQuery(document).ready(function(){
  // responsive menu
  submenu = jQuery('.menu-item-has-children>a');
  submenu.append('<span class=\"caret\"></span>')
  jQuery('.menu-item-has-children').on('click',function(e){
    e.preventDefault();
    console.log('Clicked');
    jQuery(this).children('ul.sub-menu').slideToggle()
  })
})

// unslider
jQuery(function() { jQuery('#slide').unslider({
  dots: true,
  auto:false
}) })

// menu
menu = jQuery('#menu-main-menu li');
respmenu = jQuery('#resp-menu');
// respmenu.append(menu);

jQuery('#resp-icon .menu').click (function(){
  jQuery(this).toggleClass('open');
  respmenu.fadeToggle();
});
