<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package personal
*/

?>

<?php if ( is_single() ) : ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class("row"); ?>>
                <div class="col-sm-9 col-sm-offset-1 col-md-7 col-md-offset-1">
                    <?php the_title( '<h2>', '</h2>' );?>
                    <?php the_content(); ?>
                    <?php if ( 'post' === get_post_type() ) : ?>
                        <?php personal_posted_on(); ?>
                    <?php endif; ?>
                </div>
            </article>

<?php else : ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class("row"); ?>>
                <section class="col-sm-9 col-sm-offset-1 col-md-7 col-md-offset-1">
                    <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
                    <blockquote>
                        <?php the_excerpt(); ?>
                    </blockquote>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-default">Read</a>
                </section>
            </article>
<?php endif; ?>
