<?php

$args = array(
	'post_type' => 'whoami_education',
    'orderby'   => 'meta_value_num',
    'meta_key'  => '_whoami_join',
);


$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

    //
    <div class=" shape-bottom">
        <div class="bg-secondary block-title">
            <div class="container">
                <h2 class="text-uppercase color-dark text-bold no-margin">Education</h2>
                <div class="title-icon"><i class="fa fa-graduation-cap"></i></div>
            </div>
        </div>
    </div>


    <div class="container-medium">
        <div class="list-education">
            <ul class="list-unstyled  clearfix">
            <?php $education_entry = 1; ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php

        $university_name = get_post_meta(get_the_ID(), '_whoami_university', true);
        $location = get_post_meta(get_the_ID(), '_whoami_university_location', true);
        $started_date = get_post_meta(get_the_ID(), '_whoami_join', true);
        $graduate_date = get_post_meta(get_the_ID(), '_whoami_graduation', true);

        ?>





                    <li>
                        <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                        <div class="number font-alt"><?php echo $education_entry; ?></div>
                        <div class="desc">
                            <h5 class="text-uppercase color-dark text-bold"><?php echo $university_name;?></h5>
                            <p class="font-alt color-dark"><?php echo $location; ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <p class="font-alt color-dark"> <?php echo date('Y', $started_date); ?>-<?php echo date('Y', $graduate_date); ?> </p>
                        </div>
                    </li>

        <?php $education_entry++; ?>
	<?php endwhile; ?>

            </ul>
              </div>
          </div>

	<?php wp_reset_postdata(); ?>
<?php endif; ?>




