jQuery(document).ready(function(){
   // cache the window object
   $window = jQuery(window);
 
   jQuery('.homepage-banner[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = jQuery(this),
       speed = $scroll.data('speed');
                     
      jQuery(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards  

        $scroll.offset().top                          
        //var yPos = -($window.scrollTop() / $scroll.data('speed'));
        var diff = $window.scrollTop() - $scroll.offset().top;
        var yPos = -(diff * speed);
         
        // background position
        var coords = '100% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });   
      }); // end window scroll
   });  // end section function
}); // close out script
/* Create HTML5 element for IE */
document.createElement("section");

jQuery(document).ready(function(){
   // cache the window object
   $window = jQuery(window);
 
   jQuery('.parallax-banner[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = jQuery(this),
       speed = $scroll.data('speed');
                     
      jQuery(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards  

        $scroll.offset().top                          
        //var yPos = -($window.scrollTop() / $scroll.data('speed'));
        var diff = $window.scrollTop() - $scroll.offset().top;
        var yPos = -(diff * speed);
         
        // background position
        var coords = '100% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });  
      }); // end window scroll
   });  // end section function
}); // close out script
/* Create HTML5 element for IE */
document.createElement("section");
