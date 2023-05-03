<?php if( have_rows('team') ): ?>
    <section class="team">
        <div class="container">
            <?php while ( have_rows('team') ) : the_row(); ?>
                <?php if($title=get_sub_field('title')):?>
                    <h2><?php echo $title;?></h2>
                <?php endif;?>
                <?php if($employees=get_sub_field('employees')):
                    $args = array(
                    'posts_per_page' => -1,
                    'post__in'  => $employees,
                    'post_type' => 'employee'
                    );
                    $query = new WP_Query( $args );?>
                    <?php if ( $query->have_posts() ) :?>
                        <div class="row">
                            <?php while ( $query->have_posts() ) : $query->the_post();?>
                                <div class="col">
                                    <div class="team__box">
                                        <?php if(has_post_thumbnail()):?>
                                            <?php the_post_thumbnail('full');?>
                                        <?php endif;?>
                                        <?php the_title('<h4>','</h4>')?>
                                            <?php if($position=get_field('position')):?>
                                            <span class="team__box-position"><?php echo $position;?></span>
                                        <?php endif;?>
                                        <a href="<?php the_permalink();?>"><?php _e('See More',TEXTDOMAIN);?></a>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        </div>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                <?php endif;?>
            <?php endwhile;?>
        </div>
    </section>
<?php endif;?>
