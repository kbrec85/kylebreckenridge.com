<?php
/**
 * KyleBreckenridge.com functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */

 // Useful global constants
define( '_KB__VERSION', '0.1.0' );

 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function _kb__scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

  if (in_array($_SERVER['SERVER_ADDR'], array('127.0.0.1')) || pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION) == 'dev') {
    wp_enqueue_script( 'livereload', '//localhost:35729/livereload.js', '', false, true );
  }

	wp_enqueue_script('jquery');

	wp_enqueue_script( '_kb_', get_template_directory_uri() . "/assets/js/kylebreckenridge_com{$postfix}.js", array(), _KB__VERSION, true );

	wp_enqueue_style( '_kb_', get_template_directory_uri() . "/assets/css/kylebreckenridge_com{$postfix}.css", array(), _KB__VERSION );
 }
 add_action( 'wp_enqueue_scripts', '_kb__scripts_styles' );

 add_theme_support( 'post-thumbnails' );
 add_image_size( 'featured', 440, 200, false );
echo $test;
function _kb__widgets_init() {
  register_sidebar( array(
    'name' => 'Default',
    'id' => 'default',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', '_kb__widgets_init' );

/* Edit Excerpt Read More link */
function _kb__replace_excerpt($content) {
     return '&hellip; <a href="'. get_permalink() .'" class="read-more">Continue Reading >></a>';
  }
add_filter('excerpt_more', '_kb__replace_excerpt');

/*Includes*/
require_once 'includes/theme_options.php';
require_once 'includes/shortcodes.php';

/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);

function my_standard_settings($position, $form_id){

// Create settings on position 25 (right after Field Label)

if($position == 25){
?>

<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Placeholder Text

<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>

</label>

<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">

</li>
<?php
}
}

/* Now we execute some javascript technicalitites for the field to load correctly */

add_action("gform_editor_js", "my_gform_editor_js");

function my_gform_editor_js(){
?>
<script>
//binding to the load field settings event to initialize the checkbox
jQuery(document).bind("gform_load_field_settings", function(event, field, form){
jQuery("#field_placeholder").val(field["placeholder"]);
});
</script>

<?php
}

/* We use jQuery to read the placeholder value and inject it to its field */

add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);

function my_gform_enqueue_scripts($form, $is_ajax=false){
?>
<script>

jQuery(function(){
<?php

/* Go through each one of the form fields */

foreach($form['fields'] as $i=>$field){

/* Check if the field has an assigned placeholder */

if(isset($field['placeholder']) && !empty($field['placeholder'])){

/* If a placeholder text exists, inject it as a new property to the field using jQuery */

?>

jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');

<?php
}
}
?>
});
</script>
<?php
}
?>
