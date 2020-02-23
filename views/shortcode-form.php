<?php
$shortcode_form = '<div class="whatapp-wrapper">';
$shortcode_form .= '<div class="whatapp-form">';
$shortcode_form .= '<h3 class="whatapp-title">' .  get_option('wp-phone-message-title') . '</h3>';
$shortcode_form .= '<p class="whatapp-text">' .  get_option('wp-phone-message-text') . '</p>';
$shortcode_form .= '<textarea class="wp-phone-message-message" id="wp-phone-message-message" placeholder="Write a message..."></textarea>';
$shortcode_form .= '<p class="whatapp-error" id="whatapp-error" ></p>';
$shortcode_form .= '<input hidden="text" id="wp-phone-message-full-phone-number" value="' . get_option('wp-phone-message-full-phone-number') . '" />';
$shortcode_form .= '<input type="submit" class="wp-phone-message-button" id="wp-phone-message-button" value="' . get_option('wp-phone-message-button') . '" />';
$shortcode_form .= '</div>';
$shortcode_form .= '</div>';