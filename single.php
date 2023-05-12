<?php get_header(); ?>

<section class="page-single">
    <div class="single-hero">
        <div class="single-hero__titleArea">
            <h1 class="single-hero__title">ブログ</h1>
        </div>
    </div>
    <div class="inner single-inner">
        <?php if (function_exists('bcn_display')) : ?>
                <div class="breadcrumb single-breadcrumb sp-only">
                    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
                </div>
        <?php endif; ?>
        <div class="single-container">
            <?php if (function_exists('bcn_display')) : ?>
                <div class="breadcrumb single-breadcrumb pc-only">
                    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
                </div>
            <?php endif; ?>
            <!-- "お客様の声"カテゴリは除く -->
                <div class="single-pageLink">
                    <?php
                    $prev_post = get_previous_post(false, '10');
                    if (!empty($prev_post)) {
                        $prev_title = mb_strlen($prev_post->post_title) > 15 ? mb_substr($prev_post->post_title, 0, 15) . '..' : $prev_post->post_title;
                        $prev_title_mobile = mb_strlen($prev_post->post_title) > 10 ? mb_substr($prev_post->post_title, 0, 10) . '..' : $prev_post->post_title;
                    ?>
                        <p class="single-pageLink__prev">
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-title-desktop"><?php echo $prev_title; ?></a>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-title-mobile"><?php echo $prev_title_mobile; ?></a>
                        </p>
                    <?php
                    }
                    ?>
                    <?php
                    $next_post = get_next_post(false, '10');
                    if (!empty($next_post)) {
                        $next_title = mb_strlen($next_post->post_title) > 15 ? mb_substr($next_post->post_title, 0, 15) . '..' : $next_post->post_title;
                        $next_title_mobile = mb_strlen($next_post->post_title) > 10 ? mb_substr($next_post->post_title, 0, 10) . '..' : $next_post->post_title;
                    ?>
                        <p class="single-pageLink__next">
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-title-desktop"><?php echo $next_title; ?></a>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-title-mobile"><?php echo $next_title_mobile; ?></a>
                        </p>
                    <?php
                    }
                    ?>
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