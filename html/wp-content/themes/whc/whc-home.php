<?php
/**
 * The template for displaying all pages
 *
 * Template Name: whc-home
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc_theme-1
 */

get_header();
?>

    <!-- #primary -->
    <section class="masthead" >
        <div class="container-fluid">

            <div class="row text-center">
                <?php
                    $mastheadargs = array(
                        'post_per_page'=>1,
                        'post_type' => 'mastheads',
                        'order' => 'ASC'
                                        );
                $mastheads = new WP_Query($mastheadargs);
                ?>
                <?php if($mastheads -> have_posts()): while($mastheads -> have_posts()): $mastheads -> the_post() ?> 

               <div class="img-box mx-auto">
             <?php the_post_thumbnail(); ?>
            </div> 

                <?php endwhile; endif; ?>
            </div>


            <div class="row text-center mx-auto">
                <div class="col-md-2">
                    <a  class="btn btn-primary btn-lg">Our Services</a>

                </div>
                <div class="col-md-2">
                    <a  class="btn btn-primary btn-lg">Our Services</a>

                </div>
            
            </div>
        </div>

    <?php
                    $bottomwhiteargs = array(
                        'post_per_page'=>1,
                        'post_type' => 'bottomwhites',
                        'order' => 'ASC'
                                        );
                $bottomwhites = new WP_Query($bottomwhiteargs);
                ?>
                <?php if($bottomwhites -> have_posts()): while($bottomwhites-> have_posts()): $bottomwhites -> the_post() ?> 
        
                <?php the_post_thumbnail() ?>

                 <?php endwhile; endif; ?>
       
    </section>


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ">
                <?php
                    $post3args = array(
                        'post_per_page'=>1,
                        'post_type' => 'posts3',
                        'order' => 'ASC'
                                        );
                $posts3 = new WP_Query($post3args);
                ?>
                <?php if($posts3 -> have_posts()): while($posts3-> have_posts()): $posts3 -> the_post() ?> 
                <div class="img-fluid mx-auto">
                    <?php the_post_thumbnail() ?> 
                </div>
                    <?php endwhile; endif; ?>
                </div>


                <div class="col-lg-6">
                <?php
                    $post4args = array(
                        'post_per_page'=>1,
                        'post_type' => 'posts4',
                        'order' => 'ASC'
                                        );
                $posts4 = new WP_Query($post4args);
                ?>
                <?php if($posts4 -> have_posts()): while($posts4-> have_posts()): $posts4 -> the_post() ?> 

                    <h1> <?php the_title() ?> </h1>
                    <p> 
                        <?php the_content() ?>
                    </p>

                    <?php endwhile; endif; ?>
                </div>
                
            </div>
        </div>
        <div class="row">
        <?php
                    $post5args = array(
                        'post_per_page'=>1,
                        'post_type' => 'posts5',
                        'order' => 'ASC'
                                        );
                $posts5 = new WP_Query($post5args);
                ?>
                <?php if($posts5 -> have_posts()): while($posts5-> have_posts()): $posts5 -> the_post() ?> 
                <div class="torn-bottom">

                    <?php the_post_thumbnail() ?>
                </div>

                 <?php endwhile; endif; ?>
        </div>


    </section>

    <section>
        <div class="container-fluid content-box">
            <div class="row">
                
                <div class="col-lg-6 coaches">
                <?php
                    $post6args = array(
                        'post_per_page'=>1,
                        'post_type' => 'posts6',
                        'order' => 'ASC'
                                        );
                $posts6 = new WP_Query($post6args);
                ?>
                <?php if($posts6 -> have_posts()): while($posts6-> have_posts()): $posts6 -> the_post() ?> 
                        <h1 class="text-center"> <?php the_title() ?> </h1>

                     <?php endwhile; endif; ?>
                        
                     <?php
                 $post7args = array(
                     'post_per_page'=>4,
                     'post_type' => 'posts7',
                     'order' => 'ASC'
                                     );
             $posts7 = new WP_Query($post7args);
             ?>
             <?php if($posts7 -> have_posts()): while($posts7-> have_posts()): $posts7 -> the_post() ?> 
                        <div class="col-md-6 text-center">
                        
                        <div class="img-fluid"><?php the_post_thumbnail() ?></div>
                        <p><?php the_content() ?></p>
                            


                            </div>
                            <?php endwhile; endif; ?>

                     </div>


                     <div class="col-lg-6"></div>

            </div>

            <div class="row"></div>
        </div>
        
    </section>
            

<?php

get_footer();
