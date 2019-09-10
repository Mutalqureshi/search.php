<?php get_header(); ?>


<div class="content contactPage">
	<div class="stripe-1 blogPage blogDetail">
    	<div class="container">
        	<div class="row">
            
            	<div class="col-sm-12">
                	<h1 class="page-title">Search Results for &ldquo;<?=get_search_query()?>&rdquo;</h1>
                </div>
                
                <div class="col-md-8 col-sm-12 blogContent">
                	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                    <div class="blogBox clearfix">
                                                
                        <div class="blogImage">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                            <?php
							if ( has_post_thumbnail(get_the_ID(),'blog-thumb') ) { the_post_thumbnail( 'blog-thumb' ); }
							?>
                            </a>
							<div class="blogInfo">
								<div class="blogDate">
									<span><?php the_time('j'); ?></span>
									<i><?php the_time('F'); ?></i>
								</div><!-- ( BLOG DATE END ) -->
								<div class="blogComments">
                                    <?php
									if ( comments_open() ) : //if comments are enabled from WP settings
										comments_popup_link('<span>0</span><i>Comment</i>', '<span>1</span><i>Comment</i>', '<span>%</span><i>Comments</i>', '', '');
									endif;
									?>
								</div><!-- ( BLOG COMMENTS END ) -->
							</div><!-- ( BLOG INFO END ) -->
                        </div><!-- ( BLOG IMAGE END ) -->
                                                
                        <div class="blogDesc">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd guberren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                            
                            <div class="blogListFooter">
                            	<ul class="postDetail-info clearfix">
                                    <li><?php the_time('F j, Y'); ?></li>
                                    <li>By <?php  the_author(); ?></li>
                                    <?php
									if ( comments_open() ) : //if comments are enabled from WP settings
										echo '<li>';
										comments_popup_link('Comment: 0', 'Comment: 1', 'Comments: %', '', '');
										echo '</li>';
									endif;
									?></li>
                                    <li>Category: <?php the_category(', ') ?></li>
                                </ul><!-- ( POST INFORMATION END ) -->
                            </div><!-- ( BLOG LIST FOOTER END ) -->
                            <hr>
                        </div><!-- ( BLOG DESCRIPTION END ) -->
                    </div><!-- ( BLOG BOX END ) -->
                    <?php endwhile; ?>
            
					<?php //wpbeginner_numeric_posts_nav(); ?>
                                        
                    <?php else: ?>
                        <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>
                    
                </div>
                
                <?php get_sidebar(); ?>
                
            </div>
            
            
            <?php wpbeginner_numeric_posts_nav(); ?>
            
        </div>
    </div><!-- ( STRIPE END ) -->
	





<?php get_footer(); ?>