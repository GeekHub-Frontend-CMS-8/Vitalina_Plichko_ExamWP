<?php
/*Template name: home*/
get_header();
?>

<!--<section>-->
<!--    <div class="container">-->
<!--        <div class="image-home-page">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/img/attractive-beautiful-cheerful-1536619-bbbiigg.png" alt="">-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section>
    <div class="container">
        <div class="gallery">
            <?php
            $id = 43;
            $p = get_page($id);
            echo apply_filters('the_content', $p->post_content);
            ?>

        </div>
        <div class="button">
            <button class="button-home-page">
                explore more
            </button>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h1 class="title-section">
            Latest News
        </h1>
        <div class="news-home">
            <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/img/Rectangle_11_copy.png"/>
                <div class="new-text">
                    <h5>
                        Reasons To Keep Your Beauty Salon
                        Reservation
                    </h5>
                    <p class="data">
                        8 March, 2020
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/img/Rectangle_11_copy.png"/>
                <div class="new-text">
                    <h5>
                        Reasons To Keep Your Beauty Salon
                        Reservation
                    </h5>
                    <p class="data">
                        8 March, 2020
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/img/Rectangle_11_copy.png"/>
                <div class="new-text">
                    <h5>
                        Reasons To Keep Your Beauty Salon
                        Reservation
                    </h5>
                    <p class="data">
                        8 March, 2020
                    </p>
                </div>
            </div>
        </div>

        <div class="featured">
            <div class="part1">
                <img src="<?php bloginfo('template_url'); ?>/img/1.png"/>
                <div class="column2">
                    <img src="<?php bloginfo('template_url'); ?>/img/3.png" />
                    <img class="photo2" src="<?php bloginfo('template_url'); ?>/img/4.png" />
                </div>
            </div>
            <div class="part2">
<!--                <img src="--><?php //bloginfo('template_url'); ?><!--/img/2.png"/>-->
                <p>
                    Motivation And Your Personal Vision An
                    Unbeatable Force
                </p>
                <p class="data">
                    8 March, 2020
                </p>
            </div>
        </div>

    </div>
</section>


<?php get_footer();?>
