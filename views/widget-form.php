<div class="whatapp-wrapper">
    <div class="whatapp-form">
        <p class="whatapp-text"><?= $text; ?></p>
        <textarea class="wp-whatapp-me-message" id="wp-whatapp-me-widget-message" placeholder="Write a message..."></textarea>
        <p class="whatapp-error" id="whatapp-widget-error" ></p>
        <input hidden="text" id="wp-whatapp-me-widget-full-phone-number" value="<?= get_option('wp-whatapp-me-full-phone-number'); ?>" />
        <input type="submit" class="wp-whatapp-me-button" id="wp-whatapp-me-widget-button" value="<?= get_option('wp-whatapp-me-button'); ?>" />
    </div>
</div>