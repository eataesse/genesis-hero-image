<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://rdejong.nl
 * @since      1.0.0
 *
 * @package    Genesis_Hero_Image_Page_Post
 * @subpackage Genesis_Hero_Image_Page_Post/admin/partials
 */
?>
<?php

$hooks = array(
		'genesis_title' =>
		'This hook executes between tags and outputs the doctitle. You can find all doctitle related code in /lib/structure/header.php.',

		'genesis_meta' =>
		'This hook executes in the section of the document source. By default, things like META descriptions and keywords are output using this hook, along with the default stylesheet and the reference to the favicon.',

		'genesis_before' =>
		'This hook executes immediately after the opening tag in the document source.',

		'genesis_after' =>
		'This hook executes immediately before the closing tag in the document source.',

		'genesis_before_header' =>
		'This hook executes immediately before the header (outside the #header div).',

		'genesis_header' =>
		'By default, this hook outputs the header code, including the title, description, and widget area (if necessary).',

		'genesis_after_header' =>
		'This hook executes immediately after the header (outside the #header div).',

		'genesis_site_title' =>
		'By default, this hook outputs the site title, within the header area. It uses the user-specified SEO settings to build the site title markup appropriately.',

		'genesis_site_description' =>
		'By default, this hook outputs the site description, within the header area. It uses the user-specified SEO settings to build the site description markup appropriately.',

		'genesis_before_content_sidebar_wrap' =>
		'This hook executes immediately before the div block that wraps the content and the primary sidebar (outside the #content-sidebar-wrap div).',

		'genesis_after_content_sidebar_wrap' =>
		'This hook executes immediately after the div block that wraps the content and the primary sidebar (outside the #content-sidebar-wrap div).',

		'genesis_before_content' =>
		'This hook executes immediately before the content column (outside the #content div).',

		'genesis_after_content' =>
		'This hook executes immediately after the content column (outside the #content div).',

		'genesis_sidebar' =>
		'This hook outputs the content of the primary sidebar, including the widget area output.',

		'genesis_before_sidebar_widget_area' =>
		'This hook executes immediately before the primary sidebar widget area (inside the #sidebar div).',

		'genesis_after_sidebar_widget_area' =>
		'This hook executes immediately after the primary sidebar widget area (inside the #sidebar div).',

		'genesis_sidebar_alt' =>
		'This hook outputs the content of the secondary sidebar, including the widget area output.',

		'genesis_before_sidebar_alt_widget_area' =>
		'This hook executes immediately before the alternate sidebar widget area (inside the #sidebar-alt div).',

		'genesis_after_sidebar_alt_widget_area' =>
		'This hook executes immediately after the alternate sidebar widget area (inside the #sidebar-alt div).',

		'genesis_before_footer' =>
		'This hook executes immediately before the footer, outside the #footer div.',

		'genesis_footer' =>
		'This hook, by default, outputs the content of the footer, including the #footer div wrapper.',

		'genesis_after_footer' =>
		'This hook executes immediately after the footer, outside the #footer div.',

		'genesis_before_loop' =>
		'This hook executes immediately before all loop blocks. Therefore, this hook falls outside the loop, and cannot execute functions that require loop template tags or variables.',

		'genesis_loop' =>
		'This hook outputs the actual loop. See lib/structure/loop.php and lib/structure/post.php for more details.',

		'genesis_after_loop' =>
		'This hook executes immediately after all loop blocks. Therefore, this hook falls outside the loop, and cannot execute functions that require loop template tags or variables.',

		'genesis_after_endwhile' =>
		'This hook executes after the endwhile; statement in all loop blocks.',

		'genesis_loop_else' =>
		'This hook executes after the else : statement in all loop blocks.',

		'genesis_before_entry (HTML5)' =>
		'This hook executes before each entry in all loop blocks (outside the post_class() container).',

		'genesis_after_entry (HTML5)' =>
		'This hook executes after each entry in all loop blocks (outside the post_class() container).',

		'genesis_entry_header (HTML5)' =>
		'This hook executes before the entry content and generates the entry header content in all loop blocks.',

		'genesis_before_entry_content (HTML5)' =>
		'This hook executes before the .entry-content container in all loop blocks.',

		'genesis_entry_content (HTML5)' =>
		'This hook executes within the .entry-content container in all loop blocks.',

		'genesis_after_entry_content (HTML5)' =>
		'This hook executes after the .entry-content container in all loop blocks.',

		'genesis_entry_footer (HTML5)' =>
		'This hook executes after the entry content and generates the entry footer content in all loop blocks.',
        
        'genesis_before_post (XHTML)' =>
        'This hook executes before each post in all loop blocks (outside the post_class() div).',
        
        'genesis_after_post (XHTML)' =>
        'This hook executes after each post in all loop blocks (outside the post_class() div).',
        
        'genesis_before_post_title (XHTML)' =>
        'This hook executes immediately before each post title for each post within the loop.',
        
        'genesis_post_title (XHTML)' =>
        'This hook outputs the actual post title, contextually, based on what type of page you are viewing.',
        
        'genesis_after_post_title (XHTML)' =>
        'This hook executes immediately after each post title for each post within the loop.',
        
        'genesis_before_post_content (XHTML)' =>
        'This hook executes immediately before the post/page content is output, outside the .entry-content div.',
        
        'genesis_post_content (XHTML)' =>
        'This hook outputs the actual post content and if chosen, the post image (inside the #content div).',
        
        'genesis_after_post_content (XHTML)' =>
        'This hook executes immediately after the post/page content is output, outside the .entry-content div.',

		'genesis_before_comments' =>
		'This hook executes immediately before the comments block (outside the #comments div).',

		'genesis_comments' =>
		'This hook outputs the entire comments block, including the section title. It also executes the genesis_list_comments hook, which outputs the comment list.',

		'genesis_after_comments' =>
		'This hook executes immediately after the comments block (outside the #comments div).',

		'genesis_list_comments' =>
		'This hook executes inside the comments block, inside the .comment-list OL. By default, it outputs a list of comments associated with a post via the genesis_default_list_comments() function.',

		'genesis_before_pings' =>
		'This hook executes immediately before the pings block (outside the #pings div).',

		'genesis_pings' =>
		'This hook outputs the entire pings block, including the section title. It also executes the genesis_list_pings hook, which outputs the ping list.',

		'genesis_after_pings' =>
		'This hook executes immediately after the pings block (outside the #pings div).',

		'genesis_list_pings' =>
		'This hook executes inside the pings block, inside the .ping-list OL. By default, it outputs a list of pings associated with a post via the genesis_default_list_pings() function.',

		'genesis_before_comment' =>
		'This hook executes before the output of each individual comment (author, meta, comment text).',

		'genesis_after_comment' =>
		'This hook executes after the output of each individual comment (author, meta, comment text).',

		'genesis_before_comment_form' =>
		'This hook executes immediately before the comment form, outside the #respond div.',

		'genesis_comment_form' =>
		'This hook outputs the actual comment form, including the #respond div wrapper.',

		'genesis_after_comment_form' =>
		'This hook executes immediately after the comment form, outside the #respond div.',
		);
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    
    <form method="post" name="genesis_hero_image_options" action="options.php">
	
	<?php
	//Grab all options
	$options = get_option($this->plugin_name);

	// Options
	$hook = $options['hook'];
    $hook_priority = $options['hook_priority'];
	$image = $options['image'];
    
    $standard_img_id = $options['standard_img_id'];
    $standard_img = wp_get_attachment_image_src( $standard_img_id, 'thumbnail' );
    $standard_img_url = $standard_img[0];
    ?>

    <?php
	settings_fields($this->plugin_name);
	do_settings_sections($this->plugin_name);
    ?>
	
	
	
	<table class="form-table">
	
		<tr valign="top">
			<th scope="row"><label for="<?php echo $this->plugin_name; ?>-hook"><?php esc_attr_e( 'Use Genesis hook', 'wp_admin_style' ); ?></label></th>
			<td>
				<fieldset>
					<select id="<?php echo $this->plugin_name; ?>-hook" name="<?php echo $this->plugin_name; ?>[hook]">
					<?php
					foreach($hooks as $ht => $hd) {
						echo '<option value="'.$ht.'" ' . selected($hook, $ht)  . '>'.$ht.'</option>';
					}
					?>
					</select>
				</fieldset>
			</td>
		</tr>
        <tr valign="top">
			<th scope="row">
                <label for="<?php echo $this->plugin_name; ?>[image]"><?php esc_attr_e( 'Set priority', 'wp_admin_style' ); ?></label>
            </th>
            <td>
                <input type="number" value="<?php echo $hook_priority; ?>" class="small-text" id="<?php echo $this->plugin_name; ?>-hook_priority" name="<?php echo $this->plugin_name; ?>[hook_priority]" /><br>
                <span class="description">(optional) Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action. Default: 10</span>
            </td>
        </tr>
		<tr valign="top">
			<th scope="row"><label for="<?php echo $this->plugin_name; ?>[image]"><?php esc_attr_e( 'Use which image', 'wp_admin_style' ); ?></label></th>
			<td>
				<fieldset>
					<legend class="screen-reader-text"><span>input type="radio"</span></legend>
					<label title='g:i a'>
						<input type="radio" name="<?php echo $this->plugin_name; ?>[image]" value="first" <?php checked($image, 'first'); ?> />
						<span><?php esc_attr_e( 'First image of content', 'wp_admin_style' ); ?></span>
					</label><br>
					<label title='g:i a'>
						<input type="radio" name="<?php echo $this->plugin_name; ?>[image]" value="featured" <?php checked($image, 'featured'); ?> />
						<span><?php esc_attr_e( 'Featured image', 'wp_admin_style' ); ?></span>
					</label><br />
                    <label title='g:i a'>
						<input type="radio" name="<?php echo $this->plugin_name; ?>[image]" value="standard" <?php checked($image, 'standard'); ?> />
						<span><?php esc_attr_e( 'Standard uploaded image', 'wp_admin_style' ); ?></span>
					</label>
				</fieldset>
			</td>
		</tr>
        <tr valign="top">
            <th scope="row"><label for="<?php echo $this->plugin_name; ?>[standard_img]"><?php esc_attr_e( 'Set standard image', 'wp_admin_style' ); ?></label></th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span><?php esc_attr_e('Standard Image', $this->plugin_name);?></span></legend>
                    <label for="<?php echo $this->plugin_name;?>-standard_img">
                        <input type="hidden" id="standard_img_id" name="<?php echo $this->plugin_name;?>[standard_img_id]" value="<?php echo $standard_img_id; ?>" />
                        <input id="upload_standard_img_button" type="button" class="button" value="<?php _e( 'Upload Image', $this->plugin_name); ?>" />
                        <span><?php esc_attr_e('Standard Image', $this->plugin_name);?></span>
                    </label>
                    <div id="upload_img_preview" class="wp_cbf-upload-preview <?php if(empty($standard_img_id)) echo 'hidden'?>">
                        <img src="<?php echo $standard_img_url; ?>" />
                        <button id="genesis_hero_img-delete_img_button" class="button">X</button>
                    </div>
                </fieldset>
            </td>
        </tr>
	
	</table>
	
	
	

	
	<?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>