<div class="section">
    <div class="container">
        <h2 class="h1-brdr mb-30"><?php _e( 'Steering Committee Co-chairs', 'ccac_2020' ); ?></h2>
        <p class="txt-jedi mb-60"><?php _e( 'The CCAC Steering Committee sets the schedule and coordinates CCAC programs.', 'ccac_2020' ); ?><br><?php _e( 'Learn more about Steering Committee members and its Co-Chairs:', 'ccac_2020' ); ?></p>
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
                        'key' => 'co-chair',
                        'value' => '1',
                        'compare' => '=',
                    ),
                    array(
                        'key' => 'current',
                        'value' => '1',
                        'compare' => '=',
                    )
                )
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div role="listitem" class="w-dyn-item">
                    <h2 class="h2-brdr js-expandmore"><?php the_title(); ?></h2>
                        <div class="js-to_expand">
                            <h3><?php the_field('title'); ?></h3>
                            <p><em><?php the_field('pronouns'); ?></em></p>
                            <div class="">
                            
                                <div>
                                    <img style="float: right; margin-left: 10px; margin-bottom: 10px;" src="<?php the_field('image'); ?>" alt="" width=200>
                                    <?php the_content(); ?>
                                    
                                </div>
                            </div>
                        </div>
                        
               
                </div>
           
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>