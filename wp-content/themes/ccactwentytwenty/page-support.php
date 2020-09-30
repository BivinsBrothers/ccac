<?php get_header(); ?>

<?php get_template_part('template-parts/hero/hero-template-part'); ?>
<div class="shadow shadow--int div-block"></div>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php post_class( 'section' ); ?> id="post-<?php the_ID(); ?>">
            <div class="container">
                <div class="center-block"></div>
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="mb-40 display-none w-container">
                <h2 class="section-title"><?php _e( 'CALL FOR CCAC STEERING COMMITTEE NOMINATIONS', 'ccac_2020' ); ?></h2>
                <h3><?php _e( 'Term: June 2017-May 2019', 'ccac_2020' ); ?></h3>
                <p class="h2-about"><?php _e( 'Chicago Cultural Accessibility Consortium (CCAC) seeks new members for its Steering Committee. You may nominate yourself, a colleague, or friend for a Steering Committee position by March 26, 2017. More information is available in the PDF document below; you can then fill out the form to send us your Nomination.', 'ccac_2020' ); ?></p>
                <div class="flag-block">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-pdf.svg" width="30" alt="" class="image-resource-icon">
                    <a href="https://drive.google.com/file/d/0B_qyujFtppjtTFRWdkt2cVhaRUk/view?usp=sharing" class="text-resources"><?php _e( '2017 Call for CCAC Steering Committee Nominations.pdf', 'ccac_2020' ); ?></a>
                </div>
                <div class="w-form">
                    <form id="wf-form-Nominee-Form" name="wf-form-Nominee-Form-2017" data-name="Nominee Form 2017">
                        <label for="Nominee-s-Name" class="form-label">
                            <?php _e( 'NOMINEE&#x27;S NAME', 'ccac_2020' ); ?>
                        </label>
                        <input type="text" id="Nominee-s-Name" name="Nominee-s-Name" data-name="Nominee&#x27;s Name" placeholder="Enter the Nominee&#x27;s Name" maxlength="256" class="field w-input">
                        <label for="Nominee-s-Email" class="form-label">
                            <?php _e( 'NOMINEE&#x27;S EMAIL', 'ccac_2020' ); ?>
                        </label>
                        <input type="email" id="Nominee-s-Email" name="Nominee-s-Email" data-name="Nominee&#x27;s Email" placeholder="Enter the Nominee&#x27;s Email Address" maxlength="256" required="" class="field w-input">
                        <label for="Nominee-s-Phone" class="form-label">
                            <?php _e( 'NOMINEE&#x27;S PHONE', 'ccac_2020' ); ?>
                        </label>
                        <input type="text" class="field w-input" maxlength="256" name="Nominee-s-Phone" data-name="Nominee&#x27;s Phone" placeholder="Enter the Nominee&#x27;s Telephone Number" id="Nominee-s-Phone" required="">
                        <label for="Reason-for-Nomination" class="form-label">
                            <?php _e( 'WHY SHOULD THIS PERSON BE A CCAC STEERING COMMITTEE MEMBER?', 'ccac_2020' ); ?>
                        </label>
                        <textarea id="Reason-for-Nomination" name="Reason-for-Nomination" maxlength="5000" placeholder="A brief statement on why you feel this person would make a significant contribution as a CCAC  Steering Committee member." data-name="Reason for Nomination" class="field w-input"></textarea>
                        <input type="submit" value="Submit" data-wait="Please wait..." class="btn yellow w-button">
                    </form>
                    <div class="w-form-done">
                        <div>
                            <?php _e( 'Thank you! Your submission has been received!', 'ccac_2020' ); ?>
                        </div>
                    </div>
                    <div class="w-form-fail">
                        <div>
                            <?php _e( 'Oops! Something went wrong while submitting the form', 'ccac_2020' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'ccac_2020' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>