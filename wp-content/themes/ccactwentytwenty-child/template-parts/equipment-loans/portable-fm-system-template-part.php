
<?php
$block = get_field('portable_fm_system_block');

if ($block) : ?>
    <div class="w-layout-grid grid-feat mb-jedi">
        <div id="calendar" class="flx-feat w-node-7c834c76ce9a-8ba48358"> 
        <h3 class="head-feat"><?php echo $block['portable_fm_system_block_title']?></h3>
        <img src="<?php echo $block['portable_fm_system_block_image'] ?>" alt="" class="img-bg">
        <div class="overlay-feat grad-2"></div>
        </div>
        <div id="w-node-7c834c76ce9f-8ba48358" class="bg-feat bg-feat--1">
            <div>
                <?php echo $block['portable_fm_system_block_content'] ?>
            </div>
            <a href="<?php echo $block['portable_fm_system_block_button_link'] ?>" class="btn w-button"><?php echo $block['portable_fm_system_block_button_title'] ?></a>
        </div>
    </div>
<?php endif; ?>