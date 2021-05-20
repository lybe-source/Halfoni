<?php get_header(); ?>

    <?php $args = array(
        'post_type' => 'shop',
        'post_status' => 'publish',
        'order' => 'ASC'
    ); 
    
    $query = new WP_Query( $args );
    $price = get_field('price');
    ?>

    <div class="site__shop">

        <h1 class="site__heading">Boutique</h1>

        <main class="site__content grid">

            <?php if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="post__link">
                <article class="card__post">

                    <div class="post__img">
                        <?php the_post_thumbnail( 'card-header' ); ?>
                    </div>
                    <div class="post__meta">
                        <h2><?php the_title(); ?></h2>

                        <div class="post__meta__price">
                            <?php 
                                if (get_field('suffixe_price')):
                                    $picture = get_field('suffixe_price');
                            ?>
                            <img src="<?php echo $picture['sizes']['cookies']; ?>" alt="Cookies" class="img_cookies">
                            <?php endif; ?>
                            <p class="price">
                                <?php the_field('price'); ?>
                            </p>
                        </div>
                    </div>
                </article>
            </a>

            <?php endwhile; endif; ?>
            

        </main>
    </div>

<?php 
    wp_reset_postdata();
    get_footer(); 
?>