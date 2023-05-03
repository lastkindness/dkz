jQuery(document).ready(() => {
    jQuery('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        //horizontalOrder: true
    });
});