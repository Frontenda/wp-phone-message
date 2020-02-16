<div class="whatsapp-wrapper">
    <div class="whatsapp-form">
        <h3 class="whatsapp-title"><?= get_option('wp-whatsapp-me-title'); ?></h3>
        <p class="whatsapp-text"><?= get_option('wp-whatsapp-me-text'); ?></p>
        <textarea class="wp-whatsapp-me-message" id="wp-whatsapp-me-message" placeholder="Write a message..."></textarea>
        <p class="whatsapp-error" id="whatsapp-error" ></p>
        <input hidden="text" id="wp-whatsapp-me-full-phone-number" value="<?= get_option('wp-whatsapp-me-full-phone-number'); ?>" />
        <input type="submit" class="wp-whatsapp-me-button" id="wp-whatsapp-me-button" value="<?= get_option('wp-whatsapp-me-button'); ?>" />
    </div>
</div>