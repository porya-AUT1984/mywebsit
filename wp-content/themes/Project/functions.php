<?php
	function project_one(){

		// FEnable Post Thumbnail
		add_theme_support('post-thumbnails');

		// Enable Menus
		register_nav_menus(array(
			'primary' 	=> __('Primary Menu'),
			'footer'	=> __('Footer Menu')
		));

		// Enable Format Support
		add_theme_support('post-formats', array(

            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'
        ));
	}

	add_action('after_setup_theme', 'project_one');

	// Enable Widget
	function init_widgets($id){


        register_sidebar(array(
			'name'	=> 'alpha',
			'id'	=> 'alpha',
			'before_widget'	=> '<div class="s-alpha">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>'
		));



             register_sidebar(array(
			'name'	=> 'beta',
			'id'	=> 'beta',
			'before_widget'	=> '<div class="s-alpha">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>'
		));



	}

	add_action('widgets_init','init_widgets');

	// Enable Excerpt Length
	function custom_length(){
		return 25;
	}

	add_filter('excerpt_length','custom_length');




 ?>
