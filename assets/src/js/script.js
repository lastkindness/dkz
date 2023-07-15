import import_js from './app.js';
import '../scss/styles.scss';
import counter from '../../../acf-blocks/counter/js/app.js';
import faqs_block from '../../../acf-blocks/faqs/js/app.js';
import gallery from '../../../acf-blocks/gallery/js/app.js';
import hero from '../../../acf-blocks/hero/js/app.js';
import masonry from '../../../acf-blocks/masonry/js/app.js';
import parallax from '../../../acf-blocks/parallax/js/app.js';
import quote_block from '../../../acf-blocks/quote/js/app.js';
import scrollbar from '../../../acf-blocks/scrollbar/js/app.js';
import tabs from '../../../acf-blocks/tabs/js/app.js';
import video from '../../../acf-blocks/video/js/app.js';

$(document).ready(() => {
    counter();
    faqs_block();
    gallery();
    hero();
    masonry();
    parallax();
    quote_block();
    scrollbar();
    tabs();
    video();
});
