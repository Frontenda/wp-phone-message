<div class="whatsapp-wrapper">
    <div class="whatsapp-form">
        <p class="whatsapp-text"><?= $text; ?></p>
        <textarea class="wp-whatsapp-me-message" id="wp-whatsapp-me-widget-message" placeholder="Write a message..."></textarea>
        <p class="whatsapp-error" id="whatsapp-widget-error" ></p>
        <input hidden="text" id="wp-whatsapp-me-widget-full-phone-number" value="<?= get_option('wp-whatsapp-me-full-phone-number'); ?>" />
        <input type="submit" class="wp-whatsapp-me-button" id="wp-whatsapp-me-widget-button" value="<?= get_option('wp-whatsapp-me-button'); ?>" />
    </div>
</div>