<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whoami
 */

?>
<!--FOOTER-->
<footer class="main-footer">
    <div class="container">
        <div class="folow-me">
            Follow Me On
        </div>
        <ul class="list-inline social-links text-center">
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                            class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Google"><i
                            class="fa fa-google"></i></a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i
                            class="fa fa-linkedin"></i></a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Github"><i
                            class="fa fa-github"></i></a>
            </li>
        </ul>
        <p class="text-center no-margin">
            Solid - All Rights Reserved &COPY; 2014
        </p>
        <a href="#home" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</footer><!--END FOOTER-->



    </div><!-- .site-content -->
</div><!-- #page .wrapper-->

<!-- generate captcha -->
<div id="mycaptcha-wrap" class="hidden mycaptcha1">
  <div id="mycaptcha" class="mycaptcha1"></div>
</div>


<?php wp_footer(); ?>

</body>
</html>
