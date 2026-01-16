<?php
//about theme info
add_action( 'admin_menu', 'skt_decoration_abouttheme' );
function skt_decoration_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-decoration'), esc_html__('About Theme', 'skt-decoration'), 'edit_theme_options', 'skt_decoration_guide', 'skt_decoration_mostrar_guide');   
} 
//guidline for about theme
function skt_decoration_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-decoration'); ?>
		   </div>
          <p><?php esc_html_e('SKT Decoration is a stylish and flexible WordPress theme designed for decoration, furnishings, and interior design businesses. With a focus on ornamentation, embellishment, and aesthetics, it enhances the indoor area with stunning interior decor and architecture. Built on Elementor, it offers easy drag-and-drop editing, making customization effortless. Its SEO-friendly structure ensures better visibility, while its scalability and adaptability cater to diverse styling needs. Perfect for showcasing home decor, adornment, and inner space transformations, this theme is an ideal choice for creating a visually appealing and high-performing website.','skt-decoration'); ?></p>
          <a href="<?php echo esc_url(SKT_DECORATION_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="<?php esc_attr_e('Free Vs Pro', 'skt-decoration'); ?>" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_DECORATION_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-decoration'); ?></a> | 
				<a href="<?php echo esc_url(SKT_DECORATION_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-decoration'); ?></a> | 
				<a href="<?php echo esc_url(SKT_DECORATION_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-decoration'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_DECORATION_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="<?php esc_attr_e('SKT Themes', 'skt-decoration'); ?>" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>