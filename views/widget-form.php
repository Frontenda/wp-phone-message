<div class="whatapp-wrapper">
    <div class="whatapp-form">
        <p class="whatapp-text"><?= $text; ?></p>
        <textarea class="wp-phone-message-message" id="wp-phone-message-widget-message" placeholder="Write a message..."></textarea>
        <p class="whatapp-error" id="whatapp-widget-error" ></p>
        <input hidden="text" id="wp-phone-message-widget-full-phone-number" value="<?= get_option('wp-phone-message-full-phone-number'); ?>" />
        <input type="submit" class="wp-phone-message-button" id="wp-phone-message-widget-button" value="<?= get_option('wp-phone-message-button'); ?>" />
    </div>
</div>