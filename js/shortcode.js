jQuery(document).ready(function ($) {

    $("#wp-whatsapp-me-button").click(function () {
        var fullTelephone = $('#wp-whatsapp-me-full-phone-number').val();
        var message = $('#wp-whatsapp-me-message').val();
        var title = $('#wp-whatsapp-me-title').val();

        var whatsappUrl = "https://wa.me/" + fullTelephone + "?text=" + message;

        popupwindow(whatsappUrl, title, 1000, 700);
    });

    function popupwindow(url, title, w, h) {
        var left = (screen.width / 2) - (w / 2);
        var top = (screen.height / 2) - (h / 2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    }
});