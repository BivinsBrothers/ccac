<div class="section">
    <div class="container">
        <h2 class="h1-brdr mb-30"><?php _e( 'Steering Committee and Board Members', 'ccac_2020' ); ?></h2>
        <div class="w-dyn-list">
        <div role="list" class="grid-members w-dyn-items">
            <?php
                $args = array(  
                'post_type' => 'steering_committee',
                'meta_key' => 'last_name',
                'orderby' => 'meta_value', 
                'order' => 'ASC',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'current',
                        'value' => '1',
                        'compare' => '=',
                    ),
                    array(
                        'key' => 'co-chair',
                        'value' => '0',
                        'compare' => '=',
                    )
                )
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
                <div role="listitem" class="w-dyn-item">
                    <h2 class="txt-wookie js-expandmore"><?php the_title(); ?></h2>
                    <div class="js-to_expand">
                        <div class="rich-text w-richtext"><strong><?php the_title(); ?></strong> (<?php the_field('pronouns'); ?>) </div>
                        <div class="rich-text w-richtext"><img style="float: right; margin-left: 10px; margin-bottom: 10px;" src="<?php the_field('image'); ?>" alt="" width=200><?php the_content(); ?></div>
                    </div>
                    
                </div>
            
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>