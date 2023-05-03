<?php if( have_rows('tabs') ): ?>
    <section class="tabs">
        <div class="container">
            <?php if($tabs_block_title=get_field('tabs_block_title')):?>
                <h2><?php echo $tabs_block_title;?></h2>
            <?php endif;?>
            <ul class="tabs__nav">
                <?php $row = 1; while ( have_rows('tabs') ) : the_row(); ?>
                    <?php if($tab=get_sub_field('tab')):?>
                        <li <?php if($row == 1):?>class="active"<?php endif;?>>
                            <?php echo $tab;?>
                        </li>
                    <?php endif;?>
                <?php ++$row; endwhile;?>
            </ul>
            <div class="tabs__content">
                <?php $row = 0; while ( have_rows('tabs') ) : the_row(); ?>
                    <?php if($tab_text=get_sub_field('tab_text')):?>
                        <div class="tabs__content-item <?php if($row == 0):?> active<?php endif;?>">
                            <?php echo $tab_text;?>
                        </div>
                    <?php endif;?>
                <?php $row++; endwhile;?>
            </div>
        </div>
    </section>
<?php endif;?>
