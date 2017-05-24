<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Iconic_One
 * @since Iconic One 1.0
 */

get_header(); ?>

        <main>
            <h2>Spring Summer 2017</h2>

            <?php
                $myposts = get_posts(array ('category_name' => 'produits', 'posts_per_page' => '-1'));
                    foreach ($myposts as $post):
                        ?>
                        <a href="#">
                            <article class="">
                                <img src="http://placehold.it/150x200" class="img-responsive center-block">
                                <?php $categories = get_the_category($post->id);
                                    foreach ($categories as $cat):
                                        if ($cat->name != 'Produits'):?>
                                        <p class="<?php echo $cat->slug?>"><?php echo $cat->name;?></p>
                                        <?php
                                        endif;
                                    endforeach;
                                ?>
                                <p><?php the_title();?></p>
                                <p><?php echo get_post_meta($post->ID, 'Price', true);?></p>
                            </article>
                        </a>
                        <?php
                    endforeach
             ?>
        </main>
<?php
get_footer();
?>
