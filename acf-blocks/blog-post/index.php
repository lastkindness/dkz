<?php if( have_rows('blog_posts') ): ?>
    <?php while ( have_rows('blog_posts') ) : the_row(); ?>
        <?php if($posts=get_sub_field('posts') ):
            $args = array(
                'posts_per_page' => -1,
                'post__in'  => $posts,
                'orderby'   => 'post__in',
            );
            $query = new WP_Query( $args );?>
            <?php if ( $query->have_posts() ) :?>
            <section class="blog-post">
                <div class="container">
                    <?php if($sub_title=get_sub_field('sub_title')):?>
                        <strong class="title"><?php echo $sub_title;?></strong>
                    <?php endif;?>
                    <?php if($title=get_sub_field('title')):?>
                        <h2><?php echo $title;?></h2>
                    <?php endif;?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <article class="post">
                            <?php if(has_post_thumbnail()):?>
                                <div class="post__img">
                                    <?php the_post_thumbnail('full');?>
                                </div>
                            <?php endif;?>
                            <h3><a href="<?php echo  get_the_permalink();?>"><?php the_title();?></a></h3>
                            <time datetime="<?php echo get_the_date('Y-m-d');?>"><?php echo get_the_date('j F Y');?></time>
                            <?php the_excerpt();?>
                            <a href="<?php echo  get_the_permalink();?>" class="btn"><?php _e('Button',TEXTDOMAIN);?></a>
                        </article>
                    <?php endwhile;?>
                </div>
            </section>
        <?php endif;?>
            <?php wp_reset_postdata();?>
        <?php endif;?>
    <?php endwhile;?>
<?php endif;?>
