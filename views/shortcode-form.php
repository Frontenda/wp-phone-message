<div class="whatapp-wrapper">
    <div class="whatapp-form">
        <h3 class="whatapp-title"><?= get_option('wp-whatapp-me-title'); ?></h3>
        <p class="whatapp-text"><?= get_option('wp-whatapp-me-text'); ?></p>
        <textarea class="wp-whatapp-me-message" id="wp-whatapp-me-message" placeholder="Write a message..."></textarea>
        <p class="whatapp-error" id="whatapp-error" ></p>
        <input hidden="text" id="wp-whatapp-me-full-phone-number" value="<?= get_option('wp-whatapp-me-full-phone-number'); ?>" />
        <input type="submit" class="wp-whatapp-me-button" id="wp-whatapp-me-button" value="<?= get_option('wp-whatapp-me-button'); ?>" />
    </div>
</div>