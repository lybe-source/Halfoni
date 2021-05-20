<?php get_header(); ?>

<div class="shop__single">
    <h1 class="single__title">Shop de <?php the_title(); ?></h1>

    <form action="" method="post">

        <div class="choice__motif grid">

            <div class="other__choice">
                <span>Veuillez choisir un thème OU cochez :</span>
                <input type="radio" id="other_motif" name="choice">
                <label for="other_motif">Autre motif +10000 Cookies</label>
            </div>

            <div class="motif__choice grid">

                <?php if(have_rows('motif_object')): while(have_rows('motif_object')): the_row(); ?>

                    <?php //var_dump(get_field('motif_object')); ?>
            
                    <?php if(!empty(get_sub_field('motif1'))): $motif1 = get_sub_field('motif1'); ?>
                        <input type="radio" id="<?php echo esc_url($motif1['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif1['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif1['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif1['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif2'))): $motif2 = get_sub_field('motif2'); ?>

                        <input type="radio" id="<?php echo esc_url($motif2['title']); ?>" name="choice" value=""> 
                        <label for="<?php echo esc_url($motif2['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif2['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif2['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif3'))): $motif3 = get_sub_field('motif3'); ?>

                        <input type="radio" id="<?php echo esc_url($motif3['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif3['title']); ?>" class="label__choice_motif">    
                            <img src="<?php echo esc_url($motif3['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif3['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif4'))): $motif4 = get_sub_field('motif4'); ?>

                        <input type="radio" id="<?php echo esc_url($motif4['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif4['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif4['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif4['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif5'))): $motif5 = get_sub_field('motif5'); ?>

                        <input type="radio" id="<?php echo esc_url($motif5['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif5['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif5['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif5['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif6'))): $motif6 = get_sub_field('motif6'); ?>

                        <input type="radio" id="<?php echo esc_url($motif6['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif6['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif6['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif6['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif7'))): $motif7 = get_sub_field('motif7'); ?>

                        <input type="radio" id="<?php echo esc_url($motif7['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif7['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif7['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif7['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif8'))): $motif8 = get_sub_field('motif8'); ?>

                        <input type="radio" id="<?php echo esc_url($motif8['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif8['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif8['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif8['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif9'))): $motif9 = get_sub_field('motif9'); ?>

                        <input type="radio" id="<?php echo esc_url($motif9['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif9['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif9['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif9['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif10'))): $motif10 = get_sub_field('motif10'); ?>

                        <input type="radio" id="<?php echo esc_url($motif10['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif10['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif10['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif10['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif11'))): $motif11 = get_sub_field('motif11'); ?>

                        <input type="radio" id="<?php echo esc_url($motif11['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif11['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif11['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif11['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif12'))): $motif12 = get_sub_field('motif12'); ?>

                        <input type="radio" id="<?php echo esc_url($motif12['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif12['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif12['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif12['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif13'))): $motif13 = get_sub_field('motif13'); ?>

                        <input type="radio" id="<?php echo esc_url($motif13['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif13['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif13['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif13['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif14'))): $motif14 = get_sub_field('motif14'); ?>

                        <input type="radio" id="<?php echo esc_url($motif14['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif14['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif14['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif14['title']); ?>">
                        </label>

                        <?php endif; if(!empty(get_sub_field('motif15'))): $motif15 = get_sub_field('motif15'); ?>

                        <input type="radio" id="<?php echo esc_url($motif15['title']); ?>" name="choice" value="">
                        <label for="<?php echo esc_url($motif15['title']); ?>" class="label__choice_motif">
                            <img src="<?php echo esc_url($motif15['sizes']['card-header']); ?>" alt="<?php echo esc_url($motif15['title']); ?>">
                        </label>

                        <?php endif; ?>

                <?php endwhile; endif; ?>

            </div>
            

        </div>

        <?php if(have_rows('motif_support')): while(have_rows('motif_support')): the_row(); ?>

            <div class="support__title">
                <span>Veuillez choisir un support</span>
            </div>
            <div class="choice__support grid">
                <!-- Ici il faudra gérer les supports, il y en a pour gravures et bougies PAS pour le reste -->
                <?php if(!empty(get_sub_field('motif_support1'))): $motif_support1 = get_sub_field('motif_support1'); ?>
                    <input type="radio" id="<?php echo esc_url($motif_support1['title']); ?>" name="choice__support" value="">
                    <label for="<?php echo esc_url($motif_support1['title']); ?>" class="label__choice_support">
                        <img src="<?php echo esc_url($motif_support1['sizes']['card-header_support']); ?>" alt="<?php echo esc_url($motif_support1['title']); ?>">
                    </label>
                <?php endif; ?>

                <?php if(!empty(get_sub_field('motif_support2'))): $motif_support2 = get_sub_field('motif_support2'); ?>
                    <input type="radio" id="<?php echo esc_url($motif_support2['title']); ?>" name="choice__support" value="">
                    <label for="<?php echo esc_url($motif_support2['title']); ?>" class="label__choice_support">
                        <img src="<?php echo esc_url($motif_support2['sizes']['card-header_support']); ?>" alt="<?php echo esc_url($motif_support2['title']); ?>">
                    </label>
                <?php endif; ?>

                <?php if(!empty(get_sub_field('motif_support3'))): $motif_support3 = get_sub_field('motif_support3'); ?>
                    <input type="radio" id="<?php echo esc_url($motif_support3['title']); ?>" name="choice__support" value="">
                    <label for="<?php echo esc_url($motif_support3['title']); ?>" class="label__choice_support">
                        <img src="<?php echo esc_url($motif_support3['sizes']['card-header_support']); ?>" alt="<?php echo esc_url($motif_support3['title']); ?>">
                    </label>
                <?php endif; ?>

                <?php if(!empty(get_sub_field('motif_support4'))): $motif_support4 = get_sub_field('motif_support4'); ?>
                    <input type="radio" id="<?php echo esc_url($motif_support4['title']); ?>" name="choice__support" value="">
                    <label for="<?php echo esc_url($motif_support4['title']); ?>" class="label__choice_support">
                        <img src="<?php echo esc_url($motif_support4['sizes']['card-header_support']); ?>" alt="<?php echo esc_url($motif_support4['title']); ?>">
                    </label>
                <?php endif; ?>

                <?php if(!empty(get_sub_field('motif_support5'))): $motif_support5 = get_sub_field('motif_support5'); ?>
                    <input type="radio" id="<?php echo esc_url($motif_support5['title']); ?>" name="choice__support" value="">
                    <label for="<?php echo esc_url($motif_support5['title']); ?>" class="label__choice_support">
                        <img src="<?php echo esc_url($motif_support5['sizes']['card-header_support']); ?>" alt="<?php echo esc_url($motif_support5['title']); ?>">
                    </label>
                <?php endif; ?>
            </div>
        <?php endwhile; endif; ?>

        <div class="other__options">
            <?php $title = get_the_title(); ?>
            <?php if(strstr($title, "Gravures")): ?>
                <div class="info">Gravure faite à la main, probablement en stream. Vous pouvez choisir un motif, ou en demander un nouveau (ce qui vous coûtera plus cher). Trois types de verres vous sont proposés au même prix.</div>
            <?php endif; ?>

            <?php if(strstr($title, "Bougies")): ?>
                <div class="info">Catégorie bougies</div>
            <?php endif; ?>

            <div class="other__infos">
                <div class="buttons">
                    <input type="submit" value="Envoyer ma commande" class="btn__submit">
                    <input type="reset" class="btn__reset">
                </div>
                <div class="delivery__costs">
                    Cet article comprend des frais de port d'une valeur minimum de 5 €
                </div>
            </div>
        </div>

    </form>

</div>

<?php get_footer(); ?>