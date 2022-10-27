<?php
/*
Template Name: Home
 */
?>
<?php get_header(); ?>

<div class="promo-full">
    <div class="container promo-full__container">
        <h1 class="promo-full__head">Get online week 2021</h1>
        <p class="promo-full__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet esse hic inventore quasi reprehenderit suscipit. Molestias, sapiente.
        </p>
        <button class="btn inverse">Get involved now</button>
    </div>
</div>
<div class="promo-half">
    <div class="promo-half__image"></div>
    <div class="promo-half__content">
        <div class="promo-half__content-head">
            We are social change charity helping people to improve their lives through digital.
        </div>
        <div class="promo-half__content-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequuntur eos ex iusto officia sed, veritatis. Deserunt ex inventore quaerat?
        </div>
        <button class="btn inverse">Get involved now</button>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/watermark.svg" class="promo-half__content-watermark" alt="Good Thinks Watermark">
    </div>
</div>
<div class="help container">
    <h3 class="help__head">How can we help you?</h3>
    <p class="help__text">
        Let us know who you are and what you're looking for, and we'll help get you to the right place.
    </p>
    <div class="help__form">
        <span class="help__form-text">I am an Individual and I want to learn</span>
        <button class="btn primary">Start now</button>
    </div>
</div>
<div class="article-list container">
    <h3 class="article-list__head">What do we do</h3>
    <p class="article-list__text">
        You might not have heard of us, but we're the people behind the following impactful programmers.
    </p>


    <ul class="article-list__box">
        <?php
        global $post;
        $myposts = get_posts([
            'numberposts' => 4
        ]);
        if( $myposts ){
            foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
                <li class="article-list__item">
                    <p class="article-list__item-head"><?php the_title(); ?></p>
                    <div class="article-list__item-text"><?php the_content(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="btn inverse border">Read more</a>
                </li>
                <?php
            }
        }
        wp_reset_postdata();
        ?>
    </ul>
    <div class="article-list__btn-box">
        <a href="/#" class="btn inverse">More about what we do</a>
    </div>
</div>

<?php get_footer(); ?>
