jQuery(document).ready(() => {
    jQuery('.tabs__nav').on('click', 'li:not(.active)', function () {
        jQuery(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
            .closest('.tabs')
            .find('.tabs__content-item')
            .removeClass('active')
            .eq($(this).index())
            .addClass('active');
    });
});