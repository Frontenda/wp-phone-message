<?php

        if( current_user_can( 'edit_users' ) ){
		?>
        <div class="wrap">
            <h1 class="admin-page-title"><?= esc_html( get_admin_page_title() ); ?></h1>
        
            <form method="post" action="<?= esc_html( admin_url( 'admin-post.php' ) ); ?>">
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="wp-whatsapp-me-phone-prefix">
                                    International Prefix:
                                </label>
                            </th>
                            <td>
                                <input name="wp-whatsapp-me-phone-prefix" type="text" id="wp-whatsapp-me-phone-prefix" value="<?php echo get_option('wp-whatsapp-me-phone-prefix'); ?>" class="regular-text" />
                                <p class="description" id="wp-whatsapp-me-phone-prefix-description">Insert the international prefix of your Whatsapp phone number.</p>
                            </td>
                        <tr>
                        </tr>
                            <th scope="row">
                                <label for="wp-whatsapp-me-phone-number">
                                    Whatsapp phone number:
                                </label>
                            </th>
                            <td>
                                <input name="wp-whatsapp-me-phone-number" type="text" id="wp-whatsapp-me-phone-number" value="<?php echo get_option('wp-whatsapp-me-phone-number'); ?>" class="regular-text" />
                                <p class="description" id="wp-whatsapp-me-phone-number-description">Insert a valid Whatsapp number that will receive the messages.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-messages">
                    <?php echo get_option('wp-whatsapp-me-form-message'); ?>
                    <input type="hidden" id="wp-whatsapp-me-full-phone-number" value="<?php echo get_option('wp-whatsapp-me-full-phone-number'); ?>" />
                </div>
                <?php
                    wp_nonce_field( 'wp-whatsapp-me-settings-save', 'wp-whatsapp-me-form-message' );
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