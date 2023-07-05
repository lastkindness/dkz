import import_js from './app.js';
// eslint-disable-next-line import/no-unresolved
import '../scss/styles.scss';
import blogpost_block from '../../../acf-blocks/blog-post/js/app.js';
import columnscards_block from '../../../acf-blocks/columns-cards/js/app.js';
import columnstext_block from '../../../acf-blocks/columns-text/js/app.js';
import counter_block from '../../../acf-blocks/counter/js/app.js';
import cta_block from '../../../acf-blocks/cta/js/app.js';
import faqs_block from '../../../acf-blocks/faqs/js/app.js';
import gallery_block from '../../../acf-blocks/gallery/js/app.js';
import hero_block from '../../../acf-blocks/hero/js/app.js';
import masonry_block from '../../../acf-blocks/masonry/js/app.js';
import news_block from '../../../acf-blocks/news/js/app.js';
import parallax_block from '../../../acf-blocks/parallax/js/app.js';
import partners_block from '../../../acf-blocks/partners/js/app.js';
import quote_block from '../../../acf-blocks/quote/js/app.js';
import scrollbar_block from '../../../acf-blocks/scrollbar/js/app.js';
import tabs_block from '../../../acf-blocks/tabs/js/app.js';
import team_block from '../../../acf-blocks/team/js/app.js';
import twocolumns_block from '../../../acf-blocks/two-columns/js/app.js';
import video_block from '../../../acf-blocks/video/js/app.js';


$(document).ready(() => {
    quote_block();
    faqs_block();
});
