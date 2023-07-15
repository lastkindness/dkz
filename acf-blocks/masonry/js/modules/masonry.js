import masonry from 'masonry-layout/dist/masonry.pkgd.min.js';

export default () => {
    jQuery('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        //horizontalOrder: true
    });
};
