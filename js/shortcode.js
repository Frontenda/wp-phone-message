jQuery(document).ready(function ($) {

    $("#wp-whatapp-me-button").click(function () {
        var fullTelephone = $('#wp-whatapp-me-full-phone-number').val();
        var message = $('#wp-whatapp-me-message').val();
        var title = $('#wp-whatapp-me-title').val();

        var whatappUrl = "https://wa.me/" + fullTelephone + "?text=" + message;

        if (whatappValidation(fullTelephone, message, 'whatapp-error')) {
            popupwindow(whatappUrl, title, 1000, 700);
        }
    });

    $("#wp-whatapp-me-widget-button").click(function () {
        var fullTelephone = $('#wp-whatapp-me-widget-full-phone-number').val();
        var message = $('#wp-whatapp-me-widget-message').val();

        var whatappUrl = "https://wa.me/" + fullTelephone + "?text=" + message;

        if (whatappValidation(fullTelephone, message, 'whatapp-widget-error')) {
            popupwindow(whatappUrl, 'Whatsapp Me', 1000, 700);
        }
    });

    function popupwindow(url, title, w, h) {
        var left = (screen.width / 2) - (w / 2);
        var top = (screen.height / 2) - (h / 2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    }

    function whatappValidation(fullTelephone, message, errorTarget) {
        if (message) {
            if (fullTelephone) {
                whatappErrorMessage(" ", errorTarget);
                return true;
            }
            else {
                whatappErrorMessage("Telephone number is not set.", errorTarget);
                return false;
            }
        }
        else {
            whatappErrorMessage("Please insert a message.", errorTarget);
            return false;
        }
    }

    function whatappErrorMessage(errorMessage, errorTarget) {
        $("#" + errorTarget).text(errorMessage);
    }

});