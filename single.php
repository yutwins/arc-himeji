<?php get_header(); ?>

<section class="page-single">
    <div class="single-hero">
        <div class="single-hero__titleArea">
            <h1 class="single-hero__title">ブログ</h1>
        </div>
    </div>
    <div class="inner single-inner">
        <div class="single-container">
            <?php if (function_exists('bcn_display')) : ?>
                <div class="breadcrumb single-breadcrumb">
                    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
                </div>
            <?php endif; ?>
            <!-- "お客様の声"カテゴリは除く -->
            <div class="single-pageLink">
                <p class="single-pageLink__prev"><?php previous_post_link('%link', '%title', false, '10'); ?></p>
                <p class="single-pageLink__next"><?php next_post_link('%link', '%title', false, '10'); ?></p>
            </div>


            <div class="single-content">
                <?php 
                // カテゴリー情報を取得
                $category = get_the_category();
                ?>
                <div class="single-content__top">
                    <p class="single-content__date"><?php the_time('Y.m.d'); ?></p>
                    <?php if ($category[0]) : ?>
                    <p class="single-content__category"><?php echo $category[0]->name; ?></p>
                    <?php endif; ?>
                </div>
                <h2 class="single-content__title"><?php the_title(); ?></h2>
                <div class="single-content__container">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.single -->

<?php get_footer(); ?>