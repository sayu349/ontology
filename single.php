<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post(); ?>
        <div class="detail">
            <h1><?php the_title(); ?></h1>
            <div class="detail-config">
                <div class="single-category">
                    <a href="">
                        <?php the_category(); ?>
                    </a>
                </div>
                <div class="time">
                    <?php
                    $year = get_the_date('Y');
                    $month = get_the_date('m');
                    ?>
                    <a href="<?php echo get_month_link($year, $month); ?>">
                        <time datetime="<?php the_time('Y-m-d'); ?>">
                            <?php the_time('Y-m-d'); ?>
                        </time>
                    </a>
                </div>
            </div>
            <div class="detail-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>