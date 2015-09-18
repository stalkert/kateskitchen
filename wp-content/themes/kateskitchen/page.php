<?php get_header(); ?> 
        <div class="row">
            <?php get_sidebar();?>
            <div class="col-md-6" id="content">
                

					
                    
						
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
						<div class="post page-content">
						
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php the_content(); ?>
							<div class="otstup"></div>
							<?php comments_template('', true); ?>
						</div>
					<?php endwhile; ?>			
					<?php endif; ?>
                    

                
                
            </div>
            <div class="col-md-3" id="right_sidebar">
                <div  id="about-us">
                    <h2 class="title1"><?php  echo get_the_title(16);?></h2>
                    <?php echo  get_post_meta(176,'about_us',true);?>
                </div>
                <div>
                    <h2 class="title1">Лайкнуть</h2>
                </div>
                <div>
                    <h3> Последние комментарии</h3>
                     <div id="recentcomments" class="dsq-widget">
						<script type="text/javascript" src="http://kateskitchenru.disqus.com/recent_comments_widget.js?num_items=5&hide_avatars=0&avatar_size=32&excerpt_length=200">
						</script>
					</div>
                </div>
            </div>

        </div>
     <?php get_footer(); ?>    