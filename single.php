<?php get_header(); ?>



                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post(); ?>

                    <main>
                        <div class="bg_left"></div>
                        <section class="content-page">
                            <div class="breadcrumbs-page">
                                <a href="">Home</a> > <a href="">"page name"</a>
                            </div>
                            <h2 class="h2-page">Header</h2>
<!--                            <div class="img-page">--><?php //echo the_post_thumbnail()?><!--</div>-->
<!--                            <img class="img-page" src="img/-large.jpg" alt="">-->
                            <div class="text-page">
                                  <?php the_content()?>
                            </div>
                        </section>
                        <div class="bg-right"></div>
                        <div class="clearfix"></div>
                        <div class="next_page"><a href="">NextArticle</a></div>
                        <div class="prev_page"><a href="">PreviousArticle</a> </div>
                        <div class="clearfix"></div>


                    </main>

                <?php     endwhile; // End of the loop.?>






<?php get_footer();
