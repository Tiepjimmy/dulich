<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

    $options[] = array(
        'name' => __('Cấu hình chung', 'options_check'),
        'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'options_check'),
		'id' => 'logo',
		'type' => 'upload');

    $options[] = array(
		'name' => __('Thông tin địa chỉ', 'options_check'),
		'desc' => __('Địa chỉ công ty', 'options_check'),
		'id' => 'address',
		'std' => '194 Lê Duẩn, Đống Đa, Hà Nội',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Email', 'options_check'),
		'desc' => __('Địa chỉ email', 'options_check'),
		'id' => 'email',
		'std' => 'btstore@gmail.com',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Số điện thoại', 'options_check'),
		'desc' => __('Số điện thoại', 'options_check'),
		'id' => 'hotline',
		'std' => '094 66 88 636',
		'type' => 'text');

	$options[] = array(
		'name' => __('Bản đồ', 'options_check'),
		'id' => 'map',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Facebook', 'options_check'),
		'id' => 'facebook',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Youtube', 'options_check'),
		'id' => 'youtube',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Skype', 'options_check'),
		'id' => 'skype',
		'type' => 'text');	

	return $options;
}