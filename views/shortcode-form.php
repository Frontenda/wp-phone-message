<div class="whatapp-wrapper">
    <div class="whatapp-form">
        <h3 class="whatapp-title"><?= get_option('wp-phone-message-title'); ?></h3>
        <p class="whatapp-text"><?= get_option('wp-phone-message-text'); ?></p>
        <textarea class="wp-phone-message-message" id="wp-phone-message-message" placeholder="Write a message..."></textarea>
        <p class="whatapp-error" id="whatapp-error" ></p>
        <input hidden="text" id="wp-phone-message-full-phone-number" value="<?= get_option('wp-phone-message-full-phone-number'); ?>" />
        <input type="submit" class="wp-phone-message-button" id="wp-phone-message-button" value="<?= get_option('wp-phone-message-button'); ?>" />
    </div>
</div>