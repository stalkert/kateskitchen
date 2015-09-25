<div class="col-md-3" id="right_sidebar">
                <div  id="about-us">
                    <h2 class="title1"><?php echo  get_post_meta(176,'o_proecte_title',true);?></h2>
                    <?php echo  get_post_meta(176,'about_us',true);?>
                </div>
                <div>
                    <h2 class="title1"><?php echo  get_post_meta(176,'like_site',true);?></h2>
					<div class="fb-like" data-href="http://kateskitchen.ru" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
				<div id="most_viewed_post">
					<h2 class="title1"><?php echo  get_post_meta(176,'most_viewed_post',true);?></h2></h2>
				<?php if (function_exists('get_most_viewed')): ?>
					
				   <ul>
					  <?php get_most_viewed('post',1); ?>
				   </ul>
				<?php endif; ?>
				</div>
                <div>
                    <h2 class="title1"> <?php echo  get_post_meta(176,'last_comments',true);?></h2>
                    <div id="recentcomments" class="dsq-widget">
						<script type="text/javascript" src="http://kateskitchenru.disqus.com/recent_comments_widget.js?num_items=5&hide_avatars=0&avatar_size=32&excerpt_length=200">
						</script>
					</div>
                </div>
            </div>

        </div>