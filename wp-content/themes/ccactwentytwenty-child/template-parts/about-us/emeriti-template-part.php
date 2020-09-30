<div class="section bg-ws">
    <div class="container">
        <div class="w-layout-grid grid-2">
            <h2 id="w-node-202a70ffec92-f4a48352" class="h1-brdr"><?php _e( 'Emeriti', 'ccac_2020' ); ?><br></h2>
            <div id="w-node-e63b0615194e-f4a48352" class="committee-member_bio--cochair w-richtext">
            <?php
                $args = array(  
                'post_type' => 'steering_committee',
                'meta_key' => 'last_name',
                'orderby' => 'meta_value', 
                'order' => 'ASC',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'co-chair',
                        'value' => '0',
                        'compare' => '=',
                    ),
                    array(
                        'key' => 'current',
                        'value' => '0',
                        'compare' => '=',
                    )
                )
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
  
                    <p>
                        <strong><?php the_title(); ?></strong> (<?php the_field('emeriti_term') ?>)<?php if (get_field( 'founding_member') == '1') { echo ", Founding Steering Committee Member"; } ?>
                    </p>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <p>‍</p>
            </div>
        </div>
    </div>
</div>  