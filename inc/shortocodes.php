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