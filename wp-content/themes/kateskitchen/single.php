<?php get_header(); ?> 
        <div class="row">
            <?php get_sidebar();?>
            <div class="col-md-6" id="content">
                

					<div>
                    
						
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
						<div class="post">
						
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="dotted"></div>
							
								<div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
								<div id="views-post">
								<?php if(function_exists('the_views')) { the_views(); } ?>
								</div>
								<div class="clear-both"></div>
								<div id="amanda_kate">
									<?php echo  get_post_meta($post->ID,'amanda_kate',true);?>
									<br>
									<p class="tag-recepty"> <?php  echo get_the_title(18);?>:</p>
									<p class="tag-category"> <?php the_category(', '); ?></p>
								</div>
								
								<ul class="bxslider">
									<?php echo  get_post_meta($post->ID,'slideshow',true);?>
								</ul>
								
							</div>
							<?php echo  get_post_meta($post->ID,'text_recept',true);?>
							<div class="otstup"></div>
							<?php comments_template('', true); ?>
                    </div>
					<?php endwhile; ?>			
					<?php endif; ?>
                    

                
                
            </div>
           <?php get_template_part( 'right-sidebar' ); ?>
     <?php get_footer(); ?>    