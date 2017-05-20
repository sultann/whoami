<?php
add_shortcode('whoami_educations', 'whoami_educations_callback');


function whoami_educations_callback()
{

    return "test";

}


add_shortcode('whoami_skill', 'whoami_skill_callback');


function whoami_skill_callback()
{

    ob_start();
    ?>
    <div class="box br-right br-bottom">
                    <span class="chart" data-percent="89">
                      <span class="percent">89</span>
                    <canvas></canvas>
                    </span>
        <div class="text-uppercase  color-dark">MYSQL</div>
    </div>


    <?php
    echo "    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facilis, magnam nam neque quidem quis quo! Distinctio dolorem quae veritatis!
        ";
    $output = ob_get_contents();
    ob_get_clean();


    return $output;


}


add_shortcode('whoami_section', 'whoami_section_callback');
//
//
function whoami_section_callback($attr)
{


    if (!isset($attr['id']) && empty($attr['id'])) {
        return;
    }

    $section = get_post($attr['id'], OBJECT);

    ob_start();


    echo $section->post_content;


    $output = ob_get_contents();
    ob_get_clean();

    return $output;


}


add_shortcode('whoami_educations', function () {

    ob_start();
    $args = array(
        'post_type' => 'whoami_education',
        'orderby' => 'meta_value_num',
        'meta_key' => '_whoami_join',
    );



    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : ?>

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
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                                <h5 class="text-uppercase color-dark text-bold"><?php echo $university_name; ?></h5>
                                <p class="font-alt color-dark"><?php echo $location; ?></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <p class="font-alt color-dark"> <?php echo date('Y', $started_date); ?>
                                    -<?php echo date('Y', $graduate_date); ?> </p>
                            </div>
                        </li>

                        <?php $education_entry++; ?>
                    <?php endwhile; ?>

                </ul>
            </div>
        </div>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <?php

    $output = ob_get_contents();
    ob_get_clean();


    return $output;


});


add_shortcode('whoami_educations', function () {

    ob_start();
    $args = array(
        'post_type' => 'whoami_employment',
        'orderby' => 'meta_value_num',
        'meta_key' => '_whoami_join',
    );


    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : ?>

        <!--EMPLOYEMNT-->
        <div class=" shape-bottom">
            <div class="bg-secondary block-title">
                <div class="container">
                    <h2 class="text-uppercase color-dark text-bold no-margin">Employment</h2>
                    <div class="title-icon"><i class="fa fa-briefcase"></i></div>
                </div>
            </div>
        </div>


        <div class="container-medium">
            <div class="list-education">
                <ul class="list-unstyled  clearfix">
                    <?php $loop_entry = 1; ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php

                        $company_name = get_post_meta(get_the_ID(), '_whoami_company', true);
                        $position = get_post_meta(get_the_ID(), '_whoami_position', true);
                        $started_date = get_post_meta(get_the_ID(), '_whoami_join', true);
                        $leaving_date = get_post_meta(get_the_ID(), '_whoami_left', true);

                        ?>


                        <li>
                            <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                            <div class="number font-alt"><?php echo $loop_entry; ?></div>
                            <div class="desc">
                                <h5 class="text-uppercase color-dark text-bold"><?php echo $company_name; ?></h5>
                                <p class="font-alt color-dark"><?php echo $position; ?></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <p class="font-alt color-dark"> <?php echo date('Y', $started_date); ?>
                                    -<?php echo date('Y', $leaving_date); ?> </p>
                            </div>
                        </li>

                        <?php $loop_entry++; ?>
                    <?php endwhile; ?>

                </ul>
            </div>
        </div>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <?php

    $output = ob_get_contents();
    ob_get_clean();


    return $output;


});


add_shortcode('whoami_portfolios', function () {

    ob_start();
    $args = array(
        'post_type' => 'whoami_portfolio'
    );


    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : ?>

        <section id="portfolio" class="block-section">

            <!--PORTFOLIO TITLE-->
            <div class=" shape-bottom">
                <div class="bg-secondary block-title">
                    <div class="container">
                        <h2 class="text-uppercase color-dark text-bold no-margin">Portfolio</h2>
                        <div class="title-icon"><i class="fa fa-inbox"></i></div>
                    </div>
                </div>
            </div><!--END PORTFOLIO TITLE-->


            <!--List WOrk-->
            <div class="block-page">


                <div class="container-medium clearfix">
                    <div class="row list-work">

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php
                            $thumb_link = 'http://placehold.it/277/208';
                            $large_link = $thumb_link;
                            if (has_post_thumbnail()) {
                                $large_link = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                $thumb_link = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio_thumb');

                                if ($large_link) {
                                    $large_link = $large_link[0];
                                }

                                if ($thumb_link) {
                                    $thumb_link = $thumb_link[0];
                                }

                            }


                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="box-work">
                                    <div class="work-preview">
                                        <img src="<?php echo $thumb_link; ?>" alt="">
                                        <div class="hover">
                                            <div class="link-btns">
                                                <a href="<?php echo $large_link; ?>" title="pic 02" class="galery-item"><i
                                                            class="fa fa-search-plus"></i></a>
                                                <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                                            </div>
                                            <a href="<?php the_permalink(); ?>"
                                               class="project-title"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                    <!--BTN SHOW MORE-->
                    <div class="box-btn-more"><a href="portfolio-list.html" class="btn btn-flat-line btn-link"
                                                 id="more-work"> Show More</a></div>
                </div>
            </div><!--END List WOrk-->


            <?php wp_reset_postdata(); ?>
        </section>
    <?php endif; ?>


    <?php

    $output = ob_get_contents();
    ob_get_clean();


    return $output;

});


add_shortcode('whoami_blog', 'whoami_blog_callback');


function whoami_blog_callback($atts)
{
    $params = shortcode_atts(array(
        'posts' => 3,
    ), $atts);

    $args = array(
        'post_type' => 'post',
    );


    $query = new WP_Query($args);

    ob_start();

    if($query->have_posts()):
        ?>
       <section id="blog" class="block-section">

        <!--BLOG TITLE-->
              <div class=" shape-bottom">
                <div class="bg-secondary block-title">
                  <div class="container">
                    <h2 class="text-uppercase color-dark text-bold no-margin">Blog</h2>
                    <div class="title-icon"> <i class="fa fa-comments-o"></i> </div>
                  </div>
                </div>
              </div><!--END BLOG TITLE-->


           <div class="block-page">
             <div class="container-medium">
               <!--LIST BLOG-->
               <ul class="list-unstyled list-blog">
                   <?php  while ($query->have_posts()) : $query->the_post(); ?>
                       <li <?php post_class(); ?>>
                          <div class="clearfix box-blog">
                            <div class="blog-bg" data-holdbg="assets/theme/images/blog/1.jpg">&nbsp;
                              <div  class="blog-ic"><i class="fa fa-pencil"></i></div>
                            </div>
                            <div class="blog-content">
                              <h5 class="text-uppercase color-dark text-bold"><?php the_title(); ?></h5>
                              <div class="post-meta font-alt">
                                <span><i class="fa fa-calendar"></i> <?php echo get_the_date();?></span>
                                <span><i class="fa fa-user"></i> <?php echo get_the_author();?></span>
                                <span><i class="fa fa-folder-o"></i> <?php echo implode(', ', wp_get_post_categories(get_the_ID()));?></span>
                              </div>


                                <?php
                                var_dump(wp_get_post_categories(get_the_ID()));
                                the_excerpt();
                                ?>


                              <a href="<?php the_permalink(); ?>" class="btn btn-xs btn-flat-solid primary-btn">Read More</a>
                            </div>
                          </div>
                        </li>


                  <?php endwhile; ?>

               </ul> <!--END LIST BLOG-->

               <!--BTN SHOW MORE-->
               <div class="box-btn-more"><a href="blog-list.html" class="btn btn-flat-line btn-link" id="more-blog"> Show More</a></div>
             </div>
           </div>



        </section>

       <?php
        wp_reset_postdata();
    endif;
    $output = ob_get_contents();
    ob_get_clean();


    return $output;

}