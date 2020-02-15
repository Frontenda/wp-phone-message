jQuery(document).ready(function () {
    var input = document.querySelector("#wp-whatsapp-me-phone-prefix");

    if (input !== null) {
        window.intlTelInput(input);

        var currentPrefix = jQuery('#wp-whatsapp-me-phone-prefix').val();
        var currentFlag = jQuery('.iti__country[data-dial-code="' + currentPrefix + '"]');
        var currentCode = currentFlag.attr("data-country-code");
        jQuery('.iti__flag:first').addClass(' iti__' + currentCode);

        jQuery(".iti__country").click(function () {
            var thisPrefix = jQuery(this).attr("data-dial-code");
            jQuery('#wp-whatsapp-me-phone-prefix').val(thisPrefix);
        });
    }
});
