<?php get_header(); ?>



                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post(); ?>

                    <main>
                        <div class="bg_left"></div>
                        <section class="content-page">

                            <div class="breadcrumbs-page">
<!--                                <a href="">Home</a> > <a href="">"page name"</a>-->
                                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

                            </div>
                            <h2 class="h2-page"> <?php single_post_title()?></h2>
<!--                            <div class="img-page">--><?php //echo the_post_thumbnail()?><!--</div>-->
<!--                            <img class="img-page" src="img/-large.jpg" alt="">-->
                            <div class="text-page">
                                <?php echo wp_get_attachment_image( 651, 'medium'); ?>
                                  <?php the_content()?>

                                <div class="tags">
                                    <b>Теги:</b><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
                                </div>
                            </div>

                        </section>
                        <div class="bg-right"></div>
                        <div class="clearfix"></div>
                        <div class="comments">
                            <?php comments_template();?>
                        </div>

                        <div class="next_page">
                            <?php next_post_link('%link', 'Next Article', true); ?>

                        </div>
                        <div class="prev_page">
                            <?php previous_post_link('%link', 'Previous Article', true); ?>
<!--                            <a href="">PreviousArticle</a>-->
                        </div>
                        <div class="clearfix"></div>


                    </main>

                <?php     endwhile; // End of the loop.?>






<?php get_footer();
