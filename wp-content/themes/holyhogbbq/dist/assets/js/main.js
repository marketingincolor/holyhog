jQuery(document).ready(function() {

    if (Cookies.get("accepted_menu") === undefined) {
        Cookies.set("accepted_menu", "false", {
            expires: 7
        });
        setTimeout(function () {
            jQuery('#menu-modal').fadeIn("fast");
        }, 1000);
    }

    if (Cookies.get("accepted_menu") === "false") {
        setTimeout(function () {
            jQuery('#menu-modal').fadeIn("fast");
        }, 1000);
    }

    jQuery("#modal-click-here-btn, .modal-close-btn").on("click", function () {
        Cookies.set("accepted_menu", "true", {
            expires: 7
        });
        jQuery('#menu-modal').hide();
    });
});