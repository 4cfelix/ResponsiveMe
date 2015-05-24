<?php 

add_action('wp_footer','hook_javascript');

function hook_javascript()
{

$classMenu = esc_attr( get_option('set_reponsiveme_navclass') );
$classMainContent = esc_attr( get_option('set_reponsiveme_main_content') );
$plugins_url = plugins_url();

echo '<script src="'. $plugins_url .'/ResponsiveMe/assets/responsive-nav.min.js" type="text/javascript"></script>';

echo '<script>

$(document).ready(function() {
    if($(window).width() <= 500) {
        $("'. $classMainContent .'").prependTo("body");
        $("'. $classMenu .'").prependTo("body");
        
        responsiveNav("'. $classMenu .'");
    }
});
</script>';

}