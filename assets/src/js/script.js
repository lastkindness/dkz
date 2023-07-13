
import '../scss/styles.scss';
import faqs_block from '../../../acf-blocks/faqs/js/app.js';
import quote_block from '../../../acf-blocks/quote/js/app.js';


$(document).ready(() => {
    quote_block();
    faqs_block();
});
