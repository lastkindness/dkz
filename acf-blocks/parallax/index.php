<?php if( have_rows('parallax') ): ?>
    <?php while ( have_rows('parallax') ) : the_row(); ?>
        <section class="parallax">
            <div class="container">
                <?php if($title=get_sub_field('title')):?>
                    <h2><?php echo $title;?></h2>
                <?php endif;?>
                <?php if($image=get_sub_field('image')):?>
                    <div class="parallax__box" style="background-image: url('<?php echo $image;?>')"></div>
                <?php endif;?>
            </div>
        </section>
    <?php endwhile;?>
<?php endif;?>

