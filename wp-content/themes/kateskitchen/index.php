<?php get_header(); ?> 
        <div class="row">
            <?php get_sidebar();?>
            <div class="col-md-6" id="content">
                <div id="carousel-example-generic" class="carousel slide">
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        
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
                        <?php the_content(); ?>
                    </div>
					<?php endwhile; ?>			
					<?php endif; ?>
                    

                </div>
                <div id="pagination">
                    <ul class="pagination pagination-lg">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" id="right_sidebar">
                <div>
                    <h2 class="title1">О проекте</h2>
                    <p>Сайт Катина Кухня посвящен книге  The Essential New York Times Cook Book .</p>
                    <p>По рецептам которой, я с друзьями готовлю и рассказываю об этом.</p>
                    <p>Смотрите, готовьте, комментируйте  и  ешьте с любовью - будет вкуснее!</p>
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/p2.jpg" id="kate">
                    <p>Подробнее о проекте можно прочитать тут.</p>
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