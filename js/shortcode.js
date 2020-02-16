jQuery(document).ready(function ($) {

    $("#wp-whatsapp-me-button").click(function () {
        var fullTelephone = $('#wp-whatsapp-me-full-phone-number').val();
        var message = $('#wp-whatsapp-me-message').val();
        var title = $('#wp-whatsapp-me-title').val();

        var whatsappUrl = "https://wa.me/" + fullTelephone + "?text=" + message;

        if (whatsappValidation(fullTelephone, message, 'whatsapp-error')) {
            popupwindow(whatsappUrl, title, 1000, 700);
        }
    });

    $("#wp-whatsapp-me-widget-button").click(function () {
        var fullTelephone = $('#wp-whatsapp-me-widget-full-phone-number').val();
        var message = $('#wp-whatsapp-me-widget-message').val();

        var whatsappUrl = "https://wa.me/" + fullTelephone + "?text=" + message;

        if (whatsappValidation(fullTelephone, message, 'whatsapp-widget-error')) {
            popupwindow(whatsappUrl, 'Whatsapp Me', 1000, 700);
        }
    });

    function popupwindow(url, title, w, h) {
        var left = (screen.width / 2) - (w / 2);
        var top = (screen.height / 2) - (h / 2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    }

    function whatsappValidation(fullTelephone, message, errorTarget) {
        if (message) {
            if (fullTelephone) {
                whatsappErrorMessage("", errorTarget);
                return true;
            }
            else {
                whatsappErrorMessage("Telephone number is not set.", errorTarget);
                return false;
            }
        }
        else {
            whatsappErrorMessage("Please insert a message.", errorTarget);
            return false;
        }
    }

    function whatsappErrorMessage(errorMessage, errorTarget) {
        $("#" + errorTarget).text(errorMessage);
    }

});