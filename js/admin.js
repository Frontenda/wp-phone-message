jQuery(document).ready(function () {
    var input = document.querySelector("#wp-whatapp-me-phone-prefix");

    if (input !== null) {
        window.intlTelInput(input);

        var currentPrefix = jQuery('#wp-whatapp-me-phone-prefix').val();
        var currentFlag = jQuery('.iti__country[data-dial-code="' + currentPrefix + '"]');
        var currentCode = currentFlag.attr("data-country-code");
        jQuery('.iti__flag:first').addClass(' iti__' + currentCode);

        jQuery(".iti__country").click(function () {
            var thisPrefix = jQuery(this).attr("data-dial-code");
            jQuery('#wp-whatapp-me-phone-prefix').val(thisPrefix);
        });
    }
});
