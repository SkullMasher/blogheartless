<?php
/**
 * @package Heartless
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <div class="author-meta">
                <?php echo '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . get_avatar( get_the_author_meta( 'ID' ), 32 ) . '</a>' ?>

                <?php
                    // heartless_posted_on();
                    echo '<a class="author-url url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html( get_the_author() ) . '</a>';

                ?>
            </div>
            <hr>
            <?php
                $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
                if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
                }

                $time_string = sprintf( $time_string,
                    esc_attr( get_the_date( 'c' ) ),
                    esc_html( get_the_date() ),
                    esc_attr( get_the_modified_date( 'c' ) ),
                    esc_html( get_the_modified_date() )
                );
                echo '<div class="post-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a></div>'
            ?>

            <?php endif; ?>

            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'heartless' ) );
                    if ( $categories_list && heartless_categorized_blog() ) :
                ?>
                <div class="cat-links">
                    <?php printf( __( '%1$s', 'heartless' ), $categories_list ); ?>
                </div>
                <?php endif; // End if categories ?>

                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'heartless' ) );
                    if ( $tags_list ) :
                ?>
                <div class="tags-links">
                    <?php printf( __( ' %1$s', 'heartless' ), $tags_list ); ?>
                </div>
                <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>

            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <div class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'heartless' ), __( '1 Comment', 'heartless' ), __( '% Comments', 'heartless' ) ); ?></div>
            <?php endif; ?>

            <?php edit_post_link( __( 'Edit', 'heartless' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        
        <?php
            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'heartless' ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );
        ?>

        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'heartless' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">

    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
