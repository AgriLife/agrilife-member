<?php
/**
 * Plugin Name: AgriLife Member Genesis Plugin
 * Description: Adds the AgriLife Member bar to the site footer of AgriLife sites using Genesis child themes.
 * Author: Elisabeth Button
 * Author URI:   https://https://github.com/AgriLife/
 * Text Domain:  agrilife-member
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 */



// Add stylesheet 
function agrilife_member_styles() {
    wp_enqueue_style( 'style',  get_template_directory_uri() . '/../../plugins/agrilife-member/style.css' );                      
}
add_action( 'wp_enqueue_scripts', 'agrilife_member_styles' );

// Add the member bar
function member_bar_content() {
    
	?>
	<div class="before-footer-cta"><div class="wrap"><section id="custom_html-5" class="widget_text widget widget_custom_html"><div class="widget_text widget-wrap"><div class="textwidget custom-html-widget"><div id="member-wrap" class="wp-block-columns">
<div id="a-bg"></div>
<div id="member-agrilife" class="wp-block-column">
<p class="member-text">A member of<br><span class="member-brand">Texas A&amp;M AgriLife</span></p>
</div>
<div id="member-list" class="wp-block-column">
<p><a href="https://agrilifeextension.tamu.edu/">Texas A&amp;M AgriLife Extension Service</a> | <a href="https://agriliferesearch.tamu.edu/">Texas A&amp;M AgriLife Research</a> | <a href="https://tfsweb.tamu.edu/">Texas A&amp;M Forest Service</a> | <a href="https://tvmdl.tamu.edu/">Texas A&amp;M AgriLife Veterinary Medical Diagnostic Lab</a> | <a href="https://aglifesciences.tamu.edu/">College of Agriculture &amp; Life Sciences</a></p>
</div>
</div></div></div></section>
</div></div>
	<?php
}
add_action( 'get_footer', 'member_bar_content' );


// That's it!
?>
