<?php get_header(); ?> 
        <div class="row">
            <?php get_sidebar();?>
            <div class="col-md-6" id="content">
                <div id="carousel-example-generic" class="carousel slide post-carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        
                    </ol>
                    <div class="carousel-inner">
					
                        <div class="active item conteiner-carusel">
							<?php kateskit_get_media(57);?>
							<div class="carousel-caption text-carusel">
								<p><?php echo  get_post_meta(57,'text_slider1',true);?></p>
							</div>
						
						
						</div>
						
                        <div class="item conteiner-carusel">
							<?php kateskit_get_media(69);?>
							<div class="carousel-caption text-carusel">
								<p><?php echo  get_post_meta(69,'text_slider2',true);?></p>
							</div>
						</div>
						<div class="item conteiner-carusel">
							<?php kateskit_get_media(290);?>
							<div class="carousel-caption text-carusel">
								<p><?php echo  get_post_meta(290,'text_slider3',true);?></p>
							</div>
						</div>
						<div class="item conteiner-carusel">
							<?php kateskit_get_media(292);?>
							<div class="carousel-caption text-carusel">
								<p><?php echo  get_post_meta(292,'text_slider4',true);?></p>
							</div>
						</div>
                        
                    </div>
					<div id="text_slider">
					</div>
                    <!-- Carousel nav 
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>-->
                </div>

                <div>
                    <h2>
                        Свежие рецепты этой недели
                    </h2>
                    <div class="dotted"></div>
                    <?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
					<div class="post">
					
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div id="content-post"><?php the_content(); ?></div>
						<div class="link-post-and-comment"><a href="<?php the_permalink(); ?>">&gt&gt <?php echo  get_post_meta(176,'details',true);?></a> &nbsp&nbsp&nbsp<a href="<?php the_permalink(); ?>"><?php $comments_count = wp_count_comments($post->ID); echo $comments_count->approved;?> Comments</a></div>
                    </div>
					<?php endwhile; ?>			
					<?php endif; ?>
                    

                </div>
                <div id="pagination">
				<ul class="pagination pagination-lg">
					<?php echo my_pagenavi(); ?>
                </ul>
                </div>
            </div>
            <?php get_template_part( 'right-sidebar' ); ?>
     <?php get_footer(); ?>    