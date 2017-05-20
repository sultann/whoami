<?php
function add_employment_metaboxes(){
	$prefix = "_whoami_";

	$metabox = new_cmb2_box( array(
		'id'            => $prefix . 'employment',
		'title'         => esc_html__( 'Employment Information', 'whoami' ),
		'object_types'  => array( 'whoami_employment' )
	) );
	$metabox->add_field(array(
		'name'       => esc_html__( 'Company Name', 'whoami' ),
		'desc'       => esc_html__( 'What company you have worked', 'whoami' ),
		'id'         => $prefix . 'company',
		'type'       => 'text',
	));

    $metabox->add_field(array(
  		'name'       => esc_html__( 'Position', 'whoami' ),
  		'desc'       => esc_html__( 'Position you have worked', 'whoami' ),
  		'id'         => $prefix . 'position',
  		'type'       => 'text',
  	));

	$metabox->add_field( array(
		'name' => esc_html__( 'Joined', 'cmb2' ),
		'desc' => esc_html__( 'Date of joining', 'cmb2' ),
		'id'   => $prefix . 'join',
		'type' => 'text_datetime_timestamp',
	) );

	$metabox->add_field( array(
		'name' => esc_html__( 'Left', 'cmb2' ),
		'desc' => esc_html__( 'Date of leaving', 'cmb2' ),
		'id'   => $prefix . 'left',
		'type' => 'text_datetime_timestamp',
	) );

}

add_action('cmb2_admin_init', 'add_employment_metaboxes');


function add_education_metaboxes(){
	$prefix = "_whoami_";

	$metabox = new_cmb2_box( array(
		'id'            => $prefix . 'education',
		'title'         => esc_html__( 'Education Information', 'whoami' ),
		'object_types'  => array( 'whoami_education' )

	) );
	$metabox->add_field(array(
		'name'       => esc_html__( 'University Name', 'whoami' ),
		'desc'       => esc_html__( 'What university you have worked', 'whoami' ),
		'id'         => $prefix . 'university',
		'type'       => 'text',
	));

	$metabox->add_field(array(
		'name'       => esc_html__( 'University Location', 'whoami' ),
		'id'         => $prefix . 'university_location',
		'type'       => 'text',
	));


	$metabox->add_field( array(
		'name' => esc_html__( 'Started', 'cmb2' ),
		'desc' => esc_html__( 'Date of starting', 'cmb2' ),
		'id'   => $prefix . 'join',
		'type' => 'text_datetime_timestamp',
	) );

	$metabox->add_field( array(
		'name' => esc_html__( 'Graduation', 'cmb2' ),
		'desc' => esc_html__( 'Date of graduation', 'cmb2' ),
		'id'   => $prefix . 'graduation',
		'type' => 'text_datetime_timestamp',
	) );

}

add_action('cmb2_admin_init', 'add_education_metaboxes');


function add_portfolio_metaboxes(){
	$prefix = "_whoami_";

	$metabox = new_cmb2_box( array(
		'id'            => $prefix . 'portfolio',
		'title'         => esc_html__( 'Portfolio Details', 'whoami' ),
		'object_types'  => array( 'whoami_portfolio' )

	) );
	$metabox->add_field(array(
		'name'       => esc_html__( 'Project Link', 'whoami' ),
		'id'         => $prefix . 'project_link',
		'type'       => 'text_url',
	));

	$metabox->add_field(array(
		'name'       => esc_html__( 'Project Screenshots', 'whoami' ),
		'id'         => $prefix . 'project_screenshots',
		'type'       => 'file_list',
	));

}

add_action('cmb2_admin_init', 'add_portfolio_metaboxes');


function add_testimonial_metaboxes(){
	$prefix = "_whoami_";

	$metabox = new_cmb2_box( array(
		'id'            => $prefix . 'testimonial',
		'title'         => esc_html__( 'Testimonial Details', 'whoami' ),
		'object_types'  => array( 'whoami_testimonial' )

	) );
	$metabox->add_field(array(
		'name'       => esc_html__( 'Avatar', 'whoami' ),
		'id'         => $prefix . 'avatar',
		'type'       => 'file',
	));

	$metabox->add_field(array(
		'name'       => esc_html__( 'Client Name', 'whoami' ),
		'id'         => $prefix . 'name',
		'type'       => 'text',
	));

	$metabox->add_field(array(
		'name'       => esc_html__( 'Client Title', 'whoami' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'attributes' => array(
			'required'            => true, // Will be required only if visible.
			'data-conditional-id' => $prefix . 'name',
		),
	));



}

add_action('cmb2_admin_init', 'add_testimonial_metaboxes');



function whoami_sections_shortcode() {
    add_meta_box( 'sections-shortcode', __( 'Shortcode', 'whoami' ), 'whoami_sections_shortcode_generator', 'whoami_section', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'whoami_sections_shortcode' );


function whoami_sections_shortcode_generator($post){
    echo "<div style='padding: 20px; 0;'><code>[whoami_section id='{$post->ID}']</code></div>";
}