<?php get_header(); ?>

	<div id="container">
		<div id="content">

			<h2 class="page-title"><?php _e( 'Tag Archives:', 'notesil' ); ?> <span><?php single_tag_title(); ?></span></h2>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'notesil' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'notesil' ) ); ?></div>
			</div>

<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php notesil_post_class(); ?>">
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __( 'Permalink to %s', 'notesil' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<div class="entry-date"><a href="<?php the_permalink(); ?>" class="published" title="<?php the_time( 'Y-m-d\TH:i:sO' ); ?>"><?php unset( $previousday ); printf( __( '%1$s &#8211; %2$s', 'notesil' ), the_date( '', '', '', false ), get_the_time() ); ?></a></div>
				<div class="entry-content">
					<?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'notesil' ) ); ?>
				</div>
				<div class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'notesil' ), '<a class="url fn n" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'notesil' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ); ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'notesil' ), get_the_category_list( ', ' ) ); ?></span>
					<span class="meta-sep">|</span>
<?php if ( $tag_ur_it = notesil_tag_ur_it( ', ' ) ) : // Returns tags other than the one queried ?>
					<span class="tag-links"><?php printf( __( 'Also tagged %s', 'notesil' ), $tag_ur_it ); ?></span>
					<span class="meta-sep">|</span>
<?php endif; ?>
<?php edit_post_link( __( 'Edit', 'notesil' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ); ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'notesil' ), __( 'Comments (1)', 'notesil' ), __( 'Comments (%)', 'notesil' ) ); ?></span>
				</div>
			</div><!-- .post -->

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'notesil' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'notesil' ) ); ?></div>
			</div>

		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #container -->
<?php get_footer(); ?>