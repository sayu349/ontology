<?php get_header(); ?>
<div class="title">
    <?php if (is_month()) : ?>
        <h1>tools:月別アーカイブ:「<?php echo get_the_date('Y年n月'); ?>」の検索結果</h1>
        <p><?php echo get_the_date('Y年n月'); ?>に限定した記事を表示しています。</p>
    <?php elseif (is_category()) : ?>
        <h1>tools:カテゴリー別アーカイブ:「<?php single_term_title(); ?>」の検索結果</h1>
        <p><?php single_term_title(); ?>に限定した記事を表示しています。</p>
    <?php else : ?>
        <h1>tools</h1>
        <p>有益な情報を随時発信します。</p>
    <?php endif; ?>
</div>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post(); ?>
        <div class="blog">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('achive_thumbnail'); ?>
                <?php else : ?>
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/concept/img-item01.gif" alt="コーヒーを入れている画像">
                    </a>
                <?php endif; ?>

                <div class="blog-text">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <div class="blog-info">
                        <div class="blog-tag">
                            <?php
                            $cat = get_the_category();
                            $cat = $cat[0];
                            ?>
                            <a href="<?php echo get_category_link($cat->term_id); ?>/?post_type=tools">
                                <?php echo $cat->cat_name; ?>
                            </a>
                        </div>
                        <div class="blog-time">
                            <?php
                            $year = get_the_date('Y');
                            $month = get_the_date('m');
                            ?>
                            <a href="<?php echo get_month_link($year, $month); ?>/?post_type=tools">
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