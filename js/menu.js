 $(".dropdown").on("click", function(e) {
     showSubMenu(this.id);
     e.preventDefault();
 });

 $(".dropdown").on("focusout", function(e) {
     collapse($('#' + $(this).attr("id") + "+.dropdown-nav"));
     e.preventDefault();
 });


 $(".modal").on("click", function(e) {
     showModal($(this).attr('data-modal'));
     console.log($('modal-window:visible'));
     e.preventDefault();
 });
 $('.close-button').on("click", function() {
     $('.modal-window:visible').slideUp();

     $('#modal-container').fadeOut(300);
 });


 function showSubMenu(str) {
     var $visibleSubMenu = $('.dropdown-nav:visible:first');
     var $subMenu = $('#' + str + '+.dropdown-nav');
     //console.log($visibleSubMenu.attr('id'), $subMenu)
     if ($visibleSubMenu.attr('id') !== $subMenu.attr('id')) {
         collapse($visibleSubMenu);
     }

     var $arrow = $('#' + str + ' span');
     ($subMenu.attr('data-toggle') === 'collapse') ? ($subMenu.slideDown(), $arrow.html('&#x25B2;'), $subMenu.attr('data-toggle', 'expand')) :
     (
         $subMenu.slideUp(),
         $arrow.html('&#x25BC;'),
         $subMenu.attr('data-toggle', 'collapse')
     );


 }

 function showModal(elementId) {
     $('#modal-container').fadeIn(100);
     $('#' + elementId).slideDown();
 }

 function collapse($subMenu) {

     $anchor = $('a:has(' + '+#' + $subMenu.attr('id') + ')').attr('id');
     $subMenu.slideUp();
     $subMenu.attr('data-toggle', 'collapse');
     $('#' + $anchor + ' span').html('&#x25BC;');

 }