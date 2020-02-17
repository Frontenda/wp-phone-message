<?php

        if( current_user_can( 'edit_users' ) ){
		?>
        <div class="wrap">
            <h1 class="admin-page-title"><?= esc_html( get_admin_page_title() ); ?></h1>
        
            <form method="post" action="<?= esc_html( admin_url( 'admin-post.php' ) ); ?>">

                <div class="form-description">
                    Using WP Whasapp Me is very simple and it doens't require any API Key or registration.<br/>
                    Please complete the form below. International Prefix and Whatsapp phone number are required.<br/>
                    In order to display the Whatsapp message form on your page please add the shortcode <strong>[wp-whatapp-me]</strong> to your page/post content.<br/> 
                </div>

                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="wp-whatapp-me-phone-prefix">
                                    International Prefix* :
                                </label>
                            </th>
                            <td>
                                <input name="wp-whatapp-me-phone-prefix" type="text" id="wp-whatapp-me-phone-prefix" value="<?php echo get_option('wp-whatapp-me-phone-prefix'); ?>" class="regular-text" />
                                <p class="description" id="wp-whatapp-me-phone-prefix-description">Insert the international prefix of your Whatsapp phone number.</p>
                            </td>
                        <tr>
                        </tr>
                            <th scope="row">
                                <label for="wp-whatapp-me-phone-number">
                                    Whatsapp phone number* :
                                </label>
                            </th>
                            <td>
                                <input name="wp-whatapp-me-phone-number" type="text" id="wp-whatapp-me-phone-number" value="<?php echo get_option('wp-whatapp-me-phone-number'); ?>" class="regular-text" />
                                <p class="description" id="wp-whatapp-me-phone-number-description">Insert a valid Whatsapp number that will receive the messages.</p>
                            </td>
                        </tr>
                       </tr>
                            <th scope="row">
                                <label for="wp-whatapp-me-title">
                                    Title :
                                </label>
                            </th>
                            <td>
                                <input name="wp-whatapp-me-title" type="text" id="wp-whatapp-me-title" value="<?php echo get_option('wp-whatapp-me-title'); ?>" class="regular-text" />
                                <p class="description" id="wp-whatapp-me-title-description">The title will appear on the top of the message form.</p>
                            </td>
                        </tr>
                       </tr>
                            <th scope="row">
                                <label for="wp-whatapp-me-text">
                                    Text :
                                </label>
                            </th>
                            <td>
                                <textarea name="wp-whatapp-me-text"  id="wp-whatapp-me-text" class="large-text code" rows="3"><?= get_option('wp-whatapp-me-text'); ?></textarea>
                                <p class="description" id="wp-whatapp-me-text-description">The text will appear on the top of the message form.</p>
                            </td>
                        </tr>
                       </tr>
                            <th scope="row">
                                <label for="wp-whatapp-me-title">
                                    Button Title :
                                </label>
                            </th>
                            <td>
                                <input name="wp-whatapp-me-button" type="text" id="wp-whatapp-me-button" value="<?php echo get_option('wp-whatapp-me-button'); ?>" class="regular-text" />
                                <p class="description" id="wp-whatapp-me-button-description">The Button Title will appear on the button of the message form.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="form-messages">
                    <?php echo get_option('wp-whatapp-me-form-message'); ?>
                    <input type="hidden" id="wp-whatapp-me-full-phone-number" value="<?php echo get_option('wp-whatapp-me-full-phone-number'); ?>" />
                </div>

                <?php
                    wp_nonce_field( 'wp-whatapp-me-settings-save', 'wp-whatapp-me-form-message' );
                    submit_button();
                ?>
            </form>
        </div><!-- .wrap -->
		<?php
        }
        else {  
        ?>
            <p> <?php __("You are not authorized to perform this operation.") ?> </p>
        <?php   
        }