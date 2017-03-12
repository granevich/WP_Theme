
<?php get_header()?>
<main>

            <div class="bg_left"></div>
            <section class="content">
                <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div class="card">
                        <a href="<?php  the_permalink()?>"><h2><?php the_title()?></h2></a>
                        <div class="thumbnail"> <?php echo get_the_post_thumbnail(null, 'thumbnail');?></div>
                        <div class="description"><?php the_excerpt()?></div>
                        <form action="<?php  the_permalink()?>">
                            <button type="submit">Читать далее</button>
                        </form>
<!--                        <div class="clearfix"></div>-->
                    </div>
                    <!-- здесь формирование вывода постов, -->
                    <!-- где работают теги шаблона относящиеся к the loop -->
                <?php endwhile; ?>
                <?php endif; ?>

            </section>
            <div class="bg-right"></div>
            <div class="clearfix"></div>
<!--            <div class="pagination">-->
<!--                <ul>-->
<!--                    <li class="active"><a href="">1</a></li>-->
<!--                    <li><a href="">2</a></li>-->
<!--                    <li><a href="">3</a></li>-->
<!--                    <li><a href="">4</a></li>-->
<!--                    <li><a href="">5</a></li>-->
<!--                    <li><a href="">6</a></li>-->
<!--                    <li><a href="">7</a></li>-->
<!--                    <li><a href="">8</a></li>-->
<!--                    <li><a href="">9</a></li>-->
<!--                    <li><a href="">10</a></li>-->
<!--                </ul>-->
<!--            </div>-->
    <?php the_posts_pagination(); ?>
        </main>
<?php get_footer()?>