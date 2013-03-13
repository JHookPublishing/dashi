<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post-page" id="post-<?php the_ID(); ?>">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-9478214494697009";
/* dash_page_top */
google_ad_slot = "0862575972";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<h1><?php the_title(); ?></h1>
<?php the_content('<p class="serif">'.__('Read the rest of this page &raquo;', 'albeo').'</p>'); ?>
<div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'albeo').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<?php edit_post_link(__('Edit this entry.', 'albeo'), '<p>', '</p>'); ?>

</div>

<?php comments_template(); ?>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
