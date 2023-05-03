jQuery(document).ready(() => {
    jQuery('.scrollbar-x').mCustomScrollbar({
        axis: "x",
        theme: "inset-dark",
        scrollButtons: {
            enable: true
        }
    });

    jQuery('.scrollbar-y').mCustomScrollbar({
        axis: "y",
        theme: "inset-dark",
        scrollButtons: {
            enable: true
        }
    });
});