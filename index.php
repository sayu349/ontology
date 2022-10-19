<?php get_header(); ?>
<div class="title">
    <h1>blog</h1>
    <p>有益な情報を随時発信します。</p>
</div>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post(); ?>
        <div class="blog">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/concept/img-item01.gif" alt="コーヒーを入れている画像">
            </a>
            <div class="blog-text">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
                <div class="blog-info">
                    <div class="blog-tag">
                        <a href="">
                            <?php the_category(); ?>
                        </a>
                    </div>
                    <div class="blog-time">
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
                <a href="<?php the_permalink(); ?>">
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<div class="pagination">
    <?php
    $paginationhtml = get_the_posts_pagination();
    echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $paginationhtml);
    ?>
</div>
</main>
<?php get_footer(); ?>