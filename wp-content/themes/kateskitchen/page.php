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
            <?php get_template_part( 'right-sidebar' ); ?>
     <?php get_footer(); ?>    