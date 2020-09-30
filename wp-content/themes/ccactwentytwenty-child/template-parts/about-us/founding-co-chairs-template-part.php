<div class="section">
    <div class="container">
        <div>
            <h2 id="w-node-71a22cbf9481-f4a48352" class="h1-brdr"><?php _e( 'Founding Co-Chairs', 'ccac_2020' ); ?><br></h2>
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
                        'value' => '1',
                        'compare' => '=',
                    ),
                    array(
                        'key' => 'current',
                        'value' => '0',
                        'compare' => '=',
                    ),
                    array(
                        'key' => 'founding_member',
                        'value' => '1',
                        'compare' => '='
                    )
                )
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_title(); ?>, Founding Co-Chair (<?php the_field('emeriti_term'); ?>) and Steering Committee Member Emeritus </p>
            </div>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>