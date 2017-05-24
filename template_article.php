<?php
/* Template Name: product
    Template Post Type: post */
get_header();
?>

<main>
        <section>
            <h3><?php the_title(); ?></h3>
            <img src="http://placehold.it/150x200" alt="image du produit" class="imgprod">
            <p><?php echo get_post_field('post_content');?></p>
            <h3><?php echo get_post_meta($post->ID, 'Price', true);?></h3>
            <button type="button" name="button">Ajoutez au panier</button>
        </section>
    </div>
</main>
<?php
get_footer();
 ?>
