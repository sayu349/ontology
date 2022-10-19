<?php get_header(); ?>
<div class="title">
    <h1><?php the_title(); ?></h1>
    <p>お気軽にご質問・ご相談ください</p>
</div>
<div class="question-form">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <h2>
                <?php the_title(); ?>
            </h2>
            <div class="question-form-text">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
</main>
<?php get_footer(); ?>