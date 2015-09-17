<?php
remove_filter('the_content', 'wpautop');
	register_nav_menus(
		array('header-menu'=>'header-menu1','sidebar-menu'=>'sidebar-menu1')
	);
if(function_exists('register_sidebar')){
	register_sidebar(array('name' => 'ruen'));
	register_sidebar(array('name'=>'search')); // региструем сайдбар
}
function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed', 'http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}
?>
<?php
function mytheme_comment($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
?>
	   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>">
				<div class="comment-author vcard">
					<?php edit_comment_link( __( 'Редактировать' ), ' ' ); ?>
					<?php echo get_avatar( $comment->comment_author_email, $args['avatar_size']); ?>
					<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
				</div>

				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
				</div>

<?php if ($comment->comment_approved == '0') : ?>
				<div class="comment-awaiting-verification"><?php _e('Your comment is awaiting moderation.') ?></div>
			 <br />
<?php endif; ?>
				<?php comment_text() ?>
				<div class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
			</div>

<?php
		break;
		case 'pingback'  :
		case 'trackback' :
?>
			<li class="post pingback">
				<?php comment_author_link(); ?>
				<?php edit_comment_link( __( 'Редактировать' ), ' ' ); ?>
<?php
		break;
	endswitch;
}
?>
<?php
function kateskit_get_media($media_number){
	$media = get_attached_media( 'image', $media_number );
	
	$media = array_shift( $media);
	$image_url = $media->guid;
	echo '<img src="'. $image_url .'" />';
}


?>