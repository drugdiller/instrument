/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// Place your code here.
$(document).ready(function() {
                           
    /* Search */
    $("#search").focus(function(){  
        if($(this).val() == 'Search'){
            $(this).val('');
        }
    });
    
    $("#search").blur(function(){
        if($(this).val() == ''){
            $(this).val('Search');
        }
    });
    
    $("#search").keydown(function(event){
        if(event.keyCode == 13){
            needle = $(this).val();
            document.location.href='http://tschumi.com/search/'+needle+'/';
        }
    });
    
    /* Map */
    var city_on = false;
    $(".map_city").hover(function(){
        $('#'+this.id+'_detail').show();
    },function(){
        if(city_on != this.id){
            $('#'+this.id+'_detail').hide();
        }
    });
    
    $(".map_city").click(function(){
        city_on = this.id;
        $('.map_detail').hide();
        $('.map_list').hide();
        $('#'+this.id+'_detail').show();
        $('#'+this.id+'_list').show();
    });
    
    $("#world_map").click(function(){
        city_on = false;
        $('.map_detail').hide();
        $('.map_list').hide();
    });
    
    
    $("li.item").hover(function(){$(this).addClass("highlight");},function(){$(this).removeClass("highlight");});
    
    $("#moretoggle").click(function(){$("#moretext").show();$("#lesstext").hide();$("#credits").hide();});
    
    $("#creditstoggle").click(function(){$("#moretext").hide();$("#lesstext").hide();$("#credits").show();});
    
    $("#lesstoggle, #lesstoggle2").click(function(){$("#lesstext").show();$("#moretext").hide();$("#credits").hide();});
    
    
    $("#screen").hover(function(){$("#screennav").fadeIn("fast");},function(){$("#screennav").fadeOut("fast");});

    $(".bar").hover(function(){$(this).addClass("focus");},function(){$(this).removeClass("focus");});
    
    // Slideshow ----->

    var $panels = $('#slideshow #scroll > .scrollitems');
    var $container = $('#slideshow #scroll');
    var $panelOn = 1;
    var $panelTot = $panels.length;
    
    // Get scroll length
    $container.css('width', $panels[0].offsetWidth * $panels.length);
    
    
    var $scrollOptions = {
        items: $panels,
        prev: '#screennav a.prev',
        next: '#screennav a.next',
        duration: 500,
        cycle: false,
        onBefore:function( e, elem, $pane, $items, pos ){
            $panelOn = pos+1;
            if($panelOn == 1 && $panelTot != 1){
                // First Panel
                $("#arrow_left").fadeOut('fast');
            } else if($panelOn == $panelTot || $panelTot == 1) {
                // Last Panel
                $("#arrow_right").fadeOut('fast');
                $("#info_right").fadeIn('slow');
            } else {
                // Middle Panels
                $("#arrow_left, #arrow_right").fadeIn('slow');
                $("#info_right").fadeOut('fast');
            }
            // Captions
            $('.captions').hide();
            $('#caption-'+$panelOn).show();
        }
    };
    
    $('#slideshow').serialScroll($scrollOptions);
    
});


})(jQuery, Drupal, this, this.document);
