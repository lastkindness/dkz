export default () => {
    if (jQuery(window).width() > 1024) {
        var parallax = -0.5;

        var $bg_images = jQuery(".parallax");
        var offset_tops = [];
        $bg_images.each(function (i, el) {
            offset_tops.push($(el).offset().top);
        });

        jQuery(window).scroll(function () {
            var dy = jQuery(this).scrollTop();
            $bg_images.each(function (i, el) {
                var ot = offset_tops[i];
                jQuery(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
            });
        });
    }
};
